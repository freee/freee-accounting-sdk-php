<?php

namespace App\Http\Controllers;

use Freee\Accounting\Configuration;
use Freee\Accounting\Api\CompaniesApi;
use Freee\Accounting\Api\DealsApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Freee\Accounting\Laravel\Facades\Freee;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display information of current user.
     *
     * @return \Illuminate\View\View
     */
    public function me()
    {
        $user = Auth::user();

        $config = Configuration::getDefaultConfiguration()->setAccessToken($user->token);

        $companiesApiInstance = new CompaniesApi(null, $config);
        $companiesResponse = $companiesApiInstance->getCompanies();

        $dealsApiInstance = new DealsApi(null, $config);
        $targetCompanyId = $companiesResponse->getCompanies()[0]->getId();
        $limit = 5;
        $dealsResponse = $dealsApiInstance->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $limit);
        $deals = $dealsResponse->getDeals();

        return view('account.me', compact('user', 'deals'));
    }


    /**
     * Facadeを使う場合
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function meFacade(Request $request)
    {
        $user = $request->user();

        $config = Configuration::getDefaultConfiguration()->setAccessToken($user->token);
        Freee::config($config);

        $companiesResponse = json_decode(Freee::companies()->getCompanies(), true);
        $targetCompanyId = $companiesResponse['companies'][config('services.freee.default_company_id')]['id'];

        $limit = 5;
        $deals = Freee::deals()->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $limit)->getDeals();

        return view('account.me', compact('user', 'deals'));
    }

    /**
     * traitを使う場合
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function meTrait(Request $request)
    {
        $user = $request->user();

        $companiesResponse = json_decode($user->freee()->companies()->getCompanies(), true);
        $targetCompanyId = $companiesResponse['companies'][config('services.freee.default_company_id')]['id'];

        $limit = 5;
        $deals = $user->freee()->deals()->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $limit)->getDeals();

        return view('account.me', compact('user', 'deals'));
    }

    /**
     * macroを使う場合
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function meMacro(Request $request)
    {
        $user = $request->user();

        //getCompanyId() getDeals() はAppServiceProviderで定義
        $company_id = $user->freee()->getCompanyId(config('services.freee.default_company_id'));

        $deals = $user->freee()->getDeals($company_id, 5);

        return view('account.me', compact('user', 'deals'));
    }
}
