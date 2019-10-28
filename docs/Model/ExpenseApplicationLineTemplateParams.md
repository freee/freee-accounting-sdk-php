# # ExpenseApplicationLineTemplateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID | 
**name** | **string** | 経費科目名 | 
**account_items_id** | **int** | 勘定科目ID | [optional] 
**item_id** | **int** | 品目ID | [optional] 
**tax_code** | **int** | 税区分コード（税区分のdisplay_categoryがtax_5: 5%表示の税区分, tax_r8: 軽減税率8%表示の税区分に該当するtax_codeのみ利用可能です。税区分のdisplay_categoryは /taxes/companies/{:company_id}のAPIから取得可能です。） | 
**description** | **string** | 経費科目の説明 | [optional] 
**line_description** | **string** | 内容の補足 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


