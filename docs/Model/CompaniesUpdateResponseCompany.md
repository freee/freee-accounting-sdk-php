# # CompaniesUpdateResponseCompany

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 事業所ID | 
**display_name** | **string** | 事業所名 | 
**tax_at_source_calc_type** | **int** | 源泉徴収税計算（0: 消費税を含める、1: 消費税を含めない） | 
**corporate_number** | **string** | 法人番号 (半角数字13桁、法人のみ) | 
**txn_number_format** | **string** | 仕訳番号形式（not_used: 使用しない、digits: 数字（例：5091824）、alnum: 英数字（例：59J0P）） | 
**default_wallet_account_id** | **int** | 決済口座のデフォルト | [optional] 
**private_settlement** | **bool** | プライベート資金/役員資金（false: 使用しない、true: 使用する） | 
**minus_format** | **int** | マイナスの表示方法（0: -、 1: △） | 
**role** | **string** | ユーザーの権限 | 
**phone1** | **string** | 電話番号１ | 
**zipcode** | **string** | 郵便番号 | 
**prefecture_code** | **int** | 都道府県コード（0: 北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄 | 
**street_name1** | **string** | 市区町村・番地 | 
**street_name2** | **string** | 建物名・部屋番号など | 
**invoice_layout** | **int** | レイアウト(0: レイアウト1, 1:レイアウト2, 3:封筒1, 4:レイアウト3(繰越金額欄あり), 5: 封筒2(繰越金額欄あり)) | 
**invoice_style** | **int** | スタイル(0: クラシック, 1: モダン) | 
**amount_fraction** | **int** | 金額端数処理方法（0: 切り捨て、1: 切り上げ、2: 四捨五入） | 
**industry_class** | **string** | 種別（agriculture_forestry_fisheries_ore: 農林水産業/鉱業、construction: 建設、manufacturing_processing: 製造/加工、it: IT、transportation_logistics: 運輸/物流、retail_wholesale: 小売/卸売、finance_insurance: 金融/保険、real_estate_rental: 不動産/レンタル、profession: 士業/学術/専門技術サービス、design_production: デザイン/制作、food: 飲食、leisure_entertainment: レジャー/娯楽、lifestyle: 生活関連サービス、education: 教育/学習支援、medical_welfare: 医療/福祉、other_services: その他サービス、other: その他） | 
**industry_code** | **string** | コード（transport_delivery: 輸送業/配送業、delivery: バイク便等の配達業、other_transportation_logistics: その他の運輸業、物流業） | 
**workflow_setting** | **string** | 仕訳承認フロー（enable: 有効、 disable: 無効） | 
**fiscal_years** | [**\Freee\Accounting\Model\FiscalYears[]**](FiscalYears.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


