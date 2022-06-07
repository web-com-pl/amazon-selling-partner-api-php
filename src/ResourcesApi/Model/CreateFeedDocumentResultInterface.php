<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2021 Apilo.com
 */

namespace Webcom\Amazon\Rest\ResourcesApi\Model;

/**
 * CreateFeedDocumentResult Class Doc Comment
 *
 * @category Class
 * @description Information required to encrypt and upload a feed document&#39;s contents.
 * @package  Webcom\Amazon\Rest\ResourcesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
interface CreateFeedDocumentResultInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid();

    /**
     * Gets feedDocumentId
     *
     * @return string
     */
    public function getFeedDocumentId();

    /**
     * Sets feedDocumentId
     *
     * @param string $feedDocumentId The identifier of the feed document.
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20200904\Model\CreateFeedDocumentResult20200904
     */
    public function setFeedDocumentId($feedDocumentId);

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl();

    /**
     * Sets url
     *
     * @param string $url The presigned URL for uploading the feed contents. This URL expires after 5 minutes.
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20200904\Model\CreateFeedDocumentResult20200904
     */
    public function setUrl($url);

    /**
     * Gets encryptionDetails
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocumentEncryptionDetails20200904
     */
    public function getEncryptionDetails();

    /**
     * Sets encryptionDetails
     *
     * @param \Webcom\Amazon\Rest\FeedsApi20200904\Model\FeedDocumentEncryptionDetails20200904 $encryptionDetails encryptionDetails
     *
     * @return \Webcom\Amazon\Rest\FeedsApi20200904\Model\CreateFeedDocumentResult20200904
     */
    public function setEncryptionDetails($encryptionDetails);

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset);

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset);

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value);

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset);

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize();

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue();
}
