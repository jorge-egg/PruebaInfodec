<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    protected $table = 'historiales';

    protected $primaryKey = 'idHistorial';

    protected $fillable = [
        'historialUno',
        'fechaHistorialUno',
        'historialDos',
        'fechaHistorialDos',
        'historialTres',
        'fechaHistorialTres',
        'historialCuatro',
        'fechaHistorialCuatro',
        'historialCinco',
        'fechaHistorialCinco',
        'contador',
        'idUsuario'
    ];

    public $timestamps = false;
}
