<?php
/**
 * UserResponse
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
 * UserResponse Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class UserResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'organization_id' => 'int',
        'organization_supplied_user_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'deleted_at' => '\DateTime',
        'num_files_synced' => 'int',
        'num_characters_synced' => 'int',
        'num_tokens_synced' => 'int',
        'aggregate_file_size' => 'object',
        'aggregate_num_characters' => 'object',
        'aggregate_num_tokens' => 'object',
        'aggregate_num_embeddings' => 'object',
        'aggregate_num_files_by_source' => 'object',
        'aggregate_num_files_by_file_format' => 'object',
        'unique_file_tags' => 'object[]',
        'enabled_features' => 'object',
        'custom_limits' => 'object',
        'auto_sync_enabled_sources' => 'mixed[]',
        'connector_settings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'organization_id' => null,
        'organization_supplied_user_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'deleted_at' => 'date-time',
        'num_files_synced' => null,
        'num_characters_synced' => null,
        'num_tokens_synced' => null,
        'aggregate_file_size' => null,
        'aggregate_num_characters' => null,
        'aggregate_num_tokens' => null,
        'aggregate_num_embeddings' => null,
        'aggregate_num_files_by_source' => null,
        'aggregate_num_files_by_file_format' => null,
        'unique_file_tags' => null,
        'enabled_features' => null,
        'custom_limits' => null,
        'auto_sync_enabled_sources' => null,
        'connector_settings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'organization_id' => false,
		'organization_supplied_user_id' => false,
		'created_at' => false,
		'updated_at' => false,
		'deleted_at' => true,
		'num_files_synced' => false,
		'num_characters_synced' => false,
		'num_tokens_synced' => false,
		'aggregate_file_size' => false,
		'aggregate_num_characters' => false,
		'aggregate_num_tokens' => false,
		'aggregate_num_embeddings' => false,
		'aggregate_num_files_by_source' => false,
		'aggregate_num_files_by_file_format' => false,
		'unique_file_tags' => false,
		'enabled_features' => true,
		'custom_limits' => false,
		'auto_sync_enabled_sources' => false,
		'connector_settings' => false
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
        'id' => 'id',
        'organization_id' => 'organization_id',
        'organization_supplied_user_id' => 'organization_supplied_user_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
        'num_files_synced' => 'num_files_synced',
        'num_characters_synced' => 'num_characters_synced',
        'num_tokens_synced' => 'num_tokens_synced',
        'aggregate_file_size' => 'aggregate_file_size',
        'aggregate_num_characters' => 'aggregate_num_characters',
        'aggregate_num_tokens' => 'aggregate_num_tokens',
        'aggregate_num_embeddings' => 'aggregate_num_embeddings',
        'aggregate_num_files_by_source' => 'aggregate_num_files_by_source',
        'aggregate_num_files_by_file_format' => 'aggregate_num_files_by_file_format',
        'unique_file_tags' => 'unique_file_tags',
        'enabled_features' => 'enabled_features',
        'custom_limits' => 'custom_limits',
        'auto_sync_enabled_sources' => 'auto_sync_enabled_sources',
        'connector_settings' => 'connector_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'organization_id' => 'setOrganizationId',
        'organization_supplied_user_id' => 'setOrganizationSuppliedUserId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'num_files_synced' => 'setNumFilesSynced',
        'num_characters_synced' => 'setNumCharactersSynced',
        'num_tokens_synced' => 'setNumTokensSynced',
        'aggregate_file_size' => 'setAggregateFileSize',
        'aggregate_num_characters' => 'setAggregateNumCharacters',
        'aggregate_num_tokens' => 'setAggregateNumTokens',
        'aggregate_num_embeddings' => 'setAggregateNumEmbeddings',
        'aggregate_num_files_by_source' => 'setAggregateNumFilesBySource',
        'aggregate_num_files_by_file_format' => 'setAggregateNumFilesByFileFormat',
        'unique_file_tags' => 'setUniqueFileTags',
        'enabled_features' => 'setEnabledFeatures',
        'custom_limits' => 'setCustomLimits',
        'auto_sync_enabled_sources' => 'setAutoSyncEnabledSources',
        'connector_settings' => 'setConnectorSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'organization_id' => 'getOrganizationId',
        'organization_supplied_user_id' => 'getOrganizationSuppliedUserId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'num_files_synced' => 'getNumFilesSynced',
        'num_characters_synced' => 'getNumCharactersSynced',
        'num_tokens_synced' => 'getNumTokensSynced',
        'aggregate_file_size' => 'getAggregateFileSize',
        'aggregate_num_characters' => 'getAggregateNumCharacters',
        'aggregate_num_tokens' => 'getAggregateNumTokens',
        'aggregate_num_embeddings' => 'getAggregateNumEmbeddings',
        'aggregate_num_files_by_source' => 'getAggregateNumFilesBySource',
        'aggregate_num_files_by_file_format' => 'getAggregateNumFilesByFileFormat',
        'unique_file_tags' => 'getUniqueFileTags',
        'enabled_features' => 'getEnabledFeatures',
        'custom_limits' => 'getCustomLimits',
        'auto_sync_enabled_sources' => 'getAutoSyncEnabledSources',
        'connector_settings' => 'getConnectorSettings'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('organization_supplied_user_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('num_files_synced', $data ?? [], null);
        $this->setIfExists('num_characters_synced', $data ?? [], null);
        $this->setIfExists('num_tokens_synced', $data ?? [], null);
        $this->setIfExists('aggregate_file_size', $data ?? [], null);
        $this->setIfExists('aggregate_num_characters', $data ?? [], null);
        $this->setIfExists('aggregate_num_tokens', $data ?? [], null);
        $this->setIfExists('aggregate_num_embeddings', $data ?? [], null);
        $this->setIfExists('aggregate_num_files_by_source', $data ?? [], null);
        $this->setIfExists('aggregate_num_files_by_file_format', $data ?? [], null);
        $this->setIfExists('unique_file_tags', $data ?? [], null);
        $this->setIfExists('enabled_features', $data ?? [], null);
        $this->setIfExists('custom_limits', $data ?? [], null);
        $this->setIfExists('auto_sync_enabled_sources', $data ?? [], null);
        $this->setIfExists('connector_settings', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
        }
        if ($this->container['organization_supplied_user_id'] === null) {
            $invalidProperties[] = "'organization_supplied_user_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['deleted_at'] === null) {
            $invalidProperties[] = "'deleted_at' can't be null";
        }
        if ($this->container['num_files_synced'] === null) {
            $invalidProperties[] = "'num_files_synced' can't be null";
        }
        if ($this->container['num_characters_synced'] === null) {
            $invalidProperties[] = "'num_characters_synced' can't be null";
        }
        if ($this->container['num_tokens_synced'] === null) {
            $invalidProperties[] = "'num_tokens_synced' can't be null";
        }
        if ($this->container['aggregate_file_size'] === null) {
            $invalidProperties[] = "'aggregate_file_size' can't be null";
        }
        if ($this->container['aggregate_num_characters'] === null) {
            $invalidProperties[] = "'aggregate_num_characters' can't be null";
        }
        if ($this->container['aggregate_num_tokens'] === null) {
            $invalidProperties[] = "'aggregate_num_tokens' can't be null";
        }
        if ($this->container['aggregate_num_embeddings'] === null) {
            $invalidProperties[] = "'aggregate_num_embeddings' can't be null";
        }
        if ($this->container['aggregate_num_files_by_source'] === null) {
            $invalidProperties[] = "'aggregate_num_files_by_source' can't be null";
        }
        if ($this->container['aggregate_num_files_by_file_format'] === null) {
            $invalidProperties[] = "'aggregate_num_files_by_file_format' can't be null";
        }
        if ($this->container['unique_file_tags'] === null) {
            $invalidProperties[] = "'unique_file_tags' can't be null";
        }
        if ($this->container['enabled_features'] === null) {
            $invalidProperties[] = "'enabled_features' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param int $organization_id organization_id
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {

        if (is_null($organization_id)) {
            throw new \InvalidArgumentException('non-nullable organization_id cannot be null');
        }

        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets organization_supplied_user_id
     *
     * @return string
     */
    public function getOrganizationSuppliedUserId()
    {
        return $this->container['organization_supplied_user_id'];
    }

    /**
     * Sets organization_supplied_user_id
     *
     * @param string $organization_supplied_user_id organization_supplied_user_id
     *
     * @return self
     */
    public function setOrganizationSuppliedUserId($organization_supplied_user_id)
    {

        if (is_null($organization_supplied_user_id)) {
            throw new \InvalidArgumentException('non-nullable organization_supplied_user_id cannot be null');
        }

        $this->container['organization_supplied_user_id'] = $organization_supplied_user_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {

        if (is_null($deleted_at)) {
            array_push($this->openAPINullablesSetToNull, 'deleted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets num_files_synced
     *
     * @return int
     */
    public function getNumFilesSynced()
    {
        return $this->container['num_files_synced'];
    }

    /**
     * Sets num_files_synced
     *
     * @param int $num_files_synced num_files_synced
     *
     * @return self
     */
    public function setNumFilesSynced($num_files_synced)
    {

        if (is_null($num_files_synced)) {
            throw new \InvalidArgumentException('non-nullable num_files_synced cannot be null');
        }

        $this->container['num_files_synced'] = $num_files_synced;

        return $this;
    }

    /**
     * Gets num_characters_synced
     *
     * @return int
     */
    public function getNumCharactersSynced()
    {
        return $this->container['num_characters_synced'];
    }

    /**
     * Sets num_characters_synced
     *
     * @param int $num_characters_synced num_characters_synced
     *
     * @return self
     */
    public function setNumCharactersSynced($num_characters_synced)
    {

        if (is_null($num_characters_synced)) {
            throw new \InvalidArgumentException('non-nullable num_characters_synced cannot be null');
        }

        $this->container['num_characters_synced'] = $num_characters_synced;

        return $this;
    }

    /**
     * Gets num_tokens_synced
     *
     * @return int
     */
    public function getNumTokensSynced()
    {
        return $this->container['num_tokens_synced'];
    }

    /**
     * Sets num_tokens_synced
     *
     * @param int $num_tokens_synced num_tokens_synced
     *
     * @return self
     */
    public function setNumTokensSynced($num_tokens_synced)
    {

        if (is_null($num_tokens_synced)) {
            throw new \InvalidArgumentException('non-nullable num_tokens_synced cannot be null');
        }

        $this->container['num_tokens_synced'] = $num_tokens_synced;

        return $this;
    }

    /**
     * Gets aggregate_file_size
     *
     * @return object
     */
    public function getAggregateFileSize()
    {
        return $this->container['aggregate_file_size'];
    }

    /**
     * Sets aggregate_file_size
     *
     * @param object $aggregate_file_size aggregate_file_size
     *
     * @return self
     */
    public function setAggregateFileSize($aggregate_file_size)
    {

        if (is_null($aggregate_file_size)) {
            throw new \InvalidArgumentException('non-nullable aggregate_file_size cannot be null');
        }

        $this->container['aggregate_file_size'] = $aggregate_file_size;

        return $this;
    }

    /**
     * Gets aggregate_num_characters
     *
     * @return object
     */
    public function getAggregateNumCharacters()
    {
        return $this->container['aggregate_num_characters'];
    }

    /**
     * Sets aggregate_num_characters
     *
     * @param object $aggregate_num_characters aggregate_num_characters
     *
     * @return self
     */
    public function setAggregateNumCharacters($aggregate_num_characters)
    {

        if (is_null($aggregate_num_characters)) {
            throw new \InvalidArgumentException('non-nullable aggregate_num_characters cannot be null');
        }

        $this->container['aggregate_num_characters'] = $aggregate_num_characters;

        return $this;
    }

    /**
     * Gets aggregate_num_tokens
     *
     * @return object
     */
    public function getAggregateNumTokens()
    {
        return $this->container['aggregate_num_tokens'];
    }

    /**
     * Sets aggregate_num_tokens
     *
     * @param object $aggregate_num_tokens aggregate_num_tokens
     *
     * @return self
     */
    public function setAggregateNumTokens($aggregate_num_tokens)
    {

        if (is_null($aggregate_num_tokens)) {
            throw new \InvalidArgumentException('non-nullable aggregate_num_tokens cannot be null');
        }

        $this->container['aggregate_num_tokens'] = $aggregate_num_tokens;

        return $this;
    }

    /**
     * Gets aggregate_num_embeddings
     *
     * @return object
     */
    public function getAggregateNumEmbeddings()
    {
        return $this->container['aggregate_num_embeddings'];
    }

    /**
     * Sets aggregate_num_embeddings
     *
     * @param object $aggregate_num_embeddings aggregate_num_embeddings
     *
     * @return self
     */
    public function setAggregateNumEmbeddings($aggregate_num_embeddings)
    {

        if (is_null($aggregate_num_embeddings)) {
            throw new \InvalidArgumentException('non-nullable aggregate_num_embeddings cannot be null');
        }

        $this->container['aggregate_num_embeddings'] = $aggregate_num_embeddings;

        return $this;
    }

    /**
     * Gets aggregate_num_files_by_source
     *
     * @return object
     */
    public function getAggregateNumFilesBySource()
    {
        return $this->container['aggregate_num_files_by_source'];
    }

    /**
     * Sets aggregate_num_files_by_source
     *
     * @param object $aggregate_num_files_by_source aggregate_num_files_by_source
     *
     * @return self
     */
    public function setAggregateNumFilesBySource($aggregate_num_files_by_source)
    {

        if (is_null($aggregate_num_files_by_source)) {
            throw new \InvalidArgumentException('non-nullable aggregate_num_files_by_source cannot be null');
        }

        $this->container['aggregate_num_files_by_source'] = $aggregate_num_files_by_source;

        return $this;
    }

    /**
     * Gets aggregate_num_files_by_file_format
     *
     * @return object
     */
    public function getAggregateNumFilesByFileFormat()
    {
        return $this->container['aggregate_num_files_by_file_format'];
    }

    /**
     * Sets aggregate_num_files_by_file_format
     *
     * @param object $aggregate_num_files_by_file_format aggregate_num_files_by_file_format
     *
     * @return self
     */
    public function setAggregateNumFilesByFileFormat($aggregate_num_files_by_file_format)
    {

        if (is_null($aggregate_num_files_by_file_format)) {
            throw new \InvalidArgumentException('non-nullable aggregate_num_files_by_file_format cannot be null');
        }

        $this->container['aggregate_num_files_by_file_format'] = $aggregate_num_files_by_file_format;

        return $this;
    }

    /**
     * Gets unique_file_tags
     *
     * @return object[]
     */
    public function getUniqueFileTags()
    {
        return $this->container['unique_file_tags'];
    }

    /**
     * Sets unique_file_tags
     *
     * @param object[] $unique_file_tags unique_file_tags
     *
     * @return self
     */
    public function setUniqueFileTags($unique_file_tags)
    {

        if (is_null($unique_file_tags)) {
            throw new \InvalidArgumentException('non-nullable unique_file_tags cannot be null');
        }

        $this->container['unique_file_tags'] = $unique_file_tags;

        return $this;
    }

    /**
     * Gets enabled_features
     *
     * @return object
     */
    public function getEnabledFeatures()
    {
        return $this->container['enabled_features'];
    }

    /**
     * Sets enabled_features
     *
     * @param object $enabled_features enabled_features
     *
     * @return self
     */
    public function setEnabledFeatures($enabled_features)
    {

        if (is_null($enabled_features)) {
            array_push($this->openAPINullablesSetToNull, 'enabled_features');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enabled_features', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enabled_features'] = $enabled_features;

        return $this;
    }

    /**
     * Gets custom_limits
     *
     * @return object|null
     */
    public function getCustomLimits()
    {
        return $this->container['custom_limits'];
    }

    /**
     * Sets custom_limits
     *
     * @param object|null $custom_limits custom_limits
     *
     * @return self
     */
    public function setCustomLimits($custom_limits)
    {

        if (is_null($custom_limits)) {
            throw new \InvalidArgumentException('non-nullable custom_limits cannot be null');
        }

        $this->container['custom_limits'] = $custom_limits;

        return $this;
    }

    /**
     * Gets auto_sync_enabled_sources
     *
     * @return mixed[]|null
     */
    public function getAutoSyncEnabledSources()
    {
        return $this->container['auto_sync_enabled_sources'];
    }

    /**
     * Sets auto_sync_enabled_sources
     *
     * @param mixed[]|null $auto_sync_enabled_sources auto_sync_enabled_sources
     *
     * @return self
     */
    public function setAutoSyncEnabledSources($auto_sync_enabled_sources)
    {

        if (is_null($auto_sync_enabled_sources)) {
            throw new \InvalidArgumentException('non-nullable auto_sync_enabled_sources cannot be null');
        }

        $this->container['auto_sync_enabled_sources'] = $auto_sync_enabled_sources;

        return $this;
    }

    /**
     * Gets connector_settings
     *
     * @return object|null
     */
    public function getConnectorSettings()
    {
        return $this->container['connector_settings'];
    }

    /**
     * Sets connector_settings
     *
     * @param object|null $connector_settings connector_settings
     *
     * @return self
     */
    public function setConnectorSettings($connector_settings)
    {

        if (is_null($connector_settings)) {
            throw new \InvalidArgumentException('non-nullable connector_settings cannot be null');
        }

        $this->container['connector_settings'] = $connector_settings;

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


