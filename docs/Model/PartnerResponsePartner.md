# # PartnerResponsePartner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_attributes** | [**\Freee\Accounting\Model\PartnerResponsePartnerAddressAttributes**](PartnerResponsePartnerAddressAttributes.md) |  | [optional] 
**code** | **string** | 取引先コード | 
**company_id** | **int** | 事業所ID | 
**contact_name** | **string** | 担当者 氏名 | [optional] 
**country_code** | **string** | 地域（JP: 国内、ZZ:国外） | [optional] 
**default_title** | **string** | 敬称（御中、様、(空白)の3つから選択） | [optional] 
**email** | **string** | 担当者 メールアドレス | [optional] 
**id** | **int** | 取引先ID | 
**invoice_payment_term_attributes_additional_months** | **int** | 支払月 | [optional] 
**invoice_payment_term_attributes_cutoff_day** | **int** | 締め日（29, 30, 31日の末日を指定する場合は、32。） | [optional] 
**invoice_payment_term_attributes_fixed_day** | **int** | 支払日（29, 30, 31日の末日を指定する場合は、32。） | [optional] 
**long_name** | **string** | 正式名称（255文字以内） | [optional] 
**name** | **string** | 取引先名 | 
**name_kana** | **string** | カナ名称（255文字以内） | [optional] 
**org_code** | **int** | 事業所種別（null: 未設定、1: 法人、2: 個人） | [optional] 
**partner_bank_account_attributes_account_name** | **string** | 受取人名（カナ） | [optional] 
**partner_bank_account_attributes_account_number** | **string** | 口座番号 | [optional] 
**partner_bank_account_attributes_account_type** | **string** | 口座種別(ordinary:普通、checking:当座、earmarked:納税準備預金、savings:貯蓄、other:その他) | [optional] 
**partner_bank_account_attributes_bank_code** | **string** | 銀行番号 | [optional] 
**partner_bank_account_attributes_bank_name** | **string** | 銀行名 | [optional] 
**partner_bank_account_attributes_bank_name_kana** | **string** | 銀行名（カナ） | [optional] 
**partner_bank_account_attributes_branch_code** | **string** | 支店番号 | [optional] 
**partner_bank_account_attributes_branch_kana** | **string** | 支店名（カナ） | [optional] 
**partner_bank_account_attributes_branch_name** | **string** | 支店名 | [optional] 
**partner_bank_account_attributes_long_account_name** | **string** | 受取人名 | [optional] 
**partner_doc_setting_attributes_sending_method** | **string** | 請求書送付方法(email:メール、posting:郵送、email_and_posting:メールと郵送) | [optional] 
**payer_walletable_id** | **int** | 振込元口座ID（一括振込ファイル用）:（未設定の場合は、nullです。） | [optional] 
**payment_term_attributes_additional_months** | **int** | 支払月 | [optional] 
**payment_term_attributes_cutoff_day** | **int** | 締め日（29, 30, 31日の末日を指定する場合は、32。） | [optional] 
**payment_term_attributes_fixed_day** | **int** | 支払日（29, 30, 31日の末日を指定する場合は、32。） | [optional] 
**phone** | **string** | 電話番号 | [optional] 
**shortcut1** | **string** | ショートカット1 (20文字以内) | [optional] 
**shortcut2** | **string** | ショートカット2 (20文字以内) | [optional] 
**transfer_fee_handling_side** | **string** | 振込手数料負担（一括振込ファイル用）: (振込元(当方): payer, 振込先(先方): payee) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


