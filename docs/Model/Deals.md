# # Deals

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 取引ID | 
**company_id** | **int** | 事業所ID | 
**issue_date** | **string** | 発生日 (yyyy-mm-dd) | 
**due_date** | **string** | 支払期日 (yyyy-mm-dd) | [optional] 
**amount** | **int** | 金額 | 
**due_amount** | **int** | 支払金額 | [optional] 
**type** | **string** | 収支区分 (収入: income, 支出: expense) | [optional] 
**partner_id** | **int** | 取引先ID | 
**partner_code** | **string** | 取引先コード | [optional] 
**ref_number** | **string** | 管理番号 | [optional] 
**status** | **string** | 決済状況 (未決済: unsettled, 完了: settled) | 
**details** | [**\Freee\Accounting\Model\DealsDetails[]**](DealsDetails.md) | 取引の明細行 | [optional] 
**renews** | [**\Freee\Accounting\Model\DealsRenews[]**](DealsRenews.md) | 取引の+更新行 | [optional] 
**payments** | [**\Freee\Accounting\Model\DealsPayments[]**](DealsPayments.md) | 取引の支払行 | [optional] 
**receipts** | [**\Freee\Accounting\Model\Receipt[]**](Receipt.md) | 証憑ファイル | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


