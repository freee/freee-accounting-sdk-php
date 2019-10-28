# # InvoicesUpdateParamsInvoiceContents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 請求内容ID | [optional] 
**order** | **int** | 順序 | 
**type** | **string** | 行の種類 | 
**qty** | **float** | 数量 | [optional] 
**unit** | **string** | 単位 | [optional] 
**unit_price** | **float** | 単価 (tax_entry_method: inclusiveの場合は税込価格、tax_entry_method: exclusiveの場合は税抜価格となります) | [optional] 
**vat** | **int** | 消費税額 | [optional] 
**description** | **string** | 備考 | [optional] 
**account_item_id** | **int** | 勘定科目ID | [optional] 
**tax_code** | **int** | 税区分ID | [optional] 
**item_id** | **int** | 品目ID | [optional] 
**section_id** | **int** | 部門ID | [optional] 
**tag_ids** | **int[]** |  | [optional] 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


