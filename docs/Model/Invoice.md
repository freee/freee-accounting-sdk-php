# # Invoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 請求書ID | 
**company_id** | **int** | 事業所ID | 
**issue_date** | **string** | 請求日 (yyyy-mm-dd) | 
**invoice_number** | **string** | 請求書番号 | 
**total_amount** | **int** | 合計金額 | 
**total_vat** | **int** | 合計金額 | [optional] 
**sub_total** | **int** | 小計 | [optional] 
**invoice_status** | **string** | 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み) | 
**payment_status** | **string** | 入金ステータス  (unsettled: 入金待ち, settled: 入金済み) | [optional] 
**posting_status** | **string** | 郵送ステータス(unrequested: リクエスト前, preview_registered: プレビュー登録, preview_failed: プレビュー登録失敗, ordered: 注文中, order_failed: 注文失敗, printing: 印刷中, canceled: キャンセル, posted: 投函済み) | 
**company_name** | **string** | 事業所名 | 
**payment_type** | **string** | 支払方法 (振込: transfer, 引き落とし: direct_debit) | 
**invoice_layout** | **string** | レイアウト(default_classic: レイアウト１/クラシック, standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン) | 
**tax_entry_method** | **string** | 請求書の消費税計算方法(inclusive: 内税, exclusive: 外税) | 
**invoice_contents** | [**\Freee\Accounting\Model\InvoiceInvoiceContents[]**](InvoiceInvoiceContents.md) | 請求内容 | [optional] 
**total_amount_per_vat_rate** | [**\Freee\Accounting\Model\InvoiceTotalAmountPerVatRate**](InvoiceTotalAmountPerVatRate.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


