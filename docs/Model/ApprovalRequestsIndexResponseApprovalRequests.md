# # ApprovalRequestsIndexResponseApprovalRequests

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicant_id** | **int** | 申請者のユーザーID | 
**application_date** | **string** | 申請日 (yyyy-mm-dd) | 
**application_number** | **string** | 申請No. | 
**company_id** | **int** | 事業所ID | 
**current_round** | **int** | 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。 | 
**current_step_id** | **int** | 現在承認ステップID | 
**form_id** | **int** | 申請フォームID | 
**id** | **int** | 各種申請ID | 
**request_items** | [**\Freee\Accounting\Model\ApprovalRequestResponseApprovalRequestRequestItems[]**](ApprovalRequestResponseApprovalRequestRequestItems.md) | 各種申請の項目一覧（配列） | 
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) | 
**title** | **string** | 申請タイトル | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


