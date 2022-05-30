<?php

use GuzzleHttp\Exception\GuzzleException;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\OrdersApiV0\Api\OrdersV0Api;
use Webcom\Amazon\Rest\RequestSigner;
use Webcom\Amazon\Rest\EndpointLocator;
use Webcom\Amazon\Rest\RestrictedDataToken;
use Webcom\Amazon\Rest\TokensApi20210301\Api\TokensApi;
use Webcom\Amazon\Rest\TokensApi20210301\Model\CreateRestrictedDataTokenRequest20210301;
use Webcom\Amazon\Rest\TokensApi20210301\Model\RestrictedResource20210301;

include_once __DIR__ . '/../vendor/autoload.php';

// Your config stuff (get example from config-example.json)
$config = json_decode(file_get_contents(__DIR__ . '/../config.json'), true);

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
        file_put_contents(__DIR__ . '/../config.json', json_encode($config, JSON_PRETTY_PRINT));
    }

    $transportApi->setRequestSigner(new RequestSigner($credentials));
    // get Restricted Data Token
    $rdtApi = new TokensApi($transportApi, $credentials);
    $data = new CreateRestrictedDataTokenRequest20210301();
    // all restricted resources for next request
    $data->setRestrictedResources(
        [
            new RestrictedResource20210301(['method' => 'GET', 'dataElements' => [], 'path' => '/orders/v0/orders']),
        ]
    );
    // create container
    $token = RestrictedDataToken::create($rdtApi->createRestrictedDataToken($data));
    // set token in $credentials object
    $credentials->setRestrictedDataToken($token);

    $api = new OrdersV0Api($transportApi, $credentials);
    dump('get orders');
    // cal getOrders using RDT token
    $orders = $api->getOrders(
        ['ATVPDKIKX0DER'],
        'TEST_CASE_200',
    );

    $rdtArea = [];
    foreach ($orders->getPayload()->getOrders() as $order) {
        dump(['$order' => $order]);
        $orderIds[] = $order->getAmazonOrderId();
        // order items
        $rdtArea[] = new RestrictedResource20210301(['method' => 'GET', 'dataElements' => [], 'path' => '/orders/v0/orders/', $order->getAmazonOrderId() . '/orderItems']);
        // additional order info
        $rdtArea[] = new RestrictedResource20210301(
            [
                'method' => 'GET',
                'dataElements' => [
                    'buyerInfo',
                    'shippingAddress',
                ],
                'path' => '/orders/v0/orders/', $order->getAmazonOrderId()
            ]
        );
    }
    $data->setRestrictedResources($rdtArea);
    // get new token for list of orders
    $credentials->setRestrictedDataToken(RestrictedDataToken::create($rdtApi->createRestrictedDataToken($data)));

    // call API using RDT token
    dump($api->getOrder('TEST_CASE_200'));
    dump($api->getOrderItems('TEST_CASE_200'));
    dump($api->getOrderItemsBuyerInfo('TEST_CASE_200'));
    dump($api->getOrderAddress('TEST_CASE_200'));
    dump($api->getOrderBuyerInfo('TEST_CASE_200'));
} catch (ApiException $e) {
    dump($e, $e->getResponseBody());
} catch (GuzzleException $e) {
    dump('GuzzleException: ' . $e->getMessage());
}

