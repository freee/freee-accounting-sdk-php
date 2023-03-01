# # PartnerCreateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_attributes** | [**\Freee\Accounting\Model\PartnerCreateParamsAddressAttributes**](PartnerCreateParamsAddressAttributes.md) |  | [optional]
**code** | **string** | 取引先コード（取引先コードの利用を有効にしている場合は、codeの指定は必須です。ただし重複は不可。） | [optional]
**company_id** | **int** | 事業所ID |
**contact_name** | **string** | 担当者 氏名 (255文字以内) | [optional]
**country_code** | **string** | 地域（JP: 国内、ZZ:国外）、指定しない場合JPになります。 | [optional]
**default_title** | **string** | 敬称（御中、様、(空白)の3つから選択） | [optional]
**email** | **string** | 担当者 メールアドレス (255文字以内) | [optional]
**invoice_payment_term_attributes** | [**\Freee\Accounting\Model\PartnerCreateParamsInvoicePaymentTermAttributes**](PartnerCreateParamsInvoicePaymentTermAttributes.md) |  | [optional]
**invoice_registration_number** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 インボイス制度適格請求書発行事業者登録番号 - 先頭T数字13桁の固定14桁の文字列 &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.invoice-kohyo.nta.go.jp/index.html\&quot;&gt;国税庁インボイス制度適格請求書発行事業者公表サイト&lt;/a&gt; | [optional]
**long_name** | **string** | 正式名称（255文字以内） | [optional]
**name** | **string** | 取引先名 (255文字以内、重複不可) |
**name_kana** | **string** | カナ名称（255文字以内） | [optional]
**org_code** | **int** | 事業所種別（null: 未設定、1: 法人、2: 個人） | [optional]
**partner_bank_account_attributes** | [**\Freee\Accounting\Model\PartnerCreateParamsPartnerBankAccountAttributes**](PartnerCreateParamsPartnerBankAccountAttributes.md) |  | [optional]
**partner_doc_setting_attributes** | [**\Freee\Accounting\Model\PartnerCreateParamsPartnerDocSettingAttributes**](PartnerCreateParamsPartnerDocSettingAttributes.md) |  | [optional]
**payer_walletable_id** | **int** | 振込元口座ID（一括振込ファイル用）:（walletableのtypeが&#39;bank_account&#39;のidのみ指定できます。また、未設定にする場合は、nullを指定してください。） | [optional]
**payment_term_attributes** | [**\Freee\Accounting\Model\PartnerCreateParamsPaymentTermAttributes**](PartnerCreateParamsPaymentTermAttributes.md) |  | [optional]
**phone** | **string** | 電話番号 | [optional]
**qualified_invoice_issuer** | **bool** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 インボイス制度適格請求書発行事業者（true: 対象事業者、false: 非対象事業者） &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.invoice-kohyo.nta.go.jp/index.html\&quot;&gt;国税庁インボイス制度適格請求書発行事業者公表サイト&lt;/a&gt; | [optional] [default to false]
**shortcut1** | **string** | ショートカット１ (255文字以内) | [optional]
**shortcut2** | **string** | ショートカット２ (255文字以内) | [optional]
**transfer_fee_handling_side** | **string** | 振込手数料負担（一括振込ファイル用）: (振込元(当方): payer, 振込先(先方): payee)、指定しない場合payerになります。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
