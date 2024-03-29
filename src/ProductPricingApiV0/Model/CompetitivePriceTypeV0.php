<?php
/**
 * CompetitivePriceTypeV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace Webcom\Amazon\Rest\ProductPricingApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * CompetitivePriceTypeV0 Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompetitivePriceTypeV0 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompetitivePriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'competitivePriceId' => 'string',
        'price' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\PriceTypeV0',
        'condition' => 'string',
        'subcondition' => 'string',
        'offerType' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0',
        'quantityTier' => 'int',
        'quantityDiscountType' => '\Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0',
        'sellerId' => 'string',
        'belongsToRequester' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'competitivePriceId' => null,
        'price' => null,
        'condition' => null,
        'subcondition' => null,
        'offerType' => null,
        'quantityTier' => 'int32',
        'quantityDiscountType' => null,
        'sellerId' => null,
        'belongsToRequester' => null
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
        'competitivePriceId' => 'CompetitivePriceId',
        'price' => 'Price',
        'condition' => 'condition',
        'subcondition' => 'subcondition',
        'offerType' => 'offerType',
        'quantityTier' => 'quantityTier',
        'quantityDiscountType' => 'quantityDiscountType',
        'sellerId' => 'sellerId',
        'belongsToRequester' => 'belongsToRequester'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competitivePriceId' => 'setCompetitivePriceId',
        'price' => 'setPrice',
        'condition' => 'setCondition',
        'subcondition' => 'setSubcondition',
        'offerType' => 'setOfferType',
        'quantityTier' => 'setQuantityTier',
        'quantityDiscountType' => 'setQuantityDiscountType',
        'sellerId' => 'setSellerId',
        'belongsToRequester' => 'setBelongsToRequester'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competitivePriceId' => 'getCompetitivePriceId',
        'price' => 'getPrice',
        'condition' => 'getCondition',
        'subcondition' => 'getSubcondition',
        'offerType' => 'getOfferType',
        'quantityTier' => 'getQuantityTier',
        'quantityDiscountType' => 'getQuantityDiscountType',
        'sellerId' => 'getSellerId',
        'belongsToRequester' => 'getBelongsToRequester'
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
        $this->container['competitivePriceId'] = $data['competitivePriceId'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['condition'] = $data['condition'] ?? null;
        $this->container['subcondition'] = $data['subcondition'] ?? null;
        $this->container['offerType'] = $data['offerType'] ?? null;
        $this->container['quantityTier'] = $data['quantityTier'] ?? null;
        $this->container['quantityDiscountType'] = $data['quantityDiscountType'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['belongsToRequester'] = $data['belongsToRequester'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['competitivePriceId'] === null) {
            $invalidProperties[] = "'competitivePriceId' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets competitivePriceId
     *
     * @return string
     */
    public function getCompetitivePriceId()
    {
        return $this->container['competitivePriceId'];
    }

    /**
     * Sets competitivePriceId
     *
     * @param string $competitivePriceId The pricing model for each price that is returned.  Possible values:  * 1 - New Buy Box Price. * 2 - Used Buy Box Price.
     *
     * @return self
     */
    public function setCompetitivePriceId($competitivePriceId)
    {
        $this->container['competitivePriceId'] = $competitivePriceId;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\PriceTypeV0
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\PriceTypeV0 $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition Indicates the condition of the item whose pricing information is returned. Possible values are: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets subcondition
     *
     * @return string|null
     */
    public function getSubcondition()
    {
        return $this->container['subcondition'];
    }

    /**
     * Sets subcondition
     *
     * @param string|null $subcondition Indicates the subcondition of the item whose pricing information is returned. Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setSubcondition($subcondition)
    {
        $this->container['subcondition'] = $subcondition;

        return $this;
    }

    /**
     * Gets offerType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0|null
     */
    public function getOfferType()
    {
        return $this->container['offerType'];
    }

    /**
     * Sets offerType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\OfferCustomerTypeV0|null $offerType offerType
     *
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->container['offerType'] = $offerType;

        return $this;
    }

    /**
     * Gets quantityTier
     *
     * @return int|null
     */
    public function getQuantityTier()
    {
        return $this->container['quantityTier'];
    }

    /**
     * Sets quantityTier
     *
     * @param int|null $quantityTier Indicates at what quantity this price becomes active.
     *
     * @return self
     */
    public function setQuantityTier($quantityTier)
    {
        $this->container['quantityTier'] = $quantityTier;

        return $this;
    }

    /**
     * Gets quantityDiscountType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0|null
     */
    public function getQuantityDiscountType()
    {
        return $this->container['quantityDiscountType'];
    }

    /**
     * Sets quantityDiscountType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApiV0\Model\QuantityDiscountTypeV0|null $quantityDiscountType quantityDiscountType
     *
     * @return self
     */
    public function setQuantityDiscountType($quantityDiscountType)
    {
        $this->container['quantityDiscountType'] = $quantityDiscountType;

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
     * @param string|null $sellerId The seller identifier for the offer.
     *
     * @return self
     */
    public function setSellerId($sellerId)
    {
        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets belongsToRequester
     *
     * @return bool|null
     */
    public function getBelongsToRequester()
    {
        return $this->container['belongsToRequester'];
    }

    /**
     * Sets belongsToRequester
     *
     * @param bool|null $belongsToRequester Indicates whether or not the pricing information is for an offer listing that belongs to the requester. The requester is the seller associated with the SellerId that was submitted with the request. Possible values are: true and false.
     *
     * @return self
     */
    public function setBelongsToRequester($belongsToRequester)
    {
        $this->container['belongsToRequester'] = $belongsToRequester;

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


