<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use App\Models\Ciudades;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pantallaUnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Paises::all();
        return view('layouts.pantallaUno', compact('paises'));
    }


    public function obtenerCiudades($idPais)
    {
        $ciudades = Ciudades::where('idPais', $idPais)->get();
        return response()->json($ciudades);
    }



    public function store(Request $request)
    {

        $historial = Historial::where('idUsuario', Auth::id())->first();

        if($historial == null){
            Historial::create([
                'historialUno' => $request->selectPais.'&'.$request->selectCiudad,
                'contador' => 2,
                'idUsuario' => Auth::id(),
            ]);
        }else{
            $updateHistorial = Historial::findOrFail($historial->idHistorial);
            if($historial->historialUno == null || $historial->contador == 1){
                $historial->historialUno = $request->selectPais.'&'.$request->selectCiudad;
                $historial->contador = 2;
                $historial->save();
            }else if($historial->historialDos == null || $historial->contador == 2){
                $updateHistorial = Historial::findOrFail($historial->idHistorial);
                //dd($updateHistorial);
                $updateHistorial->historialDos = $request->selectPais.'&'.$request->selectCiudad;
                $updateHistorial->contador = 3;
                $updateHistorial->save();
            }else if($historial->historialTres == null || $historial->contador == 3){
                $updateHistorial->historialTres = $request->selectPais.'&'.$request->selectCiudad;
                $updateHistorial->contador = 4;
                $updateHistorial->save();
            }else if($historial->historialCuatro == null || $historial->contador == 4){
                $updateHistorial->historialCuatro = $request->selectPais.'&'.$request->selectCiudad;
                $updateHistorial->contador = 5;
                $updateHistorial->save();
            }else if($historial->historialCinco == null || $historial->contador == 5){
                $updateHistorial->historialCinco = $request->selectPais.'&'.$request->selectCiudad;
                $updateHistorial->contador = 1;
                $updateHistorial->save();
            }
        }

        return view('layouts.pantallaDos');

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