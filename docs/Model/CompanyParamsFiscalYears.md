# # CompanyParamsFiscalYears

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_period** | **int** | 期 | [optional] 
**depreciation_fraction** | **int** | 減価償却端数処理法(法人のみ)(0: 切り捨て、1: 切り上げ) | [optional] 
**end_date** | **string** | 期末日（決算日） | [optional] 
**indirect_write_off_method** | **bool** | 固定資産の控除法（true: 間接控除法、false: 直接控除法） | [optional] 
**indirect_write_off_method_type** | **bool** | 間接控除時の累計額（true: 資産分類別、false: 共通） | [optional] 
**return_code** | **int** | 不動産所得使用区分（0: 一般、3: 一般/不動産） ※個人事業主のみ設定可能 | [optional] 
**start_date** | **string** | 期首日 | [optional] 
**tax_fraction** | **int** | 消費税端数処理方法（0: 切り上げ、1: 切り捨て, 2: 四捨五入） | [optional] 
**use_industry_template** | **bool** | 製造業向け機能（true: 使用する、false: 使用しない） | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


