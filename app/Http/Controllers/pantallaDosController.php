<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ciudades;
use App\Models\Historial;
use Illuminate\Http\Request;
use App\Traits\UniversalTrait;
use Illuminate\Support\Facades\Auth;

class pantallaDosController extends Controller
{
    use UniversalTrait;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugares = Ciudades::join('lugares', 'ciudades.idCiudad', '=' , 'lugares.idCiudad')->select('lugares.nombre', 'ciudades.nombre as ciudad', 'descripcion_es', 'descripcion_de', 'imagen')->get();
        $arrayHistorial = $this->mostrarHistorial();
        return view('layouts.pantallaDos', compact('lugares', 'arrayHistorial'));
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

        $variableCambio = $this->historialReciente($updateHistorial);

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
        return redirect()->route('pantallaTres.index');
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
