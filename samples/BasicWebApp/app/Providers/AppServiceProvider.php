<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Freee\Accounting\Laravel\Facades\Freee;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Freee::macro('getCompanyId', function ($index = 0) {
            $companiesApi = $this->companies();
            $companiesResponse = $companiesApi->getCompanies();
            return $companiesResponse->getCompanies()[$index]->getId();
        });

        Freee::macro('getDeals', function ($company_id, $limit = 5) {
            $dealsApi = $this->deals();
            $dealsResponse = $dealsApi->getDeals(
                $company_id,
                null, null, null, null, null, null, null, null, null, null, null, null,
                $limit);
            return $dealsResponse->getDeals();
        });
    }
}
