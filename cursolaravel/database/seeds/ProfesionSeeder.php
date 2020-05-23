<?php

use Illuminate\Database\Seeder;
use \App\profesion;
class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profesion::create([
            'id' => 100,
            'nombre_profesion' => 'Sistemas',
            'estado' => 'a'

        ]);
    }
}
