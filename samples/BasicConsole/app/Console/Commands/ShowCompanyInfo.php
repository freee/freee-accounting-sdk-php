<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Freee\Accounting\Configuration;
use Freee\Accounting\Api\CompaniesApi;
use Freee\Accounting\Api\InvoicesApi;
use Freee\Accounting\Api\WalletablesApi;

class ShowCompanyInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'freee:show-company-info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show company information';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Set your company id and access token
        $companyId = 0;
        $accessToken = '';

        // アクセストークンを指定して、クライアントを作成する
        $config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);

        // 事業所の詳細情報を取得する
        $companiesApiInstance = new CompaniesApi(null, $config);
        $company = $companiesApiInstance->getCompany($companyId);

        $this->line('事業所名 : ' . $company->getCompany()->getDisplayName());

        // 登録されている口座の一覧を取得する
        $walletablesApiInstance = new WalletablesApi(null, $config);
        $walletables = $walletablesApiInstance->getWalletables($companyId, true);

        foreach ($walletables->getWalletables() as $walletable) {
            $this->line('口座名 : ' . $walletable->getName() . ' / 登録残高 : ' . $walletable->getWalletableBalance());
        }

        // 請求書の一覧を取得する
        $invoicesApiInstance = new InvoicesApi(null, $config);
        $invoices = $invoicesApiInstance->getInvoices($companyId);

        foreach ($invoices->getInvoices() as $invoice) {
            $this->line('請求日 : ' . $invoice->getIssueDate() . ' / 合計金額 : ' . $invoice->getTotalAmount());
        }

        return 0;
    }
}
