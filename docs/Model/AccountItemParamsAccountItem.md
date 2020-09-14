# # AccountItemParamsAccountItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_category_id** | **int** | 勘定科目カテゴリーID Selectablesフォーム用選択項目情報エンドポイント(account_groups.account_category_id)で取得可能です | 
**accumulated_dep_account_item_id** | **int** | 減価償却累計額勘定科目ID（法人のみ利用可能） | [optional] 
**corresponding_expense_id** | **int** | 支出取引相手勘定科目ID | 
**corresponding_income_id** | **int** | 収入取引相手勘定科目ID | 
**group_name** | **string** | 決算書表示名（小カテゴリー） Selectablesフォーム用選択項目情報エンドポイント(account_groups.name)で取得可能です | 
**items** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]**](AccountItemParamsAccountItemItems.md) | 品目 | [optional] 
**name** | **string** | 勘定科目名 (30文字以内) | 
**partners** | [**\Freee\Accounting\Model\AccountItemParamsAccountItemItems[]**](AccountItemParamsAccountItemItems.md) | 取引先 | [optional] 
**searchable** | **int** | 検索可能:2, 検索不可：3(登録時未指定の場合は2で登録されます。更新時未指定の場合はsearchableは変更されません。) | [optional] 
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional] 
**shortcut_num** | **string** | ショートカット2(勘定科目コード)(20文字以内) | [optional] 
**tax_code** | **int** | 税区分コード | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


