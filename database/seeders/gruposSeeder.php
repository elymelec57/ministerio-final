<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grupo;

class gruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo = new Grupo();
        $grupo->id = '1';
        $grupo->name = 'Cereales';
        $grupo->save();

        $grupo1 = new Grupo();
        $grupo1->id = '2';
        $grupo1->name = 'Granos leguminosos';
        $grupo1->save();

        $grupo2 = new Grupo();
        $grupo2->id = '3';
        $grupo2->name = 'Horticultura';
        $grupo2->save();

        $grupo3 = new Grupo();
        $grupo3->id = '4';
        $grupo3->name = 'Fruticultura';
        $grupo3->save();

        $grupo4 = new Grupo();
        $grupo4->id = '5';
        $grupo4->name = 'Raíces y tubérculos';
        $grupo4->save();

        $grupo5 = new Grupo();
        $grupo5->id = '6';
        $grupo5->name = 'Textiles y oleaginosas';
        $grupo5->save();

        $grupo6 = new Grupo();
        $grupo6->id = '7';
        $grupo6->name = 'Tropicales tradicionales';
        $grupo6->save();
    }
}
