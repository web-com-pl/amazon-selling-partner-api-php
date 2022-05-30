<?php
/**
 * RemovalShipmentAdjustmentEventV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Webcom\Amazon\Rest\FinancesApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * RemovalShipmentAdjustmentEventV0 Class Doc Comment
 *
 * @category Class
 * @description A financial adjustment event for FBA liquidated inventory. A positive value indicates money owed to Amazon by the buyer (for example, when the charge was incorrectly calculated as less than it should be). A negative value indicates a full or partial refund owed to the buyer (for example, when the buyer receives damaged items or fewer items than ordered).
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RemovalShipmentAdjustmentEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemovalShipmentAdjustmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'postedDate' => '\DateTime',
        'adjustmentEventId' => 'string',
        'merchantOrderId' => 'string',
        'orderId' => 'string',
        'transactionType' => 'string',
        'removalShipmentItemAdjustmentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentItemAdjustmentV0[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'postedDate' => 'date-time',
        'adjustmentEventId' => null,
        'merchantOrderId' => null,
        'orderId' => null,
        'transactionType' => null,
        'removalShipmentItemAdjustmentList' => null
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
        'postedDate' => 'PostedDate',
        'adjustmentEventId' => 'AdjustmentEventId',
        'merchantOrderId' => 'MerchantOrderId',
        'orderId' => 'OrderId',
        'transactionType' => 'TransactionType',
        'removalShipmentItemAdjustmentList' => 'RemovalShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'postedDate' => 'setPostedDate',
        'adjustmentEventId' => 'setAdjustmentEventId',
        'merchantOrderId' => 'setMerchantOrderId',
        'orderId' => 'setOrderId',
        'transactionType' => 'setTransactionType',
        'removalShipmentItemAdjustmentList' => 'setRemovalShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'postedDate' => 'getPostedDate',
        'adjustmentEventId' => 'getAdjustmentEventId',
        'merchantOrderId' => 'getMerchantOrderId',
        'orderId' => 'getOrderId',
        'transactionType' => 'getTransactionType',
        'removalShipmentItemAdjustmentList' => 'getRemovalShipmentItemAdjustmentList'
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
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['adjustmentEventId'] = $data['adjustmentEventId'] ?? null;
        $this->container['merchantOrderId'] = $data['merchantOrderId'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
        $this->container['removalShipmentItemAdjustmentList'] = $data['removalShipmentItemAdjustmentList'] ?? null;
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
     * Gets postedDate
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \DateTime|null $postedDate postedDate
     *
     * @return self
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets adjustmentEventId
     *
     * @return string|null
     */
    public function getAdjustmentEventId()
    {
        return $this->container['adjustmentEventId'];
    }

    /**
     * Sets adjustmentEventId
     *
     * @param string|null $adjustmentEventId The unique identifier for the adjustment event.
     *
     * @return self
     */
    public function setAdjustmentEventId($adjustmentEventId)
    {
        $this->container['adjustmentEventId'] = $adjustmentEventId;

        return $this;
    }

    /**
     * Gets merchantOrderId
     *
     * @return string|null
     */
    public function getMerchantOrderId()
    {
        return $this->container['merchantOrderId'];
    }

    /**
     * Sets merchantOrderId
     *
     * @param string|null $merchantOrderId The merchant removal orderId.
     *
     * @return self
     */
    public function setMerchantOrderId($merchantOrderId)
    {
        $this->container['merchantOrderId'] = $merchantOrderId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId The orderId for shipping inventory.
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType The type of removal order.  Possible values:  * WHOLESALE_LIQUIDATION.
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets removalShipmentItemAdjustmentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentItemAdjustmentV0[]|null
     */
    public function getRemovalShipmentItemAdjustmentList()
    {
        return $this->container['removalShipmentItemAdjustmentList'];
    }

    /**
     * Sets removalShipmentItemAdjustmentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\RemovalShipmentItemAdjustmentV0[]|null $removalShipmentItemAdjustmentList A comma-delimited list of Removal shipmentItemAdjustment details for FBA inventory.
     *
     * @return self
     */
    public function setRemovalShipmentItemAdjustmentList($removalShipmentItemAdjustmentList)
    {
        $this->container['removalShipmentItemAdjustmentList'] = $removalShipmentItemAdjustmentList;

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

