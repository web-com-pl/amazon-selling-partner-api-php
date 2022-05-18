<?php
/**
 * DebtRecoveryEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApi
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

namespace Webcom\Amazon\Rest\FinancesApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * DebtRecoveryEvent Class Doc Comment
 *
 * @category Class
 * @description A debt payment or debt adjustment.
 * @package  Webcom\Amazon\Rest\FinancesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DebtRecoveryEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'debtRecoveryType' => 'string',
        'recoveryAmount' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'overPaymentCredit' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'debtRecoveryItemList' => '\Webcom\Amazon\Rest\FinancesApi\Model\DebtRecoveryItem[]',
        'chargeInstrumentList' => '\Webcom\Amazon\Rest\FinancesApi\Model\ChargeInstrument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'debtRecoveryType' => null,
        'recoveryAmount' => null,
        'overPaymentCredit' => null,
        'debtRecoveryItemList' => null,
        'chargeInstrumentList' => null
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
        'debtRecoveryType' => 'DebtRecoveryType',
        'recoveryAmount' => 'RecoveryAmount',
        'overPaymentCredit' => 'OverPaymentCredit',
        'debtRecoveryItemList' => 'DebtRecoveryItemList',
        'chargeInstrumentList' => 'ChargeInstrumentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debtRecoveryType' => 'setDebtRecoveryType',
        'recoveryAmount' => 'setRecoveryAmount',
        'overPaymentCredit' => 'setOverPaymentCredit',
        'debtRecoveryItemList' => 'setDebtRecoveryItemList',
        'chargeInstrumentList' => 'setChargeInstrumentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debtRecoveryType' => 'getDebtRecoveryType',
        'recoveryAmount' => 'getRecoveryAmount',
        'overPaymentCredit' => 'getOverPaymentCredit',
        'debtRecoveryItemList' => 'getDebtRecoveryItemList',
        'chargeInstrumentList' => 'getChargeInstrumentList'
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
        $this->container['debtRecoveryType'] = $data['debtRecoveryType'] ?? null;
        $this->container['recoveryAmount'] = $data['recoveryAmount'] ?? null;
        $this->container['overPaymentCredit'] = $data['overPaymentCredit'] ?? null;
        $this->container['debtRecoveryItemList'] = $data['debtRecoveryItemList'] ?? null;
        $this->container['chargeInstrumentList'] = $data['chargeInstrumentList'] ?? null;
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
     * Gets debtRecoveryType
     *
     * @return string|null
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debtRecoveryType'];
    }

    /**
     * Sets debtRecoveryType
     *
     * @param string|null $debtRecoveryType The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment
     *
     * @return self
     */
    public function setDebtRecoveryType($debtRecoveryType)
    {
        $this->container['debtRecoveryType'] = $debtRecoveryType;

        return $this;
    }

    /**
     * Gets recoveryAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getRecoveryAmount()
    {
        return $this->container['recoveryAmount'];
    }

    /**
     * Sets recoveryAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $recoveryAmount recoveryAmount
     *
     * @return self
     */
    public function setRecoveryAmount($recoveryAmount)
    {
        $this->container['recoveryAmount'] = $recoveryAmount;

        return $this;
    }

    /**
     * Gets overPaymentCredit
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getOverPaymentCredit()
    {
        return $this->container['overPaymentCredit'];
    }

    /**
     * Sets overPaymentCredit
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $overPaymentCredit overPaymentCredit
     *
     * @return self
     */
    public function setOverPaymentCredit($overPaymentCredit)
    {
        $this->container['overPaymentCredit'] = $overPaymentCredit;

        return $this;
    }

    /**
     * Gets debtRecoveryItemList
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\DebtRecoveryItem[]|null
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debtRecoveryItemList'];
    }

    /**
     * Sets debtRecoveryItemList
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\DebtRecoveryItem[]|null $debtRecoveryItemList A list of debt recovery item information.
     *
     * @return self
     */
    public function setDebtRecoveryItemList($debtRecoveryItemList)
    {
        $this->container['debtRecoveryItemList'] = $debtRecoveryItemList;

        return $this;
    }

    /**
     * Gets chargeInstrumentList
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\ChargeInstrument[]|null
     */
    public function getChargeInstrumentList()
    {
        return $this->container['chargeInstrumentList'];
    }

    /**
     * Sets chargeInstrumentList
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\ChargeInstrument[]|null $chargeInstrumentList A list of payment instruments.
     *
     * @return self
     */
    public function setChargeInstrumentList($chargeInstrumentList)
    {
        $this->container['chargeInstrumentList'] = $chargeInstrumentList;

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


