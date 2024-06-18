<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
    use HasFactory;

    protected $table = 'lugares';

    protected $primaryKey = 'idLugar';

    protected $fillable = [
        'imagen',
        'nombre',
        'descripcion_es',
        'descripcion_de',
        'idCiudad'
    ];

    public function ciudades()
    {
        return $this->belongsTo(Ciudades::class);
    }
}

