<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Convenios disponiveis
class Convenios extends Model
{
    public function __construct()
    {
        $this->data = collect([
            [
                [
                    "key" => "AgiotBank",
                    "valor" => "AgioBank"
                ],
                [
                    "key" => "BancoParente",
                    "valor" => "BancoParente"
                ],
                [
                    "key" => "Nubankdamassa",
                    "valor" => "Nubankdamassa"
                ]
            ]
            ]);
    }
}
