<?php
/**
 * FreshDeskConnectRequest
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
 * FreshDeskConnectRequest Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class FreshDeskConnectRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FreshDeskConnectRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'object',
        'domain' => 'string',
        'api_key' => 'string',
        'chunk_size' => 'int',
        'chunk_overlap' => 'int',
        'skip_embedding_generation' => 'bool',
        'embedding_model' => '\Carbon\Model\EmbeddingGeneratorsNullable',
        'generate_sparse_vectors' => 'bool',
        'prepend_filename_to_chunks' => 'bool',
        'sync_files_on_connection' => 'bool',
        'request_id' => 'string',
        'sync_source_items' => 'bool',
        'file_sync_config' => '\Carbon\Model\HelpdeskFileSyncConfigNullable'
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
        'domain' => null,
        'api_key' => null,
        'chunk_size' => null,
        'chunk_overlap' => null,
        'skip_embedding_generation' => null,
        'embedding_model' => null,
        'generate_sparse_vectors' => null,
        'prepend_filename_to_chunks' => null,
        'sync_files_on_connection' => null,
        'request_id' => null,
        'sync_source_items' => null,
        'file_sync_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'domain' => false,
		'api_key' => false,
		'chunk_size' => true,
		'chunk_overlap' => true,
		'skip_embedding_generation' => true,
		'embedding_model' => true,
		'generate_sparse_vectors' => true,
		'prepend_filename_to_chunks' => true,
		'sync_files_on_connection' => true,
		'request_id' => true,
		'sync_source_items' => false,
		'file_sync_config' => true
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
        'domain' => 'domain',
        'api_key' => 'api_key',
        'chunk_size' => 'chunk_size',
        'chunk_overlap' => 'chunk_overlap',
        'skip_embedding_generation' => 'skip_embedding_generation',
        'embedding_model' => 'embedding_model',
        'generate_sparse_vectors' => 'generate_sparse_vectors',
        'prepend_filename_to_chunks' => 'prepend_filename_to_chunks',
        'sync_files_on_connection' => 'sync_files_on_connection',
        'request_id' => 'request_id',
        'sync_source_items' => 'sync_source_items',
        'file_sync_config' => 'file_sync_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'domain' => 'setDomain',
        'api_key' => 'setApiKey',
        'chunk_size' => 'setChunkSize',
        'chunk_overlap' => 'setChunkOverlap',
        'skip_embedding_generation' => 'setSkipEmbeddingGeneration',
        'embedding_model' => 'setEmbeddingModel',
        'generate_sparse_vectors' => 'setGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'setPrependFilenameToChunks',
        'sync_files_on_connection' => 'setSyncFilesOnConnection',
        'request_id' => 'setRequestId',
        'sync_source_items' => 'setSyncSourceItems',
        'file_sync_config' => 'setFileSyncConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'domain' => 'getDomain',
        'api_key' => 'getApiKey',
        'chunk_size' => 'getChunkSize',
        'chunk_overlap' => 'getChunkOverlap',
        'skip_embedding_generation' => 'getSkipEmbeddingGeneration',
        'embedding_model' => 'getEmbeddingModel',
        'generate_sparse_vectors' => 'getGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'getPrependFilenameToChunks',
        'sync_files_on_connection' => 'getSyncFilesOnConnection',
        'request_id' => 'getRequestId',
        'sync_source_items' => 'getSyncSourceItems',
        'file_sync_config' => 'getFileSyncConfig'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('api_key', $data ?? [], null);
        $this->setIfExists('chunk_size', $data ?? [], 1500);
        $this->setIfExists('chunk_overlap', $data ?? [], 20);
        $this->setIfExists('skip_embedding_generation', $data ?? [], false);
        $this->setIfExists('embedding_model', $data ?? [], null);
        $this->setIfExists('generate_sparse_vectors', $data ?? [], false);
        $this->setIfExists('prepend_filename_to_chunks', $data ?? [], false);
        $this->setIfExists('sync_files_on_connection', $data ?? [], true);
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('sync_source_items', $data ?? [], true);
        $this->setIfExists('file_sync_config', $data ?? [], null);
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalidProperties[] = "'api_key' can't be null";
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
     * @return object|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param object|null $tags tags
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
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {

        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return self
     */
    public function setApiKey($api_key)
    {

        if (is_null($api_key)) {
            throw new \InvalidArgumentException('non-nullable api_key cannot be null');
        }

        $this->container['api_key'] = $api_key;

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
     * Gets embedding_model
     *
     * @return \Carbon\Model\EmbeddingGeneratorsNullable|null
     */
    public function getEmbeddingModel()
    {
        return $this->container['embedding_model'];
    }

    /**
     * Sets embedding_model
     *
     * @param \Carbon\Model\EmbeddingGeneratorsNullable|null $embedding_model embedding_model
     *
     * @return self
     */
    public function setEmbeddingModel($embedding_model)
    {

        if (is_null($embedding_model)) {
            array_push($this->openAPINullablesSetToNull, 'embedding_model');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('embedding_model', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['embedding_model'] = $embedding_model;

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
     * Gets sync_files_on_connection
     *
     * @return bool|null
     */
    public function getSyncFilesOnConnection()
    {
        return $this->container['sync_files_on_connection'];
    }

    /**
     * Sets sync_files_on_connection
     *
     * @param bool|null $sync_files_on_connection sync_files_on_connection
     *
     * @return self
     */
    public function setSyncFilesOnConnection($sync_files_on_connection)
    {

        if (is_null($sync_files_on_connection)) {
            array_push($this->openAPINullablesSetToNull, 'sync_files_on_connection');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sync_files_on_connection', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sync_files_on_connection'] = $sync_files_on_connection;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id request_id
     *
     * @return self
     */
    public function setRequestId($request_id)
    {

        if (is_null($request_id)) {
            array_push($this->openAPINullablesSetToNull, 'request_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('request_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets sync_source_items
     *
     * @return bool|null
     */
    public function getSyncSourceItems()
    {
        return $this->container['sync_source_items'];
    }

    /**
     * Sets sync_source_items
     *
     * @param bool|null $sync_source_items Enabling this flag will fetch all available content from the source to be listed via list items endpoint
     *
     * @return self
     */
    public function setSyncSourceItems($sync_source_items)
    {

        if (is_null($sync_source_items)) {
            throw new \InvalidArgumentException('non-nullable sync_source_items cannot be null');
        }

        $this->container['sync_source_items'] = $sync_source_items;

        return $this;
    }

    /**
     * Gets file_sync_config
     *
     * @return \Carbon\Model\HelpdeskFileSyncConfigNullable|null
     */
    public function getFileSyncConfig()
    {
        return $this->container['file_sync_config'];
    }

    /**
     * Sets file_sync_config
     *
     * @param \Carbon\Model\HelpdeskFileSyncConfigNullable|null $file_sync_config file_sync_config
     *
     * @return self
     */
    public function setFileSyncConfig($file_sync_config)
    {

        if (is_null($file_sync_config)) {
            array_push($this->openAPINullablesSetToNull, 'file_sync_config');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file_sync_config', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['file_sync_config'] = $file_sync_config;

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


