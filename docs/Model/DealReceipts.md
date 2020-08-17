# # DealReceipts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | 作成日時（ISO8601形式） | 
**description** | **string** | メモ | [optional] 
**file_src** | **string** | ファイルのダウンロードURL（freeeにログインした状態でのみ閲覧可能です。） | 
**id** | **int** | 証憑ID | 
**issue_date** | **string** | 発生日 | [optional] 
**mime_type** | **string** | MIMEタイプ | 
**origin** | **string** | アップロード元種別 | 
**status** | **string** | ステータス(unconfirmed:確認待ち、confirmed:確認済み、deleted:削除済み、ignored:無視) | 
**user** | [**\Freee\Accounting\Model\DealUser**](DealUser.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


