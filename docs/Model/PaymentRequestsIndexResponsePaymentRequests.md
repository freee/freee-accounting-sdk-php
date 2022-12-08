# # PaymentRequestsIndexResponsePaymentRequests

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicant_id** | **int** | 申請者のユーザーID |
**application_date** | **string** | 申請日 (yyyy-mm-dd) |
**application_number** | **string** | 申請No. |
**approvers** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovers[]**](ApprovalRequestResponseApprovalRequestApprovers.md) | 承認者（配列）   承認ステップのresource_typeがunspecified (指定なし)の場合はapproversはレスポンスに含まれません。   しかし、resource_typeがunspecifiedの承認ステップにおいて誰かが承認・却下・差し戻しのいずれかのアクションを取った後は、   approversはレスポンスに含まれるようになります。   その場合approversにはアクションを行ったステップのIDとアクションを行ったユーザーのIDが含まれます。 |
**company_id** | **int** | 事業所ID |
**current_round** | **int** | 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。 |
**current_step_id** | **int** | 現在承認ステップID |
**deal_id** | **int** | 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます) | [optional]
**deal_status** | **string** | 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:支払済み, unsettled:支払待ち) | [optional]
**document_code** | **string** | 請求書番号 |
**id** | **int** | 支払依頼ID |
**issue_date** | **string** | 発生日 (yyyy-mm-dd) |
**partner_code** | **string** | 取引先コード |
**partner_id** | **int** | 取引先ID |
**partner_name** | **string** | 取引先名 |
**payment_date** | **string** | 支払期限 (yyyy-mm-dd) |
**payment_method** | **string** | 支払方法(none: 指定なし, domestic_bank_transfer: 国内振込, abroad_bank_transfer: 国外振込, account_transfer: 口座振替, credit_card: クレジットカード) |
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) |
**title** | **string** | 申請タイトル |
**total_amount** | **int** | 合計金額 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
