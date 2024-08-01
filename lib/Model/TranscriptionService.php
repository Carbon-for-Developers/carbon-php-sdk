<?php
/**
 * TranscriptionService
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
 * TranscriptionService Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class TranscriptionService
{
    /**
     * Possible values of this enum
     */
    public const ASSEMBLYAI = 'assemblyai';

    public const DEEPGRAM = 'deepgram';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSEMBLYAI,
            self::DEEPGRAM
        ];
    }
}

