<?php

namespace App\Traits;


trait UniversalTrait
{

    public function historialReciente($updateHistorial)
    {
        if($updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCinco){
            return 1;
        }else if($updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCinco){
            return 2;
        }else if($updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCinco){
            return 3;
        }else if($updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialCinco){
            return 4;
        }else if($updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialCuatro){
            return 5;
        }
    }
}
