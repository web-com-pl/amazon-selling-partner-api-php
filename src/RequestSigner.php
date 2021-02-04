<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2021 Web-Com Group
 */

namespace Webcom\Amazon\Rest;

use Aws\Credentials\Credentials;
use Aws\Signature\SignatureV4;
use Aws\Sts\StsClient;
use Psr\Http\Message\RequestInterface;
use Webcom\Amazon\Rest\CredentialsContainer;

/**
 * Class SignHandler
 * @author magik092
 */
class RequestSigner
{
    private StsClient $stsClient;
    private CredentialsContainer $credentials;
    private SignatureV4 $signatureV4;

    public function __construct(CredentialsContainer $credentials)
    {
        $this->credentials = $credentials;
        $this->stsClient = new StsClient(
            [
                'region' => $credentials->getEndpoint()->getRegion(),
                'version' => $credentials->getClientStsVersion(),
                'credentials' => $credentials->getUserCredentials(),
            ]
        );
        $this->signatureV4 = new SignatureV4($credentials->getSignatureService(), $credentials->getEndpoint()->getRegion());
    }

    public final function signRequest(RequestInterface $request): RequestInterface
    {
        $credentials = $this->stsClient->assumeRole(['RoleArn' => $this->credentials->getRole(), 'RoleSessionName' => 'api-session'])->get('Credentials');
        $newCredentials = new Credentials(
            $credentials['AccessKeyId'],
            $credentials['SecretAccessKey'],
            $credentials['SessionToken']
        );

        return $this->signatureV4->signRequest($request, $newCredentials);
    }

    /**
     * @return CredentialsContainer
     */
    public function getCredentials(): CredentialsContainer
    {
        return $this->credentials;
    }

    /**
     * @param CredentialsContainer $credentials
     * @return self
     */
    public function setCredentials(CredentialsContainer $credentials): self
    {
        $this->credentials = $credentials;
        return $this;
    }
}
