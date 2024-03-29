<?php
/**
 * ColorType20201101
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\AplusContentApi20201101
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

namespace Webcom\Amazon\Rest\AplusContentApi20201101\Model;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ColorType20201101 Class Doc Comment
 *
 * @category Class
 * @description The relative color scheme of content.
 * @package  Webcom\Amazon\Rest\AplusContentApi20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ColorType20201101
{
    /**
     * Possible values of this enum
     */
    const DARK = 'DARK';
    const LIGHT = 'LIGHT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DARK,
            self::LIGHT,
        ];
    }
}


