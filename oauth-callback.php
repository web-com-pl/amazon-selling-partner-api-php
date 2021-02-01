<?php

include_once __DIR__ . '/vendor/autoload.php';
session_start();

use GuzzleHttp\Exception\GuzzleException;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\ApiException;
use Webcom\Amazon\Rest\AuthorizationApi\Api\AuthorizationApi;
use Webcom\Amazon\Rest\CredentialsContainer;
use Webcom\Amazon\Rest\EndpointLocator;

dump('Oauth callback');
echo '<a href="./oauth.php">oauth.php</a><br>';
echo '<a href="./orders.php">orders.php</a><br>';

if (!isset($_GET['state'], $_GET['spapi_oauth_code'], $_GET['selling_partner_id'])) {
    dump('No query params!');
    exit;
}

if ($_GET['state'] != $_SESSION['token']) {
    dump('Invalid state token!');
    dump($_GET['state'] . ' !== ' . $_SESSION['token']);
    exit;
}

try {
    // Your config stuff
    $config = json_decode(file_get_contents(__DIR__ . '/config-example.json'), true);

    $endpoint = EndpointLocator::resolveByMarketplaceId($config['marketplace']);
    $credentials = new CredentialsContainer($endpoint, true);
    $transportApi = new AmazonTransportClient();
    $credentials
        ->setUserCredentials($config['accessKey'], $config['secret'])
        ->setClientId($config['clientId'])
        ->setClientSecret($config['clientSecret'])
        ->setRole($config['role']);

    $api = new AuthorizationApi($transportApi, $credentials);
    $config['expireAt'] = time() + $api->exchangeAuthorizationCodeForRefreshToken($_GET['spapi_oauth_code']);
    $config['accessToken'] = $credentials->getAccessToken();
    $config['refreshToken'] = $credentials->getRefreshToken();
    file_put_contents(__DIR__ . '/config-example.json', json_encode($config, JSON_PRETTY_PRINT));
    dump($config);

} catch (ApiException $e) {
    dump($e->getMessage());
} catch (GuzzleException $e) {
    dump('GuzzleException: ' . $e->getMessage());
}

