<?php
/**
 * ServiceJob
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ServicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ServicesApi\Model;

use \Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ServiceJob Class Doc Comment
 *
 * @category Class
 * @description The job details of a service.
 * @package  Webcom\Amazon\Rest\ServicesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ServiceJob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServiceJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'createTime' => '\DateTime',
        'serviceJobId' => 'string',
        'serviceJobStatus' => 'string',
        'scopeOfWork' => '\Webcom\Amazon\Rest\ServicesApi\Model\ScopeOfWork',
        'seller' => '\Webcom\Amazon\Rest\ServicesApi\Model\Seller',
        'serviceJobProvider' => '\Webcom\Amazon\Rest\ServicesApi\Model\ServiceJobProvider',
        'preferredAppointmentTimes' => '\Webcom\Amazon\Rest\ServicesApi\Model\AppointmentTime[]',
        'appointments' => '\Webcom\Amazon\Rest\ServicesApi\Model\Appointment[]',
        'serviceOrderId' => 'string',
        'marketplaceId' => 'string',
        'buyer' => '\Webcom\Amazon\Rest\ServicesApi\Model\Buyer',
        'associatedItems' => '\Webcom\Amazon\Rest\ServicesApi\Model\AssociatedItem[]',
        'serviceLocation' => '\Webcom\Amazon\Rest\ServicesApi\Model\ServiceLocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'createTime' => 'date-time',
        'serviceJobId' => null,
        'serviceJobStatus' => null,
        'scopeOfWork' => null,
        'seller' => null,
        'serviceJobProvider' => null,
        'preferredAppointmentTimes' => null,
        'appointments' => null,
        'serviceOrderId' => null,
        'marketplaceId' => null,
        'buyer' => null,
        'associatedItems' => null,
        'serviceLocation' => null
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
        'createTime' => 'createTime',
        'serviceJobId' => 'serviceJobId',
        'serviceJobStatus' => 'serviceJobStatus',
        'scopeOfWork' => 'scopeOfWork',
        'seller' => 'seller',
        'serviceJobProvider' => 'serviceJobProvider',
        'preferredAppointmentTimes' => 'preferredAppointmentTimes',
        'appointments' => 'appointments',
        'serviceOrderId' => 'serviceOrderId',
        'marketplaceId' => 'marketplaceId',
        'buyer' => 'buyer',
        'associatedItems' => 'associatedItems',
        'serviceLocation' => 'serviceLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createTime' => 'setCreateTime',
        'serviceJobId' => 'setServiceJobId',
        'serviceJobStatus' => 'setServiceJobStatus',
        'scopeOfWork' => 'setScopeOfWork',
        'seller' => 'setSeller',
        'serviceJobProvider' => 'setServiceJobProvider',
        'preferredAppointmentTimes' => 'setPreferredAppointmentTimes',
        'appointments' => 'setAppointments',
        'serviceOrderId' => 'setServiceOrderId',
        'marketplaceId' => 'setMarketplaceId',
        'buyer' => 'setBuyer',
        'associatedItems' => 'setAssociatedItems',
        'serviceLocation' => 'setServiceLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createTime' => 'getCreateTime',
        'serviceJobId' => 'getServiceJobId',
        'serviceJobStatus' => 'getServiceJobStatus',
        'scopeOfWork' => 'getScopeOfWork',
        'seller' => 'getSeller',
        'serviceJobProvider' => 'getServiceJobProvider',
        'preferredAppointmentTimes' => 'getPreferredAppointmentTimes',
        'appointments' => 'getAppointments',
        'serviceOrderId' => 'getServiceOrderId',
        'marketplaceId' => 'getMarketplaceId',
        'buyer' => 'getBuyer',
        'associatedItems' => 'getAssociatedItems',
        'serviceLocation' => 'getServiceLocation'
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

    const SERVICE_JOB_STATUS_NOT_SERVICED = 'NOT_SERVICED';
    const SERVICE_JOB_STATUS_CANCELLED = 'CANCELLED';
    const SERVICE_JOB_STATUS_COMPLETED = 'COMPLETED';
    const SERVICE_JOB_STATUS_PENDING_SCHEDULE = 'PENDING_SCHEDULE';
    const SERVICE_JOB_STATUS_NOT_FULFILLABLE = 'NOT_FULFILLABLE';
    const SERVICE_JOB_STATUS_HOLD = 'HOLD';
    const SERVICE_JOB_STATUS_PAYMENT_DECLINED = 'PAYMENT_DECLINED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceJobStatusAllowableValues()
    {
        return [
            self::SERVICE_JOB_STATUS_NOT_SERVICED,
            self::SERVICE_JOB_STATUS_CANCELLED,
            self::SERVICE_JOB_STATUS_COMPLETED,
            self::SERVICE_JOB_STATUS_PENDING_SCHEDULE,
            self::SERVICE_JOB_STATUS_NOT_FULFILLABLE,
            self::SERVICE_JOB_STATUS_HOLD,
            self::SERVICE_JOB_STATUS_PAYMENT_DECLINED,
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
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['serviceJobId'] = $data['serviceJobId'] ?? null;
        $this->container['serviceJobStatus'] = $data['serviceJobStatus'] ?? null;
        $this->container['scopeOfWork'] = $data['scopeOfWork'] ?? null;
        $this->container['seller'] = $data['seller'] ?? null;
        $this->container['serviceJobProvider'] = $data['serviceJobProvider'] ?? null;
        $this->container['preferredAppointmentTimes'] = $data['preferredAppointmentTimes'] ?? null;
        $this->container['appointments'] = $data['appointments'] ?? null;
        $this->container['serviceOrderId'] = $data['serviceOrderId'] ?? null;
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['associatedItems'] = $data['associatedItems'] ?? null;
        $this->container['serviceLocation'] = $data['serviceLocation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['serviceJobId']) && (mb_strlen($this->container['serviceJobId']) > 100)) {
            $invalidProperties[] = "invalid value for 'serviceJobId', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['serviceJobId']) && (mb_strlen($this->container['serviceJobId']) < 1)) {
            $invalidProperties[] = "invalid value for 'serviceJobId', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($this->container['serviceJobStatus']) && !in_array($this->container['serviceJobStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'serviceJobStatus', must be one of '%s'",
                $this->container['serviceJobStatus'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['serviceOrderId']) && (mb_strlen($this->container['serviceOrderId']) > 20)) {
            $invalidProperties[] = "invalid value for 'serviceOrderId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['serviceOrderId']) && (mb_strlen($this->container['serviceOrderId']) < 5)) {
            $invalidProperties[] = "invalid value for 'serviceOrderId', the character length must be bigger than or equal to 5.";
        }

        if (!is_null($this->container['marketplaceId']) && !preg_match("/^[A-Z0-9]*$/", $this->container['marketplaceId'])) {
            $invalidProperties[] = "invalid value for 'marketplaceId', must be conform to the pattern /^[A-Z0-9]*$/.";
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
     * Gets createTime
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param \DateTime|null $createTime The date and time of the creation of the job, in ISO 8601 format.
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets serviceJobId
     *
     * @return string|null
     */
    public function getServiceJobId()
    {
        return $this->container['serviceJobId'];
    }

    /**
     * Sets serviceJobId
     *
     * @param string|null $serviceJobId Amazon identifier for the service job.
     *
     * @return self
     */
    public function setServiceJobId($serviceJobId)
    {
        if (!is_null($serviceJobId) && (mb_strlen($serviceJobId) > 100)) {
            throw new \InvalidArgumentException('invalid length for $serviceJobId when calling ServiceJob., must be smaller than or equal to 100.');
        }
        if (!is_null($serviceJobId) && (mb_strlen($serviceJobId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $serviceJobId when calling ServiceJob., must be bigger than or equal to 1.');
        }

        $this->container['serviceJobId'] = $serviceJobId;

        return $this;
    }

    /**
     * Gets serviceJobStatus
     *
     * @return string|null
     */
    public function getServiceJobStatus()
    {
        return $this->container['serviceJobStatus'];
    }

    /**
     * Sets serviceJobStatus
     *
     * @param string|null $serviceJobStatus The status of the service job.
     *
     * @return self
     */
    public function setServiceJobStatus($serviceJobStatus)
    {
        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($serviceJobStatus) && !in_array($serviceJobStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'serviceJobStatus', must be one of '%s'",
                    $serviceJobStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['serviceJobStatus'] = $serviceJobStatus;

        return $this;
    }

    /**
     * Gets scopeOfWork
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\ScopeOfWork|null
     */
    public function getScopeOfWork()
    {
        return $this->container['scopeOfWork'];
    }

    /**
     * Sets scopeOfWork
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\ScopeOfWork|null $scopeOfWork scopeOfWork
     *
     * @return self
     */
    public function setScopeOfWork($scopeOfWork)
    {
        $this->container['scopeOfWork'] = $scopeOfWork;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\Seller|null
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\Seller|null $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets serviceJobProvider
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\ServiceJobProvider|null
     */
    public function getServiceJobProvider()
    {
        return $this->container['serviceJobProvider'];
    }

    /**
     * Sets serviceJobProvider
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\ServiceJobProvider|null $serviceJobProvider serviceJobProvider
     *
     * @return self
     */
    public function setServiceJobProvider($serviceJobProvider)
    {
        $this->container['serviceJobProvider'] = $serviceJobProvider;

        return $this;
    }

    /**
     * Gets preferredAppointmentTimes
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\AppointmentTime[]|null
     */
    public function getPreferredAppointmentTimes()
    {
        return $this->container['preferredAppointmentTimes'];
    }

    /**
     * Sets preferredAppointmentTimes
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\AppointmentTime[]|null $preferredAppointmentTimes A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     *
     * @return self
     */
    public function setPreferredAppointmentTimes($preferredAppointmentTimes)
    {
        $this->container['preferredAppointmentTimes'] = $preferredAppointmentTimes;

        return $this;
    }

    /**
     * Gets appointments
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\Appointment[]|null
     */
    public function getAppointments()
    {
        return $this->container['appointments'];
    }

    /**
     * Sets appointments
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\Appointment[]|null $appointments A list of appointments.
     *
     * @return self
     */
    public function setAppointments($appointments)
    {
        $this->container['appointments'] = $appointments;

        return $this;
    }

    /**
     * Gets serviceOrderId
     *
     * @return string|null
     */
    public function getServiceOrderId()
    {
        return $this->container['serviceOrderId'];
    }

    /**
     * Sets serviceOrderId
     *
     * @param string|null $serviceOrderId The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @return self
     */
    public function setServiceOrderId($serviceOrderId)
    {
        if (!is_null($serviceOrderId) && (mb_strlen($serviceOrderId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $serviceOrderId when calling ServiceJob., must be smaller than or equal to 20.');
        }
        if (!is_null($serviceOrderId) && (mb_strlen($serviceOrderId) < 5)) {
            throw new \InvalidArgumentException('invalid length for $serviceOrderId when calling ServiceJob., must be bigger than or equal to 5.');
        }

        $this->container['serviceOrderId'] = $serviceOrderId;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {

        if (!is_null($marketplaceId) && (!preg_match("/^[A-Z0-9]*$/", $marketplaceId))) {
            throw new \InvalidArgumentException("invalid value for $marketplaceId when calling ServiceJob., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\Buyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets associatedItems
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\AssociatedItem[]|null
     */
    public function getAssociatedItems()
    {
        return $this->container['associatedItems'];
    }

    /**
     * Sets associatedItems
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\AssociatedItem[]|null $associatedItems A list of items associated with the service job.
     *
     * @return self
     */
    public function setAssociatedItems($associatedItems)
    {
        $this->container['associatedItems'] = $associatedItems;

        return $this;
    }

    /**
     * Gets serviceLocation
     *
     * @return \Webcom\Amazon\Rest\ServicesApi\Model\ServiceLocation|null
     */
    public function getServiceLocation()
    {
        return $this->container['serviceLocation'];
    }

    /**
     * Sets serviceLocation
     *
     * @param \Webcom\Amazon\Rest\ServicesApi\Model\ServiceLocation|null $serviceLocation serviceLocation
     *
     * @return self
     */
    public function setServiceLocation($serviceLocation)
    {
        $this->container['serviceLocation'] = $serviceLocation;

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


