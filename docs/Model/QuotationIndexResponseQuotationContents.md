# # QuotationIndexResponseQuotationContents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID |
**account_item_name** | **string** | 勘定科目名 |
**amount** | **int** | 内税/外税の判別とamountの税込み、税抜きについて &lt;ul&gt; &lt;li&gt;tax_entry_methodがexclusive (外税)の場合&lt;/li&gt; &lt;ul&gt; &lt;li&gt;amount: 消費税抜きの金額&lt;/li&gt; &lt;li&gt;vat: 消費税の金額&lt;/li&gt; &lt;/ul&gt; &lt;li&gt;tax_entry_methodがinclusive (内税)の場合&lt;/li&gt; &lt;ul&gt; &lt;li&gt;amount: 消費税込みの金額&lt;/li&gt; &lt;li&gt;vat: 消費税の金額&lt;/li&gt; &lt;/ul&gt; &lt;/ul&gt; |
**description** | **string** | 備考 |
**id** | **int** | 見積内容ID |
**item_id** | **int** | 品目ID |
**item_name** | **string** | 品目 |
**order** | **int** | 順序 |
**qty** | **float** | 数量 |
**reduced_vat** | **bool** | 軽減税率税区分（true: 対象、false: 対象外） |
**section_id** | **int** | 部門ID |
**section_name** | **string** | 部門 |
**segment_1_tag_id** | **int** | セグメント１ID | [optional]
**segment_1_tag_name** | **string** | セグメント１ID | [optional]
**segment_2_tag_id** | **int** | セグメント２ID | [optional]
**segment_2_tag_name** | **string** | セグメント２ | [optional]
**segment_3_tag_id** | **int** | セグメント３ID | [optional]
**segment_3_tag_name** | **string** | セグメント３ | [optional]
**tag_ids** | **int[]** |  |
**tag_names** | **string[]** |  |
**tax_code** | **int** | 税区分コード |
**type** | **string** | 行の種類 |
**unit** | **string** | 単位 |
**unit_price** | **float** | 単価 |
**vat** | **int** | 消費税額 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
