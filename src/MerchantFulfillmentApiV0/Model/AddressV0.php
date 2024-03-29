<?php
/**
 * AddressV0
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
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

namespace Webcom\Amazon\Rest\MerchantFulfillmentApiV0\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * AddressV0 Class Doc Comment
 *
 * @category Class
 * @description The postal address information.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApiV0
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AddressV0 implements ModelInterface, ArrayAccess, \JsonSerializable
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
        'districtOrCounty' => 'string',
        'email' => 'string',
        'city' => 'string',
        'stateOrProvinceCode' => 'string',
        'postalCode' => 'string',
        'countryCode' => 'string',
        'phone' => 'string'
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
        'districtOrCounty' => null,
        'email' => null,
        'city' => null,
        'stateOrProvinceCode' => null,
        'postalCode' => null,
        'countryCode' => null,
        'phone' => null
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
        'districtOrCounty' => 'DistrictOrCounty',
        'email' => 'Email',
        'city' => 'City',
        'stateOrProvinceCode' => 'StateOrProvinceCode',
        'postalCode' => 'PostalCode',
        'countryCode' => 'CountryCode',
        'phone' => 'Phone'
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
        'districtOrCounty' => 'setDistrictOrCounty',
        'email' => 'setEmail',
        'city' => 'setCity',
        'stateOrProvinceCode' => 'setStateOrProvinceCode',
        'postalCode' => 'setPostalCode',
        'countryCode' => 'setCountryCode',
        'phone' => 'setPhone'
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
        'districtOrCounty' => 'getDistrictOrCounty',
        'email' => 'getEmail',
        'city' => 'getCity',
        'stateOrProvinceCode' => 'getStateOrProvinceCode',
        'postalCode' => 'getPostalCode',
        'countryCode' => 'getCountryCode',
        'phone' => 'getPhone'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['addressLine1'] = $data['addressLine1'] ?? null;
        $this->container['addressLine2'] = $data['addressLine2'] ?? null;
        $this->container['addressLine3'] = $data['addressLine3'] ?? null;
        $this->container['districtOrCounty'] = $data['districtOrCounty'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['stateOrProvinceCode'] = $data['stateOrProvinceCode'] ?? null;
        $this->container['postalCode'] = $data['postalCode'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
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
        if ((mb_strlen($this->container['name']) > 30)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ((mb_strlen($this->container['addressLine1']) > 180)) {
            $invalidProperties[] = "invalid value for 'addressLine1', the character length must be smaller than or equal to 180.";
        }

        if (!is_null($this->container['addressLine2']) && (mb_strlen($this->container['addressLine2']) > 60)) {
            $invalidProperties[] = "invalid value for 'addressLine2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['addressLine3']) && (mb_strlen($this->container['addressLine3']) > 60)) {
            $invalidProperties[] = "invalid value for 'addressLine3', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 30)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['stateOrProvinceCode']) && (mb_strlen($this->container['stateOrProvinceCode']) > 30)) {
            $invalidProperties[] = "invalid value for 'stateOrProvinceCode', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ((mb_strlen($this->container['postalCode']) > 30)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ((mb_strlen($this->container['phone']) > 30)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 30.";
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
     * @param string $name The name of the addressee, or business name.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AddressV0., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 The street address information.
     *
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        if ((mb_strlen($addressLine1) > 180)) {
            throw new \InvalidArgumentException('invalid length for $addressLine1 when calling AddressV0., must be smaller than or equal to 180.');
        }

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
     * @param string|null $addressLine2 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        if (!is_null($addressLine2) && (mb_strlen($addressLine2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $addressLine2 when calling AddressV0., must be smaller than or equal to 60.');
        }

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
     * @param string|null $addressLine3 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine3($addressLine3)
    {
        if (!is_null($addressLine3) && (mb_strlen($addressLine3) > 60)) {
            throw new \InvalidArgumentException('invalid length for $addressLine3 when calling AddressV0., must be smaller than or equal to 60.');
        }

        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets districtOrCounty
     *
     * @return string|null
     */
    public function getDistrictOrCounty()
    {
        return $this->container['districtOrCounty'];
    }

    /**
     * Sets districtOrCounty
     *
     * @param string|null $districtOrCounty The district or county.
     *
     * @return self
     */
    public function setDistrictOrCounty($districtOrCounty)
    {
        $this->container['districtOrCounty'] = $districtOrCounty;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 30)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressV0., must be smaller than or equal to 30.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets stateOrProvinceCode
     *
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['stateOrProvinceCode'];
    }

    /**
     * Sets stateOrProvinceCode
     *
     * @param string|null $stateOrProvinceCode The state or province code. **Note.** Required in the Canada, US, and UK marketplaces. Also required for shipments originating from China.
     *
     * @return self
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        if (!is_null($stateOrProvinceCode) && (mb_strlen($stateOrProvinceCode) > 30)) {
            throw new \InvalidArgumentException('invalid length for $stateOrProvinceCode when calling AddressV0., must be smaller than or equal to 30.');
        }

        $this->container['stateOrProvinceCode'] = $stateOrProvinceCode;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode The zip code or postal code.
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        if ((mb_strlen($postalCode) > 30)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling AddressV0., must be smaller than or equal to 30.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The country code. A two-character country code, in ISO 3166-1 alpha-2 format.
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
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone The phone number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if ((mb_strlen($phone) > 30)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling AddressV0., must be smaller than or equal to 30.');
        }

        $this->container['phone'] = $phone;

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


