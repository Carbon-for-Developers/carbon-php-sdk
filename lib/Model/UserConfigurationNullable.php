<?php
/**
 * UserConfigurationNullable
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
 * UserConfigurationNullable Class Doc Comment
 *
 * @category Class
 * @description Used to set organization level defaults for user settings. These settings will apply to all users under         the organization that don&#39;t have them defined.
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class UserConfigurationNullable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserConfigurationNullable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_sync_enabled_sources' => '\Carbon\Model\AutoSyncEnabledSourcesProperty',
        'max_files' => 'int',
        'max_files_per_upload' => 'int',
        'max_characters' => 'int',
        'max_characters_per_file' => 'int',
        'max_characters_per_upload' => 'int',
        'auto_sync_interval' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_sync_enabled_sources' => null,
        'max_files' => null,
        'max_files_per_upload' => null,
        'max_characters' => null,
        'max_characters_per_file' => null,
        'max_characters_per_upload' => null,
        'auto_sync_interval' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auto_sync_enabled_sources' => true,
		'max_files' => true,
		'max_files_per_upload' => true,
		'max_characters' => true,
		'max_characters_per_file' => true,
		'max_characters_per_upload' => true,
		'auto_sync_interval' => true
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
        'auto_sync_enabled_sources' => 'auto_sync_enabled_sources',
        'max_files' => 'max_files',
        'max_files_per_upload' => 'max_files_per_upload',
        'max_characters' => 'max_characters',
        'max_characters_per_file' => 'max_characters_per_file',
        'max_characters_per_upload' => 'max_characters_per_upload',
        'auto_sync_interval' => 'auto_sync_interval'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_sync_enabled_sources' => 'setAutoSyncEnabledSources',
        'max_files' => 'setMaxFiles',
        'max_files_per_upload' => 'setMaxFilesPerUpload',
        'max_characters' => 'setMaxCharacters',
        'max_characters_per_file' => 'setMaxCharactersPerFile',
        'max_characters_per_upload' => 'setMaxCharactersPerUpload',
        'auto_sync_interval' => 'setAutoSyncInterval'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_sync_enabled_sources' => 'getAutoSyncEnabledSources',
        'max_files' => 'getMaxFiles',
        'max_files_per_upload' => 'getMaxFilesPerUpload',
        'max_characters' => 'getMaxCharacters',
        'max_characters_per_file' => 'getMaxCharactersPerFile',
        'max_characters_per_upload' => 'getMaxCharactersPerUpload',
        'auto_sync_interval' => 'getAutoSyncInterval'
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
        $this->setIfExists('auto_sync_enabled_sources', $data ?? [], null);
        $this->setIfExists('max_files', $data ?? [], null);
        $this->setIfExists('max_files_per_upload', $data ?? [], null);
        $this->setIfExists('max_characters', $data ?? [], null);
        $this->setIfExists('max_characters_per_file', $data ?? [], null);
        $this->setIfExists('max_characters_per_upload', $data ?? [], null);
        $this->setIfExists('auto_sync_interval', $data ?? [], null);
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

        if (!is_null($this->container['max_files']) && ($this->container['max_files'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_files', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_files_per_upload']) && ($this->container['max_files_per_upload'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_files_per_upload', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_characters']) && ($this->container['max_characters'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_characters', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_characters_per_file']) && ($this->container['max_characters_per_file'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_characters_per_file', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['max_characters_per_upload']) && ($this->container['max_characters_per_upload'] < -1)) {
            $invalidProperties[] = "invalid value for 'max_characters_per_upload', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['auto_sync_interval']) && ($this->container['auto_sync_interval'] < -1)) {
            $invalidProperties[] = "invalid value for 'auto_sync_interval', must be bigger than or equal to -1.";
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
     * Gets auto_sync_enabled_sources
     *
     * @return \Carbon\Model\AutoSyncEnabledSourcesProperty|null
     */
    public function getAutoSyncEnabledSources()
    {
        return $this->container['auto_sync_enabled_sources'];
    }

    /**
     * Sets auto_sync_enabled_sources
     *
     * @param \Carbon\Model\AutoSyncEnabledSourcesProperty|null $auto_sync_enabled_sources auto_sync_enabled_sources
     *
     * @return self
     */
    public function setAutoSyncEnabledSources($auto_sync_enabled_sources)
    {

        if (is_null($auto_sync_enabled_sources)) {
            array_push($this->openAPINullablesSetToNull, 'auto_sync_enabled_sources');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_sync_enabled_sources', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['auto_sync_enabled_sources'] = $auto_sync_enabled_sources;

        return $this;
    }

    /**
     * Gets max_files
     *
     * @return int|null
     */
    public function getMaxFiles()
    {
        return $this->container['max_files'];
    }

    /**
     * Sets max_files
     *
     * @param int|null $max_files Custom file upload limit for the user over *all* user's files across all uploads.          If set, then the user will not be allowed to upload more files than this limit. If not set, or if set to -1,         then the user will have no limit.
     *
     * @return self
     */
    public function setMaxFiles($max_files)
    {

        if (!is_null($max_files) && ($max_files < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_files when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($max_files)) {
            array_push($this->openAPINullablesSetToNull, 'max_files');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_files', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_files'] = $max_files;

        return $this;
    }

    /**
     * Gets max_files_per_upload
     *
     * @return int|null
     */
    public function getMaxFilesPerUpload()
    {
        return $this->container['max_files_per_upload'];
    }

    /**
     * Sets max_files_per_upload
     *
     * @param int|null $max_files_per_upload Custom file upload limit for the user across a single upload.         If set, then the user will not be allowed to upload more files than this limit in a single upload. If not set,         or if set to -1, then the user will have no limit.
     *
     * @return self
     */
    public function setMaxFilesPerUpload($max_files_per_upload)
    {

        if (!is_null($max_files_per_upload) && ($max_files_per_upload < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_files_per_upload when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($max_files_per_upload)) {
            array_push($this->openAPINullablesSetToNull, 'max_files_per_upload');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_files_per_upload', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_files_per_upload'] = $max_files_per_upload;

        return $this;
    }

    /**
     * Gets max_characters
     *
     * @return int|null
     */
    public function getMaxCharacters()
    {
        return $this->container['max_characters'];
    }

    /**
     * Sets max_characters
     *
     * @param int|null $max_characters Custom character upload limit for the user over *all* user's files across all uploads.          If set, then the user will not be allowed to upload more characters than this limit. If not set, or if set to -1,         then the user will have no limit.
     *
     * @return self
     */
    public function setMaxCharacters($max_characters)
    {

        if (!is_null($max_characters) && ($max_characters < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_characters when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($max_characters)) {
            array_push($this->openAPINullablesSetToNull, 'max_characters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_characters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_characters'] = $max_characters;

        return $this;
    }

    /**
     * Gets max_characters_per_file
     *
     * @return int|null
     */
    public function getMaxCharactersPerFile()
    {
        return $this->container['max_characters_per_file'];
    }

    /**
     * Sets max_characters_per_file
     *
     * @param int|null $max_characters_per_file A single file upload from the user can not exceed this character limit.         If set, then the file will not be synced if it exceeds this limit. If not set, or if set to -1, then the          user will have no limit.
     *
     * @return self
     */
    public function setMaxCharactersPerFile($max_characters_per_file)
    {

        if (!is_null($max_characters_per_file) && ($max_characters_per_file < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_characters_per_file when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($max_characters_per_file)) {
            array_push($this->openAPINullablesSetToNull, 'max_characters_per_file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_characters_per_file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_characters_per_file'] = $max_characters_per_file;

        return $this;
    }

    /**
     * Gets max_characters_per_upload
     *
     * @return int|null
     */
    public function getMaxCharactersPerUpload()
    {
        return $this->container['max_characters_per_upload'];
    }

    /**
     * Sets max_characters_per_upload
     *
     * @param int|null $max_characters_per_upload Custom character upload limit for the user across a single upload.         If set, then the user won't be able to sync more than this many characters in one upload.          If not set, or if set to -1, then the user will have no limit.
     *
     * @return self
     */
    public function setMaxCharactersPerUpload($max_characters_per_upload)
    {

        if (!is_null($max_characters_per_upload) && ($max_characters_per_upload < -1)) {
            throw new \InvalidArgumentException('invalid value for $max_characters_per_upload when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($max_characters_per_upload)) {
            array_push($this->openAPINullablesSetToNull, 'max_characters_per_upload');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_characters_per_upload', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_characters_per_upload'] = $max_characters_per_upload;

        return $this;
    }

    /**
     * Gets auto_sync_interval
     *
     * @return int|null
     */
    public function getAutoSyncInterval()
    {
        return $this->container['auto_sync_interval'];
    }

    /**
     * Sets auto_sync_interval
     *
     * @param int|null $auto_sync_interval The interval in hours at which the user's data sources should be synced. If not set or set to -1,          the user will be synced at the organization level interval or default interval if that is also not set.          Must be one of [3, 6, 12, 24]
     *
     * @return self
     */
    public function setAutoSyncInterval($auto_sync_interval)
    {

        if (!is_null($auto_sync_interval) && ($auto_sync_interval < -1)) {
            throw new \InvalidArgumentException('invalid value for $auto_sync_interval when calling UserConfigurationNullable., must be bigger than or equal to -1.');
        }


        if (is_null($auto_sync_interval)) {
            array_push($this->openAPINullablesSetToNull, 'auto_sync_interval');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_sync_interval', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['auto_sync_interval'] = $auto_sync_interval;

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


