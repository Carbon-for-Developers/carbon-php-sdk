<?php
/**
 * ConfigurationKeys
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Carbon
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * Carbon
 *
 * Connect external data to LLMs, no matter the source.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Carbon\Model;
use \Carbon\ObjectSerializer;

/**
 * ConfigurationKeys Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class ConfigurationKeys
{
    /**
     * Possible values of this enum
     */
    public const SPARSE_VECTORS = 'sparse_vectors';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SPARSE_VECTORS
        ];
    }
}


