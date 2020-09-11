# # ManualJournalDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID | 
**amount** | **int** | 金額（税込で指定してください） | 
**description** | **string** | 備考 | 
**entry_side** | **string** | 貸借(貸方: credit, 借方: debit) | 
**id** | **int** | 貸借行ID | 
**item_id** | **int** | 品目ID | 
**item_name** | **string** | 品目 | 
**partner_code** | **string** | 取引先コード | [optional] 
**partner_id** | **int** | 取引先ID | 
**partner_long_name** | **string** | 正式名称（255文字以内） | 
**partner_name** | **string** | 取引先名 | 
**section_id** | **int** | 部門ID | 
**section_name** | **string** | 部門 | 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 
**segment_1_tag_name** | **int** | セグメント１ID | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**segment_2_tag_name** | **int** | セグメント２ | [optional] 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 
**segment_3_tag_name** | **int** | セグメント３ | [optional] 
**tag_ids** | **int[]** |  | 
**tag_names** | **string[]** |  | 
**tax_code** | **int** | 税区分コード | 
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


