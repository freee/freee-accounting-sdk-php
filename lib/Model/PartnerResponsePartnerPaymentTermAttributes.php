<?php
/**
 * PartnerResponsePartnerPaymentTermAttributes
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
 * OpenAPI Generator version: 5.4.0
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
 * PartnerResponsePartnerPaymentTermAttributes Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartnerResponsePartnerPaymentTermAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'partnerResponse_partner_payment_term_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cutoff_day' => 'int',
        'additional_months' => 'int',
        'fixed_day' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cutoff_day' => null,
        'additional_months' => null,
        'fixed_day' => null
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
        'cutoff_day' => 'cutoff_day',
        'additional_months' => 'additional_months',
        'fixed_day' => 'fixed_day'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cutoff_day' => 'setCutoffDay',
        'additional_months' => 'setAdditionalMonths',
        'fixed_day' => 'setFixedDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cutoff_day' => 'getCutoffDay',
        'additional_months' => 'getAdditionalMonths',
        'fixed_day' => 'getFixedDay'
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
        $this->container['cutoff_day'] = $data['cutoff_day'] ?? null;
        $this->container['additional_months'] = $data['additional_months'] ?? null;
        $this->container['fixed_day'] = $data['fixed_day'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cutoff_day']) && ($this->container['cutoff_day'] > 32)) {
            $invalidProperties[] = "invalid value for 'cutoff_day', must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['cutoff_day']) && ($this->container['cutoff_day'] < 1)) {
            $invalidProperties[] = "invalid value for 'cutoff_day', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['additional_months']) && ($this->container['additional_months'] > 6)) {
            $invalidProperties[] = "invalid value for 'additional_months', must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['additional_months']) && ($this->container['additional_months'] < 1)) {
            $invalidProperties[] = "invalid value for 'additional_months', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['fixed_day']) && ($this->container['fixed_day'] > 32)) {
            $invalidProperties[] = "invalid value for 'fixed_day', must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['fixed_day']) && ($this->container['fixed_day'] < 1)) {
            $invalidProperties[] = "invalid value for 'fixed_day', must be bigger than or equal to 1.";
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
     * Gets cutoff_day
     *
     * @return int|null
     */
    public function getCutoffDay()
    {
        return $this->container['cutoff_day'];
    }

    /**
     * Sets cutoff_day
     *
     * @param int|null $cutoff_day 締め日（29, 30, 31日の末日を指定する場合は、32。）
     *
     * @return self
     */
    public function setCutoffDay($cutoff_day)
    {

        if (!is_null($cutoff_day) && ($cutoff_day > 32)) {
            throw new \InvalidArgumentException('invalid value for $cutoff_day when calling PartnerResponsePartnerPaymentTermAttributes., must be smaller than or equal to 32.');
        }
        if (!is_null($cutoff_day) && ($cutoff_day < 1)) {
            throw new \InvalidArgumentException('invalid value for $cutoff_day when calling PartnerResponsePartnerPaymentTermAttributes., must be bigger than or equal to 1.');
        }

        $this->container['cutoff_day'] = $cutoff_day;

        return $this;
    }

    /**
     * Gets additional_months
     *
     * @return int|null
     */
    public function getAdditionalMonths()
    {
        return $this->container['additional_months'];
    }

    /**
     * Sets additional_months
     *
     * @param int|null $additional_months 支払月
     *
     * @return self
     */
    public function setAdditionalMonths($additional_months)
    {

        if (!is_null($additional_months) && ($additional_months > 6)) {
            throw new \InvalidArgumentException('invalid value for $additional_months when calling PartnerResponsePartnerPaymentTermAttributes., must be smaller than or equal to 6.');
        }
        if (!is_null($additional_months) && ($additional_months < 1)) {
            throw new \InvalidArgumentException('invalid value for $additional_months when calling PartnerResponsePartnerPaymentTermAttributes., must be bigger than or equal to 1.');
        }

        $this->container['additional_months'] = $additional_months;

        return $this;
    }

    /**
     * Gets fixed_day
     *
     * @return int|null
     */
    public function getFixedDay()
    {
        return $this->container['fixed_day'];
    }

    /**
     * Sets fixed_day
     *
     * @param int|null $fixed_day 支払日（29, 30, 31日の末日を指定する場合は、32。）
     *
     * @return self
     */
    public function setFixedDay($fixed_day)
    {

        if (!is_null($fixed_day) && ($fixed_day > 32)) {
            throw new \InvalidArgumentException('invalid value for $fixed_day when calling PartnerResponsePartnerPaymentTermAttributes., must be smaller than or equal to 32.');
        }
        if (!is_null($fixed_day) && ($fixed_day < 1)) {
            throw new \InvalidArgumentException('invalid value for $fixed_day when calling PartnerResponsePartnerPaymentTermAttributes., must be bigger than or equal to 1.');
        }

        $this->container['fixed_day'] = $fixed_day;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


