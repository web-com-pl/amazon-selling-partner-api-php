<?php
/**
 * VendorDFSandboxApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data
 *
 * The Selling Partner API for Vendor Direct Fulfillment Sandbox Test Data provides programmatic access to vendor direct fulfillment sandbox test data.
 *
 * The version of the OpenAPI document: 2021-10-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\ApiException;
use Webcom\Amazon\Rest\Configuration;
use Webcom\Amazon\Rest\HeaderSelector;
use Webcom\Amazon\Rest\ObjectSerializer;

/**
 * VendorDFSandboxApi Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorDFSandboxApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation generateOrderScenarios
     *
     * @param  \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\GenerateOrderScenarioRequest $body body (required)
     *
     * @throws \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList
     */
    public function generateOrderScenarios($body)
    {
        list($response) = $this->generateOrderScenariosWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation generateOrderScenariosWithHttpInfo
     *
     * @param  \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\GenerateOrderScenarioRequest $body (required)
     *
     * @throws \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList|\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateOrderScenariosWithHttpInfo($body)
    {
        $request = $this->generateOrderScenariosRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 202:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 413:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\ErrorList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateOrderScenariosAsync
     *
     * 
     *
     * @param  \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\GenerateOrderScenarioRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateOrderScenariosAsync($body)
    {
        return $this->generateOrderScenariosAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateOrderScenariosAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\GenerateOrderScenarioRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateOrderScenariosAsyncWithHttpInfo($body)
    {
        $returnType = '\Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\TransactionReference';
        $request = $this->generateOrderScenariosRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateOrderScenarios'
     *
     * @param  \Webcom\Amazon\Rest\VendorDirectFulfillmentSandboxTestDataApiV20211028\Model\GenerateOrderScenarioRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateOrderScenariosRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling generateOrderScenarios'
            );
        }

        $resourcePath = '/vendor/directFulfillment/sandbox/2021-10-28/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}