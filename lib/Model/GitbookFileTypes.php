<?php
/**
 * GitbookFileTypes
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
 * GitbookFileTypes Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class GitbookFileTypes
{
    /**
     * Possible values of this enum
     */
    public const SPACE = 'SPACE';

    public const SHEET = 'SHEET';

    public const GROUP = 'GROUP';

    public const LINK = 'LINK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SPACE,
            self::SHEET,
            self::GROUP,
            self::LINK
        ];
    }
}


