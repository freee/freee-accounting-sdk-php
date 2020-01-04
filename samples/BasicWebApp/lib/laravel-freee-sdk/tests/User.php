<?php

namespace Tests;

use Freee\Accounting\Laravel\Traits\FreeeAccounting;

class User
{
    use FreeeAccounting;

    public function tokenForFreeeAccounting()
    {
        return 'test';
    }
}
