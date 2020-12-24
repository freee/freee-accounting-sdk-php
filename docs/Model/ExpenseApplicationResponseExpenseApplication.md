# # ExpenseApplicationResponseExpenseApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID |
**deal_id** | **int** | 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます) |
**deal_status** | **string** | 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:精算済み, unsettled:清算待ち) |
**description** | **string** | 備考 | [optional]
**editable_on_web** | **bool** | 会計freeeのWeb画面から申請内容を編集可能：falseの場合、Web上からの項目行の追加／削除・金額の編集が出来なくなります。APIでの編集は可能です。 |
**expense_application_lines** | [**\Freee\Accounting\Model\ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines[]**](ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines.md) | 経費申請の項目行一覧（配列） |
**id** | **int** | 経費申請ID |
**issue_date** | **string** | 申請日 (yyyy-mm-dd) |
**section_id** | **int** | 部門ID | [optional]
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) |
**tag_ids** | **int[]** | メモタグID | [optional]
**title** | **string** | 申請タイトル |
**total_amount** | **int** | 合計金額 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
