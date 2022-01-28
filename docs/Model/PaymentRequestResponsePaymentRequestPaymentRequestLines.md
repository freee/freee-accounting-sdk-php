# # PaymentRequestResponsePaymentRequestPaymentRequestLines

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID |
**amount** | **int** | 金額 |
**description** | **string** | 内容 |
**id** | **int** | 支払依頼の項目行ID |
**item_id** | **int** | 品目ID |
**line_type** | **string** | 行の種類 (deal_line: 支払依頼, withholding_tax: 源泉徴収税) |
**section_id** | **int** | 部門ID |
**segment_1_tag_id** | **int** | セグメント１ID。セグメント１が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**segment_2_tag_id** | **int** | セグメント２ID。セグメント２が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**segment_3_tag_id** | **int** | セグメント３ID。セグメント３が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**tag_ids** | **int[]** | メモタグID |
**tax_code** | **int** | 税区分コード |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
