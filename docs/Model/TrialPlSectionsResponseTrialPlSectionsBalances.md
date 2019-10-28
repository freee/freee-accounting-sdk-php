# # TrialPlSectionsResponseTrialPlSectionsBalances

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_category_name** | **string** | 勘定科目カテゴリー名(勘定科目カテゴリーの時のみ含まれる) | [optional] 
**account_item_name** | **string** | 勘定科目名(勘定科目の時のみ含まれる) | [optional] 
**account_item_id** | **int** | 勘定科目ID(勘定科目の時のみ含まれる) | [optional] 
**closing_balance** | **int** | 期末残高 | [optional] 
**account_category_id** | **int** | 勘定科目カテゴリーID(勘定科目カテゴリーの時のみ含まれる) | [optional] 
**parent_account_category_name** | **string** | 上位勘定科目カテゴリー名(上層が存在する場合含まれる) | [optional] 
**sections** | [**\Freee\Accounting\Model\TrialPlSectionsResponseTrialPlSectionsSections[]**](TrialPlSectionsResponseTrialPlSectionsSections.md) | 部門(勘定科目の時のみ含まれる) | [optional] 
**total_line** | **bool** | 合計行(勘定科目カテゴリー名の時のみ含まれる) | [optional] 
**hierarchy_level** | **int** | 階層レベル | [optional] 
**parent_account_category_id** | **int** | 上位科目カテゴリーID(上層が存在する場合含まれる) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


