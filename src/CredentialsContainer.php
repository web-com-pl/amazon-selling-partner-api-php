<?php

namespace Webcom\Amazon\Rest;

use Aws\Credentials\Credentials;

/**
 * Class CredentialsContainer
 * @author Łukasz Wątor
 */
class CredentialsContainer extends Configuration
{
    private Credentials $userCredentials;
    private Endpoint $endpoint;
    private string $role;
    private string $clientStsVersion;
    private string $signatureService = 'execute-api';
    private ?string $clientId = null;
    private ?string $clientSecret = null;
    private ?string $refreshToken = null;
    private ?string $appId = null;
    private bool $sandbox = false;

    /**
     * CredentialsContainer constructor.
     * @param Endpoint $endpoint
     * @param bool $sandbox
     * @param string $clientStsVersion
     */
    public function __construct(Endpoint $endpoint, bool $sandbox = false, string $clientStsVersion = '2011-06-15')
    {
        parent::__construct();
        $this->clientStsVersion = $clientStsVersion;
        $this->endpoint = $endpoint;
        $this->setSandbox($sandbox);
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool $sandbox
     * @return self
     */
    public function setSandbox(bool $sandbox): self
    {
        $this->sandbox = $sandbox;
        $this->setHost($sandbox ? $this->endpoint->getSellingPartnerApiSandboxEndpoint() : $this->endpoint->getSellingPartnerApiEndpoint());
        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureService(): string
    {
        return $this->signatureService;
    }

    /**
     * @param string $signatureService
     * @return self
     */
    public function setSignatureService(string $signatureService): self
    {
        $this->signatureService = $signatureService;
        return $this;
    }

    /**
     * @param string $userKey
     * @param string $userSecret
     * @return CredentialsContainer
     */
    public function setUserCredentials(string $userKey, string $userSecret): self
    {
        $this->userCredentials = new Credentials($userKey, $userSecret);
        return $this;
    }

    /**
     * @return Credentials
     */
    public function getUserCredentials(): Credentials
    {
        return $this->userCredentials;
    }

    /**
     * @param string $role
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getClientStsVersion(): string
    {
        return $this->clientStsVersion;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     * @return self
     */
    public function setClientId(?string $clientId): self
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * @param string|null $refreshToken
     * @return self
     */
    public function setRefreshToken(?string $refreshToken): self
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }

    /**
     * @param string|null $clientSecret
     * @return self
     */
    public function setClientSecret(?string $clientSecret): self
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * @return Endpoint
     */
    public function getEndpoint(): Endpoint
    {
        return $this->endpoint;
    }

    /**
     * @param Endpoint $endpoint
     * @return self
     */
    public function setEndpoint(Endpoint $endpoint): self
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string|null $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }
}
