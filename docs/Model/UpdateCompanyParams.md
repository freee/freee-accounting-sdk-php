# # UpdateCompanyParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | 事業所の正式名称 (100文字以内) | [optional] 
**name_kana** | **string** | 正式名称フリガナ (100文字以内) | [optional] 
**contact_name** | **string** | user1 | [optional] 
**address_attributes** | [**\Freee\Accounting\Model\UpdateCompanyParamsAddressAttributes**](UpdateCompanyParamsAddressAttributes.md) |  | [optional] 
**phone1** | **string** | 電話番号１ | [optional] 
**phone2** | **string** | 電話番号２ | [optional] 
**fax** | **string** | FAX | [optional] 
**sales_information_attributes** | [**\Freee\Accounting\Model\UpdateCompanyParamsSalesInformationAttributes**](UpdateCompanyParamsSalesInformationAttributes.md) |  | [optional] 
**head_count** | **float** | 従業員数（0: 経営者のみ、1: 2~5人、2: 6~10人、3: 11~20人、4: 21~30人、5: 31~40人、6: 41~100人、7: 100人以上 | [optional] 
**corporate_number** | **string** | 法人番号 (半角数字13桁、法人のみ) | [optional] 
**fiscal_years_attributes** | [**\Freee\Accounting\Model\UpdateCompanyParamsFiscalYearsAttributes**](UpdateCompanyParamsFiscalYearsAttributes.md) |  | [optional] 
**doc_template** | [**\Freee\Accounting\Model\UpdateCompanyParamsDocTemplate**](UpdateCompanyParamsDocTemplate.md) |  | [optional] 
**txn_number_format** | **string** | 仕訳番号形式（not_used: 使用しない、digits: 数字（例：5091824）、alnum: 英数字（例：59J0P））Available values : not_used, digits, alnum | [optional] 
**private_settlement** | **int** | プライベート資金/役員資金（0: 使用しない、1: 使用する） | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


