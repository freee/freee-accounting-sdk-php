# # CreateDealParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issue_date** | **string** | 発生日 (yyyy-mm-dd) | 
**type** | **string** | 収支区分 (収入: income, 支出: expense) | 
**company_id** | **int** | 事業所ID | 
**due_date** | **string** | 支払期日(yyyy-mm-dd) | [optional] 
**partner_id** | **int** | 取引先ID | [optional] 
**partner_code** | **string** | 取引先コード | [optional] 
**ref_number** | **string** | 管理番号 | [optional] 
**details** | [**\Freee\Accounting\Model\CreateDealParamsDetails[]**](CreateDealParamsDetails.md) |  | 
**payments** | [**\Freee\Accounting\Model\CreateDealParamsPayments[]**](CreateDealParamsPayments.md) | 支払行一覧（配列）：未指定の場合、未決済の取引を作成します。 | [optional] 
**receipt_ids** | **int[]** | 証憑ファイルID（配列） | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


