<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2021 Web-Com Group
 */

namespace Webcom\Amazon\Rest\ResourcesApi\Api;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Webcom\Amazon\Rest\AESCryptoStreamFactory;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\FeedsApi\Model\CreateFeedDocumentResult;
use Webcom\Amazon\Rest\ReportsApi\Model\ReportDocument;
use Webcom\Amazon\Rest\ResourcesApi\ApiException;

/**
 * In this API we do not have to sign requests. In all cases we are using AES algorithm to encrypt and decrypt documents
 * Class ResourcesApi
 * @author magik092
 */
class ResourcesApi
{
    private AmazonTransportClient $client;
    private CredentialsContainer $credentials;

    /**
     * AuthorizationClient constructor.
     * @param AmazonTransportClient $client
     * @param CredentialsContainer $credentials
     */
    public function __construct(AmazonTransportClient $client, CredentialsContainer $credentials)
    {
        $this->client = $client;
        $this->credentials = $credentials;
        // be sure we do not have RequestSigner
        $this->client->setRequestSigner(null);
    }

    /**
     * Upload document to CreateFeedDocumentResult resource URI
     * @param CreateFeedDocumentResult $documentResult
     * @param string $contentType
     * @param string $plainDocument
     * @throws ApiException
     */
    public function putFeedDocument(CreateFeedDocumentResult $documentResult, string $contentType, string $plainDocument)
    {
        // let's encode document
        $initializationVector = base64_decode($documentResult->getEncryptionDetails()->getInitializationVector(), true);
        $key = base64_decode($documentResult->getEncryptionDetails()->getKey(), true);

        $request = new Request(
            'PUT',
            $documentResult->getUrl(),
            [
                'Content-Type' => $contentType,
            ],
            AESCryptoStreamFactory::encrypt($plainDocument, $key, $initializationVector, false)
        );

        try {
            $response = $this->client->send($request);

            if ($response->getStatusCode() !== 200) {
                throw new ApiException(
                    json_decode($response->getBody()->getContents()),
                    $response->getStatusCode(),
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }
        } catch (GuzzleException $e) {
            throw new ApiException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Returns decoded and decompressed document
     * @param ReportDocument $documentResponse
     * @return false|string
     * @throws ApiException
     */
    public function getReportDocument(ReportDocument $documentResponse)
    {
        // encryption key and iv
        $initializationVector = base64_decode($documentResponse->getEncryptionDetails()->getInitializationVector(), true);
        $key = base64_decode($documentResponse->getEncryptionDetails()->getKey(), true);

        // firstly, let's download document
        $request = new Request(
            'GET',
            $documentResponse->getUrl()
        );
        // send request and retrieve encoded document, then decrypt
        $document = AESCryptoStreamFactory::decrypt(
            $this->client->send($request)->getBody()->getContents(),
            $key,
            $initializationVector
        );

        // after decoding document check for compressionAlgorithm
        if($documentResponse->getCompressionAlgorithm() === 'GZIP') {
            return gzdecode($document);
        } elseif(!$documentResponse->getCompressionAlgorithm()) {
            // document is not compressed
            return $document;
        }

        // in other cases, we do not have implementation of compression algorithm
        throw new ApiException(
            'Unrecognized compression algorithm "' . $documentResponse->getCompressionAlgorithm() . '"',
            501// Not implemented
        );
    }
}
