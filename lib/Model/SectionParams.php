<?php
/**
 * SectionParams
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
 * SectionParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SectionParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sectionParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'long_name' => 'string',
        'name' => 'string',
        'parent_id' => 'int',
        'shortcut1' => 'string',
        'shortcut2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'long_name' => null,
        'name' => null,
        'parent_id' => null,
        'shortcut1' => null,
        'shortcut2' => null
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
        'company_id' => 'company_id',
        'long_name' => 'long_name',
        'name' => 'name',
        'parent_id' => 'parent_id',
        'shortcut1' => 'shortcut1',
        'shortcut2' => 'shortcut2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'long_name' => 'setLongName',
        'name' => 'setName',
        'parent_id' => 'setParentId',
        'shortcut1' => 'setShortcut1',
        'shortcut2' => 'setShortcut2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'long_name' => 'getLongName',
        'name' => 'getName',
        'parent_id' => 'getParentId',
        'shortcut1' => 'getShortcut1',
        'shortcut2' => 'getShortcut2'
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
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['long_name'] = $data['long_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['shortcut1'] = $data['shortcut1'] ?? null;
        $this->container['shortcut2'] = $data['shortcut2'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['long_name']) && (mb_strlen($this->container['long_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'long_name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 30)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['parent_id']) && ($this->container['parent_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'parent_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shortcut1']) && (mb_strlen($this->container['shortcut1']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut1', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['shortcut2']) && (mb_strlen($this->container['shortcut2']) > 20)) {
            $invalidProperties[] = "invalid value for 'shortcut2', the character length must be smaller than or equal to 20.";
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
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {

        if (($company_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling SectionParams., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling SectionParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets long_name
     *
     * @return string|null
     */
    public function getLongName()
    {
        return $this->container['long_name'];
    }

    /**
     * Sets long_name
     *
     * @param string|null $long_name 正式名称 (255文字以内)
     *
     * @return self
     */
    public function setLongName($long_name)
    {
        if (!is_null($long_name) && (mb_strlen($long_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $long_name when calling SectionParams., must be smaller than or equal to 255.');
        }

        $this->container['long_name'] = $long_name;

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
     * @param string $name 部門名 (30文字以内)
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SectionParams., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id 親部門ID (個人:プレミアムプラン、法人:ベーシックプラン以上)
     *
     * @return self
     */
    public function setParentId($parent_id)
    {

        if (!is_null($parent_id) && ($parent_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling SectionParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($parent_id) && ($parent_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $parent_id when calling SectionParams., must be bigger than or equal to 1.');
        }

        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets shortcut1
     *
     * @return string|null
     */
    public function getShortcut1()
    {
        return $this->container['shortcut1'];
    }

    /**
     * Sets shortcut1
     *
     * @param string|null $shortcut1 ショートカット１ (20文字以内)
     *
     * @return self
     */
    public function setShortcut1($shortcut1)
    {
        if (!is_null($shortcut1) && (mb_strlen($shortcut1) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut1 when calling SectionParams., must be smaller than or equal to 20.');
        }

        $this->container['shortcut1'] = $shortcut1;

        return $this;
    }

    /**
     * Gets shortcut2
     *
     * @return string|null
     */
    public function getShortcut2()
    {
        return $this->container['shortcut2'];
    }

    /**
     * Sets shortcut2
     *
     * @param string|null $shortcut2 ショートカット２ (20文字以内)
     *
     * @return self
     */
    public function setShortcut2($shortcut2)
    {
        if (!is_null($shortcut2) && (mb_strlen($shortcut2) > 20)) {
            throw new \InvalidArgumentException('invalid length for $shortcut2 when calling SectionParams., must be smaller than or equal to 20.');
        }

        $this->container['shortcut2'] = $shortcut2;

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


