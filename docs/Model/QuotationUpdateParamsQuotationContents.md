# # QuotationUpdateParamsQuotationContents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID | [optional]
**description** | **string** | 備考 | [optional]
**id** | **int** | 見積内容ID | [optional]
**item_id** | **int** | 品目ID | [optional]
**order** | **int** | 順序 |
**qty** | **float** | 数量 | [optional]
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID | [optional]
**segment_2_tag_id** | **int** | セグメント２ID | [optional]
**segment_3_tag_id** | **int** | セグメント３ID | [optional]
**tag_ids** | **int[]** |  | [optional]
**tax_code** | **int** | 税区分コード | [optional]
**type** | **string** | 行の種類 &lt;ul&gt; &lt;li&gt;normal、discountを指定する場合、account_item_id,tax_codeとunit_priceが必須となります。&lt;/li&gt; &lt;li&gt;normalを指定した場合、qtyが必須となります。&lt;/li&gt; &lt;/ul&gt; |
**unit** | **string** | 単位 | [optional]
**unit_price** | **float** | 単価 (tax_entry_method: inclusiveの場合は税込価格、tax_entry_method: exclusiveの場合は税抜価格となります) | [optional]
**vat** | **int** | 消費税額 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
