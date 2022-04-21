<?php
/**
 * TrialCrThreeYearsResponse
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
 * TrialCrThreeYearsResponse Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrialCrThreeYearsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialCrThreeYearsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trial_cr_three_years' => '\Freee\Accounting\Model\TrialCrThreeYearsResponseTrialCrThreeYears',
        'up_to_date' => 'bool',
        'up_to_date_reasons' => '\Freee\Accounting\Model\JournalsResponseJournalsUpToDateReasons[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trial_cr_three_years' => null,
        'up_to_date' => null,
        'up_to_date_reasons' => null
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
        'trial_cr_three_years' => 'trial_cr_three_years',
        'up_to_date' => 'up_to_date',
        'up_to_date_reasons' => 'up_to_date_reasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trial_cr_three_years' => 'setTrialCrThreeYears',
        'up_to_date' => 'setUpToDate',
        'up_to_date_reasons' => 'setUpToDateReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trial_cr_three_years' => 'getTrialCrThreeYears',
        'up_to_date' => 'getUpToDate',
        'up_to_date_reasons' => 'getUpToDateReasons'
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
        $this->container['trial_cr_three_years'] = $data['trial_cr_three_years'] ?? null;
        $this->container['up_to_date'] = $data['up_to_date'] ?? null;
        $this->container['up_to_date_reasons'] = $data['up_to_date_reasons'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trial_cr_three_years'] === null) {
            $invalidProperties[] = "'trial_cr_three_years' can't be null";
        }
        if ($this->container['up_to_date'] === null) {
            $invalidProperties[] = "'up_to_date' can't be null";
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
     * Gets trial_cr_three_years
     *
     * @return \Freee\Accounting\Model\TrialCrThreeYearsResponseTrialCrThreeYears
     */
    public function getTrialCrThreeYears()
    {
        return $this->container['trial_cr_three_years'];
    }

    /**
     * Sets trial_cr_three_years
     *
     * @param \Freee\Accounting\Model\TrialCrThreeYearsResponseTrialCrThreeYears $trial_cr_three_years trial_cr_three_years
     *
     * @return self
     */
    public function setTrialCrThreeYears($trial_cr_three_years)
    {
        $this->container['trial_cr_three_years'] = $trial_cr_three_years;

        return $this;
    }

    /**
     * Gets up_to_date
     *
     * @return bool
     */
    public function getUpToDate()
    {
        return $this->container['up_to_date'];
    }

    /**
     * Sets up_to_date
     *
     * @param bool $up_to_date 集計結果が最新かどうか
     *
     * @return self
     */
    public function setUpToDate($up_to_date)
    {
        $this->container['up_to_date'] = $up_to_date;

        return $this;
    }

    /**
     * Gets up_to_date_reasons
     *
     * @return \Freee\Accounting\Model\JournalsResponseJournalsUpToDateReasons[]|null
     */
    public function getUpToDateReasons()
    {
        return $this->container['up_to_date_reasons'];
    }

    /**
     * Sets up_to_date_reasons
     *
     * @param \Freee\Accounting\Model\JournalsResponseJournalsUpToDateReasons[]|null $up_to_date_reasons 集計が最新でない場合の要因情報
     *
     * @return self
     */
    public function setUpToDateReasons($up_to_date_reasons)
    {
        $this->container['up_to_date_reasons'] = $up_to_date_reasons;

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


