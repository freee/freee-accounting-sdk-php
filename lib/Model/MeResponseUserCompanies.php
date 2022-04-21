<?php
/**
 * MeResponseUserCompanies
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-beta
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * MeResponseUserCompanies Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MeResponseUserCompanies implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'meResponse_user_companies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'advisor_id' => 'int',
        'display_name' => 'string',
        'id' => 'int',
        'role' => 'string',
        'use_custom_role' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'advisor_id' => null,
        'display_name' => null,
        'id' => null,
        'role' => null,
        'use_custom_role' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'advisor_id' => 'advisor_id',
        'display_name' => 'display_name',
        'id' => 'id',
        'role' => 'role',
        'use_custom_role' => 'use_custom_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advisor_id' => 'setAdvisorId',
        'display_name' => 'setDisplayName',
        'id' => 'setId',
        'role' => 'setRole',
        'use_custom_role' => 'setUseCustomRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advisor_id' => 'getAdvisorId',
        'display_name' => 'getDisplayName',
        'id' => 'getId',
        'role' => 'getRole',
        'use_custom_role' => 'getUseCustomRole'
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

    const ROLE_ADMIN = 'admin';
    const ROLE_SIMPLE_ACCOUNTING = 'simple_accounting';
    const ROLE_SELF_ONLY = 'self_only';
    const ROLE_READ_ONLY = 'read_only';
    const ROLE_WORKFLOW = 'workflow';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_SIMPLE_ACCOUNTING,
            self::ROLE_SELF_ONLY,
            self::ROLE_READ_ONLY,
            self::ROLE_WORKFLOW,
        ];
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
        $this->container['advisor_id'] = $data['advisor_id'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['role'] = $data['role'] ?? null;
        $this->container['use_custom_role'] = $data['use_custom_role'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['advisor_id']) && ($this->container['advisor_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'advisor_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['advisor_id']) && ($this->container['advisor_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'advisor_id', must be bigger than or equal to 1.";
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role', must be one of '%s'",
                $this->container['role'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['use_custom_role'] === null) {
            $invalidProperties[] = "'use_custom_role' can't be null";
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
     * Gets advisor_id
     *
     * @return int|null
     */
    public function getAdvisorId()
    {
        return $this->container['advisor_id'];
    }

    /**
     * Sets advisor_id
     *
     * @param int|null $advisor_id アドバイザープロファイルID（アドバイザー事業所で無い場合にnullになります）
     *
     * @return self
     */
    public function setAdvisorId($advisor_id)
    {

        if (!is_null($advisor_id) && ($advisor_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $advisor_id when calling MeResponseUserCompanies., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($advisor_id) && ($advisor_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $advisor_id when calling MeResponseUserCompanies., must be bigger than or equal to 1.');
        }

        $this->container['advisor_id'] = $advisor_id;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name 表示名
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
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
     * @param int $id 事業所ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling MeResponseUserCompanies., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling MeResponseUserCompanies., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role ユーザーの権限 <ul> <li>admin: 管理者</li> <li>simple_accounting: 一般</li> <li>self_only: 取引登録のみ</li> <li>read_only: 閲覧のみ</li> <li>workflow: 申請・承認</li> </ul>
     *
     * @return self
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role', must be one of '%s'",
                    $role,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets use_custom_role
     *
     * @return bool
     */
    public function getUseCustomRole()
    {
        return $this->container['use_custom_role'];
    }

    /**
     * Sets use_custom_role
     *
     * @param bool $use_custom_role カスタム権限（true: 使用する、false: 使用しない）
     *
     * @return self
     */
    public function setUseCustomRole($use_custom_role)
    {
        $this->container['use_custom_role'] = $use_custom_role;

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


