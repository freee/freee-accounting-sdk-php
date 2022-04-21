<?php
/**
 * WalletTxn
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
 * WalletTxn Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WalletTxn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'wallet_txn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'int',
        'balance' => 'int',
        'company_id' => 'int',
        'date' => 'string',
        'description' => 'string',
        'due_amount' => 'int',
        'entry_side' => 'string',
        'id' => 'int',
        'rule_matched' => 'bool',
        'status' => 'int',
        'walletable_id' => 'int',
        'walletable_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => 'int64',
        'balance' => null,
        'company_id' => null,
        'date' => null,
        'description' => null,
        'due_amount' => null,
        'entry_side' => null,
        'id' => null,
        'rule_matched' => null,
        'status' => null,
        'walletable_id' => null,
        'walletable_type' => null
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
        'amount' => 'amount',
        'balance' => 'balance',
        'company_id' => 'company_id',
        'date' => 'date',
        'description' => 'description',
        'due_amount' => 'due_amount',
        'entry_side' => 'entry_side',
        'id' => 'id',
        'rule_matched' => 'rule_matched',
        'status' => 'status',
        'walletable_id' => 'walletable_id',
        'walletable_type' => 'walletable_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'company_id' => 'setCompanyId',
        'date' => 'setDate',
        'description' => 'setDescription',
        'due_amount' => 'setDueAmount',
        'entry_side' => 'setEntrySide',
        'id' => 'setId',
        'rule_matched' => 'setRuleMatched',
        'status' => 'setStatus',
        'walletable_id' => 'setWalletableId',
        'walletable_type' => 'setWalletableType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'company_id' => 'getCompanyId',
        'date' => 'getDate',
        'description' => 'getDescription',
        'due_amount' => 'getDueAmount',
        'entry_side' => 'getEntrySide',
        'id' => 'getId',
        'rule_matched' => 'getRuleMatched',
        'status' => 'getStatus',
        'walletable_id' => 'getWalletableId',
        'walletable_type' => 'getWalletableType'
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

    const ENTRY_SIDE_INCOME = 'income';
    const ENTRY_SIDE_EXPENSE = 'expense';
    const WALLETABLE_TYPE_BANK_ACCOUNT = 'bank_account';
    const WALLETABLE_TYPE_CREDIT_CARD = 'credit_card';
    const WALLETABLE_TYPE_WALLET = 'wallet';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntrySideAllowableValues()
    {
        return [
            self::ENTRY_SIDE_INCOME,
            self::ENTRY_SIDE_EXPENSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWalletableTypeAllowableValues()
    {
        return [
            self::WALLETABLE_TYPE_BANK_ACCOUNT,
            self::WALLETABLE_TYPE_CREDIT_CARD,
            self::WALLETABLE_TYPE_WALLET,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['due_amount'] = $data['due_amount'] ?? null;
        $this->container['entry_side'] = $data['entry_side'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['rule_matched'] = $data['rule_matched'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['walletable_id'] = $data['walletable_id'] ?? null;
        $this->container['walletable_type'] = $data['walletable_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 9223372036854775807.";
        }

        if (($this->container['amount'] < -9223372036854775808)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to -9223372036854775808.";
        }

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['due_amount'] === null) {
            $invalidProperties[] = "'due_amount' can't be null";
        }
        if ($this->container['entry_side'] === null) {
            $invalidProperties[] = "'entry_side' can't be null";
        }
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!is_null($this->container['entry_side']) && !in_array($this->container['entry_side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entry_side', must be one of '%s'",
                $this->container['entry_side'],
                implode("', '", $allowedValues)
            );
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

        if ($this->container['rule_matched'] === null) {
            $invalidProperties[] = "'rule_matched' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (($this->container['status'] > 6)) {
            $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 6.";
        }

        if (($this->container['status'] < 1)) {
            $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
        }

        if ($this->container['walletable_id'] === null) {
            $invalidProperties[] = "'walletable_id' can't be null";
        }
        if (($this->container['walletable_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'walletable_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['walletable_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'walletable_id', must be bigger than or equal to 1.";
        }

        if ($this->container['walletable_type'] === null) {
            $invalidProperties[] = "'walletable_type' can't be null";
        }
        $allowedValues = $this->getWalletableTypeAllowableValues();
        if (!is_null($this->container['walletable_type']) && !in_array($this->container['walletable_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'walletable_type', must be one of '%s'",
                $this->container['walletable_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 取引金額
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (($amount > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling WalletTxn., must be smaller than or equal to 9223372036854775807.');
        }
        if (($amount < -9223372036854775808)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling WalletTxn., must be bigger than or equal to -9223372036854775808.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance 残高(銀行口座等)
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $company_id when calling WalletTxn., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling WalletTxn., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date 取引日(yyyy-mm-dd)
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * @param string $description 取引内容
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets due_amount
     *
     * @return int
     */
    public function getDueAmount()
    {
        return $this->container['due_amount'];
    }

    /**
     * Sets due_amount
     *
     * @param int $due_amount 未決済金額
     *
     * @return self
     */
    public function setDueAmount($due_amount)
    {
        $this->container['due_amount'] = $due_amount;

        return $this;
    }

    /**
     * Gets entry_side
     *
     * @return string
     */
    public function getEntrySide()
    {
        return $this->container['entry_side'];
    }

    /**
     * Sets entry_side
     *
     * @param string $entry_side 入金／出金 (入金: income, 出金: expense)
     *
     * @return self
     */
    public function setEntrySide($entry_side)
    {
        $allowedValues = $this->getEntrySideAllowableValues();
        if (!in_array($entry_side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entry_side', must be one of '%s'",
                    $entry_side,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entry_side'] = $entry_side;

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
     * @param int $id 明細ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WalletTxn., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling WalletTxn., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rule_matched
     *
     * @return bool
     */
    public function getRuleMatched()
    {
        return $this->container['rule_matched'];
    }

    /**
     * Sets rule_matched
     *
     * @param bool $rule_matched 登録時に<a href=\"https://support.freee.co.jp/hc/ja/articles/202848350-明細の自動登録ルールを設定する\" target=\"_blank\">自動登録ルールの設定</a>が適用され、登録処理が実行された場合、 trueになります。〜を推測する、〜の消込をするの条件の場合は一致してもfalseになります。
     *
     * @return self
     */
    public function setRuleMatched($rule_matched)
    {
        $this->container['rule_matched'] = $rule_matched;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 明細のステータス（消込待ち: 1, 消込済み: 2, 無視: 3, 消込中: 4, 対象外: 6）
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (($status > 6)) {
            throw new \InvalidArgumentException('invalid value for $status when calling WalletTxn., must be smaller than or equal to 6.');
        }
        if (($status < 1)) {
            throw new \InvalidArgumentException('invalid value for $status when calling WalletTxn., must be bigger than or equal to 1.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets walletable_id
     *
     * @return int
     */
    public function getWalletableId()
    {
        return $this->container['walletable_id'];
    }

    /**
     * Sets walletable_id
     *
     * @param int $walletable_id 口座ID
     *
     * @return self
     */
    public function setWalletableId($walletable_id)
    {

        if (($walletable_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $walletable_id when calling WalletTxn., must be smaller than or equal to 2147483647.');
        }
        if (($walletable_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $walletable_id when calling WalletTxn., must be bigger than or equal to 1.');
        }

        $this->container['walletable_id'] = $walletable_id;

        return $this;
    }

    /**
     * Gets walletable_type
     *
     * @return string
     */
    public function getWalletableType()
    {
        return $this->container['walletable_type'];
    }

    /**
     * Sets walletable_type
     *
     * @param string $walletable_type 口座区分 (銀行口座: bank_account, クレジットカード: credit_card, 現金: wallet)
     *
     * @return self
     */
    public function setWalletableType($walletable_type)
    {
        $allowedValues = $this->getWalletableTypeAllowableValues();
        if (!in_array($walletable_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'walletable_type', must be one of '%s'",
                    $walletable_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['walletable_type'] = $walletable_type;

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


