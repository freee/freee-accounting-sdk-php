# # PaymentRequestResponsePaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_name** | **string** | 受取人名（カナ） |
**account_number** | **string** | 口座番号 |
**account_type** | **string** | 口座種別(ordinary:普通、checking:当座、earmarked:納税準備預金、savings:貯蓄、other:その他) |
**applicant_id** | **int** | 申請者のユーザーID |
**application_date** | **string** | 申請日 (yyyy-mm-dd) |
**application_number** | **string** | 申請No. |
**approval_flow_logs** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovalFlowLogs[]**](ApprovalRequestResponseApprovalRequestApprovalFlowLogs.md) | 支払依頼の承認履歴（配列） |
**approval_flow_route_id** | **int** | 申請経路ID |
**approvers** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestApprovers[]**](ApprovalRequestResponseApprovalRequestApprovers.md) | 承認者（配列）   承認ステップのresource_typeがunspecified (指定なし)の場合はapproversはレスポンスに含まれません。   しかし、resource_typeがunspecifiedの承認ステップにおいて誰かが承認・却下・差し戻しのいずれかのアクションを取った後は、   approversはレスポンスに含まれるようになります。   その場合approversにはアクションを行ったステップのIDとアクションを行ったユーザーのIDが含まれます。 |
**bank_code** | **string** | 銀行コード |
**bank_name** | **string** | 銀行名 |
**bank_name_kana** | **string** | 銀行名（カナ） |
**branch_code** | **string** | 支店番号 |
**branch_kana** | **string** | 支店名（カナ） |
**branch_name** | **string** | 支店名 |
**comments** | [**\OpenAPI\Client\Model\ApprovalRequestResponseApprovalRequestComments[]**](ApprovalRequestResponseApprovalRequestComments.md) | 支払依頼のコメント一覧（配列） |
**company_id** | **int** | 事業所ID |
**current_round** | **int** | 現在のround。差し戻し等により申請がstepの最初からやり直しになるとroundの値が増えます。 |
**current_step_id** | **int** | 現在承認ステップID |
**deal_id** | **int** | 取引ID (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_idが表示されます) |
**deal_status** | **string** | 取引ステータス (申請ステータス:statusがapprovedで、取引が存在する時のみdeal_statusが表示されます settled:支払済み, unsettled:支払待ち) |
**description** | **string** | 備考 |
**document_code** | **string** | 請求書番号 |
**id** | **int** | 支払依頼ID |
**issue_date** | **string** | 発生日 (yyyy-mm-dd) |
**partner_code** | **string** | 取引先コード | [optional]
**partner_id** | **int** | 取引先ID |
**partner_name** | **string** | 取引先名 |
**payment_date** | **string** | 支払期限 (yyyy-mm-dd) |
**payment_method** | **string** | 支払方法(none: 指定なし, domestic_bank_transfer: 国内振込, abroad_bank_transfer: 国外振込, account_transfer: 口座振替, credit_card: クレジットカード) |
**payment_request_lines** | [**\OpenAPI\Client\Model\PaymentRequestResponsePaymentRequestPaymentRequestLines[]**](PaymentRequestResponsePaymentRequestPaymentRequestLines.md) | 支払依頼の項目行一覧（配列） |
**receipt_ids** | **int[]** | 証憑ファイルID（ファイルボックスのファイルID） |
**status** | **string** | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) |
**title** | **string** | 申請タイトル |
**total_amount** | **int** | 合計金額 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
