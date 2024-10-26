<?php
/**
 * OrganizationUserFilesToSyncQueryInput
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
 * OrganizationUserFilesToSyncQueryInput Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationUserFilesToSyncQueryInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationUserFilesToSyncQueryInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pagination' => '\Carbon\Model\Pagination',
        'order_by' => '\Carbon\Model\OrganizationUserFilesToSyncOrderByTypes',
        'order_dir' => '\Carbon\Model\OrderDir',
        'filters' => '\Carbon\Model\OrganizationUserFilesToSyncFilters',
        'include_raw_file' => 'bool',
        'include_parsed_text_file' => 'bool',
        'include_additional_files' => 'bool',
        'presigned_url_expiry_time_seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pagination' => null,
        'order_by' => null,
        'order_dir' => null,
        'filters' => null,
        'include_raw_file' => null,
        'include_parsed_text_file' => null,
        'include_additional_files' => null,
        'presigned_url_expiry_time_seconds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'pagination' => false,
		'order_by' => false,
		'order_dir' => false,
		'filters' => false,
		'include_raw_file' => true,
		'include_parsed_text_file' => true,
		'include_additional_files' => true,
		'presigned_url_expiry_time_seconds' => false
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
        'pagination' => 'pagination',
        'order_by' => 'order_by',
        'order_dir' => 'order_dir',
        'filters' => 'filters',
        'include_raw_file' => 'include_raw_file',
        'include_parsed_text_file' => 'include_parsed_text_file',
        'include_additional_files' => 'include_additional_files',
        'presigned_url_expiry_time_seconds' => 'presigned_url_expiry_time_seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'order_by' => 'setOrderBy',
        'order_dir' => 'setOrderDir',
        'filters' => 'setFilters',
        'include_raw_file' => 'setIncludeRawFile',
        'include_parsed_text_file' => 'setIncludeParsedTextFile',
        'include_additional_files' => 'setIncludeAdditionalFiles',
        'presigned_url_expiry_time_seconds' => 'setPresignedUrlExpiryTimeSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'order_by' => 'getOrderBy',
        'order_dir' => 'getOrderDir',
        'filters' => 'getFilters',
        'include_raw_file' => 'getIncludeRawFile',
        'include_parsed_text_file' => 'getIncludeParsedTextFile',
        'include_additional_files' => 'getIncludeAdditionalFiles',
        'presigned_url_expiry_time_seconds' => 'getPresignedUrlExpiryTimeSeconds'
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
        $this->setIfExists('pagination', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('order_dir', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('include_raw_file', $data ?? [], null);
        $this->setIfExists('include_parsed_text_file', $data ?? [], null);
        $this->setIfExists('include_additional_files', $data ?? [], null);
        $this->setIfExists('presigned_url_expiry_time_seconds', $data ?? [], 3600);
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
     * Gets pagination
     *
     * @return \Carbon\Model\Pagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \Carbon\Model\Pagination|null $pagination Pagination parameters for the query.
     *
     * @return self
     */
    public function setPagination($pagination)
    {

        if (is_null($pagination)) {
            throw new \InvalidArgumentException('non-nullable pagination cannot be null');
        }

        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Carbon\Model\OrganizationUserFilesToSyncOrderByTypes|null
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Carbon\Model\OrganizationUserFilesToSyncOrderByTypes|null $order_by The field on OrganizationUserFilesToSYnc to order the results by.
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
     * @return \Carbon\Model\OrderDir|null
     */
    public function getOrderDir()
    {
        return $this->container['order_dir'];
    }

    /**
     * Sets order_dir
     *
     * @param \Carbon\Model\OrderDir|null $order_dir The direction to order the results by.
     *
     * @return self
     */
    public function setOrderDir($order_dir)
    {

        if (is_null($order_dir)) {
            throw new \InvalidArgumentException('non-nullable order_dir cannot be null');
        }

        $this->container['order_dir'] = $order_dir;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Carbon\Model\OrganizationUserFilesToSyncFilters|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Carbon\Model\OrganizationUserFilesToSyncFilters|null $filters Filters to apply to the query.
     *
     * @return self
     */
    public function setFilters($filters)
    {

        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }

        $this->container['filters'] = $filters;

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
     * @param bool|null $include_raw_file If true, the query will return presigned URLs for the raw file. Only relevant for the /user_files_v2 endpoint.
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
     * Gets include_parsed_text_file
     *
     * @return bool|null
     */
    public function getIncludeParsedTextFile()
    {
        return $this->container['include_parsed_text_file'];
    }

    /**
     * Sets include_parsed_text_file
     *
     * @param bool|null $include_parsed_text_file If true, the query will return presigned URLs for the parsed text file. Only relevant for the /user_files_v2 endpoint.
     *
     * @return self
     */
    public function setIncludeParsedTextFile($include_parsed_text_file)
    {

        if (is_null($include_parsed_text_file)) {
            array_push($this->openAPINullablesSetToNull, 'include_parsed_text_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_parsed_text_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_parsed_text_file'] = $include_parsed_text_file;

        return $this;
    }

    /**
     * Gets include_additional_files
     *
     * @return bool|null
     */
    public function getIncludeAdditionalFiles()
    {
        return $this->container['include_additional_files'];
    }

    /**
     * Sets include_additional_files
     *
     * @param bool|null $include_additional_files If true, the query will return presigned URLs for additional files. Only relevant for the /user_files_v2 endpoint.
     *
     * @return self
     */
    public function setIncludeAdditionalFiles($include_additional_files)
    {

        if (is_null($include_additional_files)) {
            array_push($this->openAPINullablesSetToNull, 'include_additional_files');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('include_additional_files', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['include_additional_files'] = $include_additional_files;

        return $this;
    }

    /**
     * Gets presigned_url_expiry_time_seconds
     *
     * @return int|null
     */
    public function getPresignedUrlExpiryTimeSeconds()
    {
        return $this->container['presigned_url_expiry_time_seconds'];
    }

    /**
     * Sets presigned_url_expiry_time_seconds
     *
     * @param int|null $presigned_url_expiry_time_seconds The expiry time for the presigned URLs. Only relevant for the /user_files_v2 endpoint.
     *
     * @return self
     */
    public function setPresignedUrlExpiryTimeSeconds($presigned_url_expiry_time_seconds)
    {

        if (is_null($presigned_url_expiry_time_seconds)) {
            throw new \InvalidArgumentException('non-nullable presigned_url_expiry_time_seconds cannot be null');
        }

        $this->container['presigned_url_expiry_time_seconds'] = $presigned_url_expiry_time_seconds;

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


