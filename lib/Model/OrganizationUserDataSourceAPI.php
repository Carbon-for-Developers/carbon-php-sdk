<?php
/**
 * OrganizationUserDataSourceAPI
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
 * OrganizationUserDataSourceAPI Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationUserDataSourceAPI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationUserDataSourceAPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'data_source_external_id' => 'string',
        'data_source_type' => '\Carbon\Model\DataSourceType',
        'token' => 'object',
        'sync_status' => '\Carbon\Model\DataSourceSyncStatuses',
        'source_items_synced_at' => '\DateTime',
        'organization_user_id' => 'int',
        'organization_id' => 'int',
        'organization_supplied_user_id' => 'string',
        'revoked_access' => 'bool',
        'last_synced_at' => '\DateTime',
        'last_sync_action' => '\Carbon\Model\DataSourceLastSyncActions',
        'enable_auto_sync' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'files_synced_at' => '\DateTime'
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
        'data_source_external_id' => null,
        'data_source_type' => null,
        'token' => null,
        'sync_status' => null,
        'source_items_synced_at' => 'date-time',
        'organization_user_id' => null,
        'organization_id' => null,
        'organization_supplied_user_id' => null,
        'revoked_access' => null,
        'last_synced_at' => 'date-time',
        'last_sync_action' => null,
        'enable_auto_sync' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'files_synced_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'data_source_external_id' => true,
		'data_source_type' => false,
		'token' => true,
		'sync_status' => false,
		'source_items_synced_at' => true,
		'organization_user_id' => false,
		'organization_id' => false,
		'organization_supplied_user_id' => false,
		'revoked_access' => false,
		'last_synced_at' => false,
		'last_sync_action' => false,
		'enable_auto_sync' => true,
		'created_at' => false,
		'updated_at' => false,
		'files_synced_at' => true
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
        'data_source_external_id' => 'data_source_external_id',
        'data_source_type' => 'data_source_type',
        'token' => 'token',
        'sync_status' => 'sync_status',
        'source_items_synced_at' => 'source_items_synced_at',
        'organization_user_id' => 'organization_user_id',
        'organization_id' => 'organization_id',
        'organization_supplied_user_id' => 'organization_supplied_user_id',
        'revoked_access' => 'revoked_access',
        'last_synced_at' => 'last_synced_at',
        'last_sync_action' => 'last_sync_action',
        'enable_auto_sync' => 'enable_auto_sync',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'files_synced_at' => 'files_synced_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'data_source_external_id' => 'setDataSourceExternalId',
        'data_source_type' => 'setDataSourceType',
        'token' => 'setToken',
        'sync_status' => 'setSyncStatus',
        'source_items_synced_at' => 'setSourceItemsSyncedAt',
        'organization_user_id' => 'setOrganizationUserId',
        'organization_id' => 'setOrganizationId',
        'organization_supplied_user_id' => 'setOrganizationSuppliedUserId',
        'revoked_access' => 'setRevokedAccess',
        'last_synced_at' => 'setLastSyncedAt',
        'last_sync_action' => 'setLastSyncAction',
        'enable_auto_sync' => 'setEnableAutoSync',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'files_synced_at' => 'setFilesSyncedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'data_source_external_id' => 'getDataSourceExternalId',
        'data_source_type' => 'getDataSourceType',
        'token' => 'getToken',
        'sync_status' => 'getSyncStatus',
        'source_items_synced_at' => 'getSourceItemsSyncedAt',
        'organization_user_id' => 'getOrganizationUserId',
        'organization_id' => 'getOrganizationId',
        'organization_supplied_user_id' => 'getOrganizationSuppliedUserId',
        'revoked_access' => 'getRevokedAccess',
        'last_synced_at' => 'getLastSyncedAt',
        'last_sync_action' => 'getLastSyncAction',
        'enable_auto_sync' => 'getEnableAutoSync',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'files_synced_at' => 'getFilesSyncedAt'
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
        $this->setIfExists('data_source_external_id', $data ?? [], null);
        $this->setIfExists('data_source_type', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('sync_status', $data ?? [], null);
        $this->setIfExists('source_items_synced_at', $data ?? [], null);
        $this->setIfExists('organization_user_id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('organization_supplied_user_id', $data ?? [], null);
        $this->setIfExists('revoked_access', $data ?? [], null);
        $this->setIfExists('last_synced_at', $data ?? [], null);
        $this->setIfExists('last_sync_action', $data ?? [], null);
        $this->setIfExists('enable_auto_sync', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('files_synced_at', $data ?? [], null);
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
        if ($this->container['data_source_external_id'] === null) {
            $invalidProperties[] = "'data_source_external_id' can't be null";
        }
        if ($this->container['data_source_type'] === null) {
            $invalidProperties[] = "'data_source_type' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['sync_status'] === null) {
            $invalidProperties[] = "'sync_status' can't be null";
        }
        if ($this->container['source_items_synced_at'] === null) {
            $invalidProperties[] = "'source_items_synced_at' can't be null";
        }
        if ($this->container['organization_user_id'] === null) {
            $invalidProperties[] = "'organization_user_id' can't be null";
        }
        if ($this->container['organization_id'] === null) {
            $invalidProperties[] = "'organization_id' can't be null";
        }
        if ($this->container['organization_supplied_user_id'] === null) {
            $invalidProperties[] = "'organization_supplied_user_id' can't be null";
        }
        if ($this->container['revoked_access'] === null) {
            $invalidProperties[] = "'revoked_access' can't be null";
        }
        if ($this->container['last_synced_at'] === null) {
            $invalidProperties[] = "'last_synced_at' can't be null";
        }
        if ($this->container['last_sync_action'] === null) {
            $invalidProperties[] = "'last_sync_action' can't be null";
        }
        if ($this->container['enable_auto_sync'] === null) {
            $invalidProperties[] = "'enable_auto_sync' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['files_synced_at'] === null) {
            $invalidProperties[] = "'files_synced_at' can't be null";
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
     * Gets data_source_external_id
     *
     * @return string
     */
    public function getDataSourceExternalId()
    {
        return $this->container['data_source_external_id'];
    }

    /**
     * Sets data_source_external_id
     *
     * @param string $data_source_external_id data_source_external_id
     *
     * @return self
     */
    public function setDataSourceExternalId($data_source_external_id)
    {

        if (is_null($data_source_external_id)) {
            array_push($this->openAPINullablesSetToNull, 'data_source_external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_source_external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['data_source_external_id'] = $data_source_external_id;

        return $this;
    }

    /**
     * Gets data_source_type
     *
     * @return \Carbon\Model\DataSourceType
     */
    public function getDataSourceType()
    {
        return $this->container['data_source_type'];
    }

    /**
     * Sets data_source_type
     *
     * @param \Carbon\Model\DataSourceType $data_source_type data_source_type
     *
     * @return self
     */
    public function setDataSourceType($data_source_type)
    {

        if (is_null($data_source_type)) {
            throw new \InvalidArgumentException('non-nullable data_source_type cannot be null');
        }

        $this->container['data_source_type'] = $data_source_type;

        return $this;
    }

    /**
     * Gets token
     *
     * @return object
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param object $token token
     *
     * @return self
     */
    public function setToken($token)
    {

        if (is_null($token)) {
            array_push($this->openAPINullablesSetToNull, 'token');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('token', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets sync_status
     *
     * @return \Carbon\Model\DataSourceSyncStatuses
     */
    public function getSyncStatus()
    {
        return $this->container['sync_status'];
    }

    /**
     * Sets sync_status
     *
     * @param \Carbon\Model\DataSourceSyncStatuses $sync_status sync_status
     *
     * @return self
     */
    public function setSyncStatus($sync_status)
    {

        if (is_null($sync_status)) {
            throw new \InvalidArgumentException('non-nullable sync_status cannot be null');
        }

        $this->container['sync_status'] = $sync_status;

        return $this;
    }

    /**
     * Gets source_items_synced_at
     *
     * @return \DateTime
     */
    public function getSourceItemsSyncedAt()
    {
        return $this->container['source_items_synced_at'];
    }

    /**
     * Sets source_items_synced_at
     *
     * @param \DateTime $source_items_synced_at source_items_synced_at
     *
     * @return self
     */
    public function setSourceItemsSyncedAt($source_items_synced_at)
    {

        if (is_null($source_items_synced_at)) {
            array_push($this->openAPINullablesSetToNull, 'source_items_synced_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_items_synced_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['source_items_synced_at'] = $source_items_synced_at;

        return $this;
    }

    /**
     * Gets organization_user_id
     *
     * @return int
     */
    public function getOrganizationUserId()
    {
        return $this->container['organization_user_id'];
    }

    /**
     * Sets organization_user_id
     *
     * @param int $organization_user_id organization_user_id
     *
     * @return self
     */
    public function setOrganizationUserId($organization_user_id)
    {

        if (is_null($organization_user_id)) {
            throw new \InvalidArgumentException('non-nullable organization_user_id cannot be null');
        }

        $this->container['organization_user_id'] = $organization_user_id;

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
     * Gets revoked_access
     *
     * @return bool
     */
    public function getRevokedAccess()
    {
        return $this->container['revoked_access'];
    }

    /**
     * Sets revoked_access
     *
     * @param bool $revoked_access revoked_access
     *
     * @return self
     */
    public function setRevokedAccess($revoked_access)
    {

        if (is_null($revoked_access)) {
            throw new \InvalidArgumentException('non-nullable revoked_access cannot be null');
        }

        $this->container['revoked_access'] = $revoked_access;

        return $this;
    }

    /**
     * Gets last_synced_at
     *
     * @return \DateTime
     */
    public function getLastSyncedAt()
    {
        return $this->container['last_synced_at'];
    }

    /**
     * Sets last_synced_at
     *
     * @param \DateTime $last_synced_at last_synced_at
     *
     * @return self
     */
    public function setLastSyncedAt($last_synced_at)
    {

        if (is_null($last_synced_at)) {
            throw new \InvalidArgumentException('non-nullable last_synced_at cannot be null');
        }

        $this->container['last_synced_at'] = $last_synced_at;

        return $this;
    }

    /**
     * Gets last_sync_action
     *
     * @return \Carbon\Model\DataSourceLastSyncActions
     */
    public function getLastSyncAction()
    {
        return $this->container['last_sync_action'];
    }

    /**
     * Sets last_sync_action
     *
     * @param \Carbon\Model\DataSourceLastSyncActions $last_sync_action last_sync_action
     *
     * @return self
     */
    public function setLastSyncAction($last_sync_action)
    {

        if (is_null($last_sync_action)) {
            throw new \InvalidArgumentException('non-nullable last_sync_action cannot be null');
        }

        $this->container['last_sync_action'] = $last_sync_action;

        return $this;
    }

    /**
     * Gets enable_auto_sync
     *
     * @return bool
     */
    public function getEnableAutoSync()
    {
        return $this->container['enable_auto_sync'];
    }

    /**
     * Sets enable_auto_sync
     *
     * @param bool $enable_auto_sync enable_auto_sync
     *
     * @return self
     */
    public function setEnableAutoSync($enable_auto_sync)
    {

        if (is_null($enable_auto_sync)) {
            array_push($this->openAPINullablesSetToNull, 'enable_auto_sync');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_auto_sync', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['enable_auto_sync'] = $enable_auto_sync;

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
     * Gets files_synced_at
     *
     * @return \DateTime
     */
    public function getFilesSyncedAt()
    {
        return $this->container['files_synced_at'];
    }

    /**
     * Sets files_synced_at
     *
     * @param \DateTime $files_synced_at files_synced_at
     *
     * @return self
     */
    public function setFilesSyncedAt($files_synced_at)
    {

        if (is_null($files_synced_at)) {
            array_push($this->openAPINullablesSetToNull, 'files_synced_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('files_synced_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['files_synced_at'] = $files_synced_at;

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


