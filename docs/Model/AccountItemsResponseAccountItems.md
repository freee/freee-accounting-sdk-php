# # AccountItemsResponseAccountItems

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_category** | **string** | 勘定科目カテゴリー |
**account_category_id** | **int** | 勘定科目のカテゴリーID |
**available** | **bool** | 勘定科目の使用設定（true: 使用する、false: 使用しない） |
**categories** | **string[]** |  |
**corresponding_expense_id** | **int** | 支出取引相手勘定科目ID | [optional]
**corresponding_expense_name** | **string** | 支出取引相手勘定科目名 | [optional]
**corresponding_income_id** | **int** | 収入取引相手勘定科目ID | [optional]
**corresponding_income_name** | **string** | 収入取引相手勘定科目名 | [optional]
**default_tax_code** | **int** | デフォルト設定がされている税区分コード |
**default_tax_id** | **int** | デフォルト設定がされている税区分ID | [optional]
**group_name** | **string** | 決算書表示名（小カテゴリー） | [optional]
**id** | **int** | 勘定科目ID |
**name** | **string** | 勘定科目名 (30文字以内) |
**shortcut** | **string** | ショートカット1 (20文字以内) | [optional]
**shortcut_num** | **string** | ショートカット2(勘定科目コード) (20文字以内) | [optional]
**walletable_id** | **int** | 口座ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
