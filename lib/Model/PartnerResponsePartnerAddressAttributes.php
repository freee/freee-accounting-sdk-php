<?php
/**
 * PartnerResponsePartnerAddressAttributes
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PartnerResponsePartnerAddressAttributes Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartnerResponsePartnerAddressAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'partnerResponse_partner_address_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prefecture_code' => 'int',
        'street_name1' => 'string',
        'street_name2' => 'string',
        'zipcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prefecture_code' => null,
        'street_name1' => null,
        'street_name2' => null,
        'zipcode' => null
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
        'prefecture_code' => 'prefecture_code',
        'street_name1' => 'street_name1',
        'street_name2' => 'street_name2',
        'zipcode' => 'zipcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prefecture_code' => 'setPrefectureCode',
        'street_name1' => 'setStreetName1',
        'street_name2' => 'setStreetName2',
        'zipcode' => 'setZipcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prefecture_code' => 'getPrefectureCode',
        'street_name1' => 'getStreetName1',
        'street_name2' => 'getStreetName2',
        'zipcode' => 'getZipcode'
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
        $this->container['prefecture_code'] = $data['prefecture_code'] ?? null;
        $this->container['street_name1'] = $data['street_name1'] ?? null;
        $this->container['street_name2'] = $data['street_name2'] ?? null;
        $this->container['zipcode'] = $data['zipcode'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['prefecture_code']) && ($this->container['prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['prefecture_code']) && ($this->container['prefecture_code'] < -1)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be bigger than or equal to -1.";
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
     * Gets prefecture_code
     *
     * @return int|null
     */
    public function getPrefectureCode()
    {
        return $this->container['prefecture_code'];
    }

    /**
     * Sets prefecture_code
     *
     * @param int|null $prefecture_code 都道府県コード（-1: 設定しない、0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return self
     */
    public function setPrefectureCode($prefecture_code)
    {

        if (!is_null($prefecture_code) && ($prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling PartnerResponsePartnerAddressAttributes., must be smaller than or equal to 46.');
        }
        if (!is_null($prefecture_code) && ($prefecture_code < -1)) {
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling PartnerResponsePartnerAddressAttributes., must be bigger than or equal to -1.');
        }

        $this->container['prefecture_code'] = $prefecture_code;

        return $this;
    }

    /**
     * Gets street_name1
     *
     * @return string|null
     */
    public function getStreetName1()
    {
        return $this->container['street_name1'];
    }

    /**
     * Sets street_name1
     *
     * @param string|null $street_name1 市区町村・番地
     *
     * @return self
     */
    public function setStreetName1($street_name1)
    {
        $this->container['street_name1'] = $street_name1;

        return $this;
    }

    /**
     * Gets street_name2
     *
     * @return string|null
     */
    public function getStreetName2()
    {
        return $this->container['street_name2'];
    }

    /**
     * Sets street_name2
     *
     * @param string|null $street_name2 建物名・部屋番号など
     *
     * @return self
     */
    public function setStreetName2($street_name2)
    {
        $this->container['street_name2'] = $street_name2;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode 郵便番号
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

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


