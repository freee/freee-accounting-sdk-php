# # DealCreateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID |
**details** | [**\Freee\Accounting\Model\DealCreateParamsDetails[]**](DealCreateParamsDetails.md) |  |
**due_date** | **string** | 支払期日(yyyy-mm-dd) | [optional]
**issue_date** | **string** | 発生日 (yyyy-mm-dd) |
**partner_code** | **string** | 取引先コード | [optional]
**partner_id** | **int** | 取引先ID | [optional]
**payments** | [**\Freee\Accounting\Model\DealCreateParamsPayments[]**](DealCreateParamsPayments.md) | 支払行一覧（配列）：未指定の場合、未決済の取引を作成します。 | [optional]
**receipt_ids** | **int[]** | ファイルボックス（証憑ファイル）ID（配列） | [optional]
**ref_number** | **string** | 管理番号 | [optional]
**type** | **string** | 収支区分 (収入: income, 支出: expense) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
