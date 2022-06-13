<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Instituições financeiras cadastradas
class Financeiro extends Model
{
    public function __construct()
    {
        $this->data = collect([
            [
                "key" => "BANCOSUSP",
                "valor" => "BancoSusp"
            ],
            [
                "key" => "VOVOBANK",
                "valor" => "VovoBank"
            ],
            [
                "key" => "NUBANK",
                "valor"=> "Nubank"
            ]
            ]);
    }
}
