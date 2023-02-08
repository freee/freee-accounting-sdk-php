<?php
/**
 * FixedAsset
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
 * FixedAsset Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FixedAsset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'fixedAsset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'acquisition_cost' => 'int',
        'acquisition_date' => '\DateTime',
        'city_name' => 'string',
        'closing_accumulated_depreciation' => 'int',
        'closing_balance' => 'int',
        'company_id' => 'int',
        'depreciation_account_item_id' => 'int',
        'depreciation_amount' => 'int',
        'depreciation_method' => 'string',
        'id' => 'int',
        'item_id' => 'int',
        'life_years' => 'int',
        'management_number' => 'string',
        'name' => 'string',
        'opening_accumulated_depreciation' => 'int',
        'opening_balance' => 'int',
        'prefecture_code' => 'int',
        'retire_date' => '\DateTime',
        'retire_type' => 'string',
        'section_id' => 'int',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_item_id' => null,
        'acquisition_cost' => null,
        'acquisition_date' => 'date',
        'city_name' => null,
        'closing_accumulated_depreciation' => null,
        'closing_balance' => null,
        'company_id' => null,
        'depreciation_account_item_id' => null,
        'depreciation_amount' => null,
        'depreciation_method' => null,
        'id' => null,
        'item_id' => null,
        'life_years' => null,
        'management_number' => null,
        'name' => null,
        'opening_accumulated_depreciation' => null,
        'opening_balance' => null,
        'prefecture_code' => null,
        'retire_date' => 'date',
        'retire_type' => null,
        'section_id' => null,
        'updated_at' => 'date'
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
        'account_item_id' => 'account_item_id',
        'acquisition_cost' => 'acquisition_cost',
        'acquisition_date' => 'acquisition_date',
        'city_name' => 'city_name',
        'closing_accumulated_depreciation' => 'closing_accumulated_depreciation',
        'closing_balance' => 'closing_balance',
        'company_id' => 'company_id',
        'depreciation_account_item_id' => 'depreciation_account_item_id',
        'depreciation_amount' => 'depreciation_amount',
        'depreciation_method' => 'depreciation_method',
        'id' => 'id',
        'item_id' => 'item_id',
        'life_years' => 'life_years',
        'management_number' => 'management_number',
        'name' => 'name',
        'opening_accumulated_depreciation' => 'opening_accumulated_depreciation',
        'opening_balance' => 'opening_balance',
        'prefecture_code' => 'prefecture_code',
        'retire_date' => 'retire_date',
        'retire_type' => 'retire_type',
        'section_id' => 'section_id',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_id' => 'setAccountItemId',
        'acquisition_cost' => 'setAcquisitionCost',
        'acquisition_date' => 'setAcquisitionDate',
        'city_name' => 'setCityName',
        'closing_accumulated_depreciation' => 'setClosingAccumulatedDepreciation',
        'closing_balance' => 'setClosingBalance',
        'company_id' => 'setCompanyId',
        'depreciation_account_item_id' => 'setDepreciationAccountItemId',
        'depreciation_amount' => 'setDepreciationAmount',
        'depreciation_method' => 'setDepreciationMethod',
        'id' => 'setId',
        'item_id' => 'setItemId',
        'life_years' => 'setLifeYears',
        'management_number' => 'setManagementNumber',
        'name' => 'setName',
        'opening_accumulated_depreciation' => 'setOpeningAccumulatedDepreciation',
        'opening_balance' => 'setOpeningBalance',
        'prefecture_code' => 'setPrefectureCode',
        'retire_date' => 'setRetireDate',
        'retire_type' => 'setRetireType',
        'section_id' => 'setSectionId',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_id' => 'getAccountItemId',
        'acquisition_cost' => 'getAcquisitionCost',
        'acquisition_date' => 'getAcquisitionDate',
        'city_name' => 'getCityName',
        'closing_accumulated_depreciation' => 'getClosingAccumulatedDepreciation',
        'closing_balance' => 'getClosingBalance',
        'company_id' => 'getCompanyId',
        'depreciation_account_item_id' => 'getDepreciationAccountItemId',
        'depreciation_amount' => 'getDepreciationAmount',
        'depreciation_method' => 'getDepreciationMethod',
        'id' => 'getId',
        'item_id' => 'getItemId',
        'life_years' => 'getLifeYears',
        'management_number' => 'getManagementNumber',
        'name' => 'getName',
        'opening_accumulated_depreciation' => 'getOpeningAccumulatedDepreciation',
        'opening_balance' => 'getOpeningBalance',
        'prefecture_code' => 'getPrefectureCode',
        'retire_date' => 'getRetireDate',
        'retire_type' => 'getRetireType',
        'section_id' => 'getSectionId',
        'updated_at' => 'getUpdatedAt'
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

    const DEPRECIATION_METHOD_SMALL_SUM_METHOD = 'small_sum_method';
    const DEPRECIATION_METHOD_LUMP_SUM_METHOD = 'lump_sum_method';
    const DEPRECIATION_METHOD_STRAIGHT_LINE_METHOD = 'straight_line_method';
    const DEPRECIATION_METHOD_MULTIPLE_METHOD = 'multiple_method';
    const DEPRECIATION_METHOD_OLD_MULTIPLE_METHOD = 'old_multiple_method';
    const DEPRECIATION_METHOD_OLD_STRAIGHT_LINE_METHOD = 'old_straight_line_method';
    const DEPRECIATION_METHOD_NON_DEPRECIATE_METHOD = 'non_depreciate_method';
    const DEPRECIATION_METHOD_VOLUNTARY_METHOD = 'voluntary_method';
    const DEPRECIATION_METHOD_IMMEDIATE_METHOD = 'immediate_method';
    const DEPRECIATION_METHOD_EQUAL_METHOD = 'equal_method';
    const RETIRE_TYPE_SELL = 'sell';
    const RETIRE_TYPE_RETIRE = 'retire';
    const RETIRE_TYPE_DEPRECIATING = 'depreciating';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepreciationMethodAllowableValues()
    {
        return [
            self::DEPRECIATION_METHOD_SMALL_SUM_METHOD,
            self::DEPRECIATION_METHOD_LUMP_SUM_METHOD,
            self::DEPRECIATION_METHOD_STRAIGHT_LINE_METHOD,
            self::DEPRECIATION_METHOD_MULTIPLE_METHOD,
            self::DEPRECIATION_METHOD_OLD_MULTIPLE_METHOD,
            self::DEPRECIATION_METHOD_OLD_STRAIGHT_LINE_METHOD,
            self::DEPRECIATION_METHOD_NON_DEPRECIATE_METHOD,
            self::DEPRECIATION_METHOD_VOLUNTARY_METHOD,
            self::DEPRECIATION_METHOD_IMMEDIATE_METHOD,
            self::DEPRECIATION_METHOD_EQUAL_METHOD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRetireTypeAllowableValues()
    {
        return [
            self::RETIRE_TYPE_SELL,
            self::RETIRE_TYPE_RETIRE,
            self::RETIRE_TYPE_DEPRECIATING,
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
        $this->container['account_item_id'] = $data['account_item_id'] ?? null;
        $this->container['acquisition_cost'] = $data['acquisition_cost'] ?? null;
        $this->container['acquisition_date'] = $data['acquisition_date'] ?? null;
        $this->container['city_name'] = $data['city_name'] ?? null;
        $this->container['closing_accumulated_depreciation'] = $data['closing_accumulated_depreciation'] ?? null;
        $this->container['closing_balance'] = $data['closing_balance'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['depreciation_account_item_id'] = $data['depreciation_account_item_id'] ?? null;
        $this->container['depreciation_amount'] = $data['depreciation_amount'] ?? null;
        $this->container['depreciation_method'] = $data['depreciation_method'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['life_years'] = $data['life_years'] ?? null;
        $this->container['management_number'] = $data['management_number'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['opening_accumulated_depreciation'] = $data['opening_accumulated_depreciation'] ?? null;
        $this->container['opening_balance'] = $data['opening_balance'] ?? null;
        $this->container['prefecture_code'] = $data['prefecture_code'] ?? null;
        $this->container['retire_date'] = $data['retire_date'] ?? null;
        $this->container['retire_type'] = $data['retire_type'] ?? null;
        $this->container['section_id'] = $data['section_id'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        $allowedValues = $this->getDepreciationMethodAllowableValues();
        if (!is_null($this->container['depreciation_method']) && !in_array($this->container['depreciation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'depreciation_method', must be one of '%s'",
                $this->container['depreciation_method'],
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['prefecture_code']) && ($this->container['prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['prefecture_code']) && ($this->container['prefecture_code'] < -1)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be bigger than or equal to -1.";
        }

        $allowedValues = $this->getRetireTypeAllowableValues();
        if (!is_null($this->container['retire_type']) && !in_array($this->container['retire_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'retire_type', must be one of '%s'",
                $this->container['retire_type'],
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
     * @param int|null $account_item_id 勘定科目ID
     *
     * @return self
     */
    public function setAccountItemId($account_item_id)
    {
        $this->container['account_item_id'] = $account_item_id;

        return $this;
    }

    /**
     * Gets acquisition_cost
     *
     * @return int|null
     */
    public function getAcquisitionCost()
    {
        return $this->container['acquisition_cost'];
    }

    /**
     * Sets acquisition_cost
     *
     * @param int|null $acquisition_cost 取得価額
     *
     * @return self
     */
    public function setAcquisitionCost($acquisition_cost)
    {
        $this->container['acquisition_cost'] = $acquisition_cost;

        return $this;
    }

    /**
     * Gets acquisition_date
     *
     * @return \DateTime|null
     */
    public function getAcquisitionDate()
    {
        return $this->container['acquisition_date'];
    }

    /**
     * Sets acquisition_date
     *
     * @param \DateTime|null $acquisition_date 取得日
     *
     * @return self
     */
    public function setAcquisitionDate($acquisition_date)
    {
        $this->container['acquisition_date'] = $acquisition_date;

        return $this;
    }

    /**
     * Gets city_name
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param string|null $city_name 申告先市区町村
     *
     * @return self
     */
    public function setCityName($city_name)
    {
        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets closing_accumulated_depreciation
     *
     * @return int|null
     */
    public function getClosingAccumulatedDepreciation()
    {
        return $this->container['closing_accumulated_depreciation'];
    }

    /**
     * Sets closing_accumulated_depreciation
     *
     * @param int|null $closing_accumulated_depreciation 期末減価償却累計額
     *
     * @return self
     */
    public function setClosingAccumulatedDepreciation($closing_accumulated_depreciation)
    {
        $this->container['closing_accumulated_depreciation'] = $closing_accumulated_depreciation;

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
     * @param int|null $closing_balance 未償却残高(期末残高)
     *
     * @return self
     */
    public function setClosingBalance($closing_balance)
    {
        $this->container['closing_balance'] = $closing_balance;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling FixedAsset., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling FixedAsset., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets depreciation_account_item_id
     *
     * @return int|null
     */
    public function getDepreciationAccountItemId()
    {
        return $this->container['depreciation_account_item_id'];
    }

    /**
     * Sets depreciation_account_item_id
     *
     * @param int|null $depreciation_account_item_id 減価償却に使う勘定科目ID
     *
     * @return self
     */
    public function setDepreciationAccountItemId($depreciation_account_item_id)
    {
        $this->container['depreciation_account_item_id'] = $depreciation_account_item_id;

        return $this;
    }

    /**
     * Gets depreciation_amount
     *
     * @return int|null
     */
    public function getDepreciationAmount()
    {
        return $this->container['depreciation_amount'];
    }

    /**
     * Sets depreciation_amount
     *
     * @param int|null $depreciation_amount 減価償却費
     *
     * @return self
     */
    public function setDepreciationAmount($depreciation_amount)
    {
        $this->container['depreciation_amount'] = $depreciation_amount;

        return $this;
    }

    /**
     * Gets depreciation_method
     *
     * @return string|null
     */
    public function getDepreciationMethod()
    {
        return $this->container['depreciation_method'];
    }

    /**
     * Sets depreciation_method
     *
     * @param string|null $depreciation_method 償却方法:(少額償却: small_sum_method, 一括償却: lump_sum_method, 定額法: straight_line_method, 定率法: multiple_method, 旧定率法: old_multiple_method, 旧定額法: old_straight_line_method, 償却なし: non_depreciate_method, 任意償却: voluntary_method, 即時償却: immediate_method, 均等償却: equal_method)
     *
     * @return self
     */
    public function setDepreciationMethod($depreciation_method)
    {
        $allowedValues = $this->getDepreciationMethodAllowableValues();
        if (!is_null($depreciation_method) && !in_array($depreciation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'depreciation_method', must be one of '%s'",
                    $depreciation_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['depreciation_method'] = $depreciation_method;

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
     * @param int $id 固定資産ID
     *
     * @return self
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling FixedAsset., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling FixedAsset., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id 品目ID
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets life_years
     *
     * @return int|null
     */
    public function getLifeYears()
    {
        return $this->container['life_years'];
    }

    /**
     * Sets life_years
     *
     * @param int|null $life_years 耐用年数
     *
     * @return self
     */
    public function setLifeYears($life_years)
    {
        $this->container['life_years'] = $life_years;

        return $this;
    }

    /**
     * Gets management_number
     *
     * @return string|null
     */
    public function getManagementNumber()
    {
        return $this->container['management_number'];
    }

    /**
     * Sets management_number
     *
     * @param string|null $management_number 管理番号
     *
     * @return self
     */
    public function setManagementNumber($management_number)
    {
        $this->container['management_number'] = $management_number;

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
     * @param string $name 固定資産名
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets opening_accumulated_depreciation
     *
     * @return int|null
     */
    public function getOpeningAccumulatedDepreciation()
    {
        return $this->container['opening_accumulated_depreciation'];
    }

    /**
     * Sets opening_accumulated_depreciation
     *
     * @param int|null $opening_accumulated_depreciation 期首減価償却累計額
     *
     * @return self
     */
    public function setOpeningAccumulatedDepreciation($opening_accumulated_depreciation)
    {
        $this->container['opening_accumulated_depreciation'] = $opening_accumulated_depreciation;

        return $this;
    }

    /**
     * Gets opening_balance
     *
     * @return int|null
     */
    public function getOpeningBalance()
    {
        return $this->container['opening_balance'];
    }

    /**
     * Sets opening_balance
     *
     * @param int|null $opening_balance 期首残高
     *
     * @return self
     */
    public function setOpeningBalance($opening_balance)
    {
        $this->container['opening_balance'] = $opening_balance;

        return $this;
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
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling FixedAsset., must be smaller than or equal to 46.');
        }
        if (!is_null($prefecture_code) && ($prefecture_code < -1)) {
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling FixedAsset., must be bigger than or equal to -1.');
        }

        $this->container['prefecture_code'] = $prefecture_code;

        return $this;
    }

    /**
     * Gets retire_date
     *
     * @return \DateTime|null
     */
    public function getRetireDate()
    {
        return $this->container['retire_date'];
    }

    /**
     * Sets retire_date
     *
     * @param \DateTime|null $retire_date 除却日、もしくは売却日
     *
     * @return self
     */
    public function setRetireDate($retire_date)
    {
        $this->container['retire_date'] = $retire_date;

        return $this;
    }

    /**
     * Gets retire_type
     *
     * @return string|null
     */
    public function getRetireType()
    {
        return $this->container['retire_type'];
    }

    /**
     * Sets retire_type
     *
     * @param string|null $retire_type 売却もしくは除却ステータス: (売却: sell, 除却: retire, 償却中: depreciating)
     *
     * @return self
     */
    public function setRetireType($retire_type)
    {
        $allowedValues = $this->getRetireTypeAllowableValues();
        if (!is_null($retire_type) && !in_array($retire_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'retire_type', must be one of '%s'",
                    $retire_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['retire_type'] = $retire_type;

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
        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at 更新日
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


