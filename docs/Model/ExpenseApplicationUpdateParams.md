# # ExpenseApplicationUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID |
**description** | **string** | 備考 (10000文字以内) | [optional]
**editable_on_web** | **bool** | 会計freeeのWeb画面から申請内容を編集可能：falseの場合、Web上からの項目行の追加／削除・金額の編集が出来なくなります。APIでの編集は可能です。 | [optional]
**expense_application_lines** | [**\Freee\Accounting\Model\ExpenseApplicationUpdateParamsExpenseApplicationLines[]**](ExpenseApplicationUpdateParamsExpenseApplicationLines.md) |  |
**issue_date** | **string** | 申請日 (yyyy-mm-dd) |
**section_id** | **int** | 部門ID | [optional]
**tag_ids** | **int[]** | メモタグID | [optional]
**title** | **string** | 申請タイトル (250文字以内) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
