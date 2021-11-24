<?php
/**
 * ItemDetails
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\VendorShipmentsApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ItemDetails Class Doc Comment
 *
 * @category Class
 * @description Item details for be provided for every item in shipment at either the item or carton or pallet level, whichever is appropriate.
 * @package  Webcom\Amazon\Rest\VendorShipmentsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchaseOrderNumber' => 'string',
        'lotNumber' => 'string',
        'expiry' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\Expiry',
        'maximumRetailPrice' => '\Webcom\Amazon\Rest\VendorShipmentsApi\Model\Money',
        'handlingCode' => 'string'
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
        'lotNumber' => null,
        'expiry' => null,
        'maximumRetailPrice' => null,
        'handlingCode' => null
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
        'lotNumber' => 'lotNumber',
        'expiry' => 'expiry',
        'maximumRetailPrice' => 'maximumRetailPrice',
        'handlingCode' => 'handlingCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'lotNumber' => 'setLotNumber',
        'expiry' => 'setExpiry',
        'maximumRetailPrice' => 'setMaximumRetailPrice',
        'handlingCode' => 'setHandlingCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'lotNumber' => 'getLotNumber',
        'expiry' => 'getExpiry',
        'maximumRetailPrice' => 'getMaximumRetailPrice',
        'handlingCode' => 'getHandlingCode'
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

    const HANDLING_CODE_OVERSIZED = 'Oversized';
    const HANDLING_CODE_FRAGILE = 'Fragile';
    const HANDLING_CODE_FOOD = 'Food';
    const HANDLING_CODE_HANDLE_WITH_CARE = 'HandleWithCare';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandlingCodeAllowableValues()
    {
        return [
            self::HANDLING_CODE_OVERSIZED,
            self::HANDLING_CODE_FRAGILE,
            self::HANDLING_CODE_FOOD,
            self::HANDLING_CODE_HANDLE_WITH_CARE,
        ];
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
        $this->container['lotNumber'] = $data['lotNumber'] ?? null;
        $this->container['expiry'] = $data['expiry'] ?? null;
        $this->container['maximumRetailPrice'] = $data['maximumRetailPrice'] ?? null;
        $this->container['handlingCode'] = $data['handlingCode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHandlingCodeAllowableValues();
        if (!is_null($this->container['handlingCode']) && !in_array($this->container['handlingCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'handlingCode', must be one of '%s'",
                $this->container['handlingCode'],
                implode("', '", $allowedValues)
            );
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
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets lotNumber
     *
     * @return string|null
     */
    public function getLotNumber()
    {
        return $this->container['lotNumber'];
    }

    /**
     * Sets lotNumber
     *
     * @param string|null $lotNumber The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items.
     *
     * @return self
     */
    public function setLotNumber($lotNumber)
    {
        $this->container['lotNumber'] = $lotNumber;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Expiry|null
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Expiry|null $expiry expiry
     *
     * @return self
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets maximumRetailPrice
     *
     * @return \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Money|null
     */
    public function getMaximumRetailPrice()
    {
        return $this->container['maximumRetailPrice'];
    }

    /**
     * Sets maximumRetailPrice
     *
     * @param \Webcom\Amazon\Rest\VendorShipmentsApi\Model\Money|null $maximumRetailPrice maximumRetailPrice
     *
     * @return self
     */
    public function setMaximumRetailPrice($maximumRetailPrice)
    {
        $this->container['maximumRetailPrice'] = $maximumRetailPrice;

        return $this;
    }

    /**
     * Gets handlingCode
     *
     * @return string|null
     */
    public function getHandlingCode()
    {
        return $this->container['handlingCode'];
    }

    /**
     * Sets handlingCode
     *
     * @param string|null $handlingCode Identification of the instructions on how specified item/carton/pallet should be handled.
     *
     * @return self
     */
    public function setHandlingCode($handlingCode)
    {
        $allowedValues = $this->getHandlingCodeAllowableValues();
        if (!is_null($handlingCode) && !in_array($handlingCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'handlingCode', must be one of '%s'",
                    $handlingCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handlingCode'] = $handlingCode;

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

