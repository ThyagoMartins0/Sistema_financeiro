<?php

namespace app\Service;

use App\Debit;  



class WalletService
{
    protected $debit;

    public function __construct(Debit $debit)
    {
        $this->debit = $debit;
    }
    
    public function getWallet()
    {
        $debit = new Debit();
        return $debit->getWallet();
    }
}