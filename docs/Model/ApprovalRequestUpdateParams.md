# # ApprovalRequestUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_date** | **string** | 申請日 (yyyy-mm-dd)&lt;br&gt; 指定しない場合は当日の日付が登録されます。 | [optional]
**approval_flow_route_id** | **int** | 申請経路ID |
**approver_id** | **int** | 承認者のユーザーID | [optional]
**company_id** | **int** | 事業所ID |
**draft** | **bool** | 各種申請のステータス&lt;br&gt; falseを指定した時は申請中（in_progress）で各種申請を更新します。&lt;br&gt; trueを指定した時は下書き（draft）で各種申請を更新します。 |
**request_items** | [**\Freee\Accounting\Model\ApprovalRequestCreateParamsRequestItems[]**](ApprovalRequestCreateParamsRequestItems.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
