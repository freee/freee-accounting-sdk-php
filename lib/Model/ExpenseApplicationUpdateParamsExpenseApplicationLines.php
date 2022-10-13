<?php
/**
 * ExpenseApplicationUpdateParamsExpenseApplicationLines
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
 * ExpenseApplicationUpdateParamsExpenseApplicationLines Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseApplicationUpdateParamsExpenseApplicationLines implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'expenseApplicationUpdateParams_expense_application_lines';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'transaction_date' => 'string',
        'description' => 'string',
        'amount' => 'int',
        'expense_application_line_template_id' => 'int',
        'receipt_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'transaction_date' => null,
        'description' => null,
        'amount' => null,
        'expense_application_line_template_id' => null,
        'receipt_id' => null
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
        'id' => 'id',
        'transaction_date' => 'transaction_date',
        'description' => 'description',
        'amount' => 'amount',
        'expense_application_line_template_id' => 'expense_application_line_template_id',
        'receipt_id' => 'receipt_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'transaction_date' => 'setTransactionDate',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'expense_application_line_template_id' => 'setExpenseApplicationLineTemplateId',
        'receipt_id' => 'setReceiptId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'transaction_date' => 'getTransactionDate',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'expense_application_line_template_id' => 'getExpenseApplicationLineTemplateId',
        'receipt_id' => 'getReceiptId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['expense_application_line_template_id'] = $data['expense_application_line_template_id'] ?? null;
        $this->container['receipt_id'] = $data['receipt_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 250)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['expense_application_line_template_id']) && ($this->container['expense_application_line_template_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'expense_application_line_template_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['expense_application_line_template_id']) && ($this->container['expense_application_line_template_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'expense_application_line_template_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['receipt_id']) && ($this->container['receipt_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'receipt_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['receipt_id']) && ($this->container['receipt_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'receipt_id', must be bigger than or equal to 1.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 経費申請の項目行ID: 既存項目行を更新する場合に指定します。IDを指定しない項目行は、新規行として扱われ追加されます。また、expense_application_linesに含まれない既存の項目行は削除されます。更新後も残したい行は、必ず経費申請の項目行IDを指定してexpense_application_linesに含めてください。
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param string|null $transaction_date 日付 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 内容 (250文字以内)
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 250)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be smaller than or equal to 250.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount 金額
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets expense_application_line_template_id
     *
     * @return int|null
     */
    public function getExpenseApplicationLineTemplateId()
    {
        return $this->container['expense_application_line_template_id'];
    }

    /**
     * Sets expense_application_line_template_id
     *
     * @param int|null $expense_application_line_template_id 経費科目ID
     *
     * @return self
     */
    public function setExpenseApplicationLineTemplateId($expense_application_line_template_id)
    {

        if (!is_null($expense_application_line_template_id) && ($expense_application_line_template_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $expense_application_line_template_id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($expense_application_line_template_id) && ($expense_application_line_template_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $expense_application_line_template_id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be bigger than or equal to 1.');
        }

        $this->container['expense_application_line_template_id'] = $expense_application_line_template_id;

        return $this;
    }

    /**
     * Gets receipt_id
     *
     * @return int|null
     */
    public function getReceiptId()
    {
        return $this->container['receipt_id'];
    }

    /**
     * Sets receipt_id
     *
     * @param int|null $receipt_id 証憑ファイルID（ファイルボックスのファイルID）
     *
     * @return self
     */
    public function setReceiptId($receipt_id)
    {

        if (!is_null($receipt_id) && ($receipt_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $receipt_id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($receipt_id) && ($receipt_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $receipt_id when calling ExpenseApplicationUpdateParamsExpenseApplicationLines., must be bigger than or equal to 1.');
        }

        $this->container['receipt_id'] = $receipt_id;

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


