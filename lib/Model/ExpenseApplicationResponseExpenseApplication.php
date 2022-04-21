<?php
/**
 * ExpenseApplicationResponseExpenseApplication
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
 * ExpenseApplicationResponseExpenseApplication Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseApplicationResponseExpenseApplication implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'expenseApplicationResponse_expense_application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicant_id' => 'int',
        'application_number' => 'string',
        'approval_flow_logs' => '\Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[]',
        'approval_flow_route_id' => 'int',
        'approvers' => '\Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovers[]',
        'comments' => '\Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestComments[]',
        'company_id' => 'int',
        'current_round' => 'int',
        'current_step_id' => 'int',
        'deal_id' => 'int',
        'deal_status' => 'string',
        'description' => 'string',
        'expense_application_lines' => '\Freee\Accounting\Model\ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines[]',
        'id' => 'int',
        'issue_date' => 'string',
        'section_id' => 'int',
        'segment_1_tag_id' => 'int',
        'segment_2_tag_id' => 'int',
        'segment_3_tag_id' => 'int',
        'status' => 'string',
        'tag_ids' => 'int[]',
        'title' => 'string',
        'total_amount' => 'int'
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
        'application_number' => null,
        'approval_flow_logs' => null,
        'approval_flow_route_id' => null,
        'approvers' => null,
        'comments' => null,
        'company_id' => null,
        'current_round' => null,
        'current_step_id' => null,
        'deal_id' => null,
        'deal_status' => null,
        'description' => null,
        'expense_application_lines' => null,
        'id' => null,
        'issue_date' => null,
        'section_id' => null,
        'segment_1_tag_id' => 'int64',
        'segment_2_tag_id' => 'int64',
        'segment_3_tag_id' => 'int64',
        'status' => null,
        'tag_ids' => null,
        'title' => null,
        'total_amount' => null
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
        'application_number' => 'application_number',
        'approval_flow_logs' => 'approval_flow_logs',
        'approval_flow_route_id' => 'approval_flow_route_id',
        'approvers' => 'approvers',
        'comments' => 'comments',
        'company_id' => 'company_id',
        'current_round' => 'current_round',
        'current_step_id' => 'current_step_id',
        'deal_id' => 'deal_id',
        'deal_status' => 'deal_status',
        'description' => 'description',
        'expense_application_lines' => 'expense_application_lines',
        'id' => 'id',
        'issue_date' => 'issue_date',
        'section_id' => 'section_id',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_3_tag_id' => 'segment_3_tag_id',
        'status' => 'status',
        'tag_ids' => 'tag_ids',
        'title' => 'title',
        'total_amount' => 'total_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicant_id' => 'setApplicantId',
        'application_number' => 'setApplicationNumber',
        'approval_flow_logs' => 'setApprovalFlowLogs',
        'approval_flow_route_id' => 'setApprovalFlowRouteId',
        'approvers' => 'setApprovers',
        'comments' => 'setComments',
        'company_id' => 'setCompanyId',
        'current_round' => 'setCurrentRound',
        'current_step_id' => 'setCurrentStepId',
        'deal_id' => 'setDealId',
        'deal_status' => 'setDealStatus',
        'description' => 'setDescription',
        'expense_application_lines' => 'setExpenseApplicationLines',
        'id' => 'setId',
        'issue_date' => 'setIssueDate',
        'section_id' => 'setSectionId',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_3_tag_id' => 'setSegment3TagId',
        'status' => 'setStatus',
        'tag_ids' => 'setTagIds',
        'title' => 'setTitle',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicant_id' => 'getApplicantId',
        'application_number' => 'getApplicationNumber',
        'approval_flow_logs' => 'getApprovalFlowLogs',
        'approval_flow_route_id' => 'getApprovalFlowRouteId',
        'approvers' => 'getApprovers',
        'comments' => 'getComments',
        'company_id' => 'getCompanyId',
        'current_round' => 'getCurrentRound',
        'current_step_id' => 'getCurrentStepId',
        'deal_id' => 'getDealId',
        'deal_status' => 'getDealStatus',
        'description' => 'getDescription',
        'expense_application_lines' => 'getExpenseApplicationLines',
        'id' => 'getId',
        'issue_date' => 'getIssueDate',
        'section_id' => 'getSectionId',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_3_tag_id' => 'getSegment3TagId',
        'status' => 'getStatus',
        'tag_ids' => 'getTagIds',
        'title' => 'getTitle',
        'total_amount' => 'getTotalAmount'
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
        $this->container['application_number'] = $data['application_number'] ?? null;
        $this->container['approval_flow_logs'] = $data['approval_flow_logs'] ?? null;
        $this->container['approval_flow_route_id'] = $data['approval_flow_route_id'] ?? null;
        $this->container['approvers'] = $data['approvers'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['current_round'] = $data['current_round'] ?? null;
        $this->container['current_step_id'] = $data['current_step_id'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_status'] = $data['deal_status'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['expense_application_lines'] = $data['expense_application_lines'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issue_date'] = $data['issue_date'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['segment_1_tag_id'] = $data['segment_1_tag_id'] ?? null;
        $this->container['segment_2_tag_id'] = $data['segment_2_tag_id'] ?? null;
        $this->container['segment_3_tag_id'] = $data['segment_3_tag_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tag_ids'] = $data['tag_ids'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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

        if ($this->container['application_number'] === null) {
            $invalidProperties[] = "'application_number' can't be null";
        }
        if ($this->container['approval_flow_logs'] === null) {
            $invalidProperties[] = "'approval_flow_logs' can't be null";
        }
        if ($this->container['approval_flow_route_id'] === null) {
            $invalidProperties[] = "'approval_flow_route_id' can't be null";
        }
        if (($this->container['approval_flow_route_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['approval_flow_route_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'approval_flow_route_id', must be bigger than or equal to 1.";
        }

        if ($this->container['approvers'] === null) {
            $invalidProperties[] = "'approvers' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
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

        if ($this->container['expense_application_lines'] === null) {
            $invalidProperties[] = "'expense_application_lines' can't be null";
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

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if (!is_null($this->container['section_id']) && ($this->container['section_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'section_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['section_id']) && ($this->container['section_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'section_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_1_tag_id']) && ($this->container['segment_1_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_1_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_2_tag_id']) && ($this->container['segment_2_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_2_tag_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] > 9223372036854775807)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be smaller than or equal to 9223372036854775807.";
        }

        if (!is_null($this->container['segment_3_tag_id']) && ($this->container['segment_3_tag_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'segment_3_tag_id', must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid value for $applicant_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($applicant_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicant_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['applicant_id'] = $applicant_id;

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
     * Gets approval_flow_logs
     *
     * @return \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[]
     */
    public function getApprovalFlowLogs()
    {
        return $this->container['approval_flow_logs'];
    }

    /**
     * Sets approval_flow_logs
     *
     * @param \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[] $approval_flow_logs 経費申請の承認履歴（配列）
     *
     * @return self
     */
    public function setApprovalFlowLogs($approval_flow_logs)
    {
        $this->container['approval_flow_logs'] = $approval_flow_logs;

        return $this;
    }

    /**
     * Gets approval_flow_route_id
     *
     * @return int
     */
    public function getApprovalFlowRouteId()
    {
        return $this->container['approval_flow_route_id'];
    }

    /**
     * Sets approval_flow_route_id
     *
     * @param int $approval_flow_route_id 申請経路ID
     *
     * @return self
     */
    public function setApprovalFlowRouteId($approval_flow_route_id)
    {

        if (($approval_flow_route_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($approval_flow_route_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $approval_flow_route_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['approval_flow_route_id'] = $approval_flow_route_id;

        return $this;
    }

    /**
     * Gets approvers
     *
     * @return \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovers[]
     */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
     * Sets approvers
     *
     * @param \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestApprovers[] $approvers 承認者（配列）   承認ステップのresource_typeがunspecified (指定なし)の場合はapproversはレスポンスに含まれません。   しかし、resource_typeがunspecifiedの承認ステップにおいて誰かが承認・却下・差し戻しのいずれかのアクションを取った後は、   approversはレスポンスに含まれるようになります。   その場合approversにはアクションを行ったステップのIDとアクションを行ったユーザーのIDが含まれます。
     *
     * @return self
     */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestComments[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestComments[] $comments 経費申請のコメント一覧（配列）
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $current_round when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($current_round < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_round when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $current_step_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($current_step_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $current_step_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $deal_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($deal_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $deal_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
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
     * @param string $deal_status 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:精算済み, unsettled:清算待ち)
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
     * @param string|null $description 備考
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expense_application_lines
     *
     * @return \Freee\Accounting\Model\ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines[]
     */
    public function getExpenseApplicationLines()
    {
        return $this->container['expense_application_lines'];
    }

    /**
     * Sets expense_application_lines
     *
     * @param \Freee\Accounting\Model\ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines[] $expense_application_lines 経費申請の項目行一覧（配列）
     *
     * @return self
     */
    public function setExpenseApplicationLines($expense_application_lines)
    {
        $this->container['expense_application_lines'] = $expense_application_lines;

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
     * @param int $id 経費申請ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date 申請日 (yyyy-mm-dd)
     *
     * @return self
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets section_id
     *
     * @return int|null
     */
    public function getSectionId()
    {
        return $this->container['section_id'];
    }

    /**
     * Sets section_id
     *
     * @param int|null $section_id 部門ID
     *
     * @return self
     */
    public function setSectionId($section_id)
    {

        if (!is_null($section_id) && ($section_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($section_id) && ($section_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $section_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_id
     *
     * @return int|null
     */
    public function getSegment1TagId()
    {
        return $this->container['segment_1_tag_id'];
    }

    /**
     * Sets segment_1_tag_id
     *
     * @param int|null $segment_1_tag_id セグメント１ID。セグメント１が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment1TagId($segment_1_tag_id)
    {

        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_1_tag_id) && ($segment_1_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_1_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_id
     *
     * @return int|null
     */
    public function getSegment2TagId()
    {
        return $this->container['segment_2_tag_id'];
    }

    /**
     * Sets segment_2_tag_id
     *
     * @param int|null $segment_2_tag_id セグメント２ID。セグメント２が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment2TagId($segment_2_tag_id)
    {

        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_2_tag_id) && ($segment_2_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_2_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_id
     *
     * @return int|null
     */
    public function getSegment3TagId()
    {
        return $this->container['segment_3_tag_id'];
    }

    /**
     * Sets segment_3_tag_id
     *
     * @param int|null $segment_3_tag_id セグメント３ID。セグメント３が使用可能なプランの時のみレスポンスに含まれます。
     *
     * @return self
     */
    public function setSegment3TagId($segment_3_tag_id)
    {

        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id > 9223372036854775807)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be smaller than or equal to 9223372036854775807.');
        }
        if (!is_null($segment_3_tag_id) && ($segment_3_tag_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $segment_3_tag_id when calling ExpenseApplicationResponseExpenseApplication., must be bigger than or equal to 1.');
        }

        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

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
     * Gets tag_ids
     *
     * @return int[]|null
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[]|null $tag_ids メモタグID
     *
     * @return self
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

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
     * Gets total_amount
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int|null $total_amount 合計金額
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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


