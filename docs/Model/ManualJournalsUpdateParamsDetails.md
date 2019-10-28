# # ManualJournalsUpdateParamsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 取引金額（税込で指定してください） | 
**tag_ids** | **int[]** | メモタグID | [optional] 
**item_id** | **int** | 品目ID | [optional] 
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | [optional] 
**description** | **string** | 備考 | [optional] 
**segment_2_tag_id** | **int** | セグメント２ID | [optional] 
**tax_code** | **int** | 税区分コード | 
**segment_3_tag_id** | **int** | セグメント３ID | [optional] 
**partner_id** | **int** | 取引先ID | [optional] 
**section_id** | **int** | 部門ID | [optional] 
**account_item_id** | **int** | 勘定科目ID | 
**id** | **int** | 貸借行ID: 既存貸借行を更新または削除する場合に指定します。IDを指定しない貸借行は、新規行として扱われ追加されます。 | [optional] 
**partner_code** | **string** | 取引先コード | [optional] 
**segment_1_tag_id** | **int** | セグメント１ID | [optional] 
**entry_side** | **string** | 貸借（貸方: credit, 借方: debit） | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


