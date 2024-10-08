<?php
/**
 * EmbeddingStorageStatus
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
 * EmbeddingStorageStatus Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class EmbeddingStorageStatus
{
    /**
     * Possible values of this enum
     */
    public const HOT_STORAGE = 'HOT_STORAGE';

    public const HOT_TO_COLD = 'HOT_TO_COLD';

    public const COLD_STORAGE = 'COLD_STORAGE';

    public const COLD_TO_HOT = 'COLD_TO_HOT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOT_STORAGE,
            self::HOT_TO_COLD,
            self::COLD_STORAGE,
            self::COLD_TO_HOT
        ];
    }
}


