# # ExpenseApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 経費申請ID | 
**company_id** | **int** | 事業所ID | 
**title** | **string** | 申請タイトル | 
**description** | **string** | 備考 | [optional] 
**editable_on_web** | **bool** | 会計freeeのWeb画面から申請内容を編集可能：falseの場合、Web上からの項目行の追加／削除・金額の編集が出来なくなります。APIでの編集は可能です。 | 
**total_amount** | **int** | 合計金額 | [optional] 
**status** | **string** | 申請ステータス | 
**tag_ids** | **int[]** | メモタグID | [optional] 
**expense_application_lines** | [**\Freee\Accounting\Model\ExpenseApplicationExpenseApplicationLines[]**](ExpenseApplicationExpenseApplicationLines.md) | 経費申請の項目行一覧（配列） | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


