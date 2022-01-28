# # DealDetails1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID |
**amount** | **int** | 金額（税込で指定してください） |
**description** | **string** | 備考 | [optional]
**entry_side** | **string** | 貸借(貸方: credit, 借方: debit) |
**id** | **int** | +更新の明細行ID |
**item_id** | **int** | 品目ID | [optional]
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID | [optional]
**segment_2_tag_id** | **int** | セグメント２ID | [optional]
**segment_3_tag_id** | **int** | セグメント３ID | [optional]
**tag_ids** | **int[]** |  |
**tax_code** | **int** | 税区分コード |
**vat** | **int** | 消費税額（指定しない場合は自動で計算されます） |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
