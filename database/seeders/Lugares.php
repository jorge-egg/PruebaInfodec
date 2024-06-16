<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Lugares extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lugares')->insert([
            'imagen' => 'tower.png',
            'nombre' => 'Tower Bridge',
            'descripcion' => 'De todos los puentes que cruzan el Támesis, Tower Bridge es el más emblemático. Una atracción imperdible en Londres',
            'idCiudad' => 1
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'manchester.jpg',
            'nombre' => 'Ayuntamiento de Manchester',
            'descripcion' => 'Magnífico edificio victoriano que sirve como sede del Ayuntamiento de Manchester y sede de muchos eventos cívicos y culturales.',
            'idCiudad' => 2
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'templo.jpg',
            'nombre' => 'Templo Senso-Ji',
            'descripcion' => 'Cuenta la leyenda que encontraron en su red una estatua dorada de la deidad Kannon, la diosa de la compasión.',
            'idCiudad' => 3
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'bambo.jpg',
            'nombre' => 'Bosque de bambú de Arashiyama',
            'descripcion' => 'El paseo por Arashiyama es una vivencia onírica. Se camina entre miles de bambús que se alzan unos junto a otros en busca de la luz.',
            'idCiudad' => 4
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'jaipur.jpg',
            'nombre' => 'Palacio de Jaipur',
            'descripcion' => 'Situado en el corazón del antiguo Jaipur, el Palacio de la Ciudad es un ejemplo espectacular de la fusión de la arquitectura Rajput y Mughal.',
            'idCiudad' => 5
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'vipassana.jpg',
            'nombre' => 'Pagoda Mundial Vipassana',
            'descripcion' => 'Sala de meditación con cúpula con capacidad para alrededor de 8.000 meditadores Vipassana (la sala de meditación más grande del mundo).',
            'idCiudad' => 6
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'adoquinadas.jpg',
            'nombre' => 'Calles adoquinadas',
            'descripcion' => 'Una ciudad de calles adoquinadas, museos, palacios, puentes y canales, es una de las capitales europeas.',
            'idCiudad' => 7
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'elsinor.jpg',
            'nombre' => 'Acuario de Øresund',
            'descripcion' => 'Se especializa en exhibir la fascinante y colorida flora y fauna de las aguas locales de Øresund y Kattegat.',
            'idCiudad' => 8
        ]);
    }
}
