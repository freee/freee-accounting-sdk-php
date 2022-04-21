<?php
/**
 * UserParams
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
 * UserParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'userParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_name' => 'string',
        'first_name' => 'string',
        'first_name_kana' => 'string',
        'last_name' => 'string',
        'last_name_kana' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_name' => null,
        'first_name' => null,
        'first_name_kana' => null,
        'last_name' => null,
        'last_name_kana' => null
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
        'display_name' => 'display_name',
        'first_name' => 'first_name',
        'first_name_kana' => 'first_name_kana',
        'last_name' => 'last_name',
        'last_name_kana' => 'last_name_kana'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'first_name' => 'setFirstName',
        'first_name_kana' => 'setFirstNameKana',
        'last_name' => 'setLastName',
        'last_name_kana' => 'setLastNameKana'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'first_name' => 'getFirstName',
        'first_name_kana' => 'getFirstNameKana',
        'last_name' => 'getLastName',
        'last_name_kana' => 'getLastNameKana'
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['first_name_kana'] = $data['first_name_kana'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['last_name_kana'] = $data['last_name_kana'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 20)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 20)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['first_name_kana']) && (mb_strlen($this->container['first_name_kana']) > 20)) {
            $invalidProperties[] = "invalid value for 'first_name_kana', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 20)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['last_name_kana']) && (mb_strlen($this->container['last_name_kana']) > 20)) {
            $invalidProperties[] = "invalid value for 'last_name_kana', the character length must be smaller than or equal to 20.";
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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name 表示名 (20文字以内)
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (!is_null($display_name) && (mb_strlen($display_name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling UserParams., must be smaller than or equal to 20.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 氏名（名） (20文字以内)
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (mb_strlen($first_name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling UserParams., must be smaller than or equal to 20.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets first_name_kana
     *
     * @return string|null
     */
    public function getFirstNameKana()
    {
        return $this->container['first_name_kana'];
    }

    /**
     * Sets first_name_kana
     *
     * @param string|null $first_name_kana 氏名（カナ・名） (20文字以内)
     *
     * @return self
     */
    public function setFirstNameKana($first_name_kana)
    {
        if (!is_null($first_name_kana) && (mb_strlen($first_name_kana) > 20)) {
            throw new \InvalidArgumentException('invalid length for $first_name_kana when calling UserParams., must be smaller than or equal to 20.');
        }

        $this->container['first_name_kana'] = $first_name_kana;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name 氏名（姓） (20文字以内)
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 20)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling UserParams., must be smaller than or equal to 20.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets last_name_kana
     *
     * @return string|null
     */
    public function getLastNameKana()
    {
        return $this->container['last_name_kana'];
    }

    /**
     * Sets last_name_kana
     *
     * @param string|null $last_name_kana 氏名（カナ・姓） (20文字以内)
     *
     * @return self
     */
    public function setLastNameKana($last_name_kana)
    {
        if (!is_null($last_name_kana) && (mb_strlen($last_name_kana) > 20)) {
            throw new \InvalidArgumentException('invalid length for $last_name_kana when calling UserParams., must be smaller than or equal to 20.');
        }

        $this->container['last_name_kana'] = $last_name_kana;

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


