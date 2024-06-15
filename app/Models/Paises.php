<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'moneda',
        'simboloMoneda',
        'idConsulta'
    ];

    public $timestamps = false;
}
