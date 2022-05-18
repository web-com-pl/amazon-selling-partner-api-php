<?php
/**
 * AsinMetadata
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\AplusContentApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * AsinMetadata Class Doc Comment
 *
 * @category Class
 * @description The A+ Content ASIN with additional metadata for content management. If you don&#39;t include the &#x60;includedDataSet&#x60; parameter in a call to the listContentDocumentAsinRelations operation, the related ASINs are returned without metadata.
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AsinMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AsinMetadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'badgeSet' => '\Webcom\Amazon\Rest\AplusContentApi\Model\AsinBadge[]',
        'parent' => 'string',
        'title' => 'string',
        'imageUrl' => 'string',
        'contentReferenceKeySet' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'badgeSet' => null,
        'parent' => null,
        'title' => null,
        'imageUrl' => null,
        'contentReferenceKeySet' => null
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
        'asin' => 'asin',
        'badgeSet' => 'badgeSet',
        'parent' => 'parent',
        'title' => 'title',
        'imageUrl' => 'imageUrl',
        'contentReferenceKeySet' => 'contentReferenceKeySet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'badgeSet' => 'setBadgeSet',
        'parent' => 'setParent',
        'title' => 'setTitle',
        'imageUrl' => 'setImageUrl',
        'contentReferenceKeySet' => 'setContentReferenceKeySet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'badgeSet' => 'getBadgeSet',
        'parent' => 'getParent',
        'title' => 'getTitle',
        'imageUrl' => 'getImageUrl',
        'contentReferenceKeySet' => 'getContentReferenceKeySet'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['badgeSet'] = $data['badgeSet'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['imageUrl'] = $data['imageUrl'] ?? null;
        $this->container['contentReferenceKeySet'] = $data['contentReferenceKeySet'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asin'] === null) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if ((mb_strlen($this->container['asin']) < 10)) {
            $invalidProperties[] = "invalid value for 'asin', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['parent']) && (mb_strlen($this->container['parent']) < 10)) {
            $invalidProperties[] = "invalid value for 'parent', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['imageUrl']) && (mb_strlen($this->container['imageUrl']) < 1)) {
            $invalidProperties[] = "invalid value for 'imageUrl', the character length must be bigger than or equal to 1.";
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
     * Gets asin
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin)
    {

        if ((mb_strlen($asin) < 10)) {
            throw new \InvalidArgumentException('invalid length for $asin when calling AsinMetadata., must be bigger than or equal to 10.');
        }

        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets badgeSet
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\AsinBadge[]|null
     */
    public function getBadgeSet()
    {
        return $this->container['badgeSet'];
    }

    /**
     * Sets badgeSet
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\AsinBadge[]|null $badgeSet The set of ASIN badges.
     *
     * @return self
     */
    public function setBadgeSet($badgeSet)
    {
        $this->container['badgeSet'] = $badgeSet;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setParent($parent)
    {

        if (!is_null($parent) && (mb_strlen($parent) < 10)) {
            throw new \InvalidArgumentException('invalid length for $parent when calling AsinMetadata., must be bigger than or equal to 10.');
        }

        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title for the ASIN in the Amazon catalog.
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl The default image for the ASIN in the Amazon catalog.
     *
     * @return self
     */
    public function setImageUrl($imageUrl)
    {

        if (!is_null($imageUrl) && (mb_strlen($imageUrl) < 1)) {
            throw new \InvalidArgumentException('invalid length for $imageUrl when calling AsinMetadata., must be bigger than or equal to 1.');
        }

        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets contentReferenceKeySet
     *
     * @return string[]|null
     */
    public function getContentReferenceKeySet()
    {
        return $this->container['contentReferenceKeySet'];
    }

    /**
     * Sets contentReferenceKeySet
     *
     * @param string[]|null $contentReferenceKeySet A set of content reference keys.
     *
     * @return self
     */
    public function setContentReferenceKeySet($contentReferenceKeySet)
    {
        $this->container['contentReferenceKeySet'] = $contentReferenceKeySet;

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


