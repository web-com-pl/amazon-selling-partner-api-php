<?php

use Ramsey\Uuid\Uuid;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\EndpointLocator;

include_once __DIR__ . '/../vendor/autoload.php';
session_start();

try {
    // Your config stuff (get example from config-example.json)
    $config = json_decode(file_get_contents(__DIR__ . '/../config.json'), true);

    $endpoint = EndpointLocator::resolveByMarketplaceId($config['marketplace']);
    $credentials = new CredentialsContainer($endpoint, true);
    $credentials->setAppId($config['appId']);

    $api = new AuthorizationApi(new AmazonTransportClient(), $credentials);
    $_SESSION['token'] = Uuid::uuid4();

    dump('Authorize app');// $config['redirectUri']
    echo '<a href="' . $api->getOauthUri($config['redirectUri'], $_SESSION['token']) . '">Login via Amazon</a>';
} catch (ApiException $e) {
    dump($e->getMessage());
}
