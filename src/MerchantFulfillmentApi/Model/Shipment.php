<?php
/**
 * Shipment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
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

namespace Webcom\Amazon\Rest\MerchantFulfillmentApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @description The details of a shipment, including the shipment status.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipmentId' => 'string',
        'amazonOrderId' => 'string',
        'sellerOrderId' => 'string',
        'itemList' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Item[]',
        'shipFromAddress' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address',
        'shipToAddress' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address',
        'packageDimensions' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\PackageDimensions',
        'weight' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Weight',
        'insurance' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\CurrencyAmount',
        'shippingService' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShippingService',
        'label' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Label',
        'status' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShipmentStatus',
        'trackingId' => 'string',
        'createdDate' => '\DateTime',
        'lastUpdatedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipmentId' => null,
        'amazonOrderId' => null,
        'sellerOrderId' => null,
        'itemList' => null,
        'shipFromAddress' => null,
        'shipToAddress' => null,
        'packageDimensions' => null,
        'weight' => null,
        'insurance' => null,
        'shippingService' => null,
        'label' => null,
        'status' => null,
        'trackingId' => null,
        'createdDate' => 'date-time',
        'lastUpdatedDate' => 'date-time'
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
        'shipmentId' => 'ShipmentId',
        'amazonOrderId' => 'AmazonOrderId',
        'sellerOrderId' => 'SellerOrderId',
        'itemList' => 'ItemList',
        'shipFromAddress' => 'ShipFromAddress',
        'shipToAddress' => 'ShipToAddress',
        'packageDimensions' => 'PackageDimensions',
        'weight' => 'Weight',
        'insurance' => 'Insurance',
        'shippingService' => 'ShippingService',
        'label' => 'Label',
        'status' => 'Status',
        'trackingId' => 'TrackingId',
        'createdDate' => 'CreatedDate',
        'lastUpdatedDate' => 'LastUpdatedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipmentId' => 'setShipmentId',
        'amazonOrderId' => 'setAmazonOrderId',
        'sellerOrderId' => 'setSellerOrderId',
        'itemList' => 'setItemList',
        'shipFromAddress' => 'setShipFromAddress',
        'shipToAddress' => 'setShipToAddress',
        'packageDimensions' => 'setPackageDimensions',
        'weight' => 'setWeight',
        'insurance' => 'setInsurance',
        'shippingService' => 'setShippingService',
        'label' => 'setLabel',
        'status' => 'setStatus',
        'trackingId' => 'setTrackingId',
        'createdDate' => 'setCreatedDate',
        'lastUpdatedDate' => 'setLastUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipmentId' => 'getShipmentId',
        'amazonOrderId' => 'getAmazonOrderId',
        'sellerOrderId' => 'getSellerOrderId',
        'itemList' => 'getItemList',
        'shipFromAddress' => 'getShipFromAddress',
        'shipToAddress' => 'getShipToAddress',
        'packageDimensions' => 'getPackageDimensions',
        'weight' => 'getWeight',
        'insurance' => 'getInsurance',
        'shippingService' => 'getShippingService',
        'label' => 'getLabel',
        'status' => 'getStatus',
        'trackingId' => 'getTrackingId',
        'createdDate' => 'getCreatedDate',
        'lastUpdatedDate' => 'getLastUpdatedDate'
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
        $this->container['shipmentId'] = $data['shipmentId'] ?? null;
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['sellerOrderId'] = $data['sellerOrderId'] ?? null;
        $this->container['itemList'] = $data['itemList'] ?? null;
        $this->container['shipFromAddress'] = $data['shipFromAddress'] ?? null;
        $this->container['shipToAddress'] = $data['shipToAddress'] ?? null;
        $this->container['packageDimensions'] = $data['packageDimensions'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
        $this->container['insurance'] = $data['insurance'] ?? null;
        $this->container['shippingService'] = $data['shippingService'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['trackingId'] = $data['trackingId'] ?? null;
        $this->container['createdDate'] = $data['createdDate'] ?? null;
        $this->container['lastUpdatedDate'] = $data['lastUpdatedDate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipmentId'] === null) {
            $invalidProperties[] = "'shipmentId' can't be null";
        }
        if ($this->container['amazonOrderId'] === null) {
            $invalidProperties[] = "'amazonOrderId' can't be null";
        }
        if (!is_null($this->container['sellerOrderId']) && (mb_strlen($this->container['sellerOrderId']) > 64)) {
            $invalidProperties[] = "invalid value for 'sellerOrderId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['itemList'] === null) {
            $invalidProperties[] = "'itemList' can't be null";
        }
        if ($this->container['shipFromAddress'] === null) {
            $invalidProperties[] = "'shipFromAddress' can't be null";
        }
        if ($this->container['shipToAddress'] === null) {
            $invalidProperties[] = "'shipToAddress' can't be null";
        }
        if ($this->container['packageDimensions'] === null) {
            $invalidProperties[] = "'packageDimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['insurance'] === null) {
            $invalidProperties[] = "'insurance' can't be null";
        }
        if ($this->container['shippingService'] === null) {
            $invalidProperties[] = "'shippingService' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdDate'] === null) {
            $invalidProperties[] = "'createdDate' can't be null";
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
     * Gets shipmentId
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string $shipmentId An Amazon-defined shipment identifier.
     *
     * @return self
     */
    public function setShipmentId($shipmentId)
    {
        $this->container['shipmentId'] = $shipmentId;

        return $this;
    }

    /**
     * Gets amazonOrderId
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string $amazonOrderId An Amazon-defined order identifier, in 3-7-7 format.
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
     * @param string|null $sellerOrderId A seller-defined order identifier.
     *
     * @return self
     */
    public function setSellerOrderId($sellerOrderId)
    {
        if (!is_null($sellerOrderId) && (mb_strlen($sellerOrderId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $sellerOrderId when calling Shipment., must be smaller than or equal to 64.');
        }

        $this->container['sellerOrderId'] = $sellerOrderId;

        return $this;
    }

    /**
     * Gets itemList
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Item[]
     */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
     * Sets itemList
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Item[] $itemList The list of items to be included in a shipment.
     *
     * @return self
     */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;

        return $this;
    }

    /**
     * Gets shipFromAddress
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['shipFromAddress'];
    }

    /**
     * Sets shipFromAddress
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address $shipFromAddress shipFromAddress
     *
     * @return self
     */
    public function setShipFromAddress($shipFromAddress)
    {
        $this->container['shipFromAddress'] = $shipFromAddress;

        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Address $shipToAddress shipToAddress
     *
     * @return self
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->container['shipToAddress'] = $shipToAddress;

        return $this;
    }

    /**
     * Gets packageDimensions
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\PackageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['packageDimensions'];
    }

    /**
     * Sets packageDimensions
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\PackageDimensions $packageDimensions packageDimensions
     *
     * @return self
     */
    public function setPackageDimensions($packageDimensions)
    {
        $this->container['packageDimensions'] = $packageDimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\CurrencyAmount
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\CurrencyAmount $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets shippingService
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShippingService
     */
    public function getShippingService()
    {
        return $this->container['shippingService'];
    }

    /**
     * Sets shippingService
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShippingService $shippingService shippingService
     *
     * @return self
     */
    public function setShippingService($shippingService)
    {
        $this->container['shippingService'] = $shippingService;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Label
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\Label $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShipmentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\ShipmentStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets trackingId
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['trackingId'];
    }

    /**
     * Sets trackingId
     *
     * @param string|null $trackingId The shipment tracking identifier provided by the carrier.
     *
     * @return self
     */
    public function setTrackingId($trackingId)
    {
        $this->container['trackingId'] = $trackingId;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /**
     * Gets lastUpdatedDate
     *
     * @return \DateTime|null
     */
    public function getLastUpdatedDate()
    {
        return $this->container['lastUpdatedDate'];
    }

    /**
     * Sets lastUpdatedDate
     *
     * @param \DateTime|null $lastUpdatedDate lastUpdatedDate
     *
     * @return self
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->container['lastUpdatedDate'] = $lastUpdatedDate;

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


