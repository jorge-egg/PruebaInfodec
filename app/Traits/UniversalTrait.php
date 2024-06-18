<?php

namespace App\Traits;

use App\Models\Ciudades;
use Exception;
use App\Models\Paises;
use App\Models\Historial;
use Illuminate\Support\Facades\Auth;



trait UniversalTrait
{


    //Obtiene los datos del historial y los manda en array
    public function mostrarHistorial()
    {
        $historial = Historial::where('idUsuario', Auth::id())->first();

if ($historial) {
    // Si se encontró un historial para el usuario
    return [
        [
            $this->extraerDatosHistorial($historial->historialUno),
            count(explode("&", $historial->historialUno)),
            1
        ],
        [
            $this->extraerDatosHistorial($historial->historialDos),
            count(explode("&", $historial->historialDos)),
            2
        ],
        [
            $this->extraerDatosHistorial($historial->historialTres),
            count(explode("&", $historial->historialTres)),
            3
        ],
        [
            $this->extraerDatosHistorial($historial->historialCuatro),
            count(explode("&", $historial->historialCuatro)),
            4
        ],
        [
            $this->extraerDatosHistorial($historial->historialCinco),
            count(explode("&", $historial->historialCinco)),
            5
        ],
    ];
} else {
    // Si no se encontró ningún historial para el usuario
    return [
        ['Vacio', 0, 0],
        ['Vacio', 0, 0],
        ['Vacio', 0, 0],
        ['Vacio', 0, 0],
        ['Vacio', 0, 0],
    ];
}

    }


    //obtiene el pais y ciudad del historial
    public function extraerDatosHistorial($historial)
    {
        try {
            $datos = explode("&", $historial);
            $datosTransformados = Paises::where('idPais', $datos[0])->first()->nombre . '/' . Ciudades::where('idCiudad', $datos[1])->first()->nombre;
            return $datosTransformados;
        } catch (Exception $e) {
            $datosTransformados = "";
        }
    }



    //obtiene los datos especificos del historial
    //ejemplo:
    //si $numero == 1 entonces obtiene historialUno del hitorial
    public function extraerHistorialEsp($numero)
    {
        $historial = Historial::where('idUsuario', Auth::id())->first();
        if ($historial) { // Verifica si $historial no es null
            $updateHistorial = Historial::findOrFail($historial->idHistorial);

        } else {
            // Manejo del caso cuando no se encuentra un historial para el usuario
            throw new \Exception('No se encontró un historial para el usuario.');
        }

        switch ($numero) {
            case 1:
                return $updateHistorial->historialUno;
                break;
             case 2:
                return $updateHistorial->historialDos;
                break;
             case 3:
                return $updateHistorial->historialTres;
                break;
             case 4:
                return $updateHistorial->historialCuatro;
                break;
             case 5:
                return $updateHistorial->historialCinco;
                break;
             default:
                echo 'error';
                break;
         }
    }


    public function historialReciente($updateHistorial)
    {
        if ($updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCinco) {
            return 1;
        } else if ($updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCinco) {
            return 2;
        } else if ($updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCinco) {
            return 3;
        } else if ($updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialCinco) {
            return 4;
        } else if ($updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialCuatro) {
            return 5;
        }
    }
}
