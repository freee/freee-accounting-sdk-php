# # InvoicesUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID | 
**issue_date** | **string** | 請求日 (yyyy-mm-dd) | [optional] 
**partner_id** | **int** | 取引先ID | [optional] 
**partner_code** | **string** | 取引先コード | [optional] 
**invoice_number** | **string** | 請求書番号 (デフォルト: 自動採番されます) | [optional] 
**title** | **string** | タイトル (デフォルト: 請求書) | [optional] 
**due_date** | **string** | 期日 (yyyy-mm-dd) | [optional] 
**booking_date** | **string** | 売上計上日 | [optional] 
**description** | **string** | 概要 | [optional] 
**invoice_status** | **string** | 請求書ステータス  (draft: 下書き (デフォルト), issue: 発行(請求先ワークフローを利用している場合は承認済の請求書にのみ指定できます)) | [optional] 
**partner_name** | **string** | 取引先名 | [optional] 
**partner_title** | **string** | 敬称（御中、様、(空白)の3つから選択） | [optional] 
**partner_contact_info** | **string** | 取引先担当者名 | [optional] 
**company_name** | **string** | 事業所名 (デフォルトは事業所設定情報が補完されます) | [optional] 
**company_zipcode** | **string** | 郵便番号 (デフォルトは事業所設定情報が補完されます) | [optional] 
**company_prefecture_code** | **int** | 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄) (デフォルトは事業所設定情報が補完されます) | [optional] 
**company_address1** | **string** | 市区町村・番地 (デフォルトは事業所設定情報が補完されます) | [optional] 
**company_address2** | **string** | 建物名・部屋番号など (デフォルトは事業所設定情報が補完されます) | [optional] 
**company_contact_info** | **string** | 事業所担当者名 (デフォルトは事業所設定情報が補完されます) | [optional] 
**payment_type** | **string** | 支払方法 (振込: transfer, 引き落とし: direct_debit) | [optional] 
**payment_bank_info** | **string** | 支払口座 | [optional] 
**use_virtual_transfer_account** | **string** | 振込専用口座の利用(利用しない: not_use(デフォルト), 利用する: use) | [optional] 
**message** | **string** | メッセージ (デフォルト: 下記の通りご請求申し上げます。) | [optional] 
**notes** | **string** | 備考 | [optional] 
**invoice_layout** | **string** | レイアウト(default_classic: レイアウト１/クラシック (デフォルト), standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン) | [optional] 
**tax_entry_method** | **string** | 請求書の消費税計算方法(inclusive: 内税表示, exclusive: 外税表示 (デフォルト)) | [optional] 
**invoice_contents** | [**\Freee\Accounting\Model\InvoicesUpdateParamsInvoiceContents[]**](InvoicesUpdateParamsInvoiceContents.md) | 請求内容 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


