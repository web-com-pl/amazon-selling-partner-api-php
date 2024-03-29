<?php
/**
 * ReturnAuthorization20200701
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ReturnAuthorization20200701 Class Doc Comment
 *
 * @category Class
 * @description Return authorization information for items accepted for return.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi20200701
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReturnAuthorization20200701 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnAuthorization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'returnAuthorizationId' => 'string',
        'fulfillmentCenterId' => 'string',
        'returnToAddress' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Address20200701',
        'amazonRmaId' => 'string',
        'rmaPageURL' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'returnAuthorizationId' => null,
        'fulfillmentCenterId' => null,
        'returnToAddress' => null,
        'amazonRmaId' => null,
        'rmaPageURL' => null
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
        'returnAuthorizationId' => 'returnAuthorizationId',
        'fulfillmentCenterId' => 'fulfillmentCenterId',
        'returnToAddress' => 'returnToAddress',
        'amazonRmaId' => 'amazonRmaId',
        'rmaPageURL' => 'rmaPageURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'returnAuthorizationId' => 'setReturnAuthorizationId',
        'fulfillmentCenterId' => 'setFulfillmentCenterId',
        'returnToAddress' => 'setReturnToAddress',
        'amazonRmaId' => 'setAmazonRmaId',
        'rmaPageURL' => 'setRmaPageURL'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'returnAuthorizationId' => 'getReturnAuthorizationId',
        'fulfillmentCenterId' => 'getFulfillmentCenterId',
        'returnToAddress' => 'getReturnToAddress',
        'amazonRmaId' => 'getAmazonRmaId',
        'rmaPageURL' => 'getRmaPageURL'
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
        $this->container['returnAuthorizationId'] = $data['returnAuthorizationId'] ?? null;
        $this->container['fulfillmentCenterId'] = $data['fulfillmentCenterId'] ?? null;
        $this->container['returnToAddress'] = $data['returnToAddress'] ?? null;
        $this->container['amazonRmaId'] = $data['amazonRmaId'] ?? null;
        $this->container['rmaPageURL'] = $data['rmaPageURL'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['returnAuthorizationId'] === null) {
            $invalidProperties[] = "'returnAuthorizationId' can't be null";
        }
        if ($this->container['fulfillmentCenterId'] === null) {
            $invalidProperties[] = "'fulfillmentCenterId' can't be null";
        }
        if ($this->container['returnToAddress'] === null) {
            $invalidProperties[] = "'returnToAddress' can't be null";
        }
        if ($this->container['amazonRmaId'] === null) {
            $invalidProperties[] = "'amazonRmaId' can't be null";
        }
        if ($this->container['rmaPageURL'] === null) {
            $invalidProperties[] = "'rmaPageURL' can't be null";
        }
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
     * Gets returnAuthorizationId
     *
     * @return string
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['returnAuthorizationId'];
    }

    /**
     * Sets returnAuthorizationId
     *
     * @param string $returnAuthorizationId An identifier for the return authorization. This identifier associates return items with the return authorization used to return them.
     *
     * @return self
     */
    public function setReturnAuthorizationId($returnAuthorizationId)
    {
        $this->container['returnAuthorizationId'] = $returnAuthorizationId;

        return $this;
    }

    /**
     * Gets fulfillmentCenterId
     *
     * @return string
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillmentCenterId'];
    }

    /**
     * Sets fulfillmentCenterId
     *
     * @param string $fulfillmentCenterId An identifier for the Amazon fulfillment center that the return items should be sent to.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillmentCenterId)
    {
        $this->container['fulfillmentCenterId'] = $fulfillmentCenterId;

        return $this;
    }

    /**
     * Gets returnToAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Address20200701
     */
    public function getReturnToAddress()
    {
        return $this->container['returnToAddress'];
    }

    /**
     * Sets returnToAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi20200701\Model\Address20200701 $returnToAddress returnToAddress
     *
     * @return self
     */
    public function setReturnToAddress($returnToAddress)
    {
        $this->container['returnToAddress'] = $returnToAddress;

        return $this;
    }

    /**
     * Gets amazonRmaId
     *
     * @return string
     */
    public function getAmazonRmaId()
    {
        return $this->container['amazonRmaId'];
    }

    /**
     * Sets amazonRmaId
     *
     * @param string $amazonRmaId The return merchandise authorization (RMA) that Amazon needs to process the return.
     *
     * @return self
     */
    public function setAmazonRmaId($amazonRmaId)
    {
        $this->container['amazonRmaId'] = $amazonRmaId;

        return $this;
    }

    /**
     * Gets rmaPageURL
     *
     * @return string
     */
    public function getRmaPageURL()
    {
        return $this->container['rmaPageURL'];
    }

    /**
     * Sets rmaPageURL
     *
     * @param string $rmaPageURL A URL for a web page that contains the return authorization barcode and the mailing label. This does not include pre-paid shipping.
     *
     * @return self
     */
    public function setRmaPageURL($rmaPageURL)
    {
        $this->container['rmaPageURL'] = $rmaPageURL;

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


