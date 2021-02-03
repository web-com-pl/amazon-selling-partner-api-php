<?php

namespace Webcom\Amazon\Rest\AuthorizationApi\Api;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Webcom\Amazon\Rest\AmazonTransportClient;
use Webcom\Amazon\Rest\AuthorizationApi\ApiException;
use Webcom\Amazon\Rest\CredentialsContainer;

use function GuzzleHttp\Psr7\build_query;

/**
 * Class AuthorizationClient
 * @author Łukasz Wątor
 */
class AuthorizationApi
{
    public const HOST = 'https://api.amazon.com';
    public const OAUTH_URL = '/auth/o2/token';
    protected AmazonTransportClient $client;
    protected CredentialsContainer $credentials;

    /**
     * AuthorizationClient constructor.
     * @param AmazonTransportClient $client
     * @param CredentialsContainer $credentials
     */
    public function __construct(AmazonTransportClient $client, CredentialsContainer $credentials)
    {
        $this->client = $client;
        $this->credentials = $credentials;
    }

    /**
     * @return AmazonTransportClient
     */
    public function getClient(): AmazonTransportClient
    {
        return $this->client;
    }

    /**
     * @return CredentialsContainer
     */
    public function getCredentials(): CredentialsContainer
    {
        return $this->credentials;
    }

    /**
     * @param string $authorizationCode
     * @return int
     * @throws ApiException
     * @throws GuzzleException
     */
    public function exchangeAuthorizationCodeForRefreshToken(string $authorizationCode): int
    {
        if (!$this->credentials->getClientId()) {
            throw new ApiException('ClientId is required');
        }

        if (!$this->credentials->getUserCredentials()->getSecretKey()) {
            throw new ApiException('Client secret is required');
        }

        $response = $this->client->send(
            new Request(
                'POST',
                self::HOST . self::OAUTH_URL,
                [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                build_query(
                    [
                        'grant_type'    => 'authorization_code',
                        'code'          => $authorizationCode,
                        'client_id'     => $this->credentials->getClientId(),
                        'client_secret' => $this->credentials->getClientSecret(),
                    ]
                )
            )
        );

        $responseData = json_decode($response->getBody()->getContents(), true);
        if (!isset($responseData['access_token'], $responseData['refresh_token'], $responseData['token_type'], $responseData['expires_in'])) {
            throw new ApiException('Invalid response');
        }

        $this->credentials
            ->setAccessToken($responseData['access_token'])
            ->setRefreshToken($responseData['refresh_token']);

        return (int) $responseData['expires_in'];
    }

    /**
     * @return int
     * @throws ApiException
     * @throws GuzzleException
     */
    public function exchangeRefreshToken(): int
    {
        $response = $this->client->send(
            new Request(
                'POST',
                self::HOST . self::OAUTH_URL,
                [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                Query::build(
                    [
                        'grant_type'    => 'refresh_token',
                        'refresh_token' => $this->credentials->getRefreshToken(),
                        'client_id'     => $this->credentials->getClientId(),
                        'client_secret' => $this->credentials->getClientSecret(),
                    ]
                )
            )
        );

        $responseData = json_decode($response->getBody()->getContents(), true);
        if (!isset($responseData['access_token'], $responseData['refresh_token'], $responseData['token_type'], $responseData['expires_in'])) {
            throw new ApiException('Invalid response');
        }

        $this->credentials
            ->setAccessToken($responseData['access_token'])
            ->setRefreshToken($responseData['refresh_token']);

        return (int) $responseData['expires_in'];
    }

    /**
     * @param string $redirectUri
     * @param string $state
     * @return string
     * @throws ApiException
     */
    public function getOauthUri(string $redirectUri, string $state): string
    {
        if (!$this->credentials->getAppId()) {
            throw new ApiException('Application ID is required');
        }
        $authUrl = $this->credentials->getEndpoint()->getSellerCentralEndpoint() . '/apps/authorize/consent?';
        $authUrl .= 'application_id=' . $this->credentials->getAppId() . '&';
        $authUrl .= 'redirect_uri=' . urlencode($redirectUri) . '&';

        if ($this->credentials->isSandbox()) {
            $authUrl .= 'version=beta&';
        }

        return $authUrl . 'state=' . urlencode($state);
    }
}
