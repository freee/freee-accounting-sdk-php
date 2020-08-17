# # WalletTxn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | 取引金額 | 
**balance** | **int** | 残高(銀行口座等) | 
**company_id** | **int** | 事業所ID | 
**date** | **string** | 取引日(yyyy-mm-dd) | 
**description** | **string** | 取引内容 | 
**due_amount** | **int** | 未決済金額 | 
**entry_side** | **string** | 入金／出金 (入金: income, 出金: expense) | 
**id** | **int** | 明細ID | 
**status** | **int** | 明細のステータス（消込待ち: 1, 消込済み: 2, 無視: 3, 消込中: 4） | 
**walletable_id** | **int** | 口座ID | 
**walletable_type** | **string** | 口座区分 (銀行口座: bank_account, クレジットカード: credit_card, 現金: wallet) | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


