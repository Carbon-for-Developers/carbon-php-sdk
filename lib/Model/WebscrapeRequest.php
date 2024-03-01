<?php
/**
 * WebscrapeRequest
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
 * WebscrapeRequest Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class WebscrapeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebscrapeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'array<string,\Carbon\Model\Tags1>',
        'url' => 'string',
        'recursion_depth' => 'int',
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
        'embedding_model' => '\Carbon\Model\EmbeddingGenerators'
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
        'recursion_depth' => null,
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
        'embedding_model' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'url' => false,
		'recursion_depth' => true,
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
		'embedding_model' => false
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
        'recursion_depth' => 'recursion_depth',
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
        'embedding_model' => 'embedding_model'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'url' => 'setUrl',
        'recursion_depth' => 'setRecursionDepth',
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
        'embedding_model' => 'setEmbeddingModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'url' => 'getUrl',
        'recursion_depth' => 'getRecursionDepth',
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
        'embedding_model' => 'getEmbeddingModel'
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
        $this->setIfExists('recursion_depth', $data ?? [], 3);
        $this->setIfExists('max_pages_to_scrape', $data ?? [], 100);
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
     * Gets recursion_depth
     *
     * @return int|null
     */
    public function getRecursionDepth()
    {
        return $this->container['recursion_depth'];
    }

    /**
     * Sets recursion_depth
     *
     * @param int|null $recursion_depth recursion_depth
     *
     * @return self
     */
    public function setRecursionDepth($recursion_depth)
    {

        if (is_null($recursion_depth)) {
            array_push($this->openAPINullablesSetToNull, 'recursion_depth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recursion_depth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['recursion_depth'] = $recursion_depth;

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


