<?php

namespace App\Http\Controllers;

use Freee\Accounting\Configuration;
use Freee\Accounting\Api\CompaniesApi;
use Freee\Accounting\Api\DealsApi;
use Illuminate\Support\Facades\Auth;

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
}
