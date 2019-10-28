# # AccountItemParamsAccountItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 勘定科目名 (30文字以内) | 
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional] 
**shortcut_num** | **string** | ショートカット2(勘定科目コード)(20文字以内) | [optional] 
**tax_name** | **string** | 税区分 | 
**group_name** | **string** | 決算書表示名 | 
**account_category** | **string** | 勘定科目カテゴリー | 
**corresponding_income_name** | **string** | 収入取引相手勘定科目 | 
**corresponding_expense_name** | **string** | 支出取引相手勘定科目 | 
**accumulated_dep_account_item_name** | **string** | 減価償却累計額勘定科目 | [optional] 
**searchable** | **int** | 検索可能:2, 検索不可：3 | [optional] 
**items** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]**](AccountItemParamsAccountItemItems.md) | 品目 | [optional] 
**partners** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]**](AccountItemParamsAccountItemItems.md) | 取引先 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


