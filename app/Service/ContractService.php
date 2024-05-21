<?php

namespace App\Services;

use App\Contract;

class ContractService
{
    protected $contract;

    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }
    

    // Aqui você pode adicionar os métodos que contêm a lógica de negócios relacionada aos contratos
}