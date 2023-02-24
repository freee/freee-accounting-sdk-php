# # ManualJournal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment** | **bool** | 決算整理仕訳フラグ（falseまたは未指定の場合: 日常仕訳） |
**company_id** | **int** | 事業所ID |
**details** | [**\Freee\Accounting\Model\ManualJournalDetails[]**](ManualJournalDetails.md) | 貸借行一覧（配列）: 貸借合わせて100行まで登録できます。 |
**id** | **int** | 振替伝票ID |
**issue_date** | **string** | 発生日 (yyyy-mm-dd) |
**receipt_ids** | **int[]** | ファイルボックス（証憑ファイル）ID | [optional]
**txn_number** | **string** | 仕訳番号 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
