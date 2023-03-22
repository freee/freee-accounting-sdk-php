# # ExpenseApplicationUpdateParamsExpenseApplicationLines1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 金額 | [optional]
**description** | **string** | 内容 (250文字以内) | [optional]
**expense_application_line_template_id** | **int** | 経費科目ID | [optional]
**id** | **int** | 経費申請の明細行ID: 既存明細行を更新する場合に指定します。IDを指定しない明細行は、新規行として扱われ追加されます。また、expense_application_linesに含まれない既存の明細行は削除されます。更新後も残したい行は、必ず経費申請の明細行IDを指定してexpense_application_linesに含めてください。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
