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
            'descripcion_es' => 'De todos los puentes que cruzan el Támesis, Tower Bridge es el más emblemático. Una atracción imperdible en Londres',
            'descripcion_de' => 'Von allen Brücken, die die Themse überqueren, ist die Tower Bridge die symbolträchtigste. Eine Attraktion, die man in London unbedingt gesehen haben muss',
            'idCiudad' => 1
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'manchester.jpg',
            'nombre' => 'Ayuntamiento de Manchester',
            'descripcion_es' => 'Magnífico edificio victoriano que sirve como sede del Ayuntamiento de Manchester y sede de muchos eventos cívicos y culturales.',
            'descripcion_de' => 'Prächtiges viktorianisches Gebäude, das als Sitz des Stadtrats von Manchester dient und zahlreiche bürgerliche und kulturelle Veranstaltungen beherbergt.',
            'idCiudad' => 2
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'templo.jpg',
            'nombre' => 'Templo Senso-Ji',
            'descripcion_es' => 'Cuenta la leyenda que encontraron en su red una estatua dorada de la deidad Kannon, la diosa de la compasión.',
            'descripcion_de' =>'Der Legende nach fanden sie in ihrem Netz eine goldene Statue der Gottheit Kannon, der Göttin des Mitgefühls.',
            'idCiudad' => 3
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'bambo.jpg',
            'nombre' => 'Bosque de bambú de Arashiyama',
            'descripcion_es' => 'El paseo por Arashiyama es una vivencia onírica. Se camina entre miles de bambús que se alzan unos junto a otros en busca de la luz.',
            'descripcion_de' => 'Der Spaziergang durch Arashiyama ist ein traumhaftes Erlebnis. Sie wandern zwischen Tausenden von Bambusbäumen hindurch, die auf der Suche nach Licht nebeneinander wachsen.',
            'idCiudad' => 4
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'jaipur.jpg',
            'nombre' => 'Palacio de Jaipur',
            'descripcion_es' => 'Situado en el corazón del antiguo Jaipur, el Palacio de la Ciudad es un ejemplo espectacular de la fusión de la arquitectura Rajput y Mughal.',
            'descripcion_de' => 'Der Stadtpalast liegt im Herzen des alten Jaipur und ist ein spektakuläres Beispiel für die Verschmelzung von Rajput- und Mogul-Architektur.',
            'idCiudad' => 5
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'vipassana.jpg',
            'nombre' => 'Pagoda Mundial Vipassana',
            'descripcion_es' => 'Sala de meditación con cúpula con capacidad para alrededor de 8.000 meditadores Vipassana (la sala de meditación más grande del mundo).',
            'descripcion_de' => 'Gewölbte Meditationshalle mit einer Kapazität für rund 8.000 Vipassana-Meditierende (die größte Meditationshalle der Welt).',
            'idCiudad' => 6
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'adoquinadas.jpg',
            'nombre' => 'Calles adoquinadas',
            'descripcion_es' => 'Una ciudad de calles adoquinadas, museos, palacios, puentes y canales, es una de las capitales europeas.',
            'descripcion_de' => 'Als Stadt mit Kopfsteinpflasterstraßen, Museen, Palästen, Brücken und Kanälen ist sie eine der Hauptstädte Europas.',
            'idCiudad' => 7
        ]);
        DB::table('lugares')->insert([
            'imagen' => 'elsinor.jpg',
            'nombre' => 'Acuario de Øresund',
            'descripcion_es' => 'Se especializa en exhibir la fascinante y colorida flora y fauna de las aguas locales de Øresund y Kattegat.',
            'descripcion_de' => 'Es ist darauf spezialisiert, die faszinierende und farbenfrohe Flora und Fauna der örtlichen Gewässer von Öresund und Kattegat zu präsentieren.',
            'idCiudad' => 8
        ]);
    }
}
