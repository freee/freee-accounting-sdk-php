# # PaymentRequestUpdateParamsPaymentRequestLines

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_item_id** | **int** | 勘定科目ID | [optional]
**amount** | **int** | 金額 |
**description** | **string** | 内容 | [optional]
**id** | **int** | 支払依頼の項目行ID: 既存項目行を更新する場合に指定します。IDを指定しない項目行は、新規行として扱われ追加されます。また、payment_request_linesに含まれない既存の項目行は削除されます。更新後も残したい行は、必ず支払依頼の項目行IDを指定してpayment_request_linesに含めてください。 | [optional]
**item_id** | **int** | 品目ID | [optional]
**line_type** | **string** | &#39;行の種類 (deal_line: 支払依頼の通常取引行, withholding_tax: 源泉所得税行)&#39;&lt;br&gt; &#39;デフォルトは deal_line: 支払依頼の通常取引行 です&#39; | [optional]
**section_id** | **int** | 部門ID | [optional]
**segment_1_tag_id** | **int** | セグメント１ID&lt;br&gt; セグメントタグ一覧の取得APIを利用して取得してください。&lt;br&gt; &lt;a href&#x3D;\&quot;https://support.freee.co.jp/hc/ja/articles/360020679611\&quot; target&#x3D;\&quot;_blank\&quot;&gt;セグメント（分析用タグ）の設定&lt;/a&gt;&lt;br&gt; | [optional]
**segment_2_tag_id** | **int** | セグメント２ID(法人向けエンタープライズプラン)&lt;br&gt; セグメントタグ一覧の取得APIを利用して取得してください。&lt;br&gt; &lt;a href&#x3D;\&quot;https://support.freee.co.jp/hc/ja/articles/360020679611\&quot; target&#x3D;\&quot;_blank\&quot;&gt;セグメント（分析用タグ）の設定&lt;/a&gt;&lt;br&gt; | [optional]
**segment_3_tag_id** | **int** | セグメント３ID(法人向けエンタープライズプラン)&lt;br&gt; セグメントタグ一覧の取得APIを利用して取得してください。&lt;br&gt; &lt;a href&#x3D;\&quot;https://support.freee.co.jp/hc/ja/articles/360020679611\&quot; target&#x3D;\&quot;_blank\&quot;&gt;セグメント（分析用タグ）の設定&lt;/a&gt;&lt;br&gt; | [optional]
**tag_ids** | **int[]** | メモタグID | [optional]
**tax_code** | **int** | 税区分コード&lt;br&gt; 勘定科目IDを指定する場合は必須です。 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
