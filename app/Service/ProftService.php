<?php

namespace App\Service;

use App\Debit;

class ProftService
{
    public function getProfit()
    {
        $debit = new Debit();
        return $debit->getProfit();
    }
}