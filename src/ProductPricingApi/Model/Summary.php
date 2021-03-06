<?php
/**
 * Summary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
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

namespace Webcom\Amazon\Rest\ProductPricingApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @description Contains price information about the product, including the LowestPrices and BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and NumberOfOffers and NumberOfBuyBoxEligibleOffers.
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Summary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalOfferCount' => 'int',
        'numberOfOffers' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]',
        'lowestPrices' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\LowestPriceType[]',
        'buyBoxPrices' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\BuyBoxPriceType[]',
        'listPrice' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType',
        'suggestedLowerPricePlusShipping' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType',
        'buyBoxEligibleOffers' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]',
        'offersAvailableTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'totalOfferCount' => 'int32',
        'numberOfOffers' => null,
        'lowestPrices' => null,
        'buyBoxPrices' => null,
        'listPrice' => null,
        'suggestedLowerPricePlusShipping' => null,
        'buyBoxEligibleOffers' => null,
        'offersAvailableTime' => 'date-time'
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
        'totalOfferCount' => 'TotalOfferCount',
        'numberOfOffers' => 'NumberOfOffers',
        'lowestPrices' => 'LowestPrices',
        'buyBoxPrices' => 'BuyBoxPrices',
        'listPrice' => 'ListPrice',
        'suggestedLowerPricePlusShipping' => 'SuggestedLowerPricePlusShipping',
        'buyBoxEligibleOffers' => 'BuyBoxEligibleOffers',
        'offersAvailableTime' => 'OffersAvailableTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalOfferCount' => 'setTotalOfferCount',
        'numberOfOffers' => 'setNumberOfOffers',
        'lowestPrices' => 'setLowestPrices',
        'buyBoxPrices' => 'setBuyBoxPrices',
        'listPrice' => 'setListPrice',
        'suggestedLowerPricePlusShipping' => 'setSuggestedLowerPricePlusShipping',
        'buyBoxEligibleOffers' => 'setBuyBoxEligibleOffers',
        'offersAvailableTime' => 'setOffersAvailableTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalOfferCount' => 'getTotalOfferCount',
        'numberOfOffers' => 'getNumberOfOffers',
        'lowestPrices' => 'getLowestPrices',
        'buyBoxPrices' => 'getBuyBoxPrices',
        'listPrice' => 'getListPrice',
        'suggestedLowerPricePlusShipping' => 'getSuggestedLowerPricePlusShipping',
        'buyBoxEligibleOffers' => 'getBuyBoxEligibleOffers',
        'offersAvailableTime' => 'getOffersAvailableTime'
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
        $this->container['totalOfferCount'] = $data['totalOfferCount'] ?? null;
        $this->container['numberOfOffers'] = $data['numberOfOffers'] ?? null;
        $this->container['lowestPrices'] = $data['lowestPrices'] ?? null;
        $this->container['buyBoxPrices'] = $data['buyBoxPrices'] ?? null;
        $this->container['listPrice'] = $data['listPrice'] ?? null;
        $this->container['suggestedLowerPricePlusShipping'] = $data['suggestedLowerPricePlusShipping'] ?? null;
        $this->container['buyBoxEligibleOffers'] = $data['buyBoxEligibleOffers'] ?? null;
        $this->container['offersAvailableTime'] = $data['offersAvailableTime'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['totalOfferCount'] === null) {
            $invalidProperties[] = "'totalOfferCount' can't be null";
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
     * Gets totalOfferCount
     *
     * @return int
     */
    public function getTotalOfferCount()
    {
        return $this->container['totalOfferCount'];
    }

    /**
     * Sets totalOfferCount
     *
     * @param int $totalOfferCount The number of unique offers contained in NumberOfOffers.
     *
     * @return self
     */
    public function setTotalOfferCount($totalOfferCount)
    {
        $this->container['totalOfferCount'] = $totalOfferCount;

        return $this;
    }

    /**
     * Gets numberOfOffers
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]|null
     */
    public function getNumberOfOffers()
    {
        return $this->container['numberOfOffers'];
    }

    /**
     * Sets numberOfOffers
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]|null $numberOfOffers numberOfOffers
     *
     * @return self
     */
    public function setNumberOfOffers($numberOfOffers)
    {
        $this->container['numberOfOffers'] = $numberOfOffers;

        return $this;
    }

    /**
     * Gets lowestPrices
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\LowestPriceType[]|null
     */
    public function getLowestPrices()
    {
        return $this->container['lowestPrices'];
    }

    /**
     * Sets lowestPrices
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\LowestPriceType[]|null $lowestPrices lowestPrices
     *
     * @return self
     */
    public function setLowestPrices($lowestPrices)
    {
        $this->container['lowestPrices'] = $lowestPrices;

        return $this;
    }

    /**
     * Gets buyBoxPrices
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\BuyBoxPriceType[]|null
     */
    public function getBuyBoxPrices()
    {
        return $this->container['buyBoxPrices'];
    }

    /**
     * Sets buyBoxPrices
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\BuyBoxPriceType[]|null $buyBoxPrices buyBoxPrices
     *
     * @return self
     */
    public function setBuyBoxPrices($buyBoxPrices)
    {
        $this->container['buyBoxPrices'] = $buyBoxPrices;

        return $this;
    }

    /**
     * Gets listPrice
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType|null
     */
    public function getListPrice()
    {
        return $this->container['listPrice'];
    }

    /**
     * Sets listPrice
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType|null $listPrice listPrice
     *
     * @return self
     */
    public function setListPrice($listPrice)
    {
        $this->container['listPrice'] = $listPrice;

        return $this;
    }

    /**
     * Gets suggestedLowerPricePlusShipping
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType|null
     */
    public function getSuggestedLowerPricePlusShipping()
    {
        return $this->container['suggestedLowerPricePlusShipping'];
    }

    /**
     * Sets suggestedLowerPricePlusShipping
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType|null $suggestedLowerPricePlusShipping suggestedLowerPricePlusShipping
     *
     * @return self
     */
    public function setSuggestedLowerPricePlusShipping($suggestedLowerPricePlusShipping)
    {
        $this->container['suggestedLowerPricePlusShipping'] = $suggestedLowerPricePlusShipping;

        return $this;
    }

    /**
     * Gets buyBoxEligibleOffers
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]|null
     */
    public function getBuyBoxEligibleOffers()
    {
        return $this->container['buyBoxEligibleOffers'];
    }

    /**
     * Sets buyBoxEligibleOffers
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCountType[]|null $buyBoxEligibleOffers buyBoxEligibleOffers
     *
     * @return self
     */
    public function setBuyBoxEligibleOffers($buyBoxEligibleOffers)
    {
        $this->container['buyBoxEligibleOffers'] = $buyBoxEligibleOffers;

        return $this;
    }

    /**
     * Gets offersAvailableTime
     *
     * @return \DateTime|null
     */
    public function getOffersAvailableTime()
    {
        return $this->container['offersAvailableTime'];
    }

    /**
     * Sets offersAvailableTime
     *
     * @param \DateTime|null $offersAvailableTime When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing.
     *
     * @return self
     */
    public function setOffersAvailableTime($offersAvailableTime)
    {
        $this->container['offersAvailableTime'] = $offersAvailableTime;

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


