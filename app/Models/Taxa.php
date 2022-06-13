<?php

namespace App\Models;

class Taxa extends Model
{
    public function __construct()
    {
        $this->data = collect([
            [
                "QuantParcelasMin" => 4,
                "QuantParcelasMax" => 48,
                "taxajuros" => 3.4,
                "Compostos" => 1.2,
                "Banco" => "BANCOSUSP",
                "convenio" => "AgiotBank"
            ],
            [
                "QuantParcelasMin" => 6,
                "QuantParcelasMax" => 12,
                "taxajuros" => 0.0,
                "Compostos" => 0.0,
                "Banco" => "VOVOBANK",
                "convenio" => "BancoParente"
            ],
            [
                "QuantParcelasMin" => 12,
                "QuantParcelasMax" => 72,
                "taxajuros" => 1.1,
                "Compostos" => 0.04058,
                "Banco" => "NUBANK",
                "convenio" => "Nubankdamassa"
            ],
        ]);
    }
}
