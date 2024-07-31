<?php
/**
 * SyncFilesRequest
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
 * SyncFilesRequest Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class SyncFilesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SyncFilesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'object',
        'data_source_id' => 'int',
        'ids' => '\Carbon\Model\IdsProperty',
        'chunk_size' => 'int',
        'chunk_overlap' => 'int',
        'skip_embedding_generation' => 'bool',
        'embedding_model' => '\Carbon\Model\EmbeddingGeneratorsNullable',
        'generate_sparse_vectors' => 'bool',
        'prepend_filename_to_chunks' => 'bool',
        'max_items_per_chunk' => 'int',
        'set_page_as_boundary' => 'bool',
        'request_id' => 'string',
        'use_ocr' => 'bool',
        'parse_pdf_tables_with_ocr' => 'bool',
        'incremental_sync' => 'bool',
        'file_sync_config' => '\Carbon\Model\FileSyncConfigNullable'
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
        'data_source_id' => null,
        'ids' => null,
        'chunk_size' => null,
        'chunk_overlap' => null,
        'skip_embedding_generation' => null,
        'embedding_model' => null,
        'generate_sparse_vectors' => null,
        'prepend_filename_to_chunks' => null,
        'max_items_per_chunk' => null,
        'set_page_as_boundary' => null,
        'request_id' => null,
        'use_ocr' => null,
        'parse_pdf_tables_with_ocr' => null,
        'incremental_sync' => null,
        'file_sync_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'data_source_id' => false,
		'ids' => false,
		'chunk_size' => true,
		'chunk_overlap' => true,
		'skip_embedding_generation' => true,
		'embedding_model' => true,
		'generate_sparse_vectors' => true,
		'prepend_filename_to_chunks' => true,
		'max_items_per_chunk' => true,
		'set_page_as_boundary' => false,
		'request_id' => false,
		'use_ocr' => true,
		'parse_pdf_tables_with_ocr' => true,
		'incremental_sync' => false,
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
        'data_source_id' => 'data_source_id',
        'ids' => 'ids',
        'chunk_size' => 'chunk_size',
        'chunk_overlap' => 'chunk_overlap',
        'skip_embedding_generation' => 'skip_embedding_generation',
        'embedding_model' => 'embedding_model',
        'generate_sparse_vectors' => 'generate_sparse_vectors',
        'prepend_filename_to_chunks' => 'prepend_filename_to_chunks',
        'max_items_per_chunk' => 'max_items_per_chunk',
        'set_page_as_boundary' => 'set_page_as_boundary',
        'request_id' => 'request_id',
        'use_ocr' => 'use_ocr',
        'parse_pdf_tables_with_ocr' => 'parse_pdf_tables_with_ocr',
        'incremental_sync' => 'incremental_sync',
        'file_sync_config' => 'file_sync_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'data_source_id' => 'setDataSourceId',
        'ids' => 'setIds',
        'chunk_size' => 'setChunkSize',
        'chunk_overlap' => 'setChunkOverlap',
        'skip_embedding_generation' => 'setSkipEmbeddingGeneration',
        'embedding_model' => 'setEmbeddingModel',
        'generate_sparse_vectors' => 'setGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'setPrependFilenameToChunks',
        'max_items_per_chunk' => 'setMaxItemsPerChunk',
        'set_page_as_boundary' => 'setSetPageAsBoundary',
        'request_id' => 'setRequestId',
        'use_ocr' => 'setUseOcr',
        'parse_pdf_tables_with_ocr' => 'setParsePdfTablesWithOcr',
        'incremental_sync' => 'setIncrementalSync',
        'file_sync_config' => 'setFileSyncConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'data_source_id' => 'getDataSourceId',
        'ids' => 'getIds',
        'chunk_size' => 'getChunkSize',
        'chunk_overlap' => 'getChunkOverlap',
        'skip_embedding_generation' => 'getSkipEmbeddingGeneration',
        'embedding_model' => 'getEmbeddingModel',
        'generate_sparse_vectors' => 'getGenerateSparseVectors',
        'prepend_filename_to_chunks' => 'getPrependFilenameToChunks',
        'max_items_per_chunk' => 'getMaxItemsPerChunk',
        'set_page_as_boundary' => 'getSetPageAsBoundary',
        'request_id' => 'getRequestId',
        'use_ocr' => 'getUseOcr',
        'parse_pdf_tables_with_ocr' => 'getParsePdfTablesWithOcr',
        'incremental_sync' => 'getIncrementalSync',
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
        $this->setIfExists('data_source_id', $data ?? [], null);
        $this->setIfExists('ids', $data ?? [], null);
        $this->setIfExists('chunk_size', $data ?? [], 1500);
        $this->setIfExists('chunk_overlap', $data ?? [], 20);
        $this->setIfExists('skip_embedding_generation', $data ?? [], false);
        $this->setIfExists('embedding_model', $data ?? [], null);
        $this->setIfExists('generate_sparse_vectors', $data ?? [], false);
        $this->setIfExists('prepend_filename_to_chunks', $data ?? [], false);
        $this->setIfExists('max_items_per_chunk', $data ?? [], null);
        $this->setIfExists('set_page_as_boundary', $data ?? [], false);
        $this->setIfExists('request_id', $data ?? [], 'fc57cd47-6aac-4e8f-9a00-ceae0b396f11');
        $this->setIfExists('use_ocr', $data ?? [], false);
        $this->setIfExists('parse_pdf_tables_with_ocr', $data ?? [], false);
        $this->setIfExists('incremental_sync', $data ?? [], false);
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

        if ($this->container['data_source_id'] === null) {
            $invalidProperties[] = "'data_source_id' can't be null";
        }
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
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
     * Gets data_source_id
     *
     * @return int
     */
    public function getDataSourceId()
    {
        return $this->container['data_source_id'];
    }

    /**
     * Sets data_source_id
     *
     * @param int $data_source_id data_source_id
     *
     * @return self
     */
    public function setDataSourceId($data_source_id)
    {

        if (is_null($data_source_id)) {
            throw new \InvalidArgumentException('non-nullable data_source_id cannot be null');
        }

        $this->container['data_source_id'] = $data_source_id;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return \Carbon\Model\IdsProperty
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param \Carbon\Model\IdsProperty $ids ids
     *
     * @return self
     */
    public function setIds($ids)
    {

        if (is_null($ids)) {
            throw new \InvalidArgumentException('non-nullable ids cannot be null');
        }

        $this->container['ids'] = $ids;

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
     * Gets max_items_per_chunk
     *
     * @return int|null
     */
    public function getMaxItemsPerChunk()
    {
        return $this->container['max_items_per_chunk'];
    }

    /**
     * Sets max_items_per_chunk
     *
     * @param int|null $max_items_per_chunk Number of objects per chunk. For csv, tsv, xlsx, and json files only.
     *
     * @return self
     */
    public function setMaxItemsPerChunk($max_items_per_chunk)
    {

        if (is_null($max_items_per_chunk)) {
            array_push($this->openAPINullablesSetToNull, 'max_items_per_chunk');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_items_per_chunk', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_items_per_chunk'] = $max_items_per_chunk;

        return $this;
    }

    /**
     * Gets set_page_as_boundary
     *
     * @return bool|null
     */
    public function getSetPageAsBoundary()
    {
        return $this->container['set_page_as_boundary'];
    }

    /**
     * Sets set_page_as_boundary
     *
     * @param bool|null $set_page_as_boundary set_page_as_boundary
     *
     * @return self
     */
    public function setSetPageAsBoundary($set_page_as_boundary)
    {

        if (is_null($set_page_as_boundary)) {
            throw new \InvalidArgumentException('non-nullable set_page_as_boundary cannot be null');
        }

        $this->container['set_page_as_boundary'] = $set_page_as_boundary;

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
            throw new \InvalidArgumentException('non-nullable request_id cannot be null');
        }

        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets use_ocr
     *
     * @return bool|null
     */
    public function getUseOcr()
    {
        return $this->container['use_ocr'];
    }

    /**
     * Sets use_ocr
     *
     * @param bool|null $use_ocr use_ocr
     *
     * @return self
     */
    public function setUseOcr($use_ocr)
    {

        if (is_null($use_ocr)) {
            array_push($this->openAPINullablesSetToNull, 'use_ocr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('use_ocr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['use_ocr'] = $use_ocr;

        return $this;
    }

    /**
     * Gets parse_pdf_tables_with_ocr
     *
     * @return bool|null
     */
    public function getParsePdfTablesWithOcr()
    {
        return $this->container['parse_pdf_tables_with_ocr'];
    }

    /**
     * Sets parse_pdf_tables_with_ocr
     *
     * @param bool|null $parse_pdf_tables_with_ocr parse_pdf_tables_with_ocr
     *
     * @return self
     */
    public function setParsePdfTablesWithOcr($parse_pdf_tables_with_ocr)
    {

        if (is_null($parse_pdf_tables_with_ocr)) {
            array_push($this->openAPINullablesSetToNull, 'parse_pdf_tables_with_ocr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parse_pdf_tables_with_ocr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['parse_pdf_tables_with_ocr'] = $parse_pdf_tables_with_ocr;

        return $this;
    }

    /**
     * Gets incremental_sync
     *
     * @return bool|null
     */
    public function getIncrementalSync()
    {
        return $this->container['incremental_sync'];
    }

    /**
     * Sets incremental_sync
     *
     * @param bool|null $incremental_sync Only sync files if they have not already been synced or if the embedding properties have changed.         This flag is currently supported by ONEDRIVE, GOOGLE_DRIVE, BOX, DROPBOX, INTERCOM, GMAIL, OUTLOOK. It will be ignored for other data sources.
     *
     * @return self
     */
    public function setIncrementalSync($incremental_sync)
    {

        if (is_null($incremental_sync)) {
            throw new \InvalidArgumentException('non-nullable incremental_sync cannot be null');
        }

        $this->container['incremental_sync'] = $incremental_sync;

        return $this;
    }

    /**
     * Gets file_sync_config
     *
     * @return \Carbon\Model\FileSyncConfigNullable|null
     */
    public function getFileSyncConfig()
    {
        return $this->container['file_sync_config'];
    }

    /**
     * Sets file_sync_config
     *
     * @param \Carbon\Model\FileSyncConfigNullable|null $file_sync_config file_sync_config
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


