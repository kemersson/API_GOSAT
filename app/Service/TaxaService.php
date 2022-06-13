<?php

namespace App\Services;

use App\Models\Taxas;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaxaService
{
    private Taxa $taxa;

    public function __construct(Taxa $taxa)
    {
        $this->taxa = $taxa;
    }

    public function calculate(float $valor, array $banco, array $convenio, int $parcelamin,int $parcelamax): array
    {
        $taxaFiltered = $this->getTaxa($banco, $convenio, $parcelamin,$parcelamax);

        $result = [];

        if($taxaFiltered) {
            foreach($taxaFiltered as $taxa) {

                if(!isset($result[$taxa['banco']]))
                    $result[$taxa['banco']] = [];

                $result[$taxa['banco']][] = [
                    'taxa' => $taxa['taxajuros'],
                    'parcelas' => $taxa['parcelas'],
                    'valor_parcela' => $this->calculeParcel($valor, $taxa['Compostos']),
                    'convenio' => $taxa['convenio']
                ];
            }
        } else {
            throw new HttpResponseException(Response::make([
                'errors' => ['Estamos quebrados também, aceita empréstimo em bala?']
            ]));
        }

        return $result;
    }

    public function getTaxas(array $banco, array $convenio, int $parcela): array
    {
        $filtered = $this->taxa->getData()->filter(function ($value, $key) use ($banco, $convenio, $parcela) {
            if($banco && !in_array($value['banco'], $banco)) {
                return false;
            }

            if($convenio && !in_array($value['convenio'], $convenio)) {
                return false;
            }

            if($parcela && ($value['parcelas'] != $parcela)) {
                return false;
            }

            return true;
        });

        return $filtered->all();
    }

    public function calculeParcel(float $valor, float $Compostos): float
    {
        return number_format($valor * $Compostos, 2, '.', '');
    }
}
