# # Quotation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_address1** | **string** | 市区町村・番地 | [optional]
**company_address2** | **string** | 建物名・部屋番号など | [optional]
**company_contact_info** | **string** | 事業所担当者名 | [optional]
**company_id** | **int** | 事業所ID |
**company_name** | **string** | 事業所名 |
**company_prefecture_code** | **int** | 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | [optional]
**company_prefecture_name** | **string** | 都道府県 | [optional]
**company_zipcode** | **string** | 郵便番号 | [optional]
**description** | **string** | 概要 | [optional]
**id** | **int** | 見積書ID |
**issue_date** | **string** | 見積日 (yyyy-mm-dd) |
**mail_sent_at** | **string** | メール送信日時(最新) | [optional]
**message** | **string** | メッセージ | [optional]
**notes** | **string** | 備考 | [optional]
**partner_address1** | **string** | 市区町村・番地 | [optional]
**partner_address2** | **string** | 建物名・部屋番号など | [optional]
**partner_code** | **string** | 取引先コード | [optional]
**partner_contact_info** | **string** | 取引先担当者名 | [optional]
**partner_display_name** | **string** | 見積書に表示する取引先名 | [optional]
**partner_id** | **int** | 取引先ID |
**partner_name** | **string** | 取引先名 | [optional]
**partner_prefecture_code** | **int** | 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | [optional]
**partner_prefecture_name** | **string** | 都道府県 | [optional]
**partner_title** | **string** | 敬称（御中、様、(空白)の3つから選択） |
**partner_zipcode** | **string** | 郵便番号 | [optional]
**quotation_contents** | [**\Freee\Accounting\Model\QuotationQuotationContents[]**](QuotationQuotationContents.md) | 見積内容 | [optional]
**quotation_layout** | **string** | 見積書レイアウト * &#x60;default_classic&#x60; - レイアウト１/クラシック (デフォルト)  * &#x60;standard_classic&#x60; - レイアウト２/クラシック  * &#x60;envelope_classic&#x60; - 封筒１/クラシック  * &#x60;default_modern&#x60; - レイアウト１/モダン  * &#x60;standard_modern&#x60; - レイアウト２/モダン  * &#x60;envelope_modern&#x60; - 封筒/モダン |
**quotation_number** | **string** | 見積書番号 |
**quotation_status** | **string** | 見積書ステータス  (unsubmitted: 送付待ち, submitted: 送付済み, all: 全て) |
**sub_total** | **int** | 小計 | [optional]
**tax_entry_method** | **string** | 見積書の消費税計算方法(inclusive: 内税, exclusive: 外税) |
**title** | **string** | タイトル | [optional]
**total_amount** | **int** | 合計金額 |
**total_amount_per_vat_rate** | [**\Freee\Accounting\Model\InvoiceTotalAmountPerVatRate**](InvoiceTotalAmountPerVatRate.md) |  |
**total_vat** | **int** | 消費税 | [optional]
**web_confirmed_at** | **string** | Web共有取引先確認日時(最新) | [optional]
**web_downloaded_at** | **string** | Web共有ダウンロード日時(最新) | [optional]
**web_published_at** | **string** | Web共有日時(最新) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
