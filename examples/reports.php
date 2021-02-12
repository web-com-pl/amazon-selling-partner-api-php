<?php

use GuzzleHttp\Exception\GuzzleException;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\ReportsApi\Api\ReportsApi;
use Webcom\Amazon\Rest\ReportsApi\Model\CreateReportSpecification;
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
    $api = new ReportsApi($transportApi, $credentials);
    $reportType = 'GET_MERCHANT_LISTINGS_DATA';// custom report type
    $transportApi->setRequestSigner($requestSigner);

    $specification = new CreateReportSpecification();
    $specification
        ->setMarketplaceIds([$credentials->getEndpoint()->getId()])
        ->setReportType($reportType)
    ;
    $feedResponse = $api->createReport($specification);

    if ($feedResponse->getPayload()->getReportId()) {
        // we have valid report document resource
        $i = 0;
        do {
            dump('wait for report');
            sleep($i + 10); // we have to wait some time for report
            $report = $api->getReport($feedResponse->getPayload()->getReportId());

            if($report->getPayload()->getReportDocumentId() === null && ++$i >= 10) {
                throw new Exception('Too long');
            }
        } while($report->getPayload()->getReportDocumentId() === null);

        $reportDocument = $api->getReportDocument($report->getPayload()->getReportDocumentId());
        // for the ResourcesApi, we decrypt the document and we do not sign requests
        $transportApi->setRequestSigner(null);
        $document = $resourcesApi->getReportDocument($reportDocument->getPayload());

        if($document) {
            dump('save document');
            file_put_contents(__DIR__ . '/response-document.csv', $document);
        } else {
            dump('invalid document!');
        }
    }
} catch (ApiException $e) {
    dump($e, $e->getResponseBody());
} catch (GuzzleException $e) {
    dump('<error>GuzzleException: ' . $e->getMessage() . '</error>');
} catch(exception $e) {
    dump('<error>' . $e->getMessage() . '</error>');
}

