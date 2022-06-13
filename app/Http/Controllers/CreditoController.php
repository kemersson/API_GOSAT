<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\{BancoService, ConvenioService, TaxaService};
use App\Http\Requests\CreditoRequest;

class CreditoController extends Controller
{
    public function index(
        BancoRequest $requisicao,
        TaxaJuros $taxa
    )
    {
        $data = $requisicao->validated();
        //
        $result = $taxa->calculo(
            $data['valorAPagar'],
            $data['instituicaoFinanceira']??[],
            $data['modalidadeCredito']?? [],
            $data['valorSolicitado']?? [],
            $data['taxaJuros'],
            $data['qntParcelas'] ?? 0
        );

        return response()->json($result);

    }

}
