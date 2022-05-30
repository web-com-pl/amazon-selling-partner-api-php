<?php
/**
 * ShipmentEventV0
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
 * ShipmentEventV0 Class Doc Comment
 *
 * @category Class
 * @description A shipment, refund, guarantee claim, or chargeback.
 * @package  Webcom\Amazon\Rest\FinancesApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentEventV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazonOrderId' => 'string',
        'sellerOrderId' => 'string',
        'marketplaceName' => 'string',
        'orderChargeList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]',
        'orderChargeAdjustmentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]',
        'shipmentFeeList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]',
        'shipmentFeeAdjustmentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]',
        'orderFeeList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]',
        'orderFeeAdjustmentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]',
        'directPaymentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\DirectPaymentV0[]',
        'postedDate' => '\DateTime',
        'shipmentItemList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]',
        'shipmentItemAdjustmentList' => '\Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazonOrderId' => null,
        'sellerOrderId' => null,
        'marketplaceName' => null,
        'orderChargeList' => null,
        'orderChargeAdjustmentList' => null,
        'shipmentFeeList' => null,
        'shipmentFeeAdjustmentList' => null,
        'orderFeeList' => null,
        'orderFeeAdjustmentList' => null,
        'directPaymentList' => null,
        'postedDate' => 'date-time',
        'shipmentItemList' => null,
        'shipmentItemAdjustmentList' => null
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
        'amazonOrderId' => 'AmazonOrderId',
        'sellerOrderId' => 'SellerOrderId',
        'marketplaceName' => 'MarketplaceName',
        'orderChargeList' => 'OrderChargeList',
        'orderChargeAdjustmentList' => 'OrderChargeAdjustmentList',
        'shipmentFeeList' => 'ShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'ShipmentFeeAdjustmentList',
        'orderFeeList' => 'OrderFeeList',
        'orderFeeAdjustmentList' => 'OrderFeeAdjustmentList',
        'directPaymentList' => 'DirectPaymentList',
        'postedDate' => 'PostedDate',
        'shipmentItemList' => 'ShipmentItemList',
        'shipmentItemAdjustmentList' => 'ShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazonOrderId' => 'setAmazonOrderId',
        'sellerOrderId' => 'setSellerOrderId',
        'marketplaceName' => 'setMarketplaceName',
        'orderChargeList' => 'setOrderChargeList',
        'orderChargeAdjustmentList' => 'setOrderChargeAdjustmentList',
        'shipmentFeeList' => 'setShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'setShipmentFeeAdjustmentList',
        'orderFeeList' => 'setOrderFeeList',
        'orderFeeAdjustmentList' => 'setOrderFeeAdjustmentList',
        'directPaymentList' => 'setDirectPaymentList',
        'postedDate' => 'setPostedDate',
        'shipmentItemList' => 'setShipmentItemList',
        'shipmentItemAdjustmentList' => 'setShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazonOrderId' => 'getAmazonOrderId',
        'sellerOrderId' => 'getSellerOrderId',
        'marketplaceName' => 'getMarketplaceName',
        'orderChargeList' => 'getOrderChargeList',
        'orderChargeAdjustmentList' => 'getOrderChargeAdjustmentList',
        'shipmentFeeList' => 'getShipmentFeeList',
        'shipmentFeeAdjustmentList' => 'getShipmentFeeAdjustmentList',
        'orderFeeList' => 'getOrderFeeList',
        'orderFeeAdjustmentList' => 'getOrderFeeAdjustmentList',
        'directPaymentList' => 'getDirectPaymentList',
        'postedDate' => 'getPostedDate',
        'shipmentItemList' => 'getShipmentItemList',
        'shipmentItemAdjustmentList' => 'getShipmentItemAdjustmentList'
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
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['sellerOrderId'] = $data['sellerOrderId'] ?? null;
        $this->container['marketplaceName'] = $data['marketplaceName'] ?? null;
        $this->container['orderChargeList'] = $data['orderChargeList'] ?? null;
        $this->container['orderChargeAdjustmentList'] = $data['orderChargeAdjustmentList'] ?? null;
        $this->container['shipmentFeeList'] = $data['shipmentFeeList'] ?? null;
        $this->container['shipmentFeeAdjustmentList'] = $data['shipmentFeeAdjustmentList'] ?? null;
        $this->container['orderFeeList'] = $data['orderFeeList'] ?? null;
        $this->container['orderFeeAdjustmentList'] = $data['orderFeeAdjustmentList'] ?? null;
        $this->container['directPaymentList'] = $data['directPaymentList'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['shipmentItemList'] = $data['shipmentItemList'] ?? null;
        $this->container['shipmentItemAdjustmentList'] = $data['shipmentItemAdjustmentList'] ?? null;
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
     * Gets amazonOrderId
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string|null $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets sellerOrderId
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['sellerOrderId'];
    }

    /**
     * Sets sellerOrderId
     *
     * @param string|null $sellerOrderId A seller-defined identifier for an order.
     *
     * @return self
     */
    public function setSellerOrderId($sellerOrderId)
    {
        $this->container['sellerOrderId'] = $sellerOrderId;

        return $this;
    }

    /**
     * Gets marketplaceName
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplaceName'];
    }

    /**
     * Sets marketplaceName
     *
     * @param string|null $marketplaceName The name of the marketplace where the event occurred.
     *
     * @return self
     */
    public function setMarketplaceName($marketplaceName)
    {
        $this->container['marketplaceName'] = $marketplaceName;

        return $this;
    }

    /**
     * Gets orderChargeList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]|null
     */
    public function getOrderChargeList()
    {
        return $this->container['orderChargeList'];
    }

    /**
     * Sets orderChargeList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]|null $orderChargeList A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setOrderChargeList($orderChargeList)
    {
        $this->container['orderChargeList'] = $orderChargeList;

        return $this;
    }

    /**
     * Gets orderChargeAdjustmentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]|null
     */
    public function getOrderChargeAdjustmentList()
    {
        return $this->container['orderChargeAdjustmentList'];
    }

    /**
     * Sets orderChargeAdjustmentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ChargeComponentV0[]|null $orderChargeAdjustmentList A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setOrderChargeAdjustmentList($orderChargeAdjustmentList)
    {
        $this->container['orderChargeAdjustmentList'] = $orderChargeAdjustmentList;

        return $this;
    }

    /**
     * Gets shipmentFeeList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null
     */
    public function getShipmentFeeList()
    {
        return $this->container['shipmentFeeList'];
    }

    /**
     * Sets shipmentFeeList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null $shipmentFeeList A list of fee component information.
     *
     * @return self
     */
    public function setShipmentFeeList($shipmentFeeList)
    {
        $this->container['shipmentFeeList'] = $shipmentFeeList;

        return $this;
    }

    /**
     * Gets shipmentFeeAdjustmentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null
     */
    public function getShipmentFeeAdjustmentList()
    {
        return $this->container['shipmentFeeAdjustmentList'];
    }

    /**
     * Sets shipmentFeeAdjustmentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null $shipmentFeeAdjustmentList A list of fee component information.
     *
     * @return self
     */
    public function setShipmentFeeAdjustmentList($shipmentFeeAdjustmentList)
    {
        $this->container['shipmentFeeAdjustmentList'] = $shipmentFeeAdjustmentList;

        return $this;
    }

    /**
     * Gets orderFeeList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null
     */
    public function getOrderFeeList()
    {
        return $this->container['orderFeeList'];
    }

    /**
     * Sets orderFeeList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null $orderFeeList A list of fee component information.
     *
     * @return self
     */
    public function setOrderFeeList($orderFeeList)
    {
        $this->container['orderFeeList'] = $orderFeeList;

        return $this;
    }

    /**
     * Gets orderFeeAdjustmentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null
     */
    public function getOrderFeeAdjustmentList()
    {
        return $this->container['orderFeeAdjustmentList'];
    }

    /**
     * Sets orderFeeAdjustmentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\FeeComponentV0[]|null $orderFeeAdjustmentList A list of fee component information.
     *
     * @return self
     */
    public function setOrderFeeAdjustmentList($orderFeeAdjustmentList)
    {
        $this->container['orderFeeAdjustmentList'] = $orderFeeAdjustmentList;

        return $this;
    }

    /**
     * Gets directPaymentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\DirectPaymentV0[]|null
     */
    public function getDirectPaymentList()
    {
        return $this->container['directPaymentList'];
    }

    /**
     * Sets directPaymentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\DirectPaymentV0[]|null $directPaymentList A list of direct payment information.
     *
     * @return self
     */
    public function setDirectPaymentList($directPaymentList)
    {
        $this->container['directPaymentList'] = $directPaymentList;

        return $this;
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
     * Gets shipmentItemList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]|null
     */
    public function getShipmentItemList()
    {
        return $this->container['shipmentItemList'];
    }

    /**
     * Sets shipmentItemList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]|null $shipmentItemList A list of shipment items.
     *
     * @return self
     */
    public function setShipmentItemList($shipmentItemList)
    {
        $this->container['shipmentItemList'] = $shipmentItemList;

        return $this;
    }

    /**
     * Gets shipmentItemAdjustmentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]|null
     */
    public function getShipmentItemAdjustmentList()
    {
        return $this->container['shipmentItemAdjustmentList'];
    }

    /**
     * Sets shipmentItemAdjustmentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApiV0\Model\ShipmentItemV0[]|null $shipmentItemAdjustmentList A list of shipment items.
     *
     * @return self
     */
    public function setShipmentItemAdjustmentList($shipmentItemAdjustmentList)
    {
        $this->container['shipmentItemAdjustmentList'] = $shipmentItemAdjustmentList;

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

