<?php
/**
 * RawTextInput
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
 * RawTextInput Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class RawTextInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RawTextInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contents' => 'string',
        'name' => 'string',
        'chunk_size' => 'int',
        'chunk_overlap' => 'int',
        'skip_embedding_generation' => 'bool',
        'overwrite_file_id' => 'int',
        'embedding_model' => '\Carbon\Model\EmbeddingGeneratorsNullable',
        'generate_sparse_vectors' => 'bool',
        'cold_storage_params' => '\Carbon\Model\ColdStorageProps',
        'generate_chunks_only' => 'bool',
        'store_file_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contents' => null,
        'name' => null,
        'chunk_size' => null,
        'chunk_overlap' => null,
        'skip_embedding_generation' => null,
        'overwrite_file_id' => null,
        'embedding_model' => null,
        'generate_sparse_vectors' => null,
        'cold_storage_params' => null,
        'generate_chunks_only' => null,
        'store_file_only' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'contents' => false,
		'name' => true,
		'chunk_size' => true,
		'chunk_overlap' => true,
		'skip_embedding_generation' => false,
		'overwrite_file_id' => true,
		'embedding_model' => true,
		'generate_sparse_vectors' => true,
		'cold_storage_params' => false,
		'generate_chunks_only' => false,
		'store_file_only' => false
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
        'contents' => 'contents',
        'name' => 'name',
        'chunk_size' => 'chunk_size',
        'chunk_overlap' => 'chunk_overlap',
        'skip_embedding_generation' => 'skip_embedding_generation',
        'overwrite_file_id' => 'overwrite_file_id',
        'embedding_model' => 'embedding_model',
        'generate_sparse_vectors' => 'generate_sparse_vectors',
        'cold_storage_params' => 'cold_storage_params',
        'generate_chunks_only' => 'generate_chunks_only',
        'store_file_only' => 'store_file_only'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents' => 'setContents',
        'name' => 'setName',
        'chunk_size' => 'setChunkSize',
        'chunk_overlap' => 'setChunkOverlap',
        'skip_embedding_generation' => 'setSkipEmbeddingGeneration',
        'overwrite_file_id' => 'setOverwriteFileId',
        'embedding_model' => 'setEmbeddingModel',
        'generate_sparse_vectors' => 'setGenerateSparseVectors',
        'cold_storage_params' => 'setColdStorageParams',
        'generate_chunks_only' => 'setGenerateChunksOnly',
        'store_file_only' => 'setStoreFileOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents' => 'getContents',
        'name' => 'getName',
        'chunk_size' => 'getChunkSize',
        'chunk_overlap' => 'getChunkOverlap',
        'skip_embedding_generation' => 'getSkipEmbeddingGeneration',
        'overwrite_file_id' => 'getOverwriteFileId',
        'embedding_model' => 'getEmbeddingModel',
        'generate_sparse_vectors' => 'getGenerateSparseVectors',
        'cold_storage_params' => 'getColdStorageParams',
        'generate_chunks_only' => 'getGenerateChunksOnly',
        'store_file_only' => 'getStoreFileOnly'
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
        $this->setIfExists('contents', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('chunk_size', $data ?? [], null);
        $this->setIfExists('chunk_overlap', $data ?? [], null);
        $this->setIfExists('skip_embedding_generation', $data ?? [], false);
        $this->setIfExists('overwrite_file_id', $data ?? [], null);
        $this->setIfExists('embedding_model', $data ?? [], null);
        $this->setIfExists('generate_sparse_vectors', $data ?? [], false);
        $this->setIfExists('cold_storage_params', $data ?? [], null);
        $this->setIfExists('generate_chunks_only', $data ?? [], false);
        $this->setIfExists('store_file_only', $data ?? [], false);
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

        if ($this->container['contents'] === null) {
            $invalidProperties[] = "'contents' can't be null";
        }
        if ((mb_strlen($this->container['contents']) < 5)) {
            $invalidProperties[] = "invalid value for 'contents', the character length must be bigger than or equal to 5.";
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
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {

        if ((mb_strlen($contents) < 5)) {
            throw new \InvalidArgumentException('invalid length for $contents when calling RawTextInput., must be bigger than or equal to 5.');
        }


        if (is_null($contents)) {
            throw new \InvalidArgumentException('non-nullable contents cannot be null');
        }

        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

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
            throw new \InvalidArgumentException('non-nullable skip_embedding_generation cannot be null');
        }

        $this->container['skip_embedding_generation'] = $skip_embedding_generation;

        return $this;
    }

    /**
     * Gets overwrite_file_id
     *
     * @return int|null
     */
    public function getOverwriteFileId()
    {
        return $this->container['overwrite_file_id'];
    }

    /**
     * Sets overwrite_file_id
     *
     * @param int|null $overwrite_file_id overwrite_file_id
     *
     * @return self
     */
    public function setOverwriteFileId($overwrite_file_id)
    {

        if (is_null($overwrite_file_id)) {
            array_push($this->openAPINullablesSetToNull, 'overwrite_file_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overwrite_file_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['overwrite_file_id'] = $overwrite_file_id;

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
     * Gets cold_storage_params
     *
     * @return \Carbon\Model\ColdStorageProps|null
     */
    public function getColdStorageParams()
    {
        return $this->container['cold_storage_params'];
    }

    /**
     * Sets cold_storage_params
     *
     * @param \Carbon\Model\ColdStorageProps|null $cold_storage_params cold_storage_params
     *
     * @return self
     */
    public function setColdStorageParams($cold_storage_params)
    {

        if (is_null($cold_storage_params)) {
            throw new \InvalidArgumentException('non-nullable cold_storage_params cannot be null');
        }

        $this->container['cold_storage_params'] = $cold_storage_params;

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
     * @param bool|null $generate_chunks_only If this flag is enabled, the file will be chunked and stored with Carbon,         but no embeddings will be generated. This overrides the skip_embedding_generation flag.
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


