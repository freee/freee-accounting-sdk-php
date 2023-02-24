# # Receipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | 作成日時（ISO8601形式） |
**description** | **string** | メモ | [optional]
**document_type** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 書類の種類（receipt: 領収書、invoice: 請求書、other: その他） | [optional]
**file_src** | **string** | ファイルのダウンロードURL（freeeにログインした状態でのみ閲覧可能です。） &lt;br&gt; &lt;br&gt; file_srcは廃止予定の属性になります。&lt;br&gt; file_srcに替わり、証憑ファイルのダウンロード APIをご利用ください。&lt;br&gt; 証憑ファイルのダウンロードAPIを利用することで、以下のようになります。 &lt;ul&gt;   &lt;li&gt;アプリケーション利用者はfreee APIアプリケーションにログインしていれば、証憑ダウンロード毎にfreeeに改めてログインすることなくファイルが参照できるようになります。&lt;/li&gt; &lt;/ul&gt; |
**id** | **int** | ファイルボックス（証憑ファイル）ID |
**invoice_registration_number** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 インボイス制度適格請求書発行事業者登録番号 - 先頭T数字13桁の固定14桁の文字列 &lt;a target&#x3D;\&quot;_blank\&quot; href&#x3D;\&quot;https://www.invoice-kohyo.nta.go.jp/index.html\&quot;&gt;国税庁インボイス制度適格請求書発行事業者公表サイト&lt;/a&gt; | [optional]
**issue_date** | **string** | 発生日 | [optional]
**mime_type** | **string** | MIMEタイプ |
**origin** | **string** | アップロード元種別 |
**qualified_invoice** | **string** | この項目はインボイス制度で利用する項目です。2023年4月頃から利用できる予定です。 適格請求書等（qualified: 該当する、not_qualified: 該当しない） | [optional]
**receipt_metadatum** | [**\Freee\Accounting\Model\DealReceiptMetadatum**](DealReceiptMetadatum.md) |  | [optional]
**status** | **string** | ステータス(confirmed:確認済み、deleted:削除済み、ignored:無視) |
**user** | [**\Freee\Accounting\Model\DealUser**](DealUser.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
