<?php

use GuzzleHttp\Exception\GuzzleException;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\FeedsApi\Api\FeedsApi;
use Webcom\Amazon\Rest\FeedsApi\Model\CreateFeedDocumentSpecification;
use Webcom\Amazon\Rest\FeedsApi\Model\CreateFeedSpecification;
use Webcom\Amazon\Rest\RequestSigner;
use Webcom\Amazon\Rest\EndpointLocator;
use Webcom\Amazon\Rest\ResourcesApi\Api\ResourcesApi;

include_once __DIR__ . '/../vendor/autoload.php';

// Your config stuff (get example from config-example.json)
$config = json_decode(file_get_contents(__DIR__ . '/../config.json'), true);

// resolve endpoint via marketplace ID
$endpoint = EndpointLocator::resolveByMarketplaceId($config['marketplace']);
$transportApi = new AmazonTransportClient();
$credentials = new CredentialsContainer($endpoint);
$credentials
    ->setUserCredentials($config['accessKey'], $config['secret'])
    ->setClientId($config['clientId'])
    ->setClientSecret($config['clientSecret'])
    ->setAccessToken($config['accessToken'])
    ->setRefreshToken($config['refreshToken'])
    ->setRole($config['role'])
;


try {
    if(time() >= $config['expireAt']) {
        dump('refresh token');
        $api = new AuthorizationApi($transportApi, $credentials);
        $config['expireAt'] = time() + $api->exchangeRefreshToken();
        $config['accessToken'] = $credentials->getAccessToken();
        $config['refreshToken'] = $credentials->getRefreshToken();
        file_put_contents(__DIR__ . '/../config.json', json_encode($config, JSON_PRETTY_PRINT));
    }

    $requestSigner = new RequestSigner($credentials);

    $resourcesApi = new ResourcesApi($transportApi, $credentials);
    $api = new FeedsApi($transportApi, $credentials);

    // Your XML feed data
    $xml = <<<EOL
<?xml version="1.0" encoding="UTF-8"?>
<AmazonEnvelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="amzn-envelope.xsd">
    <Header>
        <DocumentVersion>1.01</DocumentVersion>
        <MerchantIdentifier>YOUR MERCHANT ID</MerchantIdentifier>
    </Header>
    <MessageType>Price</MessageType>
    <Message>
        <MessageID>1</MessageID>
        <OperationType>Update</OperationType>
        <Price>
            <SKU>SKU-1234</SKU>
            <StandardPrice currency="EUR">39.99</StandardPrice>
        </Price>
    </Message>
</AmazonEnvelope>
EOL;
    $feedType = 'POST_PRODUCT_DATA';// custom feed type
    $transportApi->setRequestSigner($requestSigner);

    $specification = new CreateFeedDocumentSpecification();
    $specification->setContentType('application/xml');
    $feedResponse = $api->createFeedDocument($specification);

    if ($feedResponse) {
        // we have valid feed document resource

        // for the ResourcesApi, we encrypt the document and we do not sign requests
        $transportApi->setRequestSigner(null);
        $resourcesApi->putFeedDocument($feedResponse->getPayload(), $specification->getContentType(), $xml);

        // but after that, we have to sign requests
        $transportApi->setRequestSigner($requestSigner);

        $feedSpecification = new CreateFeedSpecification();
        $feedSpecification
            ->setInputFeedDocumentId($feedResponse->getPayload()->getFeedDocumentId())
            ->setFeedType($feedType)
            ->setMarketplaceIds([$credentials->getEndpoint()->getId()]);

        $feed = $api->createFeed($feedSpecification);

        if ($feed) {
            dump('feedId=' . $feed->getPayload());
        } else {
            dump('<error>Invalid response</error>');
        }
    }
} catch (ApiException $e) {
    dump($e, $e->getResponseBody());
} catch (GuzzleException $e) {
    dump('<error>GuzzleException: ' . $e->getMessage() . '</error>');
}

