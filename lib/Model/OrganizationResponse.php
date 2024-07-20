<?php
/**
 * OrganizationResponse
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
 * OrganizationResponse Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'nickname' => 'string',
        'remove_branding' => 'bool',
        'custom_branding' => 'object',
        'custom_limits' => 'object',
        'aggregate_file_size' => 'object',
        'aggregate_num_characters' => 'object',
        'aggregate_num_tokens' => 'object',
        'aggregate_num_embeddings' => 'object',
        'aggregate_num_files_by_source' => 'object',
        'aggregate_num_files_by_file_format' => 'object',
        'file_statistics_aggregated_at' => '\DateTime',
        'period_ends_at' => '\DateTime',
        'cancel_at_period_end' => 'bool',
        'connector_settings' => 'object',
        'global_user_config' => 'object',
        'file_sync_usage' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'name' => null,
        'nickname' => null,
        'remove_branding' => null,
        'custom_branding' => null,
        'custom_limits' => null,
        'aggregate_file_size' => null,
        'aggregate_num_characters' => null,
        'aggregate_num_tokens' => null,
        'aggregate_num_embeddings' => null,
        'aggregate_num_files_by_source' => null,
        'aggregate_num_files_by_file_format' => null,
        'file_statistics_aggregated_at' => 'date-time',
        'period_ends_at' => 'date-time',
        'cancel_at_period_end' => null,
        'connector_settings' => null,
        'global_user_config' => null,
        'file_sync_usage' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'nickname' => true,
		'remove_branding' => false,
		'custom_branding' => true,
		'custom_limits' => true,
		'aggregate_file_size' => false,
		'aggregate_num_characters' => false,
		'aggregate_num_tokens' => false,
		'aggregate_num_embeddings' => false,
		'aggregate_num_files_by_source' => false,
		'aggregate_num_files_by_file_format' => false,
		'file_statistics_aggregated_at' => true,
		'period_ends_at' => true,
		'cancel_at_period_end' => true,
		'connector_settings' => false,
		'global_user_config' => false,
		'file_sync_usage' => false,
		'created_at' => false,
		'updated_at' => false
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
        'name' => 'name',
        'nickname' => 'nickname',
        'remove_branding' => 'remove_branding',
        'custom_branding' => 'custom_branding',
        'custom_limits' => 'custom_limits',
        'aggregate_file_size' => 'aggregate_file_size',
        'aggregate_num_characters' => 'aggregate_num_characters',
        'aggregate_num_tokens' => 'aggregate_num_tokens',
        'aggregate_num_embeddings' => 'aggregate_num_embeddings',
        'aggregate_num_files_by_source' => 'aggregate_num_files_by_source',
        'aggregate_num_files_by_file_format' => 'aggregate_num_files_by_file_format',
        'file_statistics_aggregated_at' => 'file_statistics_aggregated_at',
        'period_ends_at' => 'period_ends_at',
        'cancel_at_period_end' => 'cancel_at_period_end',
        'connector_settings' => 'connector_settings',
        'global_user_config' => 'global_user_config',
        'file_sync_usage' => 'file_sync_usage',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'nickname' => 'setNickname',
        'remove_branding' => 'setRemoveBranding',
        'custom_branding' => 'setCustomBranding',
        'custom_limits' => 'setCustomLimits',
        'aggregate_file_size' => 'setAggregateFileSize',
        'aggregate_num_characters' => 'setAggregateNumCharacters',
        'aggregate_num_tokens' => 'setAggregateNumTokens',
        'aggregate_num_embeddings' => 'setAggregateNumEmbeddings',
        'aggregate_num_files_by_source' => 'setAggregateNumFilesBySource',
        'aggregate_num_files_by_file_format' => 'setAggregateNumFilesByFileFormat',
        'file_statistics_aggregated_at' => 'setFileStatisticsAggregatedAt',
        'period_ends_at' => 'setPeriodEndsAt',
        'cancel_at_period_end' => 'setCancelAtPeriodEnd',
        'connector_settings' => 'setConnectorSettings',
        'global_user_config' => 'setGlobalUserConfig',
        'file_sync_usage' => 'setFileSyncUsage',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'nickname' => 'getNickname',
        'remove_branding' => 'getRemoveBranding',
        'custom_branding' => 'getCustomBranding',
        'custom_limits' => 'getCustomLimits',
        'aggregate_file_size' => 'getAggregateFileSize',
        'aggregate_num_characters' => 'getAggregateNumCharacters',
        'aggregate_num_tokens' => 'getAggregateNumTokens',
        'aggregate_num_embeddings' => 'getAggregateNumEmbeddings',
        'aggregate_num_files_by_source' => 'getAggregateNumFilesBySource',
        'aggregate_num_files_by_file_format' => 'getAggregateNumFilesByFileFormat',
        'file_statistics_aggregated_at' => 'getFileStatisticsAggregatedAt',
        'period_ends_at' => 'getPeriodEndsAt',
        'cancel_at_period_end' => 'getCancelAtPeriodEnd',
        'connector_settings' => 'getConnectorSettings',
        'global_user_config' => 'getGlobalUserConfig',
        'file_sync_usage' => 'getFileSyncUsage',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('nickname', $data ?? [], null);
        $this->setIfExists('remove_branding', $data ?? [], null);
        $this->setIfExists('custom_branding', $data ?? [], null);
        $this->setIfExists('custom_limits', $data ?? [], null);
        $this->setIfExists('aggregate_file_size', $data ?? [], null);
        $this->setIfExists('aggregate_num_characters', $data ?? [], null);
        $this->setIfExists('aggregate_num_tokens', $data ?? [], null);
        $this->setIfExists('aggregate_num_embeddings', $data ?? [], null);
        $this->setIfExists('aggregate_num_files_by_source', $data ?? [], null);
        $this->setIfExists('aggregate_num_files_by_file_format', $data ?? [], null);
        $this->setIfExists('file_statistics_aggregated_at', $data ?? [], null);
        $this->setIfExists('period_ends_at', $data ?? [], null);
        $this->setIfExists('cancel_at_period_end', $data ?? [], null);
        $this->setIfExists('connector_settings', $data ?? [], null);
        $this->setIfExists('global_user_config', $data ?? [], null);
        $this->setIfExists('file_sync_usage', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nickname'] === null) {
            $invalidProperties[] = "'nickname' can't be null";
        }
        if ($this->container['remove_branding'] === null) {
            $invalidProperties[] = "'remove_branding' can't be null";
        }
        if ($this->container['custom_branding'] === null) {
            $invalidProperties[] = "'custom_branding' can't be null";
        }
        if ($this->container['custom_limits'] === null) {
            $invalidProperties[] = "'custom_limits' can't be null";
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
        if ($this->container['file_statistics_aggregated_at'] === null) {
            $invalidProperties[] = "'file_statistics_aggregated_at' can't be null";
        }
        if ($this->container['period_ends_at'] === null) {
            $invalidProperties[] = "'period_ends_at' can't be null";
        }
        if ($this->container['cancel_at_period_end'] === null) {
            $invalidProperties[] = "'cancel_at_period_end' can't be null";
        }
        if ($this->container['connector_settings'] === null) {
            $invalidProperties[] = "'connector_settings' can't be null";
        }
        if ($this->container['global_user_config'] === null) {
            $invalidProperties[] = "'global_user_config' can't be null";
        }
        if ($this->container['file_sync_usage'] === null) {
            $invalidProperties[] = "'file_sync_usage' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname nickname
     *
     * @return self
     */
    public function setNickname($nickname)
    {

        if (is_null($nickname)) {
            array_push($this->openAPINullablesSetToNull, 'nickname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nickname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets remove_branding
     *
     * @return bool
     */
    public function getRemoveBranding()
    {
        return $this->container['remove_branding'];
    }

    /**
     * Sets remove_branding
     *
     * @param bool $remove_branding remove_branding
     *
     * @return self
     */
    public function setRemoveBranding($remove_branding)
    {

        if (is_null($remove_branding)) {
            throw new \InvalidArgumentException('non-nullable remove_branding cannot be null');
        }

        $this->container['remove_branding'] = $remove_branding;

        return $this;
    }

    /**
     * Gets custom_branding
     *
     * @return object
     */
    public function getCustomBranding()
    {
        return $this->container['custom_branding'];
    }

    /**
     * Sets custom_branding
     *
     * @param object $custom_branding custom_branding
     *
     * @return self
     */
    public function setCustomBranding($custom_branding)
    {

        if (is_null($custom_branding)) {
            array_push($this->openAPINullablesSetToNull, 'custom_branding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_branding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_branding'] = $custom_branding;

        return $this;
    }

    /**
     * Gets custom_limits
     *
     * @return object
     */
    public function getCustomLimits()
    {
        return $this->container['custom_limits'];
    }

    /**
     * Sets custom_limits
     *
     * @param object $custom_limits custom_limits
     *
     * @return self
     */
    public function setCustomLimits($custom_limits)
    {

        if (is_null($custom_limits)) {
            array_push($this->openAPINullablesSetToNull, 'custom_limits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_limits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['custom_limits'] = $custom_limits;

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
     * Gets file_statistics_aggregated_at
     *
     * @return \DateTime
     */
    public function getFileStatisticsAggregatedAt()
    {
        return $this->container['file_statistics_aggregated_at'];
    }

    /**
     * Sets file_statistics_aggregated_at
     *
     * @param \DateTime $file_statistics_aggregated_at file_statistics_aggregated_at
     *
     * @return self
     */
    public function setFileStatisticsAggregatedAt($file_statistics_aggregated_at)
    {

        if (is_null($file_statistics_aggregated_at)) {
            array_push($this->openAPINullablesSetToNull, 'file_statistics_aggregated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file_statistics_aggregated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['file_statistics_aggregated_at'] = $file_statistics_aggregated_at;

        return $this;
    }

    /**
     * Gets period_ends_at
     *
     * @return \DateTime
     */
    public function getPeriodEndsAt()
    {
        return $this->container['period_ends_at'];
    }

    /**
     * Sets period_ends_at
     *
     * @param \DateTime $period_ends_at period_ends_at
     *
     * @return self
     */
    public function setPeriodEndsAt($period_ends_at)
    {

        if (is_null($period_ends_at)) {
            array_push($this->openAPINullablesSetToNull, 'period_ends_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period_ends_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['period_ends_at'] = $period_ends_at;

        return $this;
    }

    /**
     * Gets cancel_at_period_end
     *
     * @return bool
     */
    public function getCancelAtPeriodEnd()
    {
        return $this->container['cancel_at_period_end'];
    }

    /**
     * Sets cancel_at_period_end
     *
     * @param bool $cancel_at_period_end cancel_at_period_end
     *
     * @return self
     */
    public function setCancelAtPeriodEnd($cancel_at_period_end)
    {

        if (is_null($cancel_at_period_end)) {
            array_push($this->openAPINullablesSetToNull, 'cancel_at_period_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cancel_at_period_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['cancel_at_period_end'] = $cancel_at_period_end;

        return $this;
    }

    /**
     * Gets connector_settings
     *
     * @return object
     */
    public function getConnectorSettings()
    {
        return $this->container['connector_settings'];
    }

    /**
     * Sets connector_settings
     *
     * @param object $connector_settings connector_settings
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
     * Gets global_user_config
     *
     * @return object
     */
    public function getGlobalUserConfig()
    {
        return $this->container['global_user_config'];
    }

    /**
     * Sets global_user_config
     *
     * @param object $global_user_config global_user_config
     *
     * @return self
     */
    public function setGlobalUserConfig($global_user_config)
    {

        if (is_null($global_user_config)) {
            throw new \InvalidArgumentException('non-nullable global_user_config cannot be null');
        }

        $this->container['global_user_config'] = $global_user_config;

        return $this;
    }

    /**
     * Gets file_sync_usage
     *
     * @return object
     */
    public function getFileSyncUsage()
    {
        return $this->container['file_sync_usage'];
    }

    /**
     * Sets file_sync_usage
     *
     * @param object $file_sync_usage file_sync_usage
     *
     * @return self
     */
    public function setFileSyncUsage($file_sync_usage)
    {

        if (is_null($file_sync_usage)) {
            throw new \InvalidArgumentException('non-nullable file_sync_usage cannot be null');
        }

        $this->container['file_sync_usage'] = $file_sync_usage;

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


