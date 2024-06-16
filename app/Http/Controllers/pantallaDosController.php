<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\UniversalTrait;

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
