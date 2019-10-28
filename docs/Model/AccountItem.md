# # AccountItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 勘定科目ID | 
**name** | **string** | 勘定科目名 (30文字以内) | 
**company_id** | **int** | 事業所ID | 
**tax_code** | **int** | 税区分コード | 
**account_category_id** | **int** | 勘定科目のカテゴリーコード | 
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional] 
**shortcut_num** | **string** | ショートカット2(勘定科目コード) (20文字以内) | [optional] 
**corresponding_type_expense** | **int** | 支出取引相手勘定科目ID | 
**corresponding_type_income** | **int** | 収入取引相手勘定科目ID | 
**searchable** | **int** | 検索可能:2, 検索不可：3 | 
**accumulated_dep_account_item_name** | **string** | 減価償却累計額勘定科目 | [optional] 
**items** | [**\Freee\Accounting\Model\AccountItemItems[]**](AccountItemItems.md) |  | [optional] 
**partners** | [**\Freee\Accounting\Model\AccountItemPartners[]**](AccountItemPartners.md) |  | [optional] 
**available** | **bool** | 勘定科目の使用設定（true: 使用する、false: 使用しない） | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


