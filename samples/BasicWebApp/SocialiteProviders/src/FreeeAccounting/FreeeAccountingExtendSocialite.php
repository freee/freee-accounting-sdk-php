<?php

namespace SocialiteProviders\FreeeAccounting;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FreeeAccountingExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('freeeaccounting', __NAMESPACE__.'\Provider');
    }
}
