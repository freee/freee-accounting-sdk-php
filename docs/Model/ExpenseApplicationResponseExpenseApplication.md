# # ExpenseApplicationResponseExpenseApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicant_id** | **int** | 申請者のユーザーID |
**application_number** | **string** | 申請No. |
**approval_flow_logs** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[]**](ApprovalRequestResponseApprovalRequestApprovalFlowLogs.md) | 経費申請の承認履歴（配列） |
**approval_flow_route_id** | **int** | 申請経路ID |
**approvers** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovers[]**](ApprovalRequestResponseApprovalRequestApprovers.md) | 承認者（配列）   承認ステップのresource_typeがunspecified (指定なし)の場合はapproversはレスポンスに含まれません。   しかし、resource_typeがunspecifiedの承認ステップにおいて誰かが承認・却下・差し戻しのいずれかのアクションを取った後は、   approversはレスポンスに含まれるようになります。   その場合approversにはアクションを行ったステップのIDとアクションを行ったユーザーのIDが含まれます。 |
**comments** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestComments[]**](ApprovalRequestResponseApprovalRequestComments.md) | 経費申請のコメント一覧（配列） |
**company_id** | **int** | 事業所ID |
**current_round** | **int** | 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。 |
**current_step_id** | **int** | 現在承認ステップID |
**deal_id** | **int** | 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます) |
**deal_status** | **string** | 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:精算済み, unsettled:清算待ち) |
**description** | **string** | 備考 | [optional]
**expense_application_lines** | [**\OpenAPI\Client\Model\ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines[]**](ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines.md) | 経費申請の項目行一覧（配列） |
**id** | **int** | 経費申請ID |
**issue_date** | **string** | 申請日 (yyyy-mm-dd) |
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID。セグメント１が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**segment_2_tag_id** | **int** | セグメント２ID。セグメント２が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**segment_3_tag_id** | **int** | セグメント３ID。セグメント３が使用可能なプランの時のみレスポンスに含まれます。 | [optional]
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) |
**tag_ids** | **int[]** | メモタグID | [optional]
**title** | **string** | 申請タイトル |
**total_amount** | **int** | 合計金額 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
