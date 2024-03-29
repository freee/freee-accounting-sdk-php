<?php
/**
 * ApprovalRequestsIndexResponseApprovalRequests
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
 * ApprovalRequestsIndexResponseApprovalRequests Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApprovalRequestsIndexResponseApprovalRequests implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'approvalRequestsIndexResponse_approval_requests';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicant_id' => 'int',
        'application_date' => 'string',
        'application_number' => 'string',
        'company_id' => 'int',
        'current_round' => 'int',
        'current_step_id' => 'int',
        'deal_id' => 'int',
        'deal_status' => 'string',
        'form_id' => 'int',
        'id' => 'int',
        'manual_journal_id' => 'int',
        'request_items' => '\Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestRequestItems[]',
        'status' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applicant_id' => null,
        'application_date' => null,
        'application_number' => null,
        'company_id' => null,
        'current_round' => null,
        'current_step_id' => null,
        'deal_id' => null,
        'deal_status' => null,
        'form_id' => null,
        'id' => null,
        'manual_journal_id' => null,
        'request_items' => null,
        'status' => null,
        'title' => null
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
        'applicant_id' => 'applicant_id',
        'application_date' => 'application_date',
        'application_number' => 'application_number',
        'company_id' => 'company_id',
        'current_round' => 'current_round',
        'current_step_id' => 'current_step_id',
        'deal_id' => 'deal_id',
        'deal_status' => 'deal_status',
        'form_id' => 'form_id',
        'id' => 'id',
        'manual_journal_id' => 'manual_journal_id',
        'request_items' => 'request_items',
        'status' => 'status',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicant_id' => 'setApplicantId',
        'application_date' => 'setApplicationDate',
        'application_number' => 'setApplicationNumber',
        'company_id' => 'setCompanyId',
        'current_round' => 'setCurrentRound',
        'current_step_id' => 'setCurrentStepId',
        'deal_id' => 'setDealId',
        'deal_status' => 'setDealStatus',
        'form_id' => 'setFormId',
        'id' => 'setId',
        'manual_journal_id' => 'setManualJournalId',
        'request_items' => 'setRequestItems',
        'status' => 'setStatus',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicant_id' => 'getApplicantId',
        'application_date' => 'getApplicationDate',
        'application_number' => 'getApplicationNumber',
        'company_id' => 'getCompanyId',
        'current_round' => 'getCurrentRound',
        'current_step_id' => 'getCurrentStepId',
        'deal_id' => 'getDealId',
        'deal_status' => 'getDealStatus',
        'form_id' => 'getFormId',
        'id' => 'getId',
        'manual_journal_id' => 'getManualJournalId',
        'request_items' => 'getRequestItems',
        'status' => 'getStatus',
        'title' => 'getTitle'
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

    const DEAL_STATUS_SETTLED = 'settled';
    const DEAL_STATUS_UNSETTLED = 'unsettled';
    const STATUS_DRAFT = 'draft';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';
    const STATUS_FEEDBACK = 'feedback';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDealStatusAllowableValues()
    {
        return [
            self::DEAL_STATUS_SETTLED,
            self::DEAL_STATUS_UNSETTLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_IN_PROGRESS,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
            self::STATUS_FEEDBACK,
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
        $this->container['applicant_id'] = $data['applicant_id'] ?? null;
        $this->container['application_date'] = $data['application_date'] ?? null;
        $this->container['application_number'] = $data['application_number'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['current_round'] = $data['current_round'] ?? null;
        $this->container['current_step_id'] = $data['current_step_id'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_status'] = $data['deal_status'] ?? null;
        $this->container['form_id'] = $data['form_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['manual_journal_id'] = $data['manual_journal_id'] ?? null;
        $this->container['request_items'] = $data['request_items'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['applicant_id'] === null) {
            $invalidProperties[] = "'applicant_id' can't be null";
        }
        if (($this->container['applicant_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'applicant_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['applicant_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicant_id', must be bigger than or equal to 1.";
        }

        if ($this->container['application_date'] === null) {
            $invalidProperties[] = "'application_date' can't be null";
        }
        if ($this->container['application_number'] === null) {
            $invalidProperties[] = "'application_number' can't be null";
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

        if ($this->container['current_round'] === null) {
            $invalidProperties[] = "'current_round' can't be null";
        }
        if (($this->container['current_round'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'current_round', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['current_round'] < 0)) {
            $invalidProperties[] = "invalid value for 'current_round', must be bigger than or equal to 0.";
        }

        if ($this->container['current_step_id'] === null) {
            $invalidProperties[] = "'current_step_id' can't be null";
        }
        if (($this->container['current_step_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'current_step_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['current_step_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'current_step_id', must be bigger than or equal to 1.";
        }

        if ($this->container['deal_id'] === null) {
            $invalidProperties[] = "'deal_id' can't be null";
        }
        if (($this->container['deal_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'deal_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['deal_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'deal_id', must be bigger than or equal to 1.";
        }

        if ($this->container['deal_status'] === null) {
            $invalidProperties[] = "'deal_status' can't be null";
        }
        $allowedValues = $this->getDealStatusAllowableValues();
        if (!is_null($this->container['deal_status']) && !in_array($this->container['deal_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'deal_status', must be one of '%s'",
                $this->container['deal_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['form_id'] === null) {
            $invalidProperties[] = "'form_id' can't be null";
        }
        if (($this->container['form_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'form_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['form_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'form_id', must be bigger than or equal to 1.";
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

        if ($this->container['manual_journal_id'] === null) {
            $invalidProperties[] = "'manual_journal_id' can't be null";
        }
        if (($this->container['manual_journal_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'manual_journal_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['manual_journal_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'manual_journal_id', must be bigger than or equal to 1.";
        }

        if ($this->container['request_items'] === null) {
            $invalidProperties[] = "'request_items' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets applicant_id
     *
     * @return int
     */
    public function getApplicantId()
    {
        return $this->container['applicant_id'];
    }

    /**
     * Sets applicant_id
     *
     * @param int $applicant_id 申請者のユーザーID
     *
     * @return self
     */
    public function setApplicantId($applicant_id)
    {

        if (($applicant_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $applicant_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($applicant_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicant_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['applicant_id'] = $applicant_id;

        return $this;
    }

    /**
     * Gets application_date
     *
     * @return string
     */
    public function getApplicationDate()
    {
        return $this->container['application_date'];
    }

    /**
     * Sets application_date
     *
     * @param string $application_date 申請日 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setApplicationDate($application_date)
    {
        $this->container['application_date'] = $application_date;

        return $this;
    }

    /**
     * Gets application_number
     *
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->container['application_number'];
    }

    /**
     * Sets application_number
     *
     * @param string $application_number 申請No.
     *
     * @return self
     */
    public function setApplicationNumber($application_number)
    {
        $this->container['application_number'] = $application_number;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets current_round
     *
     * @return int
     */
    public function getCurrentRound()
    {
        return $this->container['current_round'];
    }

    /**
     * Sets current_round
     *
     * @param int $current_round 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。
     *
     * @return self
     */
    public function setCurrentRound($current_round)
    {

        if (($current_round > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $current_round when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($current_round < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_round when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 0.');
        }

        $this->container['current_round'] = $current_round;

        return $this;
    }

    /**
     * Gets current_step_id
     *
     * @return int
     */
    public function getCurrentStepId()
    {
        return $this->container['current_step_id'];
    }

    /**
     * Sets current_step_id
     *
     * @param int $current_step_id 現在承認ステップID
     *
     * @return self
     */
    public function setCurrentStepId($current_step_id)
    {

        if (($current_step_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $current_step_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($current_step_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $current_step_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['current_step_id'] = $current_step_id;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return int
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int $deal_id 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます)
     *
     * @return self
     */
    public function setDealId($deal_id)
    {

        if (($deal_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $deal_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($deal_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $deal_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_status
     *
     * @return string
     */
    public function getDealStatus()
    {
        return $this->container['deal_status'];
    }

    /**
     * Sets deal_status
     *
     * @param string $deal_status 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:決済済み, unsettled:未決済)
     *
     * @return self
     */
    public function setDealStatus($deal_status)
    {
        $allowedValues = $this->getDealStatusAllowableValues();
        if (!in_array($deal_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'deal_status', must be one of '%s'",
                    $deal_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deal_status'] = $deal_status;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return int
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param int $form_id 申請フォームID
     *
     * @return self
     */
    public function setFormId($form_id)
    {

        if (($form_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $form_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($form_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $form_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['form_id'] = $form_id;

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
     * @param int $id 各種申請ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets manual_journal_id
     *
     * @return int
     */
    public function getManualJournalId()
    {
        return $this->container['manual_journal_id'];
    }

    /**
     * Sets manual_journal_id
     *
     * @param int $manual_journal_id 振替伝票のID (申請ステータス:statusがapprovedで、関連する振替伝票が存在する時のみmanual_journal_idが表示されます)  <a href=\"https://support.freee.co.jp/hc/ja/articles/115003827683-#5\" target=\"_blank\">承認された各種申請から支払依頼等を作成する</a>
     *
     * @return self
     */
    public function setManualJournalId($manual_journal_id)
    {

        if (($manual_journal_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $manual_journal_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be smaller than or equal to 2147483647.');
        }
        if (($manual_journal_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $manual_journal_id when calling ApprovalRequestsIndexResponseApprovalRequests., must be bigger than or equal to 1.');
        }

        $this->container['manual_journal_id'] = $manual_journal_id;

        return $this;
    }

    /**
     * Gets request_items
     *
     * @return \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestRequestItems[]
     */
    public function getRequestItems()
    {
        return $this->container['request_items'];
    }

    /**
     * Sets request_items
     *
     * @param \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestRequestItems[] $request_items 各種申請の項目一覧（配列）
     *
     * @return self
     */
    public function setRequestItems($request_items)
    {
        $this->container['request_items'] = $request_items;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 申請タイトル
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


