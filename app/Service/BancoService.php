<?php

namespace App\Services;

use App\Models\Financeiras;

class BancoService
{
    private Banco $banco;

    public function __construct(Banco $banco)
    {
        $this->banco = $banco;
    }

    public function getBanco(): array
    {
        return $this->banco->getData()->all();
    }
}
