<?php

namespace App\Http\Controllers;

use App\Models\Ciudades;
use App\Models\Historial;
use App\Models\Paises;
use App\Traits\UniversalTrait;
use App\Traits\Apis\Clima;
use App\Traits\Apis\Moneda;
use Illuminate\Support\Facades\Auth;

class pantallaTresController extends Controller
{

    use UniversalTrait, Clima, Moneda;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historial = Historial::where('idUsuario', Auth::id())->first();
        $updateHistorial = Historial::findOrFail($historial->idHistorial);

        $variableCambio = $this->historialReciente($updateHistorial);

        switch ($variableCambio) {
            case 1:
                $datos = $updateHistorial->historialUno;
                break;
            case 2:
                $datos = $updateHistorial->historialDos;
                break;
            case 3:
                $datos = $updateHistorial->historialTres;
                break;
            case 4:
                $datos = $updateHistorial->historialCuatro;
                break;
            case 5:
                $datos = $updateHistorial->historialCinco;
                break;
            default:
                echo 'error';
                break;
        }

        $datosHistorial = explode("&", $datos);
        $pais = Paises::where('idPais', $datosHistorial[0])->first();
        $array = [
            'pais' => $pais->nombre,
            'ciudad' => Ciudades::where('idCiudad', $datosHistorial[1])->first()->nombre,
            'valor' => $datosHistorial[2],
            'climaData' => $this->buscar(Ciudades::where('idCiudad', $datosHistorial[1])->first()->nombre),
            'moneda' => $this->buscarMoneda($pais->moneda, $datosHistorial[2]),
            'nombreMonedaDest' => $pais->moneda,
            'simboloMonedaDest' => $pais->simboloMoneda,
        ];
        //dd($array['climaData']['clima']);
        return view('layouts.pantallaTres', compact('array'));
    }

}
