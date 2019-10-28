# # CreateExpenseApplicationParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID | 
**title** | **string** | 申請タイトル | 
**issue_date** | **string** | 申請日 (yyyy-mm-dd) | 
**description** | **string** | 備考 | [optional] 
**editable_on_web** | **bool** | 会計freeeのWeb画面から申請内容を編集可能（デフォルト: false）：falseの場合、Web上からの項目行の追加／削除・金額の編集が出来なくなります。APIでの編集は可能です。 | [optional] 
**section_id** | **int** | 部門ID | [optional] 
**tag_ids** | **int[]** | メモタグID | [optional] 
**expense_application_lines** | [**\Freee\Accounting\Model\CreateExpenseApplicationParamsExpenseApplicationLines[]**](CreateExpenseApplicationParamsExpenseApplicationLines.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


