<?php
/**
 * OrderDirV2Nullable
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
 * OrderDirV2Nullable Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class OrderDirV2Nullable
{
    /**
     * Possible values of this enum
     */
    public const ASC = 'asc';

    public const DESC = 'desc';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASC,
            self::DESC
        ];
    }
}


