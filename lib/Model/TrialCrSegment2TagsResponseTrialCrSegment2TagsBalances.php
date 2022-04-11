<?php
/**
 * TrialCrSegment2TagsResponseTrialCrSegment2TagsBalances
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
 * TrialCrSegment2TagsResponseTrialCrSegment2TagsBalances Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrialCrSegment2TagsResponseTrialCrSegment2TagsBalances implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialCrSegment_2TagsResponse_trial_cr_segment_2_tags_balances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_category_name' => 'string',
        'account_group_name' => 'string',
        'account_item_id' => 'int',
        'account_item_name' => 'string',
        'closing_balance' => 'int',
        'hierarchy_level' => 'int',
        'parent_account_category_name' => 'string',
        'segment_2_tags' => '\Freee\Accounting\Model\TrialCrSegment2TagsResponseTrialCrSegment2TagsSegment2Tags[]',
        'total_line' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_category_name' => null,
        'account_group_name' => null,
        'account_item_id' => null,
        'account_item_name' => null,
        'closing_balance' => null,
        'hierarchy_level' => null,
        'parent_account_category_name' => null,
        'segment_2_tags' => null,
        'total_line' => null
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
        'account_category_name' => 'account_category_name',
        'account_group_name' => 'account_group_name',
        'account_item_id' => 'account_item_id',
        'account_item_name' => 'account_item_name',
        'closing_balance' => 'closing_balance',
        'hierarchy_level' => 'hierarchy_level',
        'parent_account_category_name' => 'parent_account_category_name',
        'segment_2_tags' => 'segment_2_tags',
        'total_line' => 'total_line'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_category_name' => 'setAccountCategoryName',
        'account_group_name' => 'setAccountGroupName',
        'account_item_id' => 'setAccountItemId',
        'account_item_name' => 'setAccountItemName',
        'closing_balance' => 'setClosingBalance',
        'hierarchy_level' => 'setHierarchyLevel',
        'parent_account_category_name' => 'setParentAccountCategoryName',
        'segment_2_tags' => 'setSegment2Tags',
        'total_line' => 'setTotalLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_category_name' => 'getAccountCategoryName',
        'account_group_name' => 'getAccountGroupName',
        'account_item_id' => 'getAccountItemId',
        'account_item_name' => 'getAccountItemName',
        'closing_balance' => 'getClosingBalance',
        'hierarchy_level' => 'getHierarchyLevel',
        'parent_account_category_name' => 'getParentAccountCategoryName',
        'segment_2_tags' => 'getSegment2Tags',
        'total_line' => 'getTotalLine'
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
        $this->container['account_category_name'] = $data['account_category_name'] ?? null;
        $this->container['account_group_name'] = $data['account_group_name'] ?? null;
        $this->container['account_item_id'] = $data['account_item_id'] ?? null;
        $this->container['account_item_name'] = $data['account_item_name'] ?? null;
        $this->container['closing_balance'] = $data['closing_balance'] ?? null;
        $this->container['hierarchy_level'] = $data['hierarchy_level'] ?? null;
        $this->container['parent_account_category_name'] = $data['parent_account_category_name'] ?? null;
        $this->container['segment_2_tags'] = $data['segment_2_tags'] ?? null;
        $this->container['total_line'] = $data['total_line'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['account_item_id']) && ($this->container['account_item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['account_item_id']) && ($this->container['account_item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'account_item_id', must be bigger than or equal to 1.";
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
     * Gets account_category_name
     *
     * @return string|null
     */
    public function getAccountCategoryName()
    {
        return $this->container['account_category_name'];
    }

    /**
     * Sets account_category_name
     *
     * @param string|null $account_category_name 勘定科目カテゴリー名
     *
     * @return self
     */
    public function setAccountCategoryName($account_category_name)
    {
        $this->container['account_category_name'] = $account_category_name;

        return $this;
    }

    /**
     * Gets account_group_name
     *
     * @return string|null
     */
    public function getAccountGroupName()
    {
        return $this->container['account_group_name'];
    }

    /**
     * Sets account_group_name
     *
     * @param string|null $account_group_name 決算書表示名(account_item_display_type:group指定時に決算書表示名の時のみ含まれる)
     *
     * @return self
     */
    public function setAccountGroupName($account_group_name)
    {
        $this->container['account_group_name'] = $account_group_name;

        return $this;
    }

    /**
     * Gets account_item_id
     *
     * @return int|null
     */
    public function getAccountItemId()
    {
        return $this->container['account_item_id'];
    }

    /**
     * Sets account_item_id
     *
     * @param int|null $account_item_id 勘定科目ID(勘定科目の時のみ含まれる)
     *
     * @return self
     */
    public function setAccountItemId($account_item_id)
    {

        if (!is_null($account_item_id) && ($account_item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling TrialCrSegment2TagsResponseTrialCrSegment2TagsBalances., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($account_item_id) && ($account_item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $account_item_id when calling TrialCrSegment2TagsResponseTrialCrSegment2TagsBalances., must be bigger than or equal to 1.');
        }

        $this->container['account_item_id'] = $account_item_id;

        return $this;
    }

    /**
     * Gets account_item_name
     *
     * @return string|null
     */
    public function getAccountItemName()
    {
        return $this->container['account_item_name'];
    }

    /**
     * Sets account_item_name
     *
     * @param string|null $account_item_name 勘定科目名(勘定科目の時のみ含まれる)
     *
     * @return self
     */
    public function setAccountItemName($account_item_name)
    {
        $this->container['account_item_name'] = $account_item_name;

        return $this;
    }

    /**
     * Gets closing_balance
     *
     * @return int|null
     */
    public function getClosingBalance()
    {
        return $this->container['closing_balance'];
    }

    /**
     * Sets closing_balance
     *
     * @param int|null $closing_balance 期末残高
     *
     * @return self
     */
    public function setClosingBalance($closing_balance)
    {
        $this->container['closing_balance'] = $closing_balance;

        return $this;
    }

    /**
     * Gets hierarchy_level
     *
     * @return int|null
     */
    public function getHierarchyLevel()
    {
        return $this->container['hierarchy_level'];
    }

    /**
     * Sets hierarchy_level
     *
     * @param int|null $hierarchy_level 階層レベル
     *
     * @return self
     */
    public function setHierarchyLevel($hierarchy_level)
    {
        $this->container['hierarchy_level'] = $hierarchy_level;

        return $this;
    }

    /**
     * Gets parent_account_category_name
     *
     * @return string|null
     */
    public function getParentAccountCategoryName()
    {
        return $this->container['parent_account_category_name'];
    }

    /**
     * Sets parent_account_category_name
     *
     * @param string|null $parent_account_category_name 上位勘定科目カテゴリー名(勘定科目カテゴリーの時のみ、上層が存在する場合含まれる)
     *
     * @return self
     */
    public function setParentAccountCategoryName($parent_account_category_name)
    {
        $this->container['parent_account_category_name'] = $parent_account_category_name;

        return $this;
    }

    /**
     * Gets segment_2_tags
     *
     * @return \Freee\Accounting\Model\TrialCrSegment2TagsResponseTrialCrSegment2TagsSegment2Tags[]|null
     */
    public function getSegment2Tags()
    {
        return $this->container['segment_2_tags'];
    }

    /**
     * Sets segment_2_tags
     *
     * @param \Freee\Accounting\Model\TrialCrSegment2TagsResponseTrialCrSegment2TagsSegment2Tags[]|null $segment_2_tags セグメント2タグ
     *
     * @return self
     */
    public function setSegment2Tags($segment_2_tags)
    {
        $this->container['segment_2_tags'] = $segment_2_tags;

        return $this;
    }

    /**
     * Gets total_line
     *
     * @return bool|null
     */
    public function getTotalLine()
    {
        return $this->container['total_line'];
    }

    /**
     * Sets total_line
     *
     * @param bool|null $total_line 合計行(勘定科目カテゴリーの時のみ含まれる)
     *
     * @return self
     */
    public function setTotalLine($total_line)
    {
        $this->container['total_line'] = $total_line;

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


