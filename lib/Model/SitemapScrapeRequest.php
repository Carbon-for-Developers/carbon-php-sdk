<?php
/**
 * SitemapScrapeRequest
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

use \ArrayAccess;
use \Carbon\ObjectSerializer;

/**
 * SitemapScrapeRequest Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class SitemapScrapeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SitemapScrapeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'array<string,\Carbon\Model\Tags1>',
        'url' => 'string',
        'max_pages_to_scrape' => 'int',
        'chunk_size' => 'int',
        'chunk_overlap' => 'int',
        'skip_embedding_generation' => 'bool',
        'enable_auto_sync' => 'bool',
        'generate_sparse_vectors' => 'bool',
        'prepend_filename_to_chunks' => 'bool',
        'html_tags_to_skip' => 'string[]',
        'css_classes_to_skip' => 'string[]',
        'css_selectors_to_skip' => 'string[]',
        'embedding_model' => '\Carbon\Model\EmbeddingGenerators',
        'url_paths_to_include' => 'string[]',
        'url_paths_to_exclude' => 'string[]',
        'urls_to_scrape' => 'string[]',
        'download_css_and_media' => 'bool',
        'generate_chunks_only' => 'bool',
        'store_file_only' => 'bool',
        'use_premium_proxies' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tags' => null,
        'url' => null,
        'max_pages_to_scrape' => null,
        'chunk_size' => null,
        'chunk_overlap' => null,
        'skip_embedding_generation' => null,
        'enable_auto_sync' => null,
        'generate_sparse_vectors' => null,
        'prepend_filename_to_chunks' => null,
        'html_tags_to_skip' => null,
        'css_classes_to_skip' => null,
        'css_selectors_to_skip' => null,
        'embedding_model' => null,
        'url_paths_to_include' => null,
        'url_paths_to_exclude' => null,
        'urls_to_scrape' => null,
        'download_css_and_media' => null,
        'generate_chunks_only' => null,
        'store_file_only' => null,
        'use_premium_proxies' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'url' => false,
		'max_pages_to_scrape' => true,
		'chunk_size' => true,
		'chunk_overlap' => true,
		'skip_embedding_generation' => true,
		'enable_auto_sync' => true,
		'generate_sparse_vectors' => true,
		'prepend_filename_to_chunks' => true,
		'html_tags_to_skip' => true,
		'css_classes_to_skip' => true,
		'css_selectors_to_skip' => true,
		'embedding_model' => false,
		'url_paths_to_include' => true,
		'url_paths_to_exclude' => true,
		'urls_to_scrape' => true,
		'download_css_and_media' => true,
		'generate_chunks_only' => false,
		'store_file_only' => false,
		'use_premium_proxies' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tags' => 'tags',
        'url' => 'url',
        'max_pages_to_scrape' => 'max_pages_to_scrape',
        'chunk_size' => 'chunk_size',
        'chunk_overlap' => 'chunk_overlap',
        'skip_embedding_generation' => 'skip_embedding_generation',
        'enable_auto_sync' => 'enable_auto_sync',
        'generate_sparse_vectors' => 'generate_sparse_vectors',
        'prepend_filename_to_chunks' => 'prepend_filename_to_chunks',
        'html_tags_to_skip' => 'html_tags_to_skip',
        'css_classes_to_skip' => 'css_classes_to_skip',
        'css_selectors_to_skip' => 'css_selectors_to_skip',
        'embedding_model' => 'embedding_model',
        'url_paths_to_include' => 'url_paths_to_include',
        'url_paths_to_exclude' => 'url_paths_to_exclude',
        'urls_to_scrape' => 'urls_to_scrape',
        'download_css_and_media' => 'download_css_and_media',
        'generate_chunks_only' => 'generate_chunks_only',
        'store_file_only' => 'store_file_only',
        'use_premium_proxies' => 'use_premium_proxies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'url' => 'setUrl',
        'max_pages_to_scrape' => 'setMaxPagesToScrape',
        'chunk_size' => 'setChunkSize',
        'chunk_overlap' => 'setChunkOverlap',
        'skip_embedding_generation' => 'setSkipEmbeddingGeneration',
        'enable_auto_sync' => 'setEnableAutoSync',
        'generate_sparse_vectors' => 'setGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'setPrependFilenameToChunks',
        'html_tags_to_skip' => 'setHtmlTagsToSkip',
        'css_classes_to_skip' => 'setCssClassesToSkip',
        'css_selectors_to_skip' => 'setCssSelectorsToSkip',
        'embedding_model' => 'setEmbeddingModel',
        'url_paths_to_include' => 'setUrlPathsToInclude',
        'url_paths_to_exclude' => 'setUrlPathsToExclude',
        'urls_to_scrape' => 'setUrlsToScrape',
        'download_css_and_media' => 'setDownloadCssAndMedia',
        'generate_chunks_only' => 'setGenerateChunksOnly',
        'store_file_only' => 'setStoreFileOnly',
        'use_premium_proxies' => 'setUsePremiumProxies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'url' => 'getUrl',
        'max_pages_to_scrape' => 'getMaxPagesToScrape',
        'chunk_size' => 'getChunkSize',
        'chunk_overlap' => 'getChunkOverlap',
        'skip_embedding_generation' => 'getSkipEmbeddingGeneration',
        'enable_auto_sync' => 'getEnableAutoSync',
        'generate_sparse_vectors' => 'getGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'getPrependFilenameToChunks',
        'html_tags_to_skip' => 'getHtmlTagsToSkip',
        'css_classes_to_skip' => 'getCssClassesToSkip',
        'css_selectors_to_skip' => 'getCssSelectorsToSkip',
        'embedding_model' => 'getEmbeddingModel',
        'url_paths_to_include' => 'getUrlPathsToInclude',
        'url_paths_to_exclude' => 'getUrlPathsToExclude',
        'urls_to_scrape' => 'getUrlsToScrape',
        'download_css_and_media' => 'getDownloadCssAndMedia',
        'generate_chunks_only' => 'getGenerateChunksOnly',
        'store_file_only' => 'getStoreFileOnly',
        'use_premium_proxies' => 'getUsePremiumProxies'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('max_pages_to_scrape', $data ?? [], null);
        $this->setIfExists('chunk_size', $data ?? [], 1500);
        $this->setIfExists('chunk_overlap', $data ?? [], 20);
        $this->setIfExists('skip_embedding_generation', $data ?? [], false);
        $this->setIfExists('enable_auto_sync', $data ?? [], false);
        $this->setIfExists('generate_sparse_vectors', $data ?? [], false);
        $this->setIfExists('prepend_filename_to_chunks', $data ?? [], false);
        $this->setIfExists('html_tags_to_skip', $data ?? [], null);
        $this->setIfExists('css_classes_to_skip', $data ?? [], null);
        $this->setIfExists('css_selectors_to_skip', $data ?? [], null);
        $this->setIfExists('embedding_model', $data ?? [], null);
        $this->setIfExists('url_paths_to_include', $data ?? [], null);
        $this->setIfExists('url_paths_to_exclude', $data ?? [], null);
        $this->setIfExists('urls_to_scrape', $data ?? [], null);
        $this->setIfExists('download_css_and_media', $data ?? [], false);
        $this->setIfExists('generate_chunks_only', $data ?? [], false);
        $this->setIfExists('store_file_only', $data ?? [], false);
        $this->setIfExists('use_premium_proxies', $data ?? [], false);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (!is_null($this->container['max_pages_to_scrape']) && ($this->container['max_pages_to_scrape'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_pages_to_scrape', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['url_paths_to_include']) && (count($this->container['url_paths_to_include']) > 10)) {
            $invalidProperties[] = "invalid value for 'url_paths_to_include', number of items must be less than or equal to 10.";
        }

        if (!is_null($this->container['url_paths_to_exclude']) && (count($this->container['url_paths_to_exclude']) > 10)) {
            $invalidProperties[] = "invalid value for 'url_paths_to_exclude', number of items must be less than or equal to 10.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets tags
     *
     * @return array<string,\Carbon\Model\Tags1>|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param array<string,\Carbon\Model\Tags1>|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {

        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets max_pages_to_scrape
     *
     * @return int|null
     */
    public function getMaxPagesToScrape()
    {
        return $this->container['max_pages_to_scrape'];
    }

    /**
     * Sets max_pages_to_scrape
     *
     * @param int|null $max_pages_to_scrape max_pages_to_scrape
     *
     * @return self
     */
    public function setMaxPagesToScrape($max_pages_to_scrape)
    {

        if (!is_null($max_pages_to_scrape) && ($max_pages_to_scrape < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_pages_to_scrape when calling SitemapScrapeRequest., must be bigger than or equal to 1.');
        }


        if (is_null($max_pages_to_scrape)) {
            array_push($this->openAPINullablesSetToNull, 'max_pages_to_scrape');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_pages_to_scrape', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_pages_to_scrape'] = $max_pages_to_scrape;

        return $this;
    }

    /**
     * Gets chunk_size
     *
     * @return int|null
     */
    public function getChunkSize()
    {
        return $this->container['chunk_size'];
    }

    /**
     * Sets chunk_size
     *
     * @param int|null $chunk_size chunk_size
     *
     * @return self
     */
    public function setChunkSize($chunk_size)
    {

        if (is_null($chunk_size)) {
            array_push($this->openAPINullablesSetToNull, 'chunk_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chunk_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['chunk_size'] = $chunk_size;

        return $this;
    }

    /**
     * Gets chunk_overlap
     *
     * @return int|null
     */
    public function getChunkOverlap()
    {
        return $this->container['chunk_overlap'];
    }

    /**
     * Sets chunk_overlap
     *
     * @param int|null $chunk_overlap chunk_overlap
     *
     * @return self
     */
    public function setChunkOverlap($chunk_overlap)
    {

        if (is_null($chunk_overlap)) {
            array_push($this->openAPINullablesSetToNull, 'chunk_overlap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chunk_overlap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['chunk_overlap'] = $chunk_overlap;

        return $this;
    }

    /**
     * Gets skip_embedding_generation
     *
     * @return bool|null
     */
    public function getSkipEmbeddingGeneration()
    {
        return $this->container['skip_embedding_generation'];
    }

    /**
     * Sets skip_embedding_generation
     *
     * @param bool|null $skip_embedding_generation skip_embedding_generation
     *
     * @return self
     */
    public function setSkipEmbeddingGeneration($skip_embedding_generation)
    {

        if (is_null($skip_embedding_generation)) {
            array_push($this->openAPINullablesSetToNull, 'skip_embedding_generation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skip_embedding_generation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['skip_embedding_generation'] = $skip_embedding_generation;

        return $this;
    }

    /**
     * Gets enable_auto_sync
     *
     * @return bool|null
     */
    public function getEnableAutoSync()
    {
        return $this->container['enable_auto_sync'];
    }

    /**
     * Sets enable_auto_sync
     *
     * @param bool|null $enable_auto_sync enable_auto_sync
     *
     * @return self
     */
    public function setEnableAutoSync($enable_auto_sync)
    {

        if (is_null($enable_auto_sync)) {
            array_push($this->openAPINullablesSetToNull, 'enable_auto_sync');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_auto_sync', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enable_auto_sync'] = $enable_auto_sync;

        return $this;
    }

    /**
     * Gets generate_sparse_vectors
     *
     * @return bool|null
     */
    public function getGenerateSparseVectors()
    {
        return $this->container['generate_sparse_vectors'];
    }

    /**
     * Sets generate_sparse_vectors
     *
     * @param bool|null $generate_sparse_vectors generate_sparse_vectors
     *
     * @return self
     */
    public function setGenerateSparseVectors($generate_sparse_vectors)
    {

        if (is_null($generate_sparse_vectors)) {
            array_push($this->openAPINullablesSetToNull, 'generate_sparse_vectors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('generate_sparse_vectors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['generate_sparse_vectors'] = $generate_sparse_vectors;

        return $this;
    }

    /**
     * Gets prepend_filename_to_chunks
     *
     * @return bool|null
     */
    public function getPrependFilenameToChunks()
    {
        return $this->container['prepend_filename_to_chunks'];
    }

    /**
     * Sets prepend_filename_to_chunks
     *
     * @param bool|null $prepend_filename_to_chunks prepend_filename_to_chunks
     *
     * @return self
     */
    public function setPrependFilenameToChunks($prepend_filename_to_chunks)
    {

        if (is_null($prepend_filename_to_chunks)) {
            array_push($this->openAPINullablesSetToNull, 'prepend_filename_to_chunks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prepend_filename_to_chunks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['prepend_filename_to_chunks'] = $prepend_filename_to_chunks;

        return $this;
    }

    /**
     * Gets html_tags_to_skip
     *
     * @return string[]|null
     */
    public function getHtmlTagsToSkip()
    {
        return $this->container['html_tags_to_skip'];
    }

    /**
     * Sets html_tags_to_skip
     *
     * @param string[]|null $html_tags_to_skip html_tags_to_skip
     *
     * @return self
     */
    public function setHtmlTagsToSkip($html_tags_to_skip)
    {

        if (is_null($html_tags_to_skip)) {
            array_push($this->openAPINullablesSetToNull, 'html_tags_to_skip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('html_tags_to_skip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['html_tags_to_skip'] = $html_tags_to_skip;

        return $this;
    }

    /**
     * Gets css_classes_to_skip
     *
     * @return string[]|null
     */
    public function getCssClassesToSkip()
    {
        return $this->container['css_classes_to_skip'];
    }

    /**
     * Sets css_classes_to_skip
     *
     * @param string[]|null $css_classes_to_skip css_classes_to_skip
     *
     * @return self
     */
    public function setCssClassesToSkip($css_classes_to_skip)
    {

        if (is_null($css_classes_to_skip)) {
            array_push($this->openAPINullablesSetToNull, 'css_classes_to_skip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('css_classes_to_skip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['css_classes_to_skip'] = $css_classes_to_skip;

        return $this;
    }

    /**
     * Gets css_selectors_to_skip
     *
     * @return string[]|null
     */
    public function getCssSelectorsToSkip()
    {
        return $this->container['css_selectors_to_skip'];
    }

    /**
     * Sets css_selectors_to_skip
     *
     * @param string[]|null $css_selectors_to_skip css_selectors_to_skip
     *
     * @return self
     */
    public function setCssSelectorsToSkip($css_selectors_to_skip)
    {

        if (is_null($css_selectors_to_skip)) {
            array_push($this->openAPINullablesSetToNull, 'css_selectors_to_skip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('css_selectors_to_skip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['css_selectors_to_skip'] = $css_selectors_to_skip;

        return $this;
    }

    /**
     * Gets embedding_model
     *
     * @return \Carbon\Model\EmbeddingGenerators|null
     */
    public function getEmbeddingModel()
    {
        return $this->container['embedding_model'];
    }

    /**
     * Sets embedding_model
     *
     * @param \Carbon\Model\EmbeddingGenerators|null $embedding_model embedding_model
     *
     * @return self
     */
    public function setEmbeddingModel($embedding_model)
    {

        if (is_null($embedding_model)) {
            throw new \InvalidArgumentException('non-nullable embedding_model cannot be null');
        }

        $this->container['embedding_model'] = $embedding_model;

        return $this;
    }

    /**
     * Gets url_paths_to_include
     *
     * @return string[]|null
     */
    public function getUrlPathsToInclude()
    {
        return $this->container['url_paths_to_include'];
    }

    /**
     * Sets url_paths_to_include
     *
     * @param string[]|null $url_paths_to_include URL subpaths or directories that you want to include. For example if you want to only include         URLs that start with /questions in stackoverflow.com, you will add /questions/ in this input
     *
     * @return self
     */
    public function setUrlPathsToInclude($url_paths_to_include)
    {

        if (!is_null($url_paths_to_include) && (count($url_paths_to_include) > 10)) {
            throw new \InvalidArgumentException('invalid value for $url_paths_to_include when calling SitemapScrapeRequest., number of items must be less than or equal to 10.');
        }

        if (is_null($url_paths_to_include)) {
            array_push($this->openAPINullablesSetToNull, 'url_paths_to_include');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_paths_to_include', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['url_paths_to_include'] = $url_paths_to_include;

        return $this;
    }

    /**
     * Gets url_paths_to_exclude
     *
     * @return string[]|null
     */
    public function getUrlPathsToExclude()
    {
        return $this->container['url_paths_to_exclude'];
    }

    /**
     * Sets url_paths_to_exclude
     *
     * @param string[]|null $url_paths_to_exclude URL subpaths or directories that you want to exclude. For example if you want to exclude         URLs that start with /questions in stackoverflow.com, you will add /questions/ in this input
     *
     * @return self
     */
    public function setUrlPathsToExclude($url_paths_to_exclude)
    {

        if (!is_null($url_paths_to_exclude) && (count($url_paths_to_exclude) > 10)) {
            throw new \InvalidArgumentException('invalid value for $url_paths_to_exclude when calling SitemapScrapeRequest., number of items must be less than or equal to 10.');
        }

        if (is_null($url_paths_to_exclude)) {
            array_push($this->openAPINullablesSetToNull, 'url_paths_to_exclude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_paths_to_exclude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['url_paths_to_exclude'] = $url_paths_to_exclude;

        return $this;
    }

    /**
     * Gets urls_to_scrape
     *
     * @return string[]|null
     */
    public function getUrlsToScrape()
    {
        return $this->container['urls_to_scrape'];
    }

    /**
     * Sets urls_to_scrape
     *
     * @param string[]|null $urls_to_scrape You can submit a subset of URLs from the sitemap that should be scraped. To get the list of URLs,           you can check out /process_sitemap endpoint. If left empty, all URLs from the sitemap will be scraped.
     *
     * @return self
     */
    public function setUrlsToScrape($urls_to_scrape)
    {

        if (is_null($urls_to_scrape)) {
            array_push($this->openAPINullablesSetToNull, 'urls_to_scrape');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('urls_to_scrape', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['urls_to_scrape'] = $urls_to_scrape;

        return $this;
    }

    /**
     * Gets download_css_and_media
     *
     * @return bool|null
     */
    public function getDownloadCssAndMedia()
    {
        return $this->container['download_css_and_media'];
    }

    /**
     * Sets download_css_and_media
     *
     * @param bool|null $download_css_and_media Whether the scraper should download css and media from the page (images, fonts, etc). Scrapes          might take longer to finish with this flag enabled, but the success rate is improved.
     *
     * @return self
     */
    public function setDownloadCssAndMedia($download_css_and_media)
    {

        if (is_null($download_css_and_media)) {
            array_push($this->openAPINullablesSetToNull, 'download_css_and_media');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('download_css_and_media', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['download_css_and_media'] = $download_css_and_media;

        return $this;
    }

    /**
     * Gets generate_chunks_only
     *
     * @return bool|null
     */
    public function getGenerateChunksOnly()
    {
        return $this->container['generate_chunks_only'];
    }

    /**
     * Sets generate_chunks_only
     *
     * @param bool|null $generate_chunks_only If this flag is enabled, the file will be chunked and stored with Carbon,           but no embeddings will be generated. This overrides the skip_embedding_generation flag.
     *
     * @return self
     */
    public function setGenerateChunksOnly($generate_chunks_only)
    {

        if (is_null($generate_chunks_only)) {
            throw new \InvalidArgumentException('non-nullable generate_chunks_only cannot be null');
        }

        $this->container['generate_chunks_only'] = $generate_chunks_only;

        return $this;
    }

    /**
     * Gets store_file_only
     *
     * @return bool|null
     */
    public function getStoreFileOnly()
    {
        return $this->container['store_file_only'];
    }

    /**
     * Sets store_file_only
     *
     * @param bool|null $store_file_only If this flag is enabled, the file will be stored with Carbon, but no processing will be done.
     *
     * @return self
     */
    public function setStoreFileOnly($store_file_only)
    {

        if (is_null($store_file_only)) {
            throw new \InvalidArgumentException('non-nullable store_file_only cannot be null');
        }

        $this->container['store_file_only'] = $store_file_only;

        return $this;
    }

    /**
     * Gets use_premium_proxies
     *
     * @return bool|null
     */
    public function getUsePremiumProxies()
    {
        return $this->container['use_premium_proxies'];
    }

    /**
     * Sets use_premium_proxies
     *
     * @param bool|null $use_premium_proxies If the default proxies are blocked and not returning results, this flag can be enabled to use              alternate proxies (residential and office). Scrapes might take longer to finish with this flag enabled.
     *
     * @return self
     */
    public function setUsePremiumProxies($use_premium_proxies)
    {

        if (is_null($use_premium_proxies)) {
            throw new \InvalidArgumentException('non-nullable use_premium_proxies cannot be null');
        }

        $this->container['use_premium_proxies'] = $use_premium_proxies;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


