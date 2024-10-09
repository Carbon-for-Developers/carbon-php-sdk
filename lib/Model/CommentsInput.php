<?php
/**
 * CommentsInput
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
 * CommentsInput Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class CommentsInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CommentsInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_source_id' => 'int',
        'include_remote_data' => 'bool',
        'repository' => 'string',
        'page' => 'int',
        'page_size' => 'int',
        'next_cursor' => 'string',
        'pull_number' => 'int',
        'order_by' => '\Carbon\Model\CommentsOrderBy',
        'order_dir' => '\Carbon\Model\OrderDirV2Nullable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_source_id' => null,
        'include_remote_data' => null,
        'repository' => null,
        'page' => null,
        'page_size' => null,
        'next_cursor' => null,
        'pull_number' => null,
        'order_by' => null,
        'order_dir' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'data_source_id' => false,
		'include_remote_data' => false,
		'repository' => false,
		'page' => false,
		'page_size' => false,
		'next_cursor' => true,
		'pull_number' => false,
		'order_by' => false,
		'order_dir' => true
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
        'data_source_id' => 'data_source_id',
        'include_remote_data' => 'include_remote_data',
        'repository' => 'repository',
        'page' => 'page',
        'page_size' => 'page_size',
        'next_cursor' => 'next_cursor',
        'pull_number' => 'pull_number',
        'order_by' => 'order_by',
        'order_dir' => 'order_dir'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_source_id' => 'setDataSourceId',
        'include_remote_data' => 'setIncludeRemoteData',
        'repository' => 'setRepository',
        'page' => 'setPage',
        'page_size' => 'setPageSize',
        'next_cursor' => 'setNextCursor',
        'pull_number' => 'setPullNumber',
        'order_by' => 'setOrderBy',
        'order_dir' => 'setOrderDir'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_source_id' => 'getDataSourceId',
        'include_remote_data' => 'getIncludeRemoteData',
        'repository' => 'getRepository',
        'page' => 'getPage',
        'page_size' => 'getPageSize',
        'next_cursor' => 'getNextCursor',
        'pull_number' => 'getPullNumber',
        'order_by' => 'getOrderBy',
        'order_dir' => 'getOrderDir'
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
        $this->setIfExists('data_source_id', $data ?? [], null);
        $this->setIfExists('include_remote_data', $data ?? [], false);
        $this->setIfExists('repository', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], 1);
        $this->setIfExists('page_size', $data ?? [], 30);
        $this->setIfExists('next_cursor', $data ?? [], null);
        $this->setIfExists('pull_number', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('order_dir', $data ?? [], null);
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
        if ($this->container['repository'] === null) {
            $invalidProperties[] = "'repository' can't be null";
        }
        if (!is_null($this->container['page_size']) && ($this->container['page_size'] > 100)) {
            $invalidProperties[] = "invalid value for 'page_size', must be smaller than or equal to 100.";
        }

        if ($this->container['pull_number'] === null) {
            $invalidProperties[] = "'pull_number' can't be null";
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
     * Gets include_remote_data
     *
     * @return bool|null
     */
    public function getIncludeRemoteData()
    {
        return $this->container['include_remote_data'];
    }

    /**
     * Sets include_remote_data
     *
     * @param bool|null $include_remote_data include_remote_data
     *
     * @return self
     */
    public function setIncludeRemoteData($include_remote_data)
    {

        if (is_null($include_remote_data)) {
            throw new \InvalidArgumentException('non-nullable include_remote_data cannot be null');
        }

        $this->container['include_remote_data'] = $include_remote_data;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param string $repository Full name of the repository, denoted as {owner}/{repo}
     *
     * @return self
     */
    public function setRepository($repository)
    {

        if (is_null($repository)) {
            throw new \InvalidArgumentException('non-nullable repository cannot be null');
        }

        $this->container['repository'] = $repository;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page page
     *
     * @return self
     */
    public function setPage($page)
    {

        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {

        if (!is_null($page_size) && ($page_size > 100)) {
            throw new \InvalidArgumentException('invalid value for $page_size when calling CommentsInput., must be smaller than or equal to 100.');
        }


        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }

        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets next_cursor
     *
     * @return string|null
     */
    public function getNextCursor()
    {
        return $this->container['next_cursor'];
    }

    /**
     * Sets next_cursor
     *
     * @param string|null $next_cursor next_cursor
     *
     * @return self
     */
    public function setNextCursor($next_cursor)
    {

        if (is_null($next_cursor)) {
            array_push($this->openAPINullablesSetToNull, 'next_cursor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_cursor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['next_cursor'] = $next_cursor;

        return $this;
    }

    /**
     * Gets pull_number
     *
     * @return int
     */
    public function getPullNumber()
    {
        return $this->container['pull_number'];
    }

    /**
     * Sets pull_number
     *
     * @param int $pull_number pull_number
     *
     * @return self
     */
    public function setPullNumber($pull_number)
    {

        if (is_null($pull_number)) {
            throw new \InvalidArgumentException('non-nullable pull_number cannot be null');
        }

        $this->container['pull_number'] = $pull_number;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Carbon\Model\CommentsOrderBy|null
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Carbon\Model\CommentsOrderBy|null $order_by order_by
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {

        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }

        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets order_dir
     *
     * @return \Carbon\Model\OrderDirV2Nullable|null
     */
    public function getOrderDir()
    {
        return $this->container['order_dir'];
    }

    /**
     * Sets order_dir
     *
     * @param \Carbon\Model\OrderDirV2Nullable|null $order_dir order_dir
     *
     * @return self
     */
    public function setOrderDir($order_dir)
    {

        if (is_null($order_dir)) {
            array_push($this->openAPINullablesSetToNull, 'order_dir');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_dir', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['order_dir'] = $order_dir;

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


