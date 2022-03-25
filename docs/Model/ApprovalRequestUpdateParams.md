# # ApprovalRequestUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_date** | **string** | 申請日 (yyyy-mm-dd)&lt;br&gt; 指定しない場合は当日の日付が登録されます。 | [optional]
**approval_flow_route_id** | **int** | 申請経路ID |
**approver_id** | **int** | 承認者のユーザーID | [optional]
**company_id** | **int** | 事業所ID |
**draft** | **bool** | falseの時、in_progress:申請中で更新する。それ以外の時はdraft:下書きで更新する |
**request_items** | [**\Freee\Accounting\Model\ApprovalRequestCreateParamsRequestItems[]**](ApprovalRequestCreateParamsRequestItems.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
