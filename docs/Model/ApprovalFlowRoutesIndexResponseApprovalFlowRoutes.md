# # ApprovalFlowRoutesIndexResponseApprovalFlowRoutes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_route** | **bool** | 基本経路として設定されているかどうか&lt;br&gt;&lt;br&gt; リクエストパラメータusageに下記のいずれかが指定され、かつ、基本経路の場合はtrueになります。 * &#x60;TxnApproval&#x60; - 仕訳承認 * &#x60;ExpenseApplication&#x60; - 経費精算 * &#x60;PaymentRequest&#x60; - 支払依頼 * &#x60;ApprovalRequest&#x60;(リクエストパラメータrequest_form_idを同時に指定) - 各種申請 * &#x60;DocApproval&#x60; - 請求書等 (見積書・納品書・請求書・発注書)  &lt;a href&#x3D;\&quot;https://support.freee.co.jp/hc/ja/articles/900000507963\&quot; target&#x3D;\&quot;_blank\&quot;&gt;申請フォームの基本経路設定&lt;/a&gt; |
**definition_system** | **bool** | システム作成の申請経路かどうか | [optional]
**description** | **string** | 申請経路の説明 | [optional]
**first_step_id** | **int** | 最初の承認ステップのID | [optional]
**id** | **int** | 申請経路ID |
**name** | **string** | 申請経路名 | [optional]
**request_form_ids** | **int[]** | 申請経路で利用できる申請フォームID配列 | [optional]
**usages** | **string[]** | 申請種別（申請経路を使用できる申請種別を示します。例えば、ApprovalRequest の場合は、各種申請で使用できる申請経路です。） * &#x60;TxnApproval&#x60; - 仕訳承認 * &#x60;ExpenseApplication&#x60; - 経費精算 * &#x60;PaymentRequest&#x60; - 支払依頼 * &#x60;ApprovalRequest&#x60; - 各種申請 * &#x60;DocApproval&#x60; - 請求書等 (見積書・納品書・請求書・発注書) | [optional]
**user_id** | **int** | 更新したユーザーのユーザーID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
