<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Services\ConvenioService;

class  instituicaoFinanceira extends Controller
{
    public function index(instituicaoFinanceira $banco): Response
    {
        return response()->json($banco->getBanco());//Get banco para execução da analise

    }
}

