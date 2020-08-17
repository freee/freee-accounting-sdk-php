# # TrialPlThreeYearsResponseTrialPlThreeYearsBalances

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_category_name** | **string** | 勘定科目カテゴリー名 | [optional] 
**account_group_name** | **string** | 決算書表示名(account_item_display_type:group指定時に決算書表示名の時のみ含まれる) | [optional] 
**account_item_id** | **int** | 勘定科目ID(勘定科目の時のみ含まれる) | [optional] 
**account_item_name** | **string** | 勘定科目名(勘定科目の時のみ含まれる) | [optional] 
**closing_balance** | **int** | 期末残高 | [optional] 
**hierarchy_level** | **int** | 階層レベル | [optional] 
**items** | [**\Freee\Accounting\Model\TrialBsThreeYearsResponseTrialBsThreeYearsItems[]**](TrialBsThreeYearsResponseTrialBsThreeYearsItems.md) | breakdown_display_type:item, account_item_display_type:account_item指定時のみ含まれる | [optional] 
**last_year_closing_balance** | **int** | 前年度期末残高 | [optional] 
**parent_account_category_name** | **string** | 上位勘定科目カテゴリー名(勘定科目カテゴリーの時のみ、上層が存在する場合含まれる) | [optional] 
**partners** | [**\Freee\Accounting\Model\TrialBsThreeYearsResponseTrialBsThreeYearsPartners[]**](TrialBsThreeYearsResponseTrialBsThreeYearsPartners.md) | breakdown_display_type:partner, account_item_display_type:account_item指定時のみ含まれる | [optional] 
**sections** | [**\Freee\Accounting\Model\TrialPlThreeYearsResponseTrialPlThreeYearsSections[]**](TrialPlThreeYearsResponseTrialPlThreeYearsSections.md) | breakdown_display_type:section, account_item_display_type:account_item指定時のみ含まれる | [optional] 
**total_line** | **bool** | 合計行(勘定科目カテゴリーの時のみ含まれる) | [optional] 
**two_years_before_closing_balance** | **int** | 前々年度期末残高 | [optional] 
**year_on_year** | **float** | 前年比 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


