# # ApprovalRequestFormParts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**annotation** | **string** | 追加説明 | [optional] 
**id** | **int** | 項目ID | 
**label** | **string** | 項目名 | [optional] 
**max_amount** | **int** | 上限金額 | [optional] 
**min_amount** | **int** | 下限金額 | [optional] 
**order** | **int** | 順序 | [optional] 
**required** | **bool** | 必須かどうか | [optional] 
**type** | **string** | 項目種別 (title: 申請タイトル, single_line: 自由記述形式 1行, multi_line: 自由記述形式 複数行, select: プルダウン, date: 日付, amount: 金額, receipt: 添付ファイル) | [optional] 
**values** | [**\Freee\Accounting\Model\ApprovalRequestFormValues[]**](ApprovalRequestFormValues.md) | 選択項目 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


