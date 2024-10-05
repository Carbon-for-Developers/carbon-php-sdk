<?php
/**
 * LeadsOrderBy
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
 * LeadsOrderBy Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class LeadsOrderBy
{
    /**
     * Possible values of this enum
     */
    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    public const NAME = 'name';

    public const LAST_ACTIVITY_AT = 'last_activity_at';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED_AT,
            self::UPDATED_AT,
            self::NAME,
            self::LAST_ACTIVITY_AT
        ];
    }
}

