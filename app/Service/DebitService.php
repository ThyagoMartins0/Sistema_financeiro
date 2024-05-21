<?php

namespace app\Service;

use App\Debit;

class DebitService
{
    protected $debit;

    public function __construct(Debit $debit)
    {
        $this->debit = $debit;
    }
    

    // Aqui você pode adicionar os métodos que contêm a lógica de negócios relacionada aos débitos
}
