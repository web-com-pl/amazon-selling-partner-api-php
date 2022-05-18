<?php
/**
 * PutTransportDetailsRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace Webcom\Amazon\Rest\FulfillmentInboundApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * PutTransportDetailsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for a putTransportDetails operation.
 * @package  Webcom\Amazon\Rest\FulfillmentInboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PutTransportDetailsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PutTransportDetailsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isPartnered' => 'bool',
        'shipmentType' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType',
        'transportDetails' => '\Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'isPartnered' => null,
        'shipmentType' => null,
        'transportDetails' => null
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
        'isPartnered' => 'IsPartnered',
        'shipmentType' => 'ShipmentType',
        'transportDetails' => 'TransportDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isPartnered' => 'setIsPartnered',
        'shipmentType' => 'setShipmentType',
        'transportDetails' => 'setTransportDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isPartnered' => 'getIsPartnered',
        'shipmentType' => 'getShipmentType',
        'transportDetails' => 'getTransportDetails'
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
        $this->container['isPartnered'] = $data['isPartnered'] ?? null;
        $this->container['shipmentType'] = $data['shipmentType'] ?? null;
        $this->container['transportDetails'] = $data['transportDetails'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['isPartnered'] === null) {
            $invalidProperties[] = "'isPartnered' can't be null";
        }
        if ($this->container['shipmentType'] === null) {
            $invalidProperties[] = "'shipmentType' can't be null";
        }
        if ($this->container['transportDetails'] === null) {
            $invalidProperties[] = "'transportDetails' can't be null";
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
     * Gets isPartnered
     *
     * @return bool
     */
    public function getIsPartnered()
    {
        return $this->container['isPartnered'];
    }

    /**
     * Sets isPartnered
     *
     * @param bool $isPartnered Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     *
     * @return self
     */
    public function setIsPartnered($isPartnered)
    {
        $this->container['isPartnered'] = $isPartnered;

        return $this;
    }

    /**
     * Gets shipmentType
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\ShipmentType $shipmentType shipmentType
     *
     * @return self
     */
    public function setShipmentType($shipmentType)
    {
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets transportDetails
     *
     * @return \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput
     */
    public function getTransportDetails()
    {
        return $this->container['transportDetails'];
    }

    /**
     * Sets transportDetails
     *
     * @param \Webcom\Amazon\Rest\FulfillmentInboundApi\Model\TransportDetailInput $transportDetails transportDetails
     *
     * @return self
     */
    public function setTransportDetails($transportDetails)
    {
        $this->container['transportDetails'] = $transportDetails;

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


