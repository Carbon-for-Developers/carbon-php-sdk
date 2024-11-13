<?php
/**
 * DocumentResponse
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
 * DocumentResponse Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tags' => 'array<string,\Carbon\Model\Tags>',
        'content' => 'string',
        'file_id' => 'int',
        'parent_file_id' => 'int',
        'source' => 'string',
        'source_url' => 'string',
        'source_type' => '\Carbon\Model\DataSourceTypeNullable',
        'presigned_url' => 'string',
        'vector' => 'float[]',
        'score' => 'float',
        'rank' => '\Carbon\Model\RankProperty',
        'content_metadata' => 'object',
        'chunk_index' => 'int'
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
        'content' => null,
        'file_id' => null,
        'parent_file_id' => null,
        'source' => null,
        'source_url' => null,
        'source_type' => null,
        'presigned_url' => null,
        'vector' => null,
        'score' => null,
        'rank' => null,
        'content_metadata' => null,
        'chunk_index' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tags' => true,
		'content' => false,
		'file_id' => false,
		'parent_file_id' => true,
		'source' => true,
		'source_url' => true,
		'source_type' => true,
		'presigned_url' => true,
		'vector' => true,
		'score' => true,
		'rank' => true,
		'content_metadata' => true,
		'chunk_index' => true
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
        'content' => 'content',
        'file_id' => 'file_id',
        'parent_file_id' => 'parent_file_id',
        'source' => 'source',
        'source_url' => 'source_url',
        'source_type' => 'source_type',
        'presigned_url' => 'presigned_url',
        'vector' => 'vector',
        'score' => 'score',
        'rank' => 'rank',
        'content_metadata' => 'content_metadata',
        'chunk_index' => 'chunk_index'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tags' => 'setTags',
        'content' => 'setContent',
        'file_id' => 'setFileId',
        'parent_file_id' => 'setParentFileId',
        'source' => 'setSource',
        'source_url' => 'setSourceUrl',
        'source_type' => 'setSourceType',
        'presigned_url' => 'setPresignedUrl',
        'vector' => 'setVector',
        'score' => 'setScore',
        'rank' => 'setRank',
        'content_metadata' => 'setContentMetadata',
        'chunk_index' => 'setChunkIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tags' => 'getTags',
        'content' => 'getContent',
        'file_id' => 'getFileId',
        'parent_file_id' => 'getParentFileId',
        'source' => 'getSource',
        'source_url' => 'getSourceUrl',
        'source_type' => 'getSourceType',
        'presigned_url' => 'getPresignedUrl',
        'vector' => 'getVector',
        'score' => 'getScore',
        'rank' => 'getRank',
        'content_metadata' => 'getContentMetadata',
        'chunk_index' => 'getChunkIndex'
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
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('file_id', $data ?? [], null);
        $this->setIfExists('parent_file_id', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('source_url', $data ?? [], null);
        $this->setIfExists('source_type', $data ?? [], null);
        $this->setIfExists('presigned_url', $data ?? [], null);
        $this->setIfExists('vector', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('rank', $data ?? [], null);
        $this->setIfExists('content_metadata', $data ?? [], null);
        $this->setIfExists('chunk_index', $data ?? [], null);
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

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['file_id'] === null) {
            $invalidProperties[] = "'file_id' can't be null";
        }
        if ($this->container['vector'] === null) {
            $invalidProperties[] = "'vector' can't be null";
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
     * @return array<string,\Carbon\Model\Tags>|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param array<string,\Carbon\Model\Tags>|null $tags tags
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
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return self
     */
    public function setContent($content)
    {

        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return int
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param int $file_id file_id
     *
     * @return self
     */
    public function setFileId($file_id)
    {

        if (is_null($file_id)) {
            throw new \InvalidArgumentException('non-nullable file_id cannot be null');
        }

        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets parent_file_id
     *
     * @return int|null
     */
    public function getParentFileId()
    {
        return $this->container['parent_file_id'];
    }

    /**
     * Sets parent_file_id
     *
     * @param int|null $parent_file_id parent_file_id
     *
     * @return self
     */
    public function setParentFileId($parent_file_id)
    {

        if (is_null($parent_file_id)) {
            array_push($this->openAPINullablesSetToNull, 'parent_file_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_file_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['parent_file_id'] = $parent_file_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {

        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets source_url
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        return $this->container['source_url'];
    }

    /**
     * Sets source_url
     *
     * @param string|null $source_url source_url
     *
     * @return self
     */
    public function setSourceUrl($source_url)
    {

        if (is_null($source_url)) {
            array_push($this->openAPINullablesSetToNull, 'source_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['source_url'] = $source_url;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return \Carbon\Model\DataSourceTypeNullable|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param \Carbon\Model\DataSourceTypeNullable|null $source_type source_type
     *
     * @return self
     */
    public function setSourceType($source_type)
    {

        if (is_null($source_type)) {
            array_push($this->openAPINullablesSetToNull, 'source_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets presigned_url
     *
     * @return string|null
     */
    public function getPresignedUrl()
    {
        return $this->container['presigned_url'];
    }

    /**
     * Sets presigned_url
     *
     * @param string|null $presigned_url presigned_url
     *
     * @return self
     */
    public function setPresignedUrl($presigned_url)
    {

        if (is_null($presigned_url)) {
            array_push($this->openAPINullablesSetToNull, 'presigned_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('presigned_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['presigned_url'] = $presigned_url;

        return $this;
    }

    /**
     * Gets vector
     *
     * @return float[]
     */
    public function getVector()
    {
        return $this->container['vector'];
    }

    /**
     * Sets vector
     *
     * @param float[] $vector vector
     *
     * @return self
     */
    public function setVector($vector)
    {

        if (is_null($vector)) {
            array_push($this->openAPINullablesSetToNull, 'vector');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vector', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['vector'] = $vector;

        return $this;
    }

    /**
     * Gets score
     *
     * @return float|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param float|null $score score
     *
     * @return self
     */
    public function setScore($score)
    {

        if (is_null($score)) {
            array_push($this->openAPINullablesSetToNull, 'score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return \Carbon\Model\RankProperty|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param \Carbon\Model\RankProperty|null $rank rank
     *
     * @return self
     */
    public function setRank($rank)
    {

        if (is_null($rank)) {
            array_push($this->openAPINullablesSetToNull, 'rank');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rank', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets content_metadata
     *
     * @return object|null
     */
    public function getContentMetadata()
    {
        return $this->container['content_metadata'];
    }

    /**
     * Sets content_metadata
     *
     * @param object|null $content_metadata content_metadata
     *
     * @return self
     */
    public function setContentMetadata($content_metadata)
    {

        if (is_null($content_metadata)) {
            array_push($this->openAPINullablesSetToNull, 'content_metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('content_metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['content_metadata'] = $content_metadata;

        return $this;
    }

    /**
     * Gets chunk_index
     *
     * @return int|null
     */
    public function getChunkIndex()
    {
        return $this->container['chunk_index'];
    }

    /**
     * Sets chunk_index
     *
     * @param int|null $chunk_index chunk_index
     *
     * @return self
     */
    public function setChunkIndex($chunk_index)
    {

        if (is_null($chunk_index)) {
            array_push($this->openAPINullablesSetToNull, 'chunk_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('chunk_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['chunk_index'] = $chunk_index;

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


