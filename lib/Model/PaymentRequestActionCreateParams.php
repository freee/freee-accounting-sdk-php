<?php
/**
 * PaymentRequestActionCreateParams
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
 * OpenAPI Generator version: 5.3.1
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
 * PaymentRequestActionCreateParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentRequestActionCreateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paymentRequestActionCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approval_action' => 'string',
        'company_id' => 'int',
        'next_approver_id' => 'int',
        'target_round' => 'int',
        'target_step_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approval_action' => null,
        'company_id' => null,
        'next_approver_id' => null,
        'target_round' => null,
        'target_step_id' => null
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
        'approval_action' => 'approval_action',
        'company_id' => 'company_id',
        'next_approver_id' => 'next_approver_id',
        'target_round' => 'target_round',
        'target_step_id' => 'target_step_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approval_action' => 'setApprovalAction',
        'company_id' => 'setCompanyId',
        'next_approver_id' => 'setNextApproverId',
        'target_round' => 'setTargetRound',
        'target_step_id' => 'setTargetStepId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approval_action' => 'getApprovalAction',
        'company_id' => 'getCompanyId',
        'next_approver_id' => 'getNextApproverId',
        'target_round' => 'getTargetRound',
        'target_step_id' => 'getTargetStepId'
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

    const APPROVAL_ACTION_APPROVE = 'approve';
    const APPROVAL_ACTION_FORCE_APPROVE = 'force_approve';
    const APPROVAL_ACTION_CANCEL = 'cancel';
    const APPROVAL_ACTION_REJECT = 'reject';
    const APPROVAL_ACTION_FEEDBACK = 'feedback';
    const APPROVAL_ACTION_FORCE_FEEDBACK = 'force_feedback';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApprovalActionAllowableValues()
    {
        return [
            self::APPROVAL_ACTION_APPROVE,
            self::APPROVAL_ACTION_FORCE_APPROVE,
            self::APPROVAL_ACTION_CANCEL,
            self::APPROVAL_ACTION_REJECT,
            self::APPROVAL_ACTION_FEEDBACK,
            self::APPROVAL_ACTION_FORCE_FEEDBACK,
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
        $this->container['approval_action'] = $data['approval_action'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['next_approver_id'] = $data['next_approver_id'] ?? null;
        $this->container['target_round'] = $data['target_round'] ?? null;
        $this->container['target_step_id'] = $data['target_step_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['approval_action'] === null) {
            $invalidProperties[] = "'approval_action' can't be null";
        }
        $allowedValues = $this->getApprovalActionAllowableValues();
        if (!is_null($this->container['approval_action']) && !in_array($this->container['approval_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'approval_action', must be one of '%s'",
                $this->container['approval_action'],
                implode("', '", $allowedValues)
            );
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

        if (!is_null($this->container['next_approver_id']) && ($this->container['next_approver_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'next_approver_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['next_approver_id']) && ($this->container['next_approver_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'next_approver_id', must be bigger than or equal to 1.";
        }

        if ($this->container['target_round'] === null) {
            $invalidProperties[] = "'target_round' can't be null";
        }
        if (($this->container['target_round'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'target_round', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['target_round'] < 0)) {
            $invalidProperties[] = "invalid value for 'target_round', must be bigger than or equal to 0.";
        }

        if ($this->container['target_step_id'] === null) {
            $invalidProperties[] = "'target_step_id' can't be null";
        }
        if (($this->container['target_step_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'target_step_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['target_step_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'target_step_id', must be bigger than or equal to 1.";
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
     * Gets approval_action
     *
     * @return string
     */
    public function getApprovalAction()
    {
        return $this->container['approval_action'];
    }

    /**
     * Sets approval_action
     *
     * @param string $approval_action 操作(approve: 承認する、force_approve: 代理承認する、cancel: 申請を取り消す、reject: 却下する、feedback: 申請者へ差し戻す、force_feedback: 承認済み・却下済みを取り消す)
     *
     * @return self
     */
    public function setApprovalAction($approval_action)
    {
        $allowedValues = $this->getApprovalActionAllowableValues();
        if (!in_array($approval_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'approval_action', must be one of '%s'",
                    $approval_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['approval_action'] = $approval_action;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling PaymentRequestActionCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling PaymentRequestActionCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets next_approver_id
     *
     * @return int|null
     */
    public function getNextApproverId()
    {
        return $this->container['next_approver_id'];
    }

    /**
     * Sets next_approver_id
     *
     * @param int|null $next_approver_id 次ステップの承認者のユーザーID
     *
     * @return self
     */
    public function setNextApproverId($next_approver_id)
    {

        if (!is_null($next_approver_id) && ($next_approver_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $next_approver_id when calling PaymentRequestActionCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($next_approver_id) && ($next_approver_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $next_approver_id when calling PaymentRequestActionCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['next_approver_id'] = $next_approver_id;

        return $this;
    }

    /**
     * Gets target_round
     *
     * @return int
     */
    public function getTargetRound()
    {
        return $this->container['target_round'];
    }

    /**
     * Sets target_round
     *
     * @param int $target_round 対象round。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。支払依頼の取得APIレスポンス.current_roundを送信してください。
     *
     * @return self
     */
    public function setTargetRound($target_round)
    {

        if (($target_round > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $target_round when calling PaymentRequestActionCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($target_round < 0)) {
            throw new \InvalidArgumentException('invalid value for $target_round when calling PaymentRequestActionCreateParams., must be bigger than or equal to 0.');
        }

        $this->container['target_round'] = $target_round;

        return $this;
    }

    /**
     * Gets target_step_id
     *
     * @return int
     */
    public function getTargetStepId()
    {
        return $this->container['target_step_id'];
    }

    /**
     * Sets target_step_id
     *
     * @param int $target_step_id 対象承認ステップID 支払依頼の取得APIレスポンス.current_step_idを送信してください。
     *
     * @return self
     */
    public function setTargetStepId($target_step_id)
    {

        if (($target_step_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $target_step_id when calling PaymentRequestActionCreateParams., must be smaller than or equal to 2147483647.');
        }
        if (($target_step_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $target_step_id when calling PaymentRequestActionCreateParams., must be bigger than or equal to 1.');
        }

        $this->container['target_step_id'] = $target_step_id;

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

