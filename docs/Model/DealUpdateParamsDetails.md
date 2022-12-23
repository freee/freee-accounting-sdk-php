# # DealUpdateParamsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID |
**amount** | **int** | 取引金額（税込で指定してください）&lt;br&gt; マイナスの値を指定した場合、控除・マイナス行として登録されます。&lt;br&gt; 上記以外の値を指定した場合、通常行として登録されます。 |
**description** | **string** | 備考 | [optional]
**id** | **int** | 取引行ID: 既存取引行を更新する場合に指定します。IDを指定しない取引行は、新規行として扱われ追加されます。また、detailsに含まれない既存の取引行は削除されます。更新後も残したい行は、必ず取引行IDを指定してdetailsに含めてください。 | [optional]
**item_id** | **int** | 品目ID | [optional]
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID | [optional]
**segment_2_tag_id** | **int** | セグメント２ID | [optional]
**segment_3_tag_id** | **int** | セグメント３ID | [optional]
**tag_ids** | **int[]** | メモタグID | [optional]
**tax_code** | **int** | 税区分コード |
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
