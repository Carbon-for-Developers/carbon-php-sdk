<?php
/**
 * GetEmbeddingDocumentsBody
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
 * GetEmbeddingDocumentsBody Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class GetEmbeddingDocumentsBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetEmbeddingDocumentsBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'array<string,\Carbon\Model\Tags1>',
        'query' => 'string',
        'query_vector' => 'float[]',
        'k' => 'int',
        'file_ids' => 'int[]',
        'parent_file_ids' => 'int[]',
        'include_all_children' => 'bool',
        'tags_v2' => 'object',
        'include_tags' => 'bool',
        'include_vectors' => 'bool',
        'include_raw_file' => 'bool',
        'hybrid_search' => 'bool',
        'hybrid_search_tuning_parameters' => '\Carbon\Model\HybridSearchTuningParamsNullable',
        'media_type' => '\Carbon\Model\FileContentTypesNullable',
        'embedding_model' => '\Carbon\Model\EmbeddingGeneratorsNullable'
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
        'query' => null,
        'query_vector' => null,
        'k' => null,
        'file_ids' => null,
        'parent_file_ids' => null,
        'include_all_children' => null,
        'tags_v2' => null,
        'include_tags' => null,
        'include_vectors' => null,
        'include_raw_file' => null,
        'hybrid_search' => null,
        'hybrid_search_tuning_parameters' => null,
        'media_type' => null,
        'embedding_model' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'query' => false,
		'query_vector' => true,
		'k' => false,
		'file_ids' => true,
		'parent_file_ids' => true,
		'include_all_children' => false,
		'tags_v2' => true,
		'include_tags' => true,
		'include_vectors' => true,
		'include_raw_file' => true,
		'hybrid_search' => true,
		'hybrid_search_tuning_parameters' => true,
		'media_type' => true,
		'embedding_model' => true
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
        'query' => 'query',
        'query_vector' => 'query_vector',
        'k' => 'k',
        'file_ids' => 'file_ids',
        'parent_file_ids' => 'parent_file_ids',
        'include_all_children' => 'include_all_children',
        'tags_v2' => 'tags_v2',
        'include_tags' => 'include_tags',
        'include_vectors' => 'include_vectors',
        'include_raw_file' => 'include_raw_file',
        'hybrid_search' => 'hybrid_search',
        'hybrid_search_tuning_parameters' => 'hybrid_search_tuning_parameters',
        'media_type' => 'media_type',
        'embedding_model' => 'embedding_model'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'query' => 'setQuery',
        'query_vector' => 'setQueryVector',
        'k' => 'setK',
        'file_ids' => 'setFileIds',
        'parent_file_ids' => 'setParentFileIds',
        'include_all_children' => 'setIncludeAllChildren',
        'tags_v2' => 'setTagsV2',
        'include_tags' => 'setIncludeTags',
        'include_vectors' => 'setIncludeVectors',
        'include_raw_file' => 'setIncludeRawFile',
        'hybrid_search' => 'setHybridSearch',
        'hybrid_search_tuning_parameters' => 'setHybridSearchTuningParameters',
        'media_type' => 'setMediaType',
        'embedding_model' => 'setEmbeddingModel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'query' => 'getQuery',
        'query_vector' => 'getQueryVector',
        'k' => 'getK',
        'file_ids' => 'getFileIds',
        'parent_file_ids' => 'getParentFileIds',
        'include_all_children' => 'getIncludeAllChildren',
        'tags_v2' => 'getTagsV2',
        'include_tags' => 'getIncludeTags',
        'include_vectors' => 'getIncludeVectors',
        'include_raw_file' => 'getIncludeRawFile',
        'hybrid_search' => 'getHybridSearch',
        'hybrid_search_tuning_parameters' => 'getHybridSearchTuningParameters',
        'media_type' => 'getMediaType',
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
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('query_vector', $data ?? [], null);
        $this->setIfExists('k', $data ?? [], null);
        $this->setIfExists('file_ids', $data ?? [], null);
        $this->setIfExists('parent_file_ids', $data ?? [], null);
        $this->setIfExists('include_all_children', $data ?? [], false);
        $this->setIfExists('tags_v2', $data ?? [], null);
        $this->setIfExists('include_tags', $data ?? [], null);
        $this->setIfExists('include_vectors', $data ?? [], null);
        $this->setIfExists('include_raw_file', $data ?? [], null);
        $this->setIfExists('hybrid_search', $data ?? [], null);
        $this->setIfExists('hybrid_search_tuning_parameters', $data ?? [], null);
        $this->setIfExists('media_type', $data ?? [], null);
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

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ((mb_strlen($this->container['query']) < 1)) {
            $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['k'] === null) {
            $invalidProperties[] = "'k' can't be null";
        }
        if (($this->container['k'] < 1)) {
            $invalidProperties[] = "invalid value for 'k', must be bigger than or equal to 1.";
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
     * @param array<string,\Carbon\Model\Tags1>|null $tags A set of tags to limit the search to. Deprecated and may be removed in the future.
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
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query Query for which to get related chunks and embeddings.
     *
     * @return self
     */
    public function setQuery($query)
    {

        if ((mb_strlen($query) < 1)) {
            throw new \InvalidArgumentException('invalid length for $query when calling GetEmbeddingDocumentsBody., must be bigger than or equal to 1.');
        }


        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }

        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets query_vector
     *
     * @return float[]|null
     */
    public function getQueryVector()
    {
        return $this->container['query_vector'];
    }

    /**
     * Sets query_vector
     *
     * @param float[]|null $query_vector Optional query vector for which to get related chunks and embeddings. It must have been         generated by the same model used to generate the embeddings across which the search is being conducted. Cannot         provide both `query` and `query_vector`.
     *
     * @return self
     */
    public function setQueryVector($query_vector)
    {

        if (is_null($query_vector)) {
            array_push($this->openAPINullablesSetToNull, 'query_vector');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('query_vector', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['query_vector'] = $query_vector;

        return $this;
    }

    /**
     * Gets k
     *
     * @return int
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     *
     * @param int $k Number of related chunks to return.
     *
     * @return self
     */
    public function setK($k)
    {

        if (($k < 1)) {
            throw new \InvalidArgumentException('invalid value for $k when calling GetEmbeddingDocumentsBody., must be bigger than or equal to 1.');
        }


        if (is_null($k)) {
            throw new \InvalidArgumentException('non-nullable k cannot be null');
        }

        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets file_ids
     *
     * @return int[]|null
     */
    public function getFileIds()
    {
        return $this->container['file_ids'];
    }

    /**
     * Sets file_ids
     *
     * @param int[]|null $file_ids Optional list of file IDs to limit the search to
     *
     * @return self
     */
    public function setFileIds($file_ids)
    {

        if (is_null($file_ids)) {
            array_push($this->openAPINullablesSetToNull, 'file_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['file_ids'] = $file_ids;

        return $this;
    }

    /**
     * Gets parent_file_ids
     *
     * @return int[]|null
     * @deprecated
     */
    public function getParentFileIds()
    {
        return $this->container['parent_file_ids'];
    }

    /**
     * Sets parent_file_ids
     *
     * @param int[]|null $parent_file_ids Optional list of parent file IDs to limit the search to. A parent file describes a file to which         another file belongs (e.g. a folder)
     *
     * @return self
     * @deprecated
     */
    public function setParentFileIds($parent_file_ids)
    {

        if (is_null($parent_file_ids)) {
            array_push($this->openAPINullablesSetToNull, 'parent_file_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_file_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['parent_file_ids'] = $parent_file_ids;

        return $this;
    }

    /**
     * Gets include_all_children
     *
     * @return bool|null
     */
    public function getIncludeAllChildren()
    {
        return $this->container['include_all_children'];
    }

    /**
     * Sets include_all_children
     *
     * @param bool|null $include_all_children Flag to control whether or not to include all children of filtered files in the embedding search.
     *
     * @return self
     */
    public function setIncludeAllChildren($include_all_children)
    {

        if (is_null($include_all_children)) {
            throw new \InvalidArgumentException('non-nullable include_all_children cannot be null');
        }

        $this->container['include_all_children'] = $include_all_children;

        return $this;
    }

    /**
     * Gets tags_v2
     *
     * @return object|null
     */
    public function getTagsV2()
    {
        return $this->container['tags_v2'];
    }

    /**
     * Sets tags_v2
     *
     * @param object|null $tags_v2 A set of tags to limit the search to. Use this instead of `tags`, which is deprecated.
     *
     * @return self
     */
    public function setTagsV2($tags_v2)
    {

        if (is_null($tags_v2)) {
            array_push($this->openAPINullablesSetToNull, 'tags_v2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags_v2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tags_v2'] = $tags_v2;

        return $this;
    }

    /**
     * Gets include_tags
     *
     * @return bool|null
     */
    public function getIncludeTags()
    {
        return $this->container['include_tags'];
    }

    /**
     * Sets include_tags
     *
     * @param bool|null $include_tags Flag to control whether or not to include tags for each chunk in the response.
     *
     * @return self
     */
    public function setIncludeTags($include_tags)
    {

        if (is_null($include_tags)) {
            array_push($this->openAPINullablesSetToNull, 'include_tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_tags'] = $include_tags;

        return $this;
    }

    /**
     * Gets include_vectors
     *
     * @return bool|null
     */
    public function getIncludeVectors()
    {
        return $this->container['include_vectors'];
    }

    /**
     * Sets include_vectors
     *
     * @param bool|null $include_vectors Flag to control whether or not to include embedding vectors in the response.
     *
     * @return self
     */
    public function setIncludeVectors($include_vectors)
    {

        if (is_null($include_vectors)) {
            array_push($this->openAPINullablesSetToNull, 'include_vectors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_vectors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_vectors'] = $include_vectors;

        return $this;
    }

    /**
     * Gets include_raw_file
     *
     * @return bool|null
     */
    public function getIncludeRawFile()
    {
        return $this->container['include_raw_file'];
    }

    /**
     * Sets include_raw_file
     *
     * @param bool|null $include_raw_file Flag to control whether or not to include a signed URL to the raw file containing each chunk         in the response.
     *
     * @return self
     */
    public function setIncludeRawFile($include_raw_file)
    {

        if (is_null($include_raw_file)) {
            array_push($this->openAPINullablesSetToNull, 'include_raw_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_raw_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_raw_file'] = $include_raw_file;

        return $this;
    }

    /**
     * Gets hybrid_search
     *
     * @return bool|null
     */
    public function getHybridSearch()
    {
        return $this->container['hybrid_search'];
    }

    /**
     * Sets hybrid_search
     *
     * @param bool|null $hybrid_search Flag to control whether or not to perform hybrid search.
     *
     * @return self
     */
    public function setHybridSearch($hybrid_search)
    {

        if (is_null($hybrid_search)) {
            array_push($this->openAPINullablesSetToNull, 'hybrid_search');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hybrid_search', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hybrid_search'] = $hybrid_search;

        return $this;
    }

    /**
     * Gets hybrid_search_tuning_parameters
     *
     * @return \Carbon\Model\HybridSearchTuningParamsNullable|null
     */
    public function getHybridSearchTuningParameters()
    {
        return $this->container['hybrid_search_tuning_parameters'];
    }

    /**
     * Sets hybrid_search_tuning_parameters
     *
     * @param \Carbon\Model\HybridSearchTuningParamsNullable|null $hybrid_search_tuning_parameters hybrid_search_tuning_parameters
     *
     * @return self
     */
    public function setHybridSearchTuningParameters($hybrid_search_tuning_parameters)
    {

        if (is_null($hybrid_search_tuning_parameters)) {
            array_push($this->openAPINullablesSetToNull, 'hybrid_search_tuning_parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hybrid_search_tuning_parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['hybrid_search_tuning_parameters'] = $hybrid_search_tuning_parameters;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return \Carbon\Model\FileContentTypesNullable|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param \Carbon\Model\FileContentTypesNullable|null $media_type media_type
     *
     * @return self
     */
    public function setMediaType($media_type)
    {

        if (is_null($media_type)) {
            array_push($this->openAPINullablesSetToNull, 'media_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('media_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['media_type'] = $media_type;

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


