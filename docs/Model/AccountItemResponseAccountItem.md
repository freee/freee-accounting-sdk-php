# # AccountItemResponseAccountItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_category** | **string** | 勘定科目カテゴリー |
**account_category_id** | **int** | 勘定科目のカテゴリーID |
**accumulated_dep_account_item_id** | **int** | 減価償却累計額勘定科目ID（法人のみ利用可能） | [optional]
**accumulated_dep_account_item_name** | **string** | 減価償却累計額勘定科目（法人のみ利用可能） | [optional]
**available** | **bool** | 勘定科目の使用設定（true: 使用する、false: 使用しない） |
**company_id** | **int** | 事業所ID |
**corresponding_expense_id** | **int** | 支出取引相手勘定科目ID | [optional]
**corresponding_expense_name** | **string** | 支出取引相手勘定科目名 | [optional]
**corresponding_income_id** | **int** | 収入取引相手勘定科目ID | [optional]
**corresponding_income_name** | **string** | 収入取引相手勘定科目名 | [optional]
**group_name** | **string** | 決算書表示名（小カテゴリー） | [optional]
**id** | **int** | 勘定科目ID |
**items** | [**\Freee\Accounting\Model\AccountItemResponseAccountItemItems[]**](AccountItemResponseAccountItemItems.md) |  | [optional]
**name** | **string** | 勘定科目名 (30文字以内) |
**partners** | [**\Freee\Accounting\Model\AccountItemResponseAccountItemPartners[]**](AccountItemResponseAccountItemPartners.md) |  | [optional]
**searchable** | **int** | 検索可能:2, 検索不可：3 |
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional]
**shortcut_num** | **string** | ショートカット2(勘定科目コード) (20文字以内) | [optional]
**tax_code** | **int** | 税区分コード |
**walletable_id** | **int** | 口座ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
