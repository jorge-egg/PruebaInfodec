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
        if ($historial) {
            // Si se encontró, intenta encontrar el historial por idHistorial
            $updateHistorial = Historial::findOrFail($historial->idHistorial);
        } else {
            // Manejo del caso cuando no se encuentra un historial para el usuario
            return response()->json(['error' => 'No se encontró un historial para el usuario.'], 404);
        }

        $variableCambio = $this->historialReciente($updateHistorial);
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
        //dd($array['moneda']);

        $arrayHistorial = $this->mostrarHistorial();

        return view('layouts.pantallaTres', compact('array', 'arrayHistorial'));
    }

}
