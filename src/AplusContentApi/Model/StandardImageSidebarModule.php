<?php
/**
 * StandardImageSidebarModule
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
 * StandardImageSidebarModule Class Doc Comment
 *
 * @category Class
 * @description Two images, two paragraphs, and two bulleted lists. One image is smaller and displayed in the sidebar.
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardImageSidebarModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardImageSidebarModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headline' => '\Webcom\Amazon\Rest\AplusContentApi\Model\TextComponent',
        'imageCaptionBlock' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageCaptionBlock',
        'descriptionTextBlock' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextBlock',
        'descriptionListBlock' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock',
        'sidebarImageTextBlock' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock',
        'sidebarListBlock' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'headline' => null,
        'imageCaptionBlock' => null,
        'descriptionTextBlock' => null,
        'descriptionListBlock' => null,
        'sidebarImageTextBlock' => null,
        'sidebarListBlock' => null
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
        'headline' => 'headline',
        'imageCaptionBlock' => 'imageCaptionBlock',
        'descriptionTextBlock' => 'descriptionTextBlock',
        'descriptionListBlock' => 'descriptionListBlock',
        'sidebarImageTextBlock' => 'sidebarImageTextBlock',
        'sidebarListBlock' => 'sidebarListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'imageCaptionBlock' => 'setImageCaptionBlock',
        'descriptionTextBlock' => 'setDescriptionTextBlock',
        'descriptionListBlock' => 'setDescriptionListBlock',
        'sidebarImageTextBlock' => 'setSidebarImageTextBlock',
        'sidebarListBlock' => 'setSidebarListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'imageCaptionBlock' => 'getImageCaptionBlock',
        'descriptionTextBlock' => 'getDescriptionTextBlock',
        'descriptionListBlock' => 'getDescriptionListBlock',
        'sidebarImageTextBlock' => 'getSidebarImageTextBlock',
        'sidebarListBlock' => 'getSidebarListBlock'
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
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['imageCaptionBlock'] = $data['imageCaptionBlock'] ?? null;
        $this->container['descriptionTextBlock'] = $data['descriptionTextBlock'] ?? null;
        $this->container['descriptionListBlock'] = $data['descriptionListBlock'] ?? null;
        $this->container['sidebarImageTextBlock'] = $data['sidebarImageTextBlock'] ?? null;
        $this->container['sidebarListBlock'] = $data['sidebarListBlock'] ?? null;
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
     * Gets headline
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\TextComponent|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets imageCaptionBlock
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageCaptionBlock|null
     */
    public function getImageCaptionBlock()
    {
        return $this->container['imageCaptionBlock'];
    }

    /**
     * Sets imageCaptionBlock
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageCaptionBlock|null $imageCaptionBlock imageCaptionBlock
     *
     * @return self
     */
    public function setImageCaptionBlock($imageCaptionBlock)
    {
        $this->container['imageCaptionBlock'] = $imageCaptionBlock;

        return $this;
    }

    /**
     * Gets descriptionTextBlock
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextBlock|null
     */
    public function getDescriptionTextBlock()
    {
        return $this->container['descriptionTextBlock'];
    }

    /**
     * Sets descriptionTextBlock
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextBlock|null $descriptionTextBlock descriptionTextBlock
     *
     * @return self
     */
    public function setDescriptionTextBlock($descriptionTextBlock)
    {
        $this->container['descriptionTextBlock'] = $descriptionTextBlock;

        return $this;
    }

    /**
     * Gets descriptionListBlock
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock|null
     */
    public function getDescriptionListBlock()
    {
        return $this->container['descriptionListBlock'];
    }

    /**
     * Sets descriptionListBlock
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock|null $descriptionListBlock descriptionListBlock
     *
     * @return self
     */
    public function setDescriptionListBlock($descriptionListBlock)
    {
        $this->container['descriptionListBlock'] = $descriptionListBlock;

        return $this;
    }

    /**
     * Gets sidebarImageTextBlock
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock|null
     */
    public function getSidebarImageTextBlock()
    {
        return $this->container['sidebarImageTextBlock'];
    }

    /**
     * Sets sidebarImageTextBlock
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock|null $sidebarImageTextBlock sidebarImageTextBlock
     *
     * @return self
     */
    public function setSidebarImageTextBlock($sidebarImageTextBlock)
    {
        $this->container['sidebarImageTextBlock'] = $sidebarImageTextBlock;

        return $this;
    }

    /**
     * Gets sidebarListBlock
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock|null
     */
    public function getSidebarListBlock()
    {
        return $this->container['sidebarListBlock'];
    }

    /**
     * Sets sidebarListBlock
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardTextListBlock|null $sidebarListBlock sidebarListBlock
     *
     * @return self
     */
    public function setSidebarListBlock($sidebarListBlock)
    {
        $this->container['sidebarListBlock'] = $sidebarListBlock;

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


