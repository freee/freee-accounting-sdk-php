<?php
/**
 * UpdateCompanyParamsSalesInformationAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">スタートガイド</h2> <p>1. セットアップ</p> <ol> <ul><li><a href=\"https://support.freee.co.jp/hc/ja/articles/202847230\" class=\"external-link\" rel=\"nofollow\">freeeアカウント（無料）</a>を<a href=\"https://secure.freee.co.jp/users/sign_up\" class=\"external-link\" rel=\"nofollow\">作成</a>します（すでにお持ちの場合は次へ）</li><li><a href=\"https://app.secure.freee.co.jp/developers/demo_companies/description\" class=\"external-link\" rel=\"nofollow\">開発者向け事業所・環境を作成</a>します</li><li><span><a href=\"https://app.secure.freee.co.jp/developers/applications\" class=\"external-link\" rel=\"nofollow\">前のステップで作成した事業所を選択してfreeeアプリを追加</a>します</span></li><li>Client IDをCopyしておきます</li> </ul> </ol>  <p>2. 実際にAPIを叩いてみる（ブラウザからAPIのレスポンスを確認する）</p> <ol> <ul><li><span><span>以下のURLの●をclient_idに入れ替えて<a href=\"https://app.secure.freee.co.jp/developers/tutorials/3-%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B#%E8%AA%8D%E5%8F%AF%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B\" class=\"external-link\" rel=\"nofollow\">アクセストークンを取得</a>します</span></span><ul><li><span><span><pre><code>https://accounts.secure.freee.co.jp/public_api/authorize?client_id=●&amp;redirect_uri=urn%3Aietf%3Awg%3Aoauth%3A2.0%3Aoob&amp;response_type=token</a></code></pre></span></span></li></ul></li><li><span><a href=\"https://developer.freee.co.jp/docs/accounting/reference#/%E9%80%A3%E7%B5%A1%E5%85%88\" class=\"external-link\" rel=\"nofollow\">APIリファレンス</a>で<code>Authorize</code>を押下します</span></li><li><span>アクセストークン<span><span>を入力して</span></span>&nbsp;もう一度<span><code>Authorize</code>を押下して<code>Close</code>を押下します</span></span></li><li>リファレンス内のCompanies（事業所）に移動し、<code>Try it out</code>を押下し、<code>Execute</code>を押下します</li><li>Response bodyを参照し、事業所ID(id属性)を活用して、Companies以外のエンドポイントでどのようなデータのやりとりできるのか確認します</li></ul> </ol> <p>3. 連携を実装する</p> <ol> <ul><li><a href=\"https://developer.freee.co.jp/tips\" class=\"external-link\" rel=\"nofollow\">API TIPS</a>を参考に、ユースケースごとの連携の概要を学びます。<span>例えば</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-salesmanegement-system\" class=\"external-link\" rel=\"nofollow\">SFA、CRM、販売管理システムから会計freeeへの連携</a>や<a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-excel-and-spreadsheet\" class=\"external-link\" rel=\"nofollow\">エクセルやgoogle spreadsheetからの連携</a>です</li><li>実利用向け事業所がすでにある場合は利用、ない場合は作成します（セットアップで作成したのは開発者向け環境のため活用不可）</li><li><a href=\"https://developer.freee.co.jp/docs/accounting/reference\" class=\"external-link\" rel=\"nofollow\">API documentation</a><span>&nbsp;を参照し、躓いた場合は</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/community/forum/community\" class=\"external-link\" rel=\"nofollow\">Community</a><span>&nbsp;で質問してみましょう</span></li></ul> </ol> <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * UpdateCompanyParamsSalesInformationAttributes Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateCompanyParamsSalesInformationAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateCompanyParams_sales_information_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'industry_class' => 'string',
        'industry_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'industry_class' => null,
        'industry_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'industry_class' => 'industry_class',
        'industry_code' => 'industry_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'industry_class' => 'setIndustryClass',
        'industry_code' => 'setIndustryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'industry_class' => 'getIndustryClass',
        'industry_code' => 'getIndustryCode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE = 'agriculture_forestry_fisheries_ore';
    const INDUSTRY_CLASS_CONSTRUCTION = 'construction';
    const INDUSTRY_CLASS_MANUFACTURING_PROCESSING = 'manufacturing_processing';
    const INDUSTRY_CLASS_IT = 'it';
    const INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS = 'transportation_logistics';
    const INDUSTRY_CLASS_RETAIL_WHOLESALE = 'retail_wholesale';
    const INDUSTRY_CLASS_FINANCE_INSURANCE = 'finance_insurance';
    const INDUSTRY_CLASS_REAL_ESTATE_RENTAL = 'real_estate_rental';
    const INDUSTRY_CLASS_PROFESSION = 'profession';
    const INDUSTRY_CLASS_DESIGN_PRODUCTION = 'design_production';
    const INDUSTRY_CLASS_FOOD = 'food';
    const INDUSTRY_CLASS_LEISURE_ENTERTAINMENT = 'leisure_entertainment';
    const INDUSTRY_CLASS_LIFESTYLE = 'lifestyle';
    const INDUSTRY_CLASS_EDUCATION = 'education';
    const INDUSTRY_CLASS_MEDICAL_WELFARE = 'medical_welfare';
    const INDUSTRY_CLASS_OTHER_SERVICES = 'other_services';
    const INDUSTRY_CLASS_OTHER = 'other';
    const INDUSTRY_CODE_AGRICULTURE = 'agriculture';
    const INDUSTRY_CODE_FORESTRY = 'forestry';
    const INDUSTRY_CODE_FISHING_INDUSTRY = 'fishing_industry';
    const INDUSTRY_CODE_MINING = 'mining';
    const INDUSTRY_CODE_CIVIL_CONTRACTORS = 'civil_contractors';
    const INDUSTRY_CODE_PAVEMENT = 'pavement';
    const INDUSTRY_CODE_CARPENTER = 'carpenter';
    const INDUSTRY_CODE_RENOVATION = 'renovation';
    const INDUSTRY_CODE_ELECTRICAL_PLUMBING = 'electrical_plumbing';
    const INDUSTRY_CODE_GROCERY = 'grocery';
    const INDUSTRY_CODE_MACHINERY_MANUFACTURING = 'machinery_manufacturing';
    const INDUSTRY_CODE_PRINTING = 'printing';
    const INDUSTRY_CODE_OTHER_MANUFACTURING = 'other_manufacturing';
    const INDUSTRY_CODE_SOFTWARE_DEVELOPMENT = 'software_development';
    const INDUSTRY_CODE_SYSTEM_DEVELOPMENT = 'system_development';
    const INDUSTRY_CODE_SURVEY_ANALYSIS = 'survey_analysis';
    const INDUSTRY_CODE_SERVER_MANAGEMENT = 'server_management';
    const INDUSTRY_CODE_WEBSITE_PRODUCTION = 'website_production';
    const INDUSTRY_CODE_ONLINE_SERVICE_MANAGEMENT = 'online_service_management';
    const INDUSTRY_CODE_ONLINE_ADVERTISING_AGENCY = 'online_advertising_agency';
    const INDUSTRY_CODE_ONLINE_ADVERTISING_PLANNING_PRODUCTION = 'online_advertising_planning_production';
    const INDUSTRY_CODE_ONLINE_MEDIA_MANAGEMENT = 'online_media_management';
    const INDUSTRY_CODE_PORTAL_SITE_MANAGEMENT = 'portal_site_management';
    const INDUSTRY_CODE_OTHER_IT_SERVICES = 'other_it_services';
    const INDUSTRY_CODE_TRANSPORT_DELIVERY = 'transport_delivery';
    const INDUSTRY_CODE_DELIVERY = 'delivery';
    const INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS = 'other_transportation_logistics';
    const INDUSTRY_CODE_OTHER_WHOLESALE = 'other_wholesale';
    const INDUSTRY_CODE_CLOTHING_WHOLESALE_FIBER = 'clothing_wholesale_fiber';
    const INDUSTRY_CODE_FOOD_WHOLESALE = 'food_wholesale';
    const INDUSTRY_CODE_ENTRUSTED_DEVELOPMENT_WHOLESALE = 'entrusted_development_wholesale';
    const INDUSTRY_CODE_ONLINE_SHOP = 'online_shop';
    const INDUSTRY_CODE_FASHION_GROCERY_STORE = 'fashion_grocery_store';
    const INDUSTRY_CODE_FOOD_STORE = 'food_store';
    const INDUSTRY_CODE_ENTRUSTED_STORE = 'entrusted_store';
    const INDUSTRY_CODE_OTHER_STORE = 'other_store';
    const INDUSTRY_CODE_FINANCIAL_INSTRUMENTS_EXCHANGE = 'financial_instruments_exchange';
    const INDUSTRY_CODE_COMMODITY_FUTURES_INVESTMENT_ADVISOR = 'commodity_futures_investment_advisor';
    const INDUSTRY_CODE_OTHER_FINANCIAL = 'other_financial';
    const INDUSTRY_CODE_BROKERAGE_INSURANCE = 'brokerage_insurance';
    const INDUSTRY_CODE_OTHER_INSURANCE = 'other_insurance';
    const INDUSTRY_CODE_REAL_ESTATE_DEVELOPER = 'real_estate_developer';
    const INDUSTRY_CODE_REAL_ESTATE_BROKERAGE = 'real_estate_brokerage';
    const INDUSTRY_CODE_RENT_COIN_PARKING_MANAGEMENT = 'rent_coin_parking_management';
    const INDUSTRY_CODE_RENTAL_OFFICE_CO_WORKING_SPACE = 'rental_office_co_working_space';
    const INDUSTRY_CODE_RENTAL_LEASE = 'rental_lease';
    const INDUSTRY_CODE_CPA_TAX_ACCOUNTANT = 'cpa_tax_accountant';
    const INDUSTRY_CODE_LAW_OFFICE = 'law_office';
    const INDUSTRY_CODE_JUDICIAL_AND_ADMINISTRATIVE_SCRIVENER = 'judicial_and_administrative_scrivener';
    const INDUSTRY_CODE_LABOR_CONSULTANT = 'labor_consultant';
    const INDUSTRY_CODE_OTHER_PROFESSION = 'other_profession';
    const INDUSTRY_CODE_BUSINESS_CONSULTANT = 'business_consultant';
    const INDUSTRY_CODE_ACADEMIC_RESEARCH_DEVELOPMENT = 'academic_research_development';
    const INDUSTRY_CODE_ADVERTISING_AGENCY = 'advertising_agency';
    const INDUSTRY_CODE_ADVERTISING_PLANNING_PRODUCTION = 'advertising_planning_production';
    const INDUSTRY_CODE_DESIGN_DEVELOPMENT = 'design_development';
    const INDUSTRY_CODE_APPAREL_INDUSTRY_DESIGN = 'apparel_industry_design';
    const INDUSTRY_CODE_WEBSITE_DESIGN = 'website_design';
    const INDUSTRY_CODE_ADVERTISING_PLANNING_DESIGN = 'advertising_planning_design';
    const INDUSTRY_CODE_OTHER_DESIGN = 'other_design';
    const INDUSTRY_CODE_RESTAURANTS_COFFEE_SHOPS = 'restaurants_coffee_shops';
    const INDUSTRY_CODE_SALE_OF_LUNCH = 'sale_of_lunch';
    const INDUSTRY_CODE_BREAD_CONFECTIONERY_MANUFACTURE_SALE = 'bread_confectionery_manufacture_sale';
    const INDUSTRY_CODE_DELIVERY_CATERING_MOBILE_CATERING = 'delivery_catering_mobile_catering';
    const INDUSTRY_CODE_HOTEL_INN = 'hotel_inn';
    const INDUSTRY_CODE_HOMESTAY = 'homestay';
    const INDUSTRY_CODE_TRAVEL_AGENCY = 'travel_agency';
    const INDUSTRY_CODE_LEISURE_SPORTS_FACILITY_MANAGEMENT = 'leisure_sports_facility_management';
    const INDUSTRY_CODE_SHOW_EVENT_MANAGEMENT = 'show_event_management';
    const INDUSTRY_CODE_BARBER = 'barber';
    const INDUSTRY_CODE_BEAUTY_SALON = 'beauty_salon';
    const INDUSTRY_CODE_SPA_SAND_BATH_SAUNA = 'spa_sand_bath_sauna';
    const INDUSTRY_CODE_ESTE_AIL_SALON = 'este_ail_salon';
    const INDUSTRY_CODE_BRIDAL_PLANNING_INTRODUCE_WEDDING = 'bridal_planning_introduce_wedding';
    const INDUSTRY_CODE_MEMORIAL_CEREMONY_FUNERAL = 'memorial_ceremony_funeral';
    const INDUSTRY_CODE_MOVING = 'moving';
    const INDUSTRY_CODE_COURIER_INDUSTRY = 'courier_industry';
    const INDUSTRY_CODE_HOUSE_MAID_CLEANING_AGENCY = 'house_maid_cleaning_agency';
    const INDUSTRY_CODE_RE_TAILORING_CLOTHES = 're_tailoring_clothes';
    const INDUSTRY_CODE_TRAINING_INSTITUTE_MANAGEMENT = 'training_institute_management';
    const INDUSTRY_CODE_TUTORING_SCHOOL = 'tutoring_school';
    const INDUSTRY_CODE_MUSIC_CALLIGRAPHY_ABACUS_CLASSROOM = 'music_calligraphy_abacus_classroom';
    const INDUSTRY_CODE_ENGLISH_SCHOOL = 'english_school';
    const INDUSTRY_CODE_TENNIS_YOGA_JUDO_SCHOOL = 'tennis_yoga_judo_school';
    const INDUSTRY_CODE_CULTURE_SCHOOL = 'culture_school';
    const INDUSTRY_CODE_SEMINAR_PLANNING_MANAGEMENT = 'seminar_planning_management';
    const INDUSTRY_CODE_HOSPITAL_CLINIC = 'hospital_clinic';
    const INDUSTRY_CODE_DENTAL_CLINIC = 'dental_clinic';
    const INDUSTRY_CODE_OTHER_MEDICAL_SERVICES = 'other_medical_services';
    const INDUSTRY_CODE_NURSERY = 'nursery';
    const INDUSTRY_CODE_NURSING_HOME = 'nursing_home';
    const INDUSTRY_CODE_REHABILITATION_SUPPORT_SERVICES = 'rehabilitation_support_services';
    const INDUSTRY_CODE_OTHER_WELFARE = 'other_welfare';
    const INDUSTRY_CODE_VISIT_WELFARE_SERVICE = 'visit_welfare_service';
    const INDUSTRY_CODE_RECRUITMENT_TEMPORARY_STAFFING = 'recruitment_temporary_staffing';
    const INDUSTRY_CODE_LIFE_RELATED_RECRUITMENT_TEMPORARY_STAFFING = 'life_related_recruitment_temporary_staffing';
    const INDUSTRY_CODE_CAR_MAINTENANCE_CAR_REPAIR = 'car_maintenance_car_repair';
    const INDUSTRY_CODE_MACHINERY_EQUIPMENT_MAINTENANCE_REPAIR = 'machinery_equipment_maintenance_repair';
    const INDUSTRY_CODE_CLEANING_MAINTENANCE_BUILDING_MANAGEMENT = 'cleaning_maintenance_building_management';
    const INDUSTRY_CODE_SECURITY = 'security';
    const INDUSTRY_CODE_OTHER_SERVICES = 'other_services';
    const INDUSTRY_CODE_NPO = 'npo';
    const INDUSTRY_CODE_GENERAL_INCORPORATED_ASSOCIATION = 'general_incorporated_association';
    const INDUSTRY_CODE_GENERAL_INCORPORATED_FOUNDATION = 'general_incorporated_foundation';
    const INDUSTRY_CODE_OTHER_ASSOCIATION = 'other_association';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryClassAllowableValues()
    {
        return [
            self::INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE,
            self::INDUSTRY_CLASS_CONSTRUCTION,
            self::INDUSTRY_CLASS_MANUFACTURING_PROCESSING,
            self::INDUSTRY_CLASS_IT,
            self::INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS,
            self::INDUSTRY_CLASS_RETAIL_WHOLESALE,
            self::INDUSTRY_CLASS_FINANCE_INSURANCE,
            self::INDUSTRY_CLASS_REAL_ESTATE_RENTAL,
            self::INDUSTRY_CLASS_PROFESSION,
            self::INDUSTRY_CLASS_DESIGN_PRODUCTION,
            self::INDUSTRY_CLASS_FOOD,
            self::INDUSTRY_CLASS_LEISURE_ENTERTAINMENT,
            self::INDUSTRY_CLASS_LIFESTYLE,
            self::INDUSTRY_CLASS_EDUCATION,
            self::INDUSTRY_CLASS_MEDICAL_WELFARE,
            self::INDUSTRY_CLASS_OTHER_SERVICES,
            self::INDUSTRY_CLASS_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryCodeAllowableValues()
    {
        return [
            self::INDUSTRY_CODE_AGRICULTURE,
            self::INDUSTRY_CODE_FORESTRY,
            self::INDUSTRY_CODE_FISHING_INDUSTRY,
            self::INDUSTRY_CODE_MINING,
            self::INDUSTRY_CODE_CIVIL_CONTRACTORS,
            self::INDUSTRY_CODE_PAVEMENT,
            self::INDUSTRY_CODE_CARPENTER,
            self::INDUSTRY_CODE_RENOVATION,
            self::INDUSTRY_CODE_ELECTRICAL_PLUMBING,
            self::INDUSTRY_CODE_GROCERY,
            self::INDUSTRY_CODE_MACHINERY_MANUFACTURING,
            self::INDUSTRY_CODE_PRINTING,
            self::INDUSTRY_CODE_OTHER_MANUFACTURING,
            self::INDUSTRY_CODE_SOFTWARE_DEVELOPMENT,
            self::INDUSTRY_CODE_SYSTEM_DEVELOPMENT,
            self::INDUSTRY_CODE_SURVEY_ANALYSIS,
            self::INDUSTRY_CODE_SERVER_MANAGEMENT,
            self::INDUSTRY_CODE_WEBSITE_PRODUCTION,
            self::INDUSTRY_CODE_ONLINE_SERVICE_MANAGEMENT,
            self::INDUSTRY_CODE_ONLINE_ADVERTISING_AGENCY,
            self::INDUSTRY_CODE_ONLINE_ADVERTISING_PLANNING_PRODUCTION,
            self::INDUSTRY_CODE_ONLINE_MEDIA_MANAGEMENT,
            self::INDUSTRY_CODE_PORTAL_SITE_MANAGEMENT,
            self::INDUSTRY_CODE_OTHER_IT_SERVICES,
            self::INDUSTRY_CODE_TRANSPORT_DELIVERY,
            self::INDUSTRY_CODE_DELIVERY,
            self::INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS,
            self::INDUSTRY_CODE_OTHER_WHOLESALE,
            self::INDUSTRY_CODE_CLOTHING_WHOLESALE_FIBER,
            self::INDUSTRY_CODE_FOOD_WHOLESALE,
            self::INDUSTRY_CODE_ENTRUSTED_DEVELOPMENT_WHOLESALE,
            self::INDUSTRY_CODE_ONLINE_SHOP,
            self::INDUSTRY_CODE_FASHION_GROCERY_STORE,
            self::INDUSTRY_CODE_FOOD_STORE,
            self::INDUSTRY_CODE_ENTRUSTED_STORE,
            self::INDUSTRY_CODE_OTHER_STORE,
            self::INDUSTRY_CODE_FINANCIAL_INSTRUMENTS_EXCHANGE,
            self::INDUSTRY_CODE_COMMODITY_FUTURES_INVESTMENT_ADVISOR,
            self::INDUSTRY_CODE_OTHER_FINANCIAL,
            self::INDUSTRY_CODE_BROKERAGE_INSURANCE,
            self::INDUSTRY_CODE_OTHER_INSURANCE,
            self::INDUSTRY_CODE_REAL_ESTATE_DEVELOPER,
            self::INDUSTRY_CODE_REAL_ESTATE_BROKERAGE,
            self::INDUSTRY_CODE_RENT_COIN_PARKING_MANAGEMENT,
            self::INDUSTRY_CODE_RENTAL_OFFICE_CO_WORKING_SPACE,
            self::INDUSTRY_CODE_RENTAL_LEASE,
            self::INDUSTRY_CODE_CPA_TAX_ACCOUNTANT,
            self::INDUSTRY_CODE_LAW_OFFICE,
            self::INDUSTRY_CODE_JUDICIAL_AND_ADMINISTRATIVE_SCRIVENER,
            self::INDUSTRY_CODE_LABOR_CONSULTANT,
            self::INDUSTRY_CODE_OTHER_PROFESSION,
            self::INDUSTRY_CODE_BUSINESS_CONSULTANT,
            self::INDUSTRY_CODE_ACADEMIC_RESEARCH_DEVELOPMENT,
            self::INDUSTRY_CODE_ADVERTISING_AGENCY,
            self::INDUSTRY_CODE_ADVERTISING_PLANNING_PRODUCTION,
            self::INDUSTRY_CODE_DESIGN_DEVELOPMENT,
            self::INDUSTRY_CODE_APPAREL_INDUSTRY_DESIGN,
            self::INDUSTRY_CODE_WEBSITE_DESIGN,
            self::INDUSTRY_CODE_ADVERTISING_PLANNING_DESIGN,
            self::INDUSTRY_CODE_OTHER_DESIGN,
            self::INDUSTRY_CODE_RESTAURANTS_COFFEE_SHOPS,
            self::INDUSTRY_CODE_SALE_OF_LUNCH,
            self::INDUSTRY_CODE_BREAD_CONFECTIONERY_MANUFACTURE_SALE,
            self::INDUSTRY_CODE_DELIVERY_CATERING_MOBILE_CATERING,
            self::INDUSTRY_CODE_HOTEL_INN,
            self::INDUSTRY_CODE_HOMESTAY,
            self::INDUSTRY_CODE_TRAVEL_AGENCY,
            self::INDUSTRY_CODE_LEISURE_SPORTS_FACILITY_MANAGEMENT,
            self::INDUSTRY_CODE_SHOW_EVENT_MANAGEMENT,
            self::INDUSTRY_CODE_BARBER,
            self::INDUSTRY_CODE_BEAUTY_SALON,
            self::INDUSTRY_CODE_SPA_SAND_BATH_SAUNA,
            self::INDUSTRY_CODE_ESTE_AIL_SALON,
            self::INDUSTRY_CODE_BRIDAL_PLANNING_INTRODUCE_WEDDING,
            self::INDUSTRY_CODE_MEMORIAL_CEREMONY_FUNERAL,
            self::INDUSTRY_CODE_MOVING,
            self::INDUSTRY_CODE_COURIER_INDUSTRY,
            self::INDUSTRY_CODE_HOUSE_MAID_CLEANING_AGENCY,
            self::INDUSTRY_CODE_RE_TAILORING_CLOTHES,
            self::INDUSTRY_CODE_TRAINING_INSTITUTE_MANAGEMENT,
            self::INDUSTRY_CODE_TUTORING_SCHOOL,
            self::INDUSTRY_CODE_MUSIC_CALLIGRAPHY_ABACUS_CLASSROOM,
            self::INDUSTRY_CODE_ENGLISH_SCHOOL,
            self::INDUSTRY_CODE_TENNIS_YOGA_JUDO_SCHOOL,
            self::INDUSTRY_CODE_CULTURE_SCHOOL,
            self::INDUSTRY_CODE_SEMINAR_PLANNING_MANAGEMENT,
            self::INDUSTRY_CODE_HOSPITAL_CLINIC,
            self::INDUSTRY_CODE_DENTAL_CLINIC,
            self::INDUSTRY_CODE_OTHER_MEDICAL_SERVICES,
            self::INDUSTRY_CODE_NURSERY,
            self::INDUSTRY_CODE_NURSING_HOME,
            self::INDUSTRY_CODE_REHABILITATION_SUPPORT_SERVICES,
            self::INDUSTRY_CODE_OTHER_WELFARE,
            self::INDUSTRY_CODE_VISIT_WELFARE_SERVICE,
            self::INDUSTRY_CODE_RECRUITMENT_TEMPORARY_STAFFING,
            self::INDUSTRY_CODE_LIFE_RELATED_RECRUITMENT_TEMPORARY_STAFFING,
            self::INDUSTRY_CODE_CAR_MAINTENANCE_CAR_REPAIR,
            self::INDUSTRY_CODE_MACHINERY_EQUIPMENT_MAINTENANCE_REPAIR,
            self::INDUSTRY_CODE_CLEANING_MAINTENANCE_BUILDING_MANAGEMENT,
            self::INDUSTRY_CODE_SECURITY,
            self::INDUSTRY_CODE_OTHER_SERVICES,
            self::INDUSTRY_CODE_NPO,
            self::INDUSTRY_CODE_GENERAL_INCORPORATED_ASSOCIATION,
            self::INDUSTRY_CODE_GENERAL_INCORPORATED_FOUNDATION,
            self::INDUSTRY_CODE_OTHER_ASSOCIATION,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['industry_class'] = isset($data['industry_class']) ? $data['industry_class'] : null;
        $this->container['industry_code'] = isset($data['industry_code']) ? $data['industry_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!is_null($this->container['industry_class']) && !in_array($this->container['industry_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!is_null($this->container['industry_code']) && !in_array($this->container['industry_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets industry_class
     *
     * @return string|null
     */
    public function getIndustryClass()
    {
        return $this->container['industry_class'];
    }

    /**
     * Sets industry_class
     *
     * @param string|null $industry_class 種別（agriculture_forestry_fisheries_ore: 農林水産業/鉱業、construction: 建設、manufacturing_processing: 製造/加工、it: IT、transportation_logistics: 運輸/物流、retail_wholesale: 小売/卸売、finance_insurance: 金融/保険、real_estate_rental: 不動産/レンタル、profession: 士業/学術/専門技術サービス、design_production: デザイン/制作、food: 飲食、leisure_entertainment: レジャー/娯楽、lifestyle: 生活関連サービス、education: 教育/学習支援、medical_welfare: 医療/福祉、other_services: その他サービス、other: その他）Available values : agriculture_forestry_fisheries_ore, construction, manufacturing_processing, it, transportation_logistics, retail_wholesale, finance_insurance, real_estate_rental, profession, design_production, food, leisure_entertainment, lifestyle, education, medical_welfare, other_services, other
     *
     * @return $this
     */
    public function setIndustryClass($industry_class)
    {
        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!is_null($industry_class) && !in_array($industry_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_class'] = $industry_class;

        return $this;
    }

    /**
     * Gets industry_code
     *
     * @return string|null
     */
    public function getIndustryCode()
    {
        return $this->container['industry_code'];
    }

    /**
     * Sets industry_code
     *
     * @param string|null $industry_code 業種（agriculture: 農業, forestry: 林業, fishing_industry: 漁業、水産養殖業, mining: 鉱業、採石業、砂利採取業, civil_contractors: 土木工事業, pavement: 舗装工事業, carpenter: とび、大工、左官等の建設工事業, renovation: リフォーム工事業, electrical_plumbing: 電気、管工事等の設備工事業, grocery: 食料品の製造加工業, machinery_manufacturing: 機械器具の製造加工業, printing: 印刷業, other_manufacturing: その他の製造加工業, software_development: 受託：ソフトウェア、アプリ開発業, system_development: 受託：システム開発業, survey_analysis: 受託：調査、分析等の情報処理業, server_management: 受託：サーバー運営管理, website_production: 受託：ウェブサイト制作, online_service_management: オンラインサービス運営業, online_advertising_agency: オンライン広告代理店業, online_advertising_planning_production: オンライン広告企画・制作業, online_media_management: オンラインメディア運営業, portal_site_management: ポータルサイト運営業, other_it_services: その他、IT サービス業, transport_delivery: 輸送業、配送業, delivery: バイク便等の配達業, other_transportation_logistics: その他の運輸業、物流業, other_wholesale: 卸売業：その他, clothing_wholesale_fiber: 卸売業：衣類卸売／繊維, food_wholesale: 卸売業：飲食料品, entrusted_development_wholesale: 卸売業：機械器具, online_shop: 小売業：無店舗　オンラインショップ, fashion_grocery_store: 小売業：店舗あり　ファッション、雑貨, food_store: 小売業：店舗あり　生鮮食品、飲食料品, entrusted_store: 小売業：店舗あり　機械、器具, other_store: 小売業：店舗あり　その他, financial_instruments_exchange: 金融業：金融商品取引, commodity_futures_investment_advisor: 金融業：商品先物取引、商品投資顧問, other_financial: 金融業：その他, brokerage_insurance: 保険業：仲介、代理, other_insurance: 保険業：その他, real_estate_developer: 不動産業：ディベロッパー, real_estate_brokerage: 不動産業：売買、仲介, rent_coin_parking_management: 不動産業：賃貸、コインパーキング、管理, rental_office_co_working_space: 不動産業：レンタルオフィス、コワーキングスペース, rental_lease: レンタル業、リース業, cpa_tax_accountant: 士業：公認会計士事務所、税理士事務所, law_office: 士業：法律事務所, judicial_and_administrative_scrivener: 士業：司法書士事務所／行政書士事務所, labor_consultant: 士業：社会保険労務士事務所, other_profession: 士業：その他, business_consultant: 経営コンサルタント, academic_research_development: 学術・開発研究機関, advertising_agency: 広告代理店, advertising_planning_production: 広告企画／制作, design_development: ソフトウェア、アプリ開発業（受託）, apparel_industry_design: 服飾デザイン業、工業デザイン業, website_design: ウェブサイト制作（受託）, advertising_planning_design: 広告企画／制作業, other_design: その他、デザイン／制作, restaurants_coffee_shops: レストラン、喫茶店等の飲食店業, sale_of_lunch: 弁当の販売業, bread_confectionery_manufacture_sale: パン、菓子等の製造販売業, delivery_catering_mobile_catering: デリバリー業、ケータリング業、移動販売業, hotel_inn: 宿泊業：ホテル、旅館, homestay: 宿泊業：民泊, travel_agency: 旅行代理店業, leisure_sports_facility_management: レジャー、スポーツ等の施設運営業, show_event_management: ショー、イベント等の興行、イベント運営業, barber: ビューティ、ヘルスケア業：床屋、理容室, beauty_salon: ビューティ、ヘルスケア業：美容室, spa_sand_bath_sauna: ビューティ、ヘルスケア業：スパ、砂風呂、サウナ等, este_ail_salon: ビューティ、ヘルスケア業：その他、エステサロン、ネイルサロン等, bridal_planning_introduce_wedding: 冠婚葬祭業：ブライダルプランニング、結婚式場紹介等, memorial_ceremony_funeral: 冠婚葬祭業：メモリアルセレモニー、葬儀等, moving: 引っ越し業, courier_industry: 宅配業, house_maid_cleaning_agency: 家事代行サービス業：無店舗　ハウスメイド、掃除代行等, re_tailoring_clothes: 家事代行サービス業：店舗あり　衣類修理、衣類仕立て直し等, training_institute_management: 研修所等の施設運営業, tutoring_school: 学習塾、進学塾等の教育・学習支援業, music_calligraphy_abacus_classroom: 音楽教室、書道教室、そろばん教室等のの教育・学習支援業, english_school: 英会話スクール等の語学学習支援業, tennis_yoga_judo_school: テニススクール、ヨガ教室、柔道場等のスポーツ指導、支援業, culture_school: その他、カルチャースクール等の教育・学習支援業, seminar_planning_management: セミナー等の企画、運営業, hospital_clinic: 医療業：病院、一般診療所、クリニック等, dental_clinic: 医療業：歯科診療所, other_medical_services: 医療業：その他、医療サービス等, nursery: 福祉業：保育所等、児童向け施設型サービス, nursing_home: 福祉業：老人ホーム等、老人向け施設型サービス, rehabilitation_support_services: 福祉業：療育支援サービス等、障害者等向け施設型サービス, other_welfare: 福祉業：その他、施設型福祉サービス, visit_welfare_service: 福祉業：訪問型福祉サービス, recruitment_temporary_staffing: 人材紹介業、人材派遣業, life_related_recruitment_temporary_staffing: 生活関連サービスの人材紹介業、人材派遣業, car_maintenance_car_repair: 自動車整備業、自動車修理業, machinery_equipment_maintenance_repair: 機械機器類の整備業、修理業, cleaning_maintenance_building_management: 清掃業、メンテナンス業、建物管理業, security: 警備業, other_services: その他のサービス業, npo: NPO, general_incorporated_association: 一般社団法人, general_incorporated_foundation: 一般財団法人, other_association: その他組織)
     *
     * @return $this
     */
    public function setIndustryCode($industry_code)
    {
        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!is_null($industry_code) && !in_array($industry_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_code'] = $industry_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


