<?php
/**
 * Address
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\OrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
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

namespace Webcom\Amazon\Rest\OrdersApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The shipping address for the order.
 * @package  Webcom\Amazon\Rest\OrdersApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressLine3' => 'string',
        'city' => 'string',
        'county' => 'string',
        'district' => 'string',
        'stateOrRegion' => 'string',
        'municipality' => 'string',
        'postalCode' => 'string',
        'countryCode' => 'string',
        'phone' => 'string',
        'addressType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressLine3' => null,
        'city' => null,
        'county' => null,
        'district' => null,
        'stateOrRegion' => null,
        'municipality' => null,
        'postalCode' => null,
        'countryCode' => null,
        'phone' => null,
        'addressType' => null
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
        'name' => 'Name',
        'addressLine1' => 'AddressLine1',
        'addressLine2' => 'AddressLine2',
        'addressLine3' => 'AddressLine3',
        'city' => 'City',
        'county' => 'County',
        'district' => 'District',
        'stateOrRegion' => 'StateOrRegion',
        'municipality' => 'Municipality',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone',
        'addressType' => 'AddressType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressLine3' => 'setAddressLine3',
        'city' => 'setCity',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'stateOrRegion' => 'setStateOrRegion',
        'municipality' => 'setMunicipality',
        'postalCode' => 'setPostalCode',
        'countryCode' => 'setCountryCode',
        'phone' => 'setPhone',
        'addressType' => 'setAddressType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressLine3' => 'getAddressLine3',
        'city' => 'getCity',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'stateOrRegion' => 'getStateOrRegion',
        'municipality' => 'getMunicipality',
        'postalCode' => 'getPostalCode',
        'countryCode' => 'getCountryCode',
        'phone' => 'getPhone',
        'addressType' => 'getAddressType'
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

    const ADDRESS_TYPE_RESIDENTIAL = 'Residential';
    const ADDRESS_TYPE_COMMERCIAL = 'Commercial';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_RESIDENTIAL,
            self::ADDRESS_TYPE_COMMERCIAL,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['addressLine1'] = $data['addressLine1'] ?? null;
        $this->container['addressLine2'] = $data['addressLine2'] ?? null;
        $this->container['addressLine3'] = $data['addressLine3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['stateOrRegion'] = $data['stateOrRegion'] ?? null;
        $this->container['municipality'] = $data['municipality'] ?? null;
        $this->container['postalCode'] = $data['postalCode'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['addressType'] = $data['addressType'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'addressType', must be one of '%s'",
                $this->container['addressType'],
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 The street address.
     *
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 Additional street address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string|null $addressLine3 Additional street address information, if required.
     *
     * @return self
     */
    public function setAddressLine3($addressLine3)
    {
        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county The county.
     *
     * @return self
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district The district.
     *
     * @return self
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets stateOrRegion
     *
     * @return string|null
     */
    public function getStateOrRegion()
    {
        return $this->container['stateOrRegion'];
    }

    /**
     * Sets stateOrRegion
     *
     * @param string|null $stateOrRegion The state or region.
     *
     * @return self
     */
    public function setStateOrRegion($stateOrRegion)
    {
        $this->container['stateOrRegion'] = $stateOrRegion;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param string|null $municipality The municipality.
     *
     * @return self
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode The postal code.
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number. Not returned for Fulfillment by Amazon (FBA) orders.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets addressType
     *
     * @return string|null
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param string|null $addressType The address type of the shipping address.
     *
     * @return self
     */
    public function setAddressType($addressType)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($addressType) && !in_array($addressType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'addressType', must be one of '%s'",
                    $addressType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addressType'] = $addressType;

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


