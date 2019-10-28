# # TrialBsResponseTrialBsBalances

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_name** | **string** | 勘定科目名(勘定科目の時のみ含まれる) | [optional] 
**credit_amount** | **int** | 貸方金額 | [optional] 
**parent_account_category_name** | **string** | 上位勘定科目カテゴリー名(上層が存在する場合含まれる) | [optional] 
**debit_amount** | **int** | 借方金額 | [optional] 
**account_category_name** | **string** | 勘定科目カテゴリー名(勘定科目カテゴリーの時のみ含まれる) | [optional] 
**partners** | [**\Freee\Accounting\Model\TrialBsResponseTrialBsPartners[]**](TrialBsResponseTrialBsPartners.md) | breakdown_display_type:partner, account_item_display_type:account_item指定時のみ含まれる | [optional] 
**account_item_id** | **int** | 勘定科目ID(勘定科目の時のみ含まれる) | [optional] 
**closing_balance** | **int** | 期末残高 | [optional] 
**account_category_id** | **int** | 勘定科目カテゴリーID(勘定科目カテゴリーの時のみ含まれる) | [optional] 
**opening_balance** | **int** | 期首残高 | [optional] 
**items** | [**\Freee\Accounting\Model\TrialBsResponseTrialBsItems[]**](TrialBsResponseTrialBsItems.md) | breakdown_display_type:item, account_item_display_type:account_item指定時のみ含まれる | [optional] 
**composition_ratio** | **float** | 構成比 | [optional] 
**total_line** | **bool** | 合計行(勘定科目カテゴリー名の時のみ含まれる) | [optional] 
**hierarchy_level** | **int** | 階層レベル | [optional] 
**parent_account_category_id** | **int** | 上位科目カテゴリーID(上層が存在する場合含まれる) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


