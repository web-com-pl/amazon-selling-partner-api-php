<?php
/**
 * Report
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ReportsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2021-06-30
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ReportsApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Report Class Doc Comment
 *
 * @category Class
 * @description Detailed information about the report.
 * @package  Webcom\Amazon\Rest\ReportsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Report implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceIds' => 'string[]',
        'reportId' => 'string',
        'reportType' => 'string',
        'dataStartTime' => '\DateTime',
        'dataEndTime' => '\DateTime',
        'reportScheduleId' => 'string',
        'createdTime' => '\DateTime',
        'processingStatus' => 'string',
        'processingStartTime' => '\DateTime',
        'processingEndTime' => '\DateTime',
        'reportDocumentId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceIds' => null,
        'reportId' => null,
        'reportType' => null,
        'dataStartTime' => 'date-time',
        'dataEndTime' => 'date-time',
        'reportScheduleId' => null,
        'createdTime' => 'date-time',
        'processingStatus' => null,
        'processingStartTime' => 'date-time',
        'processingEndTime' => 'date-time',
        'reportDocumentId' => null
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
        'marketplaceIds' => 'marketplaceIds',
        'reportId' => 'reportId',
        'reportType' => 'reportType',
        'dataStartTime' => 'dataStartTime',
        'dataEndTime' => 'dataEndTime',
        'reportScheduleId' => 'reportScheduleId',
        'createdTime' => 'createdTime',
        'processingStatus' => 'processingStatus',
        'processingStartTime' => 'processingStartTime',
        'processingEndTime' => 'processingEndTime',
        'reportDocumentId' => 'reportDocumentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceIds' => 'setMarketplaceIds',
        'reportId' => 'setReportId',
        'reportType' => 'setReportType',
        'dataStartTime' => 'setDataStartTime',
        'dataEndTime' => 'setDataEndTime',
        'reportScheduleId' => 'setReportScheduleId',
        'createdTime' => 'setCreatedTime',
        'processingStatus' => 'setProcessingStatus',
        'processingStartTime' => 'setProcessingStartTime',
        'processingEndTime' => 'setProcessingEndTime',
        'reportDocumentId' => 'setReportDocumentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceIds' => 'getMarketplaceIds',
        'reportId' => 'getReportId',
        'reportType' => 'getReportType',
        'dataStartTime' => 'getDataStartTime',
        'dataEndTime' => 'getDataEndTime',
        'reportScheduleId' => 'getReportScheduleId',
        'createdTime' => 'getCreatedTime',
        'processingStatus' => 'getProcessingStatus',
        'processingStartTime' => 'getProcessingStartTime',
        'processingEndTime' => 'getProcessingEndTime',
        'reportDocumentId' => 'getReportDocumentId'
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

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
    const PROCESSING_STATUS_DONE = 'DONE';
    const PROCESSING_STATUS_FATAL = 'FATAL';
    const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
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
        $this->container['marketplaceIds'] = $data['marketplaceIds'] ?? null;
        $this->container['reportId'] = $data['reportId'] ?? null;
        $this->container['reportType'] = $data['reportType'] ?? null;
        $this->container['dataStartTime'] = $data['dataStartTime'] ?? null;
        $this->container['dataEndTime'] = $data['dataEndTime'] ?? null;
        $this->container['reportScheduleId'] = $data['reportScheduleId'] ?? null;
        $this->container['createdTime'] = $data['createdTime'] ?? null;
        $this->container['processingStatus'] = $data['processingStatus'] ?? null;
        $this->container['processingStartTime'] = $data['processingStartTime'] ?? null;
        $this->container['processingEndTime'] = $data['processingEndTime'] ?? null;
        $this->container['reportDocumentId'] = $data['reportDocumentId'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reportId'] === null) {
            $invalidProperties[] = "'reportId' can't be null";
        }
        if ($this->container['reportType'] === null) {
            $invalidProperties[] = "'reportType' can't be null";
        }
        if ($this->container['createdTime'] === null) {
            $invalidProperties[] = "'createdTime' can't be null";
        }
        if ($this->container['processingStatus'] === null) {
            $invalidProperties[] = "'processingStatus' can't be null";
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processingStatus']) && !in_array($this->container['processingStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processingStatus', must be one of '%s'",
                $this->container['processingStatus'],
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
     * Gets marketplaceIds
     *
     * @return string[]|null
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds
     *
     * @param string[]|null $marketplaceIds A list of marketplace identifiers for the report.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplaceIds)
    {
        $this->container['marketplaceIds'] = $marketplaceIds;

        return $this;
    }

    /**
     * Gets reportId
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
     * Sets reportId
     *
     * @param string $reportId The identifier for the report. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;

        return $this;
    }

    /**
     * Gets reportType
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType
     *
     * @param string $reportType The report type.
     *
     * @return self
     */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;

        return $this;
    }

    /**
     * Gets dataStartTime
     *
     * @return \DateTime|null
     */
    public function getDataStartTime()
    {
        return $this->container['dataStartTime'];
    }

    /**
     * Sets dataStartTime
     *
     * @param \DateTime|null $dataStartTime The start of a date and time range used for selecting the data to report.
     *
     * @return self
     */
    public function setDataStartTime($dataStartTime)
    {
        $this->container['dataStartTime'] = $dataStartTime;

        return $this;
    }

    /**
     * Gets dataEndTime
     *
     * @return \DateTime|null
     */
    public function getDataEndTime()
    {
        return $this->container['dataEndTime'];
    }

    /**
     * Sets dataEndTime
     *
     * @param \DateTime|null $dataEndTime The end of a date and time range used for selecting the data to report.
     *
     * @return self
     */
    public function setDataEndTime($dataEndTime)
    {
        $this->container['dataEndTime'] = $dataEndTime;

        return $this;
    }

    /**
     * Gets reportScheduleId
     *
     * @return string|null
     */
    public function getReportScheduleId()
    {
        return $this->container['reportScheduleId'];
    }

    /**
     * Sets reportScheduleId
     *
     * @param string|null $reportScheduleId The identifier of the report schedule that created this report (if any). This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportScheduleId($reportScheduleId)
    {
        $this->container['reportScheduleId'] = $reportScheduleId;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param \DateTime $createdTime The date and time when the report was created.
     *
     * @return self
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets processingStatus
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processingStatus'];
    }

    /**
     * Sets processingStatus
     *
     * @param string $processingStatus The processing status of the report.
     *
     * @return self
     */
    public function setProcessingStatus($processingStatus)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($processingStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processingStatus', must be one of '%s'",
                    $processingStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processingStatus'] = $processingStatus;

        return $this;
    }

    /**
     * Gets processingStartTime
     *
     * @return \DateTime|null
     */
    public function getProcessingStartTime()
    {
        return $this->container['processingStartTime'];
    }

    /**
     * Sets processingStartTime
     *
     * @param \DateTime|null $processingStartTime The date and time when the report processing started, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingStartTime($processingStartTime)
    {
        $this->container['processingStartTime'] = $processingStartTime;

        return $this;
    }

    /**
     * Gets processingEndTime
     *
     * @return \DateTime|null
     */
    public function getProcessingEndTime()
    {
        return $this->container['processingEndTime'];
    }

    /**
     * Sets processingEndTime
     *
     * @param \DateTime|null $processingEndTime The date and time when the report processing completed, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingEndTime($processingEndTime)
    {
        $this->container['processingEndTime'] = $processingEndTime;

        return $this;
    }

    /**
     * Gets reportDocumentId
     *
     * @return string|null
     */
    public function getReportDocumentId()
    {
        return $this->container['reportDocumentId'];
    }

    /**
     * Sets reportDocumentId
     *
     * @param string|null $reportDocumentId The identifier for the report document. Pass this into the getReportDocument operation to get the information you will need to retrieve the report document's contents.
     *
     * @return self
     */
    public function setReportDocumentId($reportDocumentId)
    {
        $this->container['reportDocumentId'] = $reportDocumentId;

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


