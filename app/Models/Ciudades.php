<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $table = 'ciudades';

    protected $primaryKey = 'idCiudad';

    protected $fillable = [
        'nombre',
        'idPais'
    ];

    public $timestamps = false;

    public function lugares()
    {
        return $this->hasMany(Lugares::class);
    }
}
