# # ReceiptUpdateParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_id** | **int** | 事業所ID |
**description** | **string** | メモ (255文字以内) | [optional]
**document_type** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 書類の種類（receipt: 領収書、invoice: 請求書、other: その他） | [optional]
**invoice_registration_number** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 インボイス制度適格請求書発行事業者登録番号 - 先頭T数字13桁の固定14桁の文字列 &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.invoice-kohyo.nta.go.jp/index.html\&quot;&gt;国税庁インボイス制度適格請求書発行事業者公表サイト&lt;/a&gt; | [optional]
**issue_date** | **string** | 取引日 (yyyy-mm-dd) |
**qualified_invoice** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 適格請求書等（qualified: 該当する、not_qualified: 該当しない） | [optional]
**receipt_metadatum** | [**\Freee\Accounting\Model\DealReceiptMetadatum**](DealReceiptMetadatum.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
