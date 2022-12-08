# # ApprovalRequestResponseApprovalRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicant_id** | **int** | 申請者のユーザーID |
**application_date** | **string** | 申請日 (yyyy-mm-dd) |
**application_number** | **string** | 申請No. |
**approval_flow_logs** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[]**](ApprovalRequestResponseApprovalRequestApprovalFlowLogs.md) | 各種申請の承認履歴（配列） |
**approval_flow_route_id** | **int** | 申請経路ID |
**approval_request_form** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovalRequestForm**](ApprovalRequestResponseApprovalRequestApprovalRequestForm.md) |  |
**approvers** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovers[]**](ApprovalRequestResponseApprovalRequestApprovers.md) | 承認者（配列）   承認ステップのresource_typeがunspecified (指定なし)の場合はapproversはレスポンスに含まれません。   しかし、resource_typeがunspecifiedの承認ステップにおいて誰かが承認・却下・差し戻しのいずれかのアクションを取った後は、   approversはレスポンスに含まれるようになります。   その場合approversにはアクションを行ったステップのIDとアクションを行ったユーザーのIDが含まれます。 |
**comments** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestComments[]**](ApprovalRequestResponseApprovalRequestComments.md) | 各種申請のコメント一覧（配列） |
**company_id** | **int** | 事業所ID |
**current_round** | **int** | 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。 |
**current_step_id** | **int** | 現在承認ステップID |
**deal_id** | **int** | 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます) |
**deal_status** | **string** | 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:決済済み, unsettled:未決済) |
**form_id** | **int** | 申請フォームID |
**id** | **int** | 各種申請ID |
**manual_journal_id** | **int** | 振替伝票のID (申請ステータス:statusがapprovedで、関連する振替伝票が存在する時のみmanual_journal_idが表示されます)  &lt;a href&#x3D;\&quot;https://support.freee.co.jp/hc/ja/articles/115003827683-#5\&quot; target&#x3D;\&quot;_blank\&quot;&gt;承認された各種申請から支払依頼等を作成する&lt;/a&gt; |
**request_items** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestRequestItems[]**](ApprovalRequestResponseApprovalRequestRequestItems.md) | 各種申請の項目一覧（配列） |
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) |
**title** | **string** | 申請タイトル |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
