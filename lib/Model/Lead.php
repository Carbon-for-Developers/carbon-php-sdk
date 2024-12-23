<?php
/**
 * Lead
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
 * Lead Class Doc Comment
 *
 * @category Class
 * @package  Carbon
 * @implements \ArrayAccess<string, mixed>
 */
class Lead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'id' => 'string',
        'owner' => '\Carbon\Model\PartialOwner',
        'source' => 'string',
        'status' => 'string',
        'company' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'addresses' => '\Carbon\Model\Address[]',
        'phone_numbers' => '\Carbon\Model\PhoneNumber[]',
        'emails' => '\Carbon\Model\Email[]',
        'converted_at' => 'string',
        'converted_account' => '\Carbon\Model\PartialAccountNullable',
        'converted_contact' => '\Carbon\Model\PartialContactNullable',
        'last_activity_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'is_deleted' => 'bool',
        'tasks' => '\Carbon\Model\Task[]',
        'events' => '\Carbon\Model\Event[]',
        'remote_data' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'id' => null,
        'owner' => null,
        'source' => null,
        'status' => null,
        'company' => null,
        'first_name' => null,
        'last_name' => null,
        'addresses' => null,
        'phone_numbers' => null,
        'emails' => null,
        'converted_at' => null,
        'converted_account' => null,
        'converted_contact' => null,
        'last_activity_at' => null,
        'created_at' => null,
        'updated_at' => null,
        'is_deleted' => null,
        'tasks' => null,
        'events' => null,
        'remote_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => true,
		'description' => true,
		'id' => false,
		'owner' => false,
		'source' => true,
		'status' => true,
		'company' => true,
		'first_name' => true,
		'last_name' => true,
		'addresses' => false,
		'phone_numbers' => false,
		'emails' => false,
		'converted_at' => true,
		'converted_account' => true,
		'converted_contact' => true,
		'last_activity_at' => true,
		'created_at' => false,
		'updated_at' => false,
		'is_deleted' => false,
		'tasks' => true,
		'events' => true,
		'remote_data' => true
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
        'title' => 'title',
        'description' => 'description',
        'id' => 'id',
        'owner' => 'owner',
        'source' => 'source',
        'status' => 'status',
        'company' => 'company',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'addresses' => 'addresses',
        'phone_numbers' => 'phone_numbers',
        'emails' => 'emails',
        'converted_at' => 'converted_at',
        'converted_account' => 'converted_account',
        'converted_contact' => 'converted_contact',
        'last_activity_at' => 'last_activity_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'is_deleted' => 'is_deleted',
        'tasks' => 'tasks',
        'events' => 'events',
        'remote_data' => 'remote_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'id' => 'setId',
        'owner' => 'setOwner',
        'source' => 'setSource',
        'status' => 'setStatus',
        'company' => 'setCompany',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'addresses' => 'setAddresses',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails',
        'converted_at' => 'setConvertedAt',
        'converted_account' => 'setConvertedAccount',
        'converted_contact' => 'setConvertedContact',
        'last_activity_at' => 'setLastActivityAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_deleted' => 'setIsDeleted',
        'tasks' => 'setTasks',
        'events' => 'setEvents',
        'remote_data' => 'setRemoteData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'id' => 'getId',
        'owner' => 'getOwner',
        'source' => 'getSource',
        'status' => 'getStatus',
        'company' => 'getCompany',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'addresses' => 'getAddresses',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails',
        'converted_at' => 'getConvertedAt',
        'converted_account' => 'getConvertedAccount',
        'converted_contact' => 'getConvertedContact',
        'last_activity_at' => 'getLastActivityAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_deleted' => 'getIsDeleted',
        'tasks' => 'getTasks',
        'events' => 'getEvents',
        'remote_data' => 'getRemoteData'
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('converted_at', $data ?? [], null);
        $this->setIfExists('converted_account', $data ?? [], null);
        $this->setIfExists('converted_contact', $data ?? [], null);
        $this->setIfExists('last_activity_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('tasks', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('remote_data', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['phone_numbers'] === null) {
            $invalidProperties[] = "'phone_numbers' can't be null";
        }
        if ($this->container['emails'] === null) {
            $invalidProperties[] = "'emails' can't be null";
        }
        if ($this->container['converted_at'] === null) {
            $invalidProperties[] = "'converted_at' can't be null";
        }
        if ($this->container['converted_account'] === null) {
            $invalidProperties[] = "'converted_account' can't be null";
        }
        if ($this->container['converted_contact'] === null) {
            $invalidProperties[] = "'converted_contact' can't be null";
        }
        if ($this->container['last_activity_at'] === null) {
            $invalidProperties[] = "'last_activity_at' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['is_deleted'] === null) {
            $invalidProperties[] = "'is_deleted' can't be null";
        }
        if ($this->container['remote_data'] === null) {
            $invalidProperties[] = "'remote_data' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
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
     * Gets owner
     *
     * @return \Carbon\Model\PartialOwner
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Carbon\Model\PartialOwner $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {

        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }

        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return self
     */
    public function setCompany($company)
    {

        if (is_null($company)) {
            array_push($this->openAPINullablesSetToNull, 'company');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {

        if (is_null($first_name)) {
            array_push($this->openAPINullablesSetToNull, 'first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {

        if (is_null($last_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Carbon\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Carbon\Model\Address[] $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {

        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }

        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Carbon\Model\PhoneNumber[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Carbon\Model\PhoneNumber[] $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {

        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }

        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Carbon\Model\Email[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Carbon\Model\Email[] $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {

        if (is_null($emails)) {
            throw new \InvalidArgumentException('non-nullable emails cannot be null');
        }

        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets converted_at
     *
     * @return string
     */
    public function getConvertedAt()
    {
        return $this->container['converted_at'];
    }

    /**
     * Sets converted_at
     *
     * @param string $converted_at converted_at
     *
     * @return self
     */
    public function setConvertedAt($converted_at)
    {

        if (is_null($converted_at)) {
            array_push($this->openAPINullablesSetToNull, 'converted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('converted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['converted_at'] = $converted_at;

        return $this;
    }

    /**
     * Gets converted_account
     *
     * @return \Carbon\Model\PartialAccountNullable
     */
    public function getConvertedAccount()
    {
        return $this->container['converted_account'];
    }

    /**
     * Sets converted_account
     *
     * @param \Carbon\Model\PartialAccountNullable $converted_account converted_account
     *
     * @return self
     */
    public function setConvertedAccount($converted_account)
    {

        if (is_null($converted_account)) {
            array_push($this->openAPINullablesSetToNull, 'converted_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('converted_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['converted_account'] = $converted_account;

        return $this;
    }

    /**
     * Gets converted_contact
     *
     * @return \Carbon\Model\PartialContactNullable
     */
    public function getConvertedContact()
    {
        return $this->container['converted_contact'];
    }

    /**
     * Sets converted_contact
     *
     * @param \Carbon\Model\PartialContactNullable $converted_contact converted_contact
     *
     * @return self
     */
    public function setConvertedContact($converted_contact)
    {

        if (is_null($converted_contact)) {
            array_push($this->openAPINullablesSetToNull, 'converted_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('converted_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['converted_contact'] = $converted_contact;

        return $this;
    }

    /**
     * Gets last_activity_at
     *
     * @return string
     */
    public function getLastActivityAt()
    {
        return $this->container['last_activity_at'];
    }

    /**
     * Sets last_activity_at
     *
     * @param string $last_activity_at last_activity_at
     *
     * @return self
     */
    public function setLastActivityAt($last_activity_at)
    {

        if (is_null($last_activity_at)) {
            array_push($this->openAPINullablesSetToNull, 'last_activity_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_activity_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_activity_at'] = $last_activity_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
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
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
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
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {

        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }

        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets tasks
     *
     * @return \Carbon\Model\Task[]|null
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     *
     * @param \Carbon\Model\Task[]|null $tasks tasks
     *
     * @return self
     */
    public function setTasks($tasks)
    {

        if (is_null($tasks)) {
            array_push($this->openAPINullablesSetToNull, 'tasks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tasks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['tasks'] = $tasks;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Carbon\Model\Event[]|null
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Carbon\Model\Event[]|null $events events
     *
     * @return self
     */
    public function setEvents($events)
    {

        if (is_null($events)) {
            array_push($this->openAPINullablesSetToNull, 'events');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('events', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets remote_data
     *
     * @return object
     */
    public function getRemoteData()
    {
        return $this->container['remote_data'];
    }

    /**
     * Sets remote_data
     *
     * @param object $remote_data remote_data
     *
     * @return self
     */
    public function setRemoteData($remote_data)
    {

        if (is_null($remote_data)) {
            array_push($this->openAPINullablesSetToNull, 'remote_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remote_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['remote_data'] = $remote_data;

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


