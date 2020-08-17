# # ApprovalRequestUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_date** | **string** | 申請日 (yyyy-mm-dd) | 
**approval_flow_route_id** | **int** | 申請経路ID | 
**approver_id** | **int** | 承認者のユーザーID | [optional] 
**company_id** | **int** | 事業所ID | 
**draft** | **bool** | falseの時、in_progress:申請中で更新する。それ以外の時はdraft:下書きで更新する | 
**request_items** | [**\Freee\Accounting\Model\ApprovalRequestCreateParamsRequestItems[]**](ApprovalRequestCreateParamsRequestItems.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


