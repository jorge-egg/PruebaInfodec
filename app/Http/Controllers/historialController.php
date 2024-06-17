<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use App\Models\Ciudades;
use Illuminate\Http\Request;
use App\Traits\UniversalTrait;
use App\Traits\Apis\Clima;
use App\Traits\Apis\Moneda;

class historialController extends Controller
{
    use UniversalTrait, Clima, Moneda;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $variableCambio = $request->numeroHistorial;
        $datos = $this->extraerHistorialEsp($variableCambio);

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


        $arrayHistorial = $this->mostrarHistorial();
        //dd($arrayHistorial);
        return view('layouts.pantallaTres', compact('array', 'arrayHistorial'));
    }


}
