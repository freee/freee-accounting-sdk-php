# # ManualJournalDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 貸借行ID | 
**entry_side** | **string** | 貸借(貸方: credit, 借方: debit) | 
**account_item_id** | **int** | 勘定科目ID | 
**tax_code** | **int** | 税区分ID | 
**tag_ids** | **int[]** |  | 
**tag_names** | **string[]** |  | 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 
**segment_1_tag_name** | **int** | セグメント１ID | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**segment_2_tag_name** | **int** | セグメント２ | [optional] 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 
**segment_3_tag_name** | **int** | セグメント３ | [optional] 
**amount** | **int** | 金額（税込で指定してください） | 
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | 
**description** | **string** | 備考 | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


