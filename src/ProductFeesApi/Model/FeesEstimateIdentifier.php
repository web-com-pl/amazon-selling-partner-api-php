<?php
/**
 * FeesEstimateIdentifier
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductFeesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ProductFeesApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FeesEstimateIdentifier Class Doc Comment
 *
 * @category Class
 * @description An item identifier, marketplace, time of request, and other details that identify an estimate.
 * @package  Webcom\Amazon\Rest\ProductFeesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeesEstimateIdentifier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeesEstimateIdentifier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'sellerId' => 'string',
        'idType' => 'string',
        'idValue' => 'string',
        'isAmazonFulfilled' => 'bool',
        'priceToEstimateFees' => '\Webcom\Amazon\Rest\ProductFeesApi\Model\PriceToEstimateFees',
        'sellerInputIdentifier' => 'string',
        'optionalFulfillmentProgram' => '\Webcom\Amazon\Rest\ProductFeesApi\Model\OptionalFulfillmentProgram'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'sellerId' => null,
        'idType' => null,
        'idValue' => null,
        'isAmazonFulfilled' => null,
        'priceToEstimateFees' => null,
        'sellerInputIdentifier' => null,
        'optionalFulfillmentProgram' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'idType' => 'IdType',
        'idValue' => 'IdValue',
        'isAmazonFulfilled' => 'IsAmazonFulfilled',
        'priceToEstimateFees' => 'PriceToEstimateFees',
        'sellerInputIdentifier' => 'SellerInputIdentifier',
        'optionalFulfillmentProgram' => 'OptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'sellerId' => 'setSellerId',
        'idType' => 'setIdType',
        'idValue' => 'setIdValue',
        'isAmazonFulfilled' => 'setIsAmazonFulfilled',
        'priceToEstimateFees' => 'setPriceToEstimateFees',
        'sellerInputIdentifier' => 'setSellerInputIdentifier',
        'optionalFulfillmentProgram' => 'setOptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'sellerId' => 'getSellerId',
        'idType' => 'getIdType',
        'idValue' => 'getIdValue',
        'isAmazonFulfilled' => 'getIsAmazonFulfilled',
        'priceToEstimateFees' => 'getPriceToEstimateFees',
        'sellerInputIdentifier' => 'getSellerInputIdentifier',
        'optionalFulfillmentProgram' => 'getOptionalFulfillmentProgram'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['idType'] = $data['idType'] ?? null;
        $this->container['idValue'] = $data['idValue'] ?? null;
        $this->container['isAmazonFulfilled'] = $data['isAmazonFulfilled'] ?? null;
        $this->container['priceToEstimateFees'] = $data['priceToEstimateFees'] ?? null;
        $this->container['sellerInputIdentifier'] = $data['sellerInputIdentifier'] ?? null;
        $this->container['optionalFulfillmentProgram'] = $data['optionalFulfillmentProgram'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId A marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets sellerId
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string|null $sellerId The seller identifier.
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets idType
     *
     * @return string|null
     */
    public function getIdType()
    {
        return $this->container['idType'];
    }

    /**
     * Sets idType
     *
     * @param string|null $idType The type of item identifier specified.
     *
     * @return self
     */
    public function setIdType($idType)
    {
        $this->container['idType'] = $idType;

        return $this;
    }

    /**
     * Gets idValue
     *
     * @return string|null
     */
    public function getIdValue()
    {
        return $this->container['idValue'];
    }

    /**
     * Sets idValue
     *
     * @param string|null $idValue The item identifier.
     *
     * @return self
     */
    public function setIdValue($idValue)
    {
        $this->container['idValue'] = $idValue;

        return $this;
    }

    /**
     * Gets isAmazonFulfilled
     *
     * @return bool|null
     */
    public function getIsAmazonFulfilled()
    {
        return $this->container['isAmazonFulfilled'];
    }

    /**
     * Sets isAmazonFulfilled
     *
     * @param bool|null $isAmazonFulfilled When true, the offer is fulfilled by Amazon.
     *
     * @return self
     */
    public function setIsAmazonFulfilled($isAmazonFulfilled)
    {
        $this->container['isAmazonFulfilled'] = $isAmazonFulfilled;

        return $this;
    }

    /**
     * Gets priceToEstimateFees
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApi\Model\PriceToEstimateFees|null
     */
    public function getPriceToEstimateFees()
    {
        return $this->container['priceToEstimateFees'];
    }

    /**
     * Sets priceToEstimateFees
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApi\Model\PriceToEstimateFees|null $priceToEstimateFees priceToEstimateFees
     *
     * @return self
     */
    public function setPriceToEstimateFees($priceToEstimateFees)
    {
        $this->container['priceToEstimateFees'] = $priceToEstimateFees;

        return $this;
    }

    /**
     * Gets sellerInputIdentifier
     *
     * @return string|null
     */
    public function getSellerInputIdentifier()
    {
        return $this->container['sellerInputIdentifier'];
    }

    /**
     * Sets sellerInputIdentifier
     *
     * @param string|null $sellerInputIdentifier A unique identifier provided by the caller to track this request.
     *
     * @return self
     */
    public function setSellerInputIdentifier($sellerInputIdentifier)
    {
        $this->container['sellerInputIdentifier'] = $sellerInputIdentifier;

        return $this;
    }

    /**
     * Gets optionalFulfillmentProgram
     *
     * @return \Webcom\Amazon\Rest\ProductFeesApi\Model\OptionalFulfillmentProgram|null
     */
    public function getOptionalFulfillmentProgram()
    {
        return $this->container['optionalFulfillmentProgram'];
    }

    /**
     * Sets optionalFulfillmentProgram
     *
     * @param \Webcom\Amazon\Rest\ProductFeesApi\Model\OptionalFulfillmentProgram|null $optionalFulfillmentProgram optionalFulfillmentProgram
     *
     * @return self
     */
    public function setOptionalFulfillmentProgram($optionalFulfillmentProgram)
    {
        $this->container['optionalFulfillmentProgram'] = $optionalFulfillmentProgram;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


