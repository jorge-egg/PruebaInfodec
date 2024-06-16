<?php

namespace App\Traits\Apis;

use Illuminate\Support\Facades\Http;


trait Moneda
{
    public function buscarMoneda($tipo, $cantidadValor)
    {

        $tipoMoneda = $tipo;
        $valor = $cantidadValor;
        $key = config('services.layer.key');

        $response = Http::get("http://api.currencylayer.com/convert?access_key=" . $key . "&from=COP" . "&to=" . $tipoMoneda . '&amount=' . $valor)
            ->json();

        if ($response['success'] == true) {
            $data = [
                'monedaLocal' => $response['query']['from'],
                'monedaDestino' => $response['query']['to'],
                'montoLocal' => $response['query']['amount'],
                'montoDestino' => $response['result'],
                'tasaCambio' => $response['info']['quote'],

            ];
            return $data;
        } else {
            $notFound = true;
            return $notFound;
        }
    }

}
