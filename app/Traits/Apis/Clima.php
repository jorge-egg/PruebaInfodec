<?php

namespace App\Traits\Apis;

use Illuminate\Support\Facades\Http;


trait Clima
{
    public function buscar($ciudad)
    {

        $pais = $ciudad;
        $key = config('services.owm.key');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=" . $pais . "&lang=es" . "&appid=" . $key)
            ->json();
        if ($response['cod'] == "200") {
            $data = [
                'clima' => $response['weather'][0]['description'],
                'principal' => $response['weather'][0]['main'],
                'temperatura' => $response['main']['temp'] - 273,
                'nombre' => $response['name'],
                'pais' => $response['sys']['country'],
                'codigo' => $response['cod'],
            ];
            return $data;
        } else {
            $notFound = true;
            return $notFound;
        }
    }

}
