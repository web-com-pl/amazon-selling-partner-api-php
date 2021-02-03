<?php

use GuzzleHttp\Exception\GuzzleException;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\OrdersApi\Api\OrdersV0Api;
use Webcom\Amazon\Rest\RequestSigner;
use Webcom\Amazon\Rest\EndpointLocator;

include_once __DIR__ . '/vendor/autoload.php';

// Your config stuff
$config = json_decode(file_get_contents(__DIR__ . '/config-example.json'), true);

// resolve endpoint via marketplace ID
$endpoint = EndpointLocator::resolveByMarketplaceId($config['marketplace']);
$transportApi = new AmazonTransportClient();
$credentials = new CredentialsContainer($endpoint, true);
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
        file_put_contents(__DIR__ . '/config-example.json', json_encode($config, JSON_PRETTY_PRINT));
    }

    $transportApi->setRequestSigner(new RequestSigner($credentials));

    $api = new OrdersV0Api($transportApi, $credentials);
    dump('get orders');
    $orders = $api->getOrders(
        ['ATVPDKIKX0DER'],
        'TEST_CASE_200',
    );

    foreach ($orders->getPayload()->getOrders() as $order) {
        dump(['$order' => $order]);
    }

    dump($api->getOrder('TEST_CASE_200'));
    dump($api->getOrderItems('TEST_CASE_200'));
    dump($api->getOrderItemsBuyerInfo('TEST_CASE_200'));
    dump($api->getOrderAddress('TEST_CASE_200'));
    dump($api->getOrderBuyerInfo('TEST_CASE_200'));
//    dump($api->getOrder('test')->getPayload());
} catch (ApiException $e) {
    dump($e, $e->getResponseBody());
} catch (GuzzleException $e) {
    dump('GuzzleException: ' . $e->getMessage());
}

