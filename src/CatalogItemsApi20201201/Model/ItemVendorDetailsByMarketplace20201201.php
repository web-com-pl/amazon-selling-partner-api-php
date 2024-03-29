<?php
/**
 * ItemVendorDetailsByMarketplace20201201
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\CatalogItemsApi20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2020-12-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\CatalogItemsApi20201201\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ItemVendorDetailsByMarketplace20201201 Class Doc Comment
 *
 * @category Class
 * @description Vendor details associated with an Amazon catalog item for the indicated Amazon marketplace.
 * @package  Webcom\Amazon\Rest\CatalogItemsApi20201201
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemVendorDetailsByMarketplace20201201 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemVendorDetailsByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'brandCode' => 'string',
        'categoryCode' => 'string',
        'manufacturerCode' => 'string',
        'manufacturerCodeParent' => 'string',
        'productGroup' => 'string',
        'replenishmentCategory' => 'string',
        'subcategoryCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'brandCode' => null,
        'categoryCode' => null,
        'manufacturerCode' => null,
        'manufacturerCodeParent' => null,
        'productGroup' => null,
        'replenishmentCategory' => null,
        'subcategoryCode' => null
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
        'marketplaceId' => 'marketplaceId',
        'brandCode' => 'brandCode',
        'categoryCode' => 'categoryCode',
        'manufacturerCode' => 'manufacturerCode',
        'manufacturerCodeParent' => 'manufacturerCodeParent',
        'productGroup' => 'productGroup',
        'replenishmentCategory' => 'replenishmentCategory',
        'subcategoryCode' => 'subcategoryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'brandCode' => 'setBrandCode',
        'categoryCode' => 'setCategoryCode',
        'manufacturerCode' => 'setManufacturerCode',
        'manufacturerCodeParent' => 'setManufacturerCodeParent',
        'productGroup' => 'setProductGroup',
        'replenishmentCategory' => 'setReplenishmentCategory',
        'subcategoryCode' => 'setSubcategoryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'brandCode' => 'getBrandCode',
        'categoryCode' => 'getCategoryCode',
        'manufacturerCode' => 'getManufacturerCode',
        'manufacturerCodeParent' => 'getManufacturerCodeParent',
        'productGroup' => 'getProductGroup',
        'replenishmentCategory' => 'getReplenishmentCategory',
        'subcategoryCode' => 'getSubcategoryCode'
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

    const REPLENISHMENT_CATEGORY_ALLOCATED = 'ALLOCATED';
    const REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT = 'BASIC_REPLENISHMENT';
    const REPLENISHMENT_CATEGORY_IN_SEASON = 'IN_SEASON';
    const REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT = 'LIMITED_REPLENISHMENT';
    const REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK = 'MANUFACTURER_OUT_OF_STOCK';
    const REPLENISHMENT_CATEGORY_NEW_PRODUCT = 'NEW_PRODUCT';
    const REPLENISHMENT_CATEGORY_NON_REPLENISHABLE = 'NON_REPLENISHABLE';
    const REPLENISHMENT_CATEGORY_NON_STOCKUPABLE = 'NON_STOCKUPABLE';
    const REPLENISHMENT_CATEGORY_OBSOLETE = 'OBSOLETE';
    const REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT = 'PLANNED_REPLENISHMENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReplenishmentCategoryAllowableValues()
    {
        return [
            self::REPLENISHMENT_CATEGORY_ALLOCATED,
            self::REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_IN_SEASON,
            self::REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK,
            self::REPLENISHMENT_CATEGORY_NEW_PRODUCT,
            self::REPLENISHMENT_CATEGORY_NON_REPLENISHABLE,
            self::REPLENISHMENT_CATEGORY_NON_STOCKUPABLE,
            self::REPLENISHMENT_CATEGORY_OBSOLETE,
            self::REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT,
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['brandCode'] = $data['brandCode'] ?? null;
        $this->container['categoryCode'] = $data['categoryCode'] ?? null;
        $this->container['manufacturerCode'] = $data['manufacturerCode'] ?? null;
        $this->container['manufacturerCodeParent'] = $data['manufacturerCodeParent'] ?? null;
        $this->container['productGroup'] = $data['productGroup'] ?? null;
        $this->container['replenishmentCategory'] = $data['replenishmentCategory'] ?? null;
        $this->container['subcategoryCode'] = $data['subcategoryCode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        $allowedValues = $this->getReplenishmentCategoryAllowableValues();
        if (!is_null($this->container['replenishmentCategory']) && !in_array($this->container['replenishmentCategory'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'replenishmentCategory', must be one of '%s'",
                $this->container['replenishmentCategory'],
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
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId Amazon marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets brandCode
     *
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->container['brandCode'];
    }

    /**
     * Sets brandCode
     *
     * @param string|null $brandCode Brand code associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->container['brandCode'] = $brandCode;

        return $this;
    }

    /**
     * Gets categoryCode
     *
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     *
     * @param string|null $categoryCode Product category associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets manufacturerCode
     *
     * @return string|null
     */
    public function getManufacturerCode()
    {
        return $this->container['manufacturerCode'];
    }

    /**
     * Sets manufacturerCode
     *
     * @param string|null $manufacturerCode Manufacturer code associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setManufacturerCode($manufacturerCode)
    {
        $this->container['manufacturerCode'] = $manufacturerCode;

        return $this;
    }

    /**
     * Gets manufacturerCodeParent
     *
     * @return string|null
     */
    public function getManufacturerCodeParent()
    {
        return $this->container['manufacturerCodeParent'];
    }

    /**
     * Sets manufacturerCodeParent
     *
     * @param string|null $manufacturerCodeParent Parent vendor code of the manufacturer code.
     *
     * @return self
     */
    public function setManufacturerCodeParent($manufacturerCodeParent)
    {
        $this->container['manufacturerCodeParent'] = $manufacturerCodeParent;

        return $this;
    }

    /**
     * Gets productGroup
     *
     * @return string|null
     */
    public function getProductGroup()
    {
        return $this->container['productGroup'];
    }

    /**
     * Sets productGroup
     *
     * @param string|null $productGroup Product group associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setProductGroup($productGroup)
    {
        $this->container['productGroup'] = $productGroup;

        return $this;
    }

    /**
     * Gets replenishmentCategory
     *
     * @return string|null
     */
    public function getReplenishmentCategory()
    {
        return $this->container['replenishmentCategory'];
    }

    /**
     * Sets replenishmentCategory
     *
     * @param string|null $replenishmentCategory Replenishment category associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setReplenishmentCategory($replenishmentCategory)
    {
        $allowedValues = $this->getReplenishmentCategoryAllowableValues();
        if (!is_null($replenishmentCategory) && !in_array($replenishmentCategory, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'replenishmentCategory', must be one of '%s'",
                    $replenishmentCategory,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['replenishmentCategory'] = $replenishmentCategory;

        return $this;
    }

    /**
     * Gets subcategoryCode
     *
     * @return string|null
     */
    public function getSubcategoryCode()
    {
        return $this->container['subcategoryCode'];
    }

    /**
     * Sets subcategoryCode
     *
     * @param string|null $subcategoryCode Product subcategory associated with an Amazon catalog item.
     *
     * @return self
     */
    public function setSubcategoryCode($subcategoryCode)
    {
        $this->container['subcategoryCode'] = $subcategoryCode;

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


