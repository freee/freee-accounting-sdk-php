# # ManualJournalUpdateParamsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID |
**amount** | **int** | 取引金額（税込で指定してください） |
**description** | **string** | 備考 | [optional]
**entry_side** | **string** | 貸借（貸方: credit, 借方: debit） |
**id** | **int** | 貸借行ID: 既存貸借行を更新または削除する場合に指定します。IDを指定しない貸借行は、新規行として扱われ追加されます。 | [optional]
**item_id** | **int** | 品目ID | [optional]
**partner_code** | **string** | 取引先コード | [optional]
**partner_id** | **int** | 取引先ID | [optional]
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID | [optional]
**segment_2_tag_id** | **int** | セグメント２ID | [optional]
**segment_3_tag_id** | **int** | セグメント３ID | [optional]
**tag_ids** | **int[]** | メモタグID | [optional]
**tax_code** | **int** | 税区分コード |
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
