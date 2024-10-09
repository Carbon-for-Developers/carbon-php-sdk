<?php
/**
 * CommentsOrderBy
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
 * CommentsOrderBy Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class CommentsOrderBy
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'created';

    public const UPDATED = 'updated';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::UPDATED
        ];
    }
}


