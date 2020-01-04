<?php

namespace Freee\Accounting\Laravel\Traits;

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\BindingResolutionException;
use Freee\Accounting\Configuration;
use Freee\Accounting\Laravel\Contracts\Factory;

trait FreeeAccounting
{
    /**
     * @return Factory
     * @throws BindingResolutionException
     */
    public function freee()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setAccessToken($this->tokenForFreeeAccounting());

        return Container::getInstance()->make(Factory::class)->config($config);
    }

    /**
     * @return string
     */
    abstract protected function tokenForFreeeAccounting();
}
