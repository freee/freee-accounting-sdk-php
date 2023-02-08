# # FixedAsset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID | [optional]
**acquisition_cost** | **int** | 取得価額 | [optional]
**acquisition_date** | **\DateTime** | 取得日 | [optional]
**city_name** | **string** | 申告先市区町村 | [optional]
**closing_accumulated_depreciation** | **int** | 期末減価償却累計額 | [optional]
**closing_balance** | **int** | 未償却残高(期末残高) | [optional]
**company_id** | **int** | 事業所ID |
**depreciation_account_item_id** | **int** | 減価償却に使う勘定科目ID | [optional]
**depreciation_amount** | **int** | 減価償却費 | [optional]
**depreciation_method** | **string** | 償却方法:(少額償却: small_sum_method, 一括償却: lump_sum_method, 定額法: straight_line_method, 定率法: multiple_method, 旧定率法: old_multiple_method, 旧定額法: old_straight_line_method, 償却なし: non_depreciate_method, 任意償却: voluntary_method, 即時償却: immediate_method, 均等償却: equal_method) | [optional]
**id** | **int** | 固定資産ID |
**item_id** | **int** | 品目ID | [optional]
**life_years** | **int** | 耐用年数 | [optional]
**management_number** | **string** | 管理番号 | [optional]
**name** | **string** | 固定資産名 |
**opening_accumulated_depreciation** | **int** | 期首減価償却累計額 | [optional]
**opening_balance** | **int** | 期首残高 | [optional]
**prefecture_code** | **int** | 都道府県コード（-1: 設定しない、0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | [optional]
**retire_date** | **\DateTime** | 除却日、もしくは売却日 | [optional]
**retire_type** | **string** | 売却もしくは除却ステータス: (売却: sell, 除却: retire, 償却中: depreciating) | [optional]
**section_id** | **int** | 部門ID | [optional]
**updated_at** | **\DateTime** | 更新日 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
