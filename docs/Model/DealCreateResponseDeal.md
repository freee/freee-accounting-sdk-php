# # DealCreateResponseDeal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 |
**company_id** | **int** | 事業所ID |
**details** | [**\Freee\Accounting\Model\DealDetails[]**](DealDetails.md) | 取引の明細行 | [optional]
**due_amount** | **int** | 支払残額 | [optional]
**due_date** | **string** | 支払期日 (yyyy-mm-dd) | [optional]
**id** | **int** | 取引ID |
**issue_date** | **string** | 発生日 (yyyy-mm-dd) |
**partner_code** | **string** | 取引先コード | [optional]
**partner_id** | **int** | 取引先ID |
**payments** | [**\Freee\Accounting\Model\DealPayments[]**](DealPayments.md) | 取引の支払行 | [optional]
**receipts** | [**\Freee\Accounting\Model\DealCreateResponseDealReceipts[]**](DealCreateResponseDealReceipts.md) | 証憑ファイル（ファイルボックスのファイル） | [optional]
**ref_number** | **string** | 管理番号 | [optional]
**status** | **string** | 決済状況 (未決済: unsettled, 完了: settled) |
**type** | **string** | 収支区分 (収入: income, 支出: expense) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
