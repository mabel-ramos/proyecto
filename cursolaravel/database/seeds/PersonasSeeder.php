<?php

use App\personas;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        personas::create([
        	'id'=> 2,
            'profesion_id'=> 100,
            'nombre'=>'Valentin',
            'primer_apellido'=>'Yujra',
            'segundo_apellido' => 'Suri',
            'fecha_nacimiento'=>'2010-2-2',
            'edad'=> 10,
            'estado'=>'AC'
         ]);
    }
}
