<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pantallaDosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historial = Historial::where('idUsuario', Auth::id())->first();
        $updateHistorial = Historial::findOrFail($historial->idHistorial);

        if($updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialUno > $updateHistorial->fechaHistorialCinco){
            $variableCambio = 1;
        }else if($updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialDos > $updateHistorial->fechaHistorialCinco){
            $variableCambio = 2;
        }else if($updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCuatro && $updateHistorial->fechaHistorialTres > $updateHistorial->fechaHistorialCinco){
            $variableCambio = 3;
        }else if($updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCuatro > $updateHistorial->fechaHistorialCinco){
            $variableCambio = 4;
        }else if($updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialUno && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialDos && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialTres && $updateHistorial->fechaHistorialCinco > $updateHistorial->fechaHistorialCuatro){
            $variableCambio = 5;
        }

        switch ($variableCambio) {
            case 1:
                $updateHistorial->historialUno = $updateHistorial->historialUno.'&'.$request->valorPesos;
                $updateHistorial->fechaHistorialUno = Carbon::now();
                $updateHistorial->save();
                break;
            case 2:
                $updateHistorial->historialDos = $updateHistorial->historialDos.'&'.$request->valorPesos;
                $updateHistorial->fechaHistorialDos = Carbon::now();
                $updateHistorial->save();
                break;
            case 3:
                $updateHistorial->historialTres = $updateHistorial->historialTres.'&'.$request->valorPesos;
                $updateHistorial->fechaHistorialTres = Carbon::now();
                $updateHistorial->save();
                break;
            case 4:
                $updateHistorial->historialCuatro = $updateHistorial->historialCuatro.'&'.$request->valorPesos;
                $updateHistorial->fechaHistorialCuatro = Carbon::now();
                $updateHistorial->save();
                break;
            case 5:
                $updateHistorial->historialCinco = $updateHistorial->historialCinco.'&'.$request->valorPesos;
                $updateHistorial->fechaHistorialCinco = Carbon::now();
                $updateHistorial->save();
                break;
            default:
                echo 'error';
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
