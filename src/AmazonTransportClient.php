<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2021 Apilo.com
 */

namespace Webcom\Amazon\Rest;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;

/**
 * Class AmazonTransportClient
 * @author magik092
 */
class AmazonTransportClient extends Client
{
    private ?RequestSigner $requestSigner = null;
    private string $userAgent;

    /**
     * AmazonTransportClient constructor.
     * @param array $config
     * @param string $userAgent
     */
    public function __construct(array $config = [], string $userAgent = 'ErpBox.pl/1.0')
    {
        $handlerStack = HandlerStack::create();
        $handlerStack->push(
            function (callable $handler) use ($handlerStack) {
                return function (RequestInterface $request, array $options) use ($handlerStack, $handler) {
                    return $this->signRequest($request, $options, $handler);
                };
            }
        );
        $config = array_merge_recursive(
            $config,
            [
                'handler' => $handlerStack,
            ]
        );
        $this->userAgent = $userAgent;
        parent::__construct($config);
    }

    /**
     * @return RequestSigner|null
     */
    public function getRequestSigner(): ?RequestSigner
    {
        return $this->requestSigner;
    }

    /**
     * @param RequestSigner|null $requestSigner
     * @return self
     */
    public function setRequestSigner(?RequestSigner $requestSigner): self
    {
        $this->requestSigner = $requestSigner;
        return $this;
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @param callable $handler
     * @return mixed
     */
    private function signRequest(RequestInterface $request, array $options, callable $handler)
    {
        if ($this->requestSigner) {
            if($this->requestSigner->getCredentials()->getRestrictedDataToken()
                && !$this->requestSigner->getCredentials()->getRestrictedDataToken()->isTokenExpired()
                // prevent to get RDT token using RDT token
                && strpos($request->getUri()->getPath(), '/restrictedDataToken') === false
            ) {
                $token = $this->requestSigner->getCredentials()->getRestrictedDataToken()->getToken();
            } else {
                $token = $this->requestSigner->getCredentials()->getAccessToken();
            }
            $request = $request->withHeader('user-agent', $this->userAgent . ' (Language=PHP/' . PHP_VERSION . ')');
            // if isn't authorization request, attach access/rdt token
            if ($token && $request->getUri()->getHost() !== 'api.amazon.com' && substr(
                    $request->getUri()->getPath(),
                    0,
                    15
                ) !== '/authorization/') {
                $request = $request->withHeader('x-amz-access-token', [$token]);
            }
            $request = $this->requestSigner->signRequest($request);
        }

//        dump($request);

        return $handler($request, $options);
    }
}
