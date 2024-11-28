<?php
/**
 * ParsedTextFormatsNullable
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
 * ParsedTextFormatsNullable Class Doc Comment
 *
 * @category Class
 * @description The format in which the text content of the file should be parsed. Notion files are the only files         that support this feature. The default parsed text format is plain text.
 * @package  Carbon
 */
class ParsedTextFormatsNullable
{
    /**
     * Possible values of this enum
     */
    public const PLAIN_TEXT = 'PLAIN_TEXT';

    public const MARKDOWN = 'MARKDOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLAIN_TEXT,
            self::MARKDOWN
        ];
    }
}

