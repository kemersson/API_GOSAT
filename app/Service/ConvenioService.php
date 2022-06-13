<?php

namespace App\Services;

use App\Models\Convenios;

class ConvenioService
{
    private Convenio $convenio;

    public function __construct(Convenio $convenio)
    {
        $this->convenio = $convenio;
    }

    public function getConvenio(): array
    {
        return $this->convenio->getData()->all();
    }
}
