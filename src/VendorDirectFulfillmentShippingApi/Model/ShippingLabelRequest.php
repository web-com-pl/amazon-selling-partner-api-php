<?php
/**
 * ShippingLabelRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ShippingLabelRequest Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShippingLabelRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingLabelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchaseOrderNumber' => 'string',
        'sellingParty' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification',
        'shipFromParty' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification',
        'containers' => '\Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\Container[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchaseOrderNumber' => null,
        'sellingParty' => null,
        'shipFromParty' => null,
        'containers' => null
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
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'sellingParty' => 'sellingParty',
        'shipFromParty' => 'shipFromParty',
        'containers' => 'containers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'sellingParty' => 'setSellingParty',
        'shipFromParty' => 'setShipFromParty',
        'containers' => 'setContainers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'sellingParty' => 'getSellingParty',
        'shipFromParty' => 'getShipFromParty',
        'containers' => 'getContainers'
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
        $this->container['purchaseOrderNumber'] = $data['purchaseOrderNumber'] ?? null;
        $this->container['sellingParty'] = $data['sellingParty'] ?? null;
        $this->container['shipFromParty'] = $data['shipFromParty'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaseOrderNumber'] === null) {
            $invalidProperties[] = "'purchaseOrderNumber' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['purchaseOrderNumber'])) {
            $invalidProperties[] = "invalid value for 'purchaseOrderNumber', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['sellingParty'] === null) {
            $invalidProperties[] = "'sellingParty' can't be null";
        }
        if ($this->container['shipFromParty'] === null) {
            $invalidProperties[] = "'shipFromParty' can't be null";
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
     * Gets purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber Purchase order number of the order for which to create a shipping label.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {

        if ((!preg_match("/^[a-zA-Z0-9]+$/", $purchaseOrderNumber))) {
            throw new \InvalidArgumentException("invalid value for $purchaseOrderNumber when calling ShippingLabelRequest., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets sellingParty
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['sellingParty'];
    }

    /**
     * Sets sellingParty
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification $sellingParty sellingParty
     *
     * @return self
     */
    public function setSellingParty($sellingParty)
    {
        $this->container['sellingParty'] = $sellingParty;

        return $this;
    }

    /**
     * Gets shipFromParty
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['shipFromParty'];
    }

    /**
     * Sets shipFromParty
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\PartyIdentification $shipFromParty shipFromParty
     *
     * @return self
     */
    public function setShipFromParty($shipFromParty)
    {
        $this->container['shipFromParty'] = $shipFromParty;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\Container[]|null
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \Webcom\Amazon\Rest\VendorDirectFulfillmentShippingApi\Model\Container[]|null $containers A list of the packages in this shipment.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

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


