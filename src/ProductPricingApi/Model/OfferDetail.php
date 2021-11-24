<?php
/**
 * OfferDetail
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
 * OfferDetail Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ProductPricingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'myOffer' => 'bool',
        'offerType' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCustomerType',
        'subCondition' => 'string',
        'sellerId' => 'string',
        'conditionNotes' => 'string',
        'sellerFeedbackRating' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\SellerFeedbackType',
        'shippingTime' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\DetailedShippingTimeType',
        'listingPrice' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType',
        'quantityDiscountPrices' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\QuantityDiscountPriceType[]',
        'points' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\Points',
        'shipping' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType',
        'shipsFrom' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\ShipsFromType',
        'isFulfilledByAmazon' => 'bool',
        'primeInformation' => '\Webcom\Amazon\Rest\ProductPricingApi\Model\PrimeInformationType',
        'isBuyBoxWinner' => 'bool',
        'isFeaturedMerchant' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'myOffer' => null,
        'offerType' => null,
        'subCondition' => null,
        'sellerId' => null,
        'conditionNotes' => null,
        'sellerFeedbackRating' => null,
        'shippingTime' => null,
        'listingPrice' => null,
        'quantityDiscountPrices' => null,
        'points' => null,
        'shipping' => null,
        'shipsFrom' => null,
        'isFulfilledByAmazon' => null,
        'primeInformation' => null,
        'isBuyBoxWinner' => null,
        'isFeaturedMerchant' => null
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
        'myOffer' => 'MyOffer',
        'offerType' => 'offerType',
        'subCondition' => 'SubCondition',
        'sellerId' => 'SellerId',
        'conditionNotes' => 'ConditionNotes',
        'sellerFeedbackRating' => 'SellerFeedbackRating',
        'shippingTime' => 'ShippingTime',
        'listingPrice' => 'ListingPrice',
        'quantityDiscountPrices' => 'quantityDiscountPrices',
        'points' => 'Points',
        'shipping' => 'Shipping',
        'shipsFrom' => 'ShipsFrom',
        'isFulfilledByAmazon' => 'IsFulfilledByAmazon',
        'primeInformation' => 'PrimeInformation',
        'isBuyBoxWinner' => 'IsBuyBoxWinner',
        'isFeaturedMerchant' => 'IsFeaturedMerchant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'myOffer' => 'setMyOffer',
        'offerType' => 'setOfferType',
        'subCondition' => 'setSubCondition',
        'sellerId' => 'setSellerId',
        'conditionNotes' => 'setConditionNotes',
        'sellerFeedbackRating' => 'setSellerFeedbackRating',
        'shippingTime' => 'setShippingTime',
        'listingPrice' => 'setListingPrice',
        'quantityDiscountPrices' => 'setQuantityDiscountPrices',
        'points' => 'setPoints',
        'shipping' => 'setShipping',
        'shipsFrom' => 'setShipsFrom',
        'isFulfilledByAmazon' => 'setIsFulfilledByAmazon',
        'primeInformation' => 'setPrimeInformation',
        'isBuyBoxWinner' => 'setIsBuyBoxWinner',
        'isFeaturedMerchant' => 'setIsFeaturedMerchant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'myOffer' => 'getMyOffer',
        'offerType' => 'getOfferType',
        'subCondition' => 'getSubCondition',
        'sellerId' => 'getSellerId',
        'conditionNotes' => 'getConditionNotes',
        'sellerFeedbackRating' => 'getSellerFeedbackRating',
        'shippingTime' => 'getShippingTime',
        'listingPrice' => 'getListingPrice',
        'quantityDiscountPrices' => 'getQuantityDiscountPrices',
        'points' => 'getPoints',
        'shipping' => 'getShipping',
        'shipsFrom' => 'getShipsFrom',
        'isFulfilledByAmazon' => 'getIsFulfilledByAmazon',
        'primeInformation' => 'getPrimeInformation',
        'isBuyBoxWinner' => 'getIsBuyBoxWinner',
        'isFeaturedMerchant' => 'getIsFeaturedMerchant'
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
        $this->container['myOffer'] = $data['myOffer'] ?? null;
        $this->container['offerType'] = $data['offerType'] ?? null;
        $this->container['subCondition'] = $data['subCondition'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['conditionNotes'] = $data['conditionNotes'] ?? null;
        $this->container['sellerFeedbackRating'] = $data['sellerFeedbackRating'] ?? null;
        $this->container['shippingTime'] = $data['shippingTime'] ?? null;
        $this->container['listingPrice'] = $data['listingPrice'] ?? null;
        $this->container['quantityDiscountPrices'] = $data['quantityDiscountPrices'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['shipsFrom'] = $data['shipsFrom'] ?? null;
        $this->container['isFulfilledByAmazon'] = $data['isFulfilledByAmazon'] ?? null;
        $this->container['primeInformation'] = $data['primeInformation'] ?? null;
        $this->container['isBuyBoxWinner'] = $data['isBuyBoxWinner'] ?? null;
        $this->container['isFeaturedMerchant'] = $data['isFeaturedMerchant'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subCondition'] === null) {
            $invalidProperties[] = "'subCondition' can't be null";
        }
        if ($this->container['shippingTime'] === null) {
            $invalidProperties[] = "'shippingTime' can't be null";
        }
        if ($this->container['listingPrice'] === null) {
            $invalidProperties[] = "'listingPrice' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['isFulfilledByAmazon'] === null) {
            $invalidProperties[] = "'isFulfilledByAmazon' can't be null";
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
     * Gets myOffer
     *
     * @return bool|null
     */
    public function getMyOffer()
    {
        return $this->container['myOffer'];
    }

    /**
     * Sets myOffer
     *
     * @param bool|null $myOffer When true, this is the seller's offer.
     *
     * @return self
     */
    public function setMyOffer($myOffer)
    {
        $this->container['myOffer'] = $myOffer;

        return $this;
    }

    /**
     * Gets offerType
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCustomerType|null
     */
    public function getOfferType()
    {
        return $this->container['offerType'];
    }

    /**
     * Sets offerType
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\OfferCustomerType|null $offerType offerType
     *
     * @return self
     */
    public function setOfferType($offerType)
    {
        $this->container['offerType'] = $offerType;

        return $this;
    }

    /**
     * Gets subCondition
     *
     * @return string
     */
    public function getSubCondition()
    {
        return $this->container['subCondition'];
    }

    /**
     * Sets subCondition
     *
     * @param string $subCondition The subcondition of the item. Subcondition values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setSubCondition($subCondition)
    {
        $this->container['subCondition'] = $subCondition;

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
     * Gets conditionNotes
     *
     * @return string|null
     */
    public function getConditionNotes()
    {
        return $this->container['conditionNotes'];
    }

    /**
     * Sets conditionNotes
     *
     * @param string|null $conditionNotes Information about the condition of the item.
     *
     * @return self
     */
    public function setConditionNotes($conditionNotes)
    {
        $this->container['conditionNotes'] = $conditionNotes;

        return $this;
    }

    /**
     * Gets sellerFeedbackRating
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\SellerFeedbackType|null
     */
    public function getSellerFeedbackRating()
    {
        return $this->container['sellerFeedbackRating'];
    }

    /**
     * Sets sellerFeedbackRating
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\SellerFeedbackType|null $sellerFeedbackRating sellerFeedbackRating
     *
     * @return self
     */
    public function setSellerFeedbackRating($sellerFeedbackRating)
    {
        $this->container['sellerFeedbackRating'] = $sellerFeedbackRating;

        return $this;
    }

    /**
     * Gets shippingTime
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\DetailedShippingTimeType
     */
    public function getShippingTime()
    {
        return $this->container['shippingTime'];
    }

    /**
     * Sets shippingTime
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\DetailedShippingTimeType $shippingTime shippingTime
     *
     * @return self
     */
    public function setShippingTime($shippingTime)
    {
        $this->container['shippingTime'] = $shippingTime;

        return $this;
    }

    /**
     * Gets listingPrice
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listingPrice'];
    }

    /**
     * Sets listingPrice
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType $listingPrice listingPrice
     *
     * @return self
     */
    public function setListingPrice($listingPrice)
    {
        $this->container['listingPrice'] = $listingPrice;

        return $this;
    }

    /**
     * Gets quantityDiscountPrices
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\QuantityDiscountPriceType[]|null
     */
    public function getQuantityDiscountPrices()
    {
        return $this->container['quantityDiscountPrices'];
    }

    /**
     * Sets quantityDiscountPrices
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\QuantityDiscountPriceType[]|null $quantityDiscountPrices quantityDiscountPrices
     *
     * @return self
     */
    public function setQuantityDiscountPrices($quantityDiscountPrices)
    {
        $this->container['quantityDiscountPrices'] = $quantityDiscountPrices;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\Points|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\Points|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\MoneyType $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets shipsFrom
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\ShipsFromType|null
     */
    public function getShipsFrom()
    {
        return $this->container['shipsFrom'];
    }

    /**
     * Sets shipsFrom
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\ShipsFromType|null $shipsFrom shipsFrom
     *
     * @return self
     */
    public function setShipsFrom($shipsFrom)
    {
        $this->container['shipsFrom'] = $shipsFrom;

        return $this;
    }

    /**
     * Gets isFulfilledByAmazon
     *
     * @return bool
     */
    public function getIsFulfilledByAmazon()
    {
        return $this->container['isFulfilledByAmazon'];
    }

    /**
     * Sets isFulfilledByAmazon
     *
     * @param bool $isFulfilledByAmazon When true, the offer is fulfilled by Amazon.
     *
     * @return self
     */
    public function setIsFulfilledByAmazon($isFulfilledByAmazon)
    {
        $this->container['isFulfilledByAmazon'] = $isFulfilledByAmazon;

        return $this;
    }

    /**
     * Gets primeInformation
     *
     * @return \Webcom\Amazon\Rest\ProductPricingApi\Model\PrimeInformationType|null
     */
    public function getPrimeInformation()
    {
        return $this->container['primeInformation'];
    }

    /**
     * Sets primeInformation
     *
     * @param \Webcom\Amazon\Rest\ProductPricingApi\Model\PrimeInformationType|null $primeInformation primeInformation
     *
     * @return self
     */
    public function setPrimeInformation($primeInformation)
    {
        $this->container['primeInformation'] = $primeInformation;

        return $this;
    }

    /**
     * Gets isBuyBoxWinner
     *
     * @return bool|null
     */
    public function getIsBuyBoxWinner()
    {
        return $this->container['isBuyBoxWinner'];
    }

    /**
     * Sets isBuyBoxWinner
     *
     * @param bool|null $isBuyBoxWinner When true, the offer is currently in the Buy Box. There can be up to two Buy Box winners at any time per ASIN, one that is eligible for Prime and one that is not eligible for Prime.
     *
     * @return self
     */
    public function setIsBuyBoxWinner($isBuyBoxWinner)
    {
        $this->container['isBuyBoxWinner'] = $isBuyBoxWinner;

        return $this;
    }

    /**
     * Gets isFeaturedMerchant
     *
     * @return bool|null
     */
    public function getIsFeaturedMerchant()
    {
        return $this->container['isFeaturedMerchant'];
    }

    /**
     * Sets isFeaturedMerchant
     *
     * @param bool|null $isFeaturedMerchant When true, the seller of the item is eligible to win the Buy Box.
     *
     * @return self
     */
    public function setIsFeaturedMerchant($isFeaturedMerchant)
    {
        $this->container['isFeaturedMerchant'] = $isFeaturedMerchant;

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


