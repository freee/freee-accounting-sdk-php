# # Receipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 証憑ID | 
**status** | **string** | ステータス(unconfirmed:確認待ち、confirmed:確認済み、deleted:削除済み、ignored:無視) | 
**description** | **string** | メモ | [optional] 
**mime_type** | **string** | MIMEタイプ | 
**issue_date** | **string** | 発生日 | [optional] 
**origin** | **string** | アップロード元種別 | 
**created_at** | **string** | 作成日時（ISO8601形式） | 
**file_src** | **string** | ファイルのダウンロードURL（freeeにログインした状態でのみ閲覧可能です。） | 
**user** | [**\Freee\Accounting\Model\ReceiptUser**](ReceiptUser.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


