# # AccountItemParamsAccountItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shortcut_num** | **string** | ショートカット2(勘定科目コード)(20文字以内) | [optional] 
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional] 
**corresponding_expense_name** | **string** | 支出取引相手勘定科目 | 
**corresponding_income_name** | **string** | 収入取引相手勘定科目 | 
**group_name** | **string** | 決算書表示名 | 
**partners** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemPartners[]**](AccountItemParamsAccountItemPartners.md) | 取引先 | [optional] 
**tax_name** | **string** | 税区分 | 
**name** | **string** | 勘定科目名 (30文字以内) | 
**account_category** | **string** | 勘定科目カテゴリー | 
**items** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemPartners[]**](AccountItemParamsAccountItemPartners.md) | 品目 | [optional] 
**searchable** | **int** | 検索可能:2, 検索不可：3 | [optional] 
**accumulated_dep_account_item_name** | **string** | 減価償却累計額勘定科目 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


