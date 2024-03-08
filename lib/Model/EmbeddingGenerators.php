<?php
/**
 * EmbeddingGenerators
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
 * EmbeddingGenerators Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 */
class EmbeddingGenerators
{
    /**
     * Possible values of this enum
     */
    public const OPENAI = 'OPENAI';

    public const AZURE_OPENAI = 'AZURE_OPENAI';

    public const AZURE_ADA_LARGE_256 = 'AZURE_ADA_LARGE_256';

    public const AZURE_ADA_LARGE_1024 = 'AZURE_ADA_LARGE_1024';

    public const AZURE_ADA_LARGE_3072 = 'AZURE_ADA_LARGE_3072';

    public const AZURE_ADA_SMALL_512 = 'AZURE_ADA_SMALL_512';

    public const AZURE_ADA_SMALL_1536 = 'AZURE_ADA_SMALL_1536';

    public const COHERE_MULTILINGUAL_V3 = 'COHERE_MULTILINGUAL_V3';

    public const VERTEX_MULTIMODAL = 'VERTEX_MULTIMODAL';

    public const OPENAI_ADA_LARGE_256 = 'OPENAI_ADA_LARGE_256';

    public const OPENAI_ADA_LARGE_1024 = 'OPENAI_ADA_LARGE_1024';

    public const OPENAI_ADA_LARGE_3072 = 'OPENAI_ADA_LARGE_3072';

    public const OPENAI_ADA_SMALL_512 = 'OPENAI_ADA_SMALL_512';

    public const OPENAI_ADA_SMALL_1536 = 'OPENAI_ADA_SMALL_1536';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPENAI,
            self::AZURE_OPENAI,
            self::AZURE_ADA_LARGE_256,
            self::AZURE_ADA_LARGE_1024,
            self::AZURE_ADA_LARGE_3072,
            self::AZURE_ADA_SMALL_512,
            self::AZURE_ADA_SMALL_1536,
            self::COHERE_MULTILINGUAL_V3,
            self::VERTEX_MULTIMODAL,
            self::OPENAI_ADA_LARGE_256,
            self::OPENAI_ADA_LARGE_1024,
            self::OPENAI_ADA_LARGE_3072,
            self::OPENAI_ADA_SMALL_512,
            self::OPENAI_ADA_SMALL_1536
        ];
    }
}


