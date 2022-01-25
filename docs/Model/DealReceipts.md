# # DealReceipts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | 作成日時（ISO8601形式） |
**description** | **string** | メモ | [optional]
**file_src** | **string** | ファイルのダウンロードURL（freeeにログインした状態でのみ閲覧可能です。） &lt;br&gt; &lt;br&gt; file_srcは廃止予定の属性になります。&lt;br&gt; file_srcに替わり、証憑ファイル（ファイルボックスのファイル）のダウンロード APIをご利用ください。&lt;br&gt; 証憑ファイル（ファイルボックスのファイル）のダウンロードAPIを利用することで、以下のようになります。 &lt;ul&gt;   &lt;li&gt;アプリケーション利用者はfreee APIアプリケーションにログインしていれば、証憑ダウンロード毎にfreeeに改めてログインすることなくファイルが参照できるようになります。&lt;/li&gt; &lt;/ul&gt; |
**id** | **int** | 証憑ファイルID（ファイルボックスのファイルID） |
**issue_date** | **string** | 発生日 | [optional]
**mime_type** | **string** | MIMEタイプ |
**origin** | **string** | アップロード元種別 |
**status** | **string** | ステータス(unconfirmed:確認待ち、confirmed:確認済み、deleted:削除済み、ignored:無視) |
**user** | [**\Freee\Accounting\Model\DealUser**](DealUser.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
