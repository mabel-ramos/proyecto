<?php

use Illuminate\Database\Seeder;

use \App\Categorias;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('categorias')->insert([
        	'descripcion' => 'COMIDA',
        	'estado' => 'AC'
        ]);
        DB::table('categorias')->insert([
        	'descripcion' => 'COMPUTACION',
        	'estado' => 'AC'
        ]);*/

        Categorias::create([
        	'descripcion' => 'COMIDA',
        	'estado' => 'AC'
        ]);
        Categorias::create([
        	'descripcion' => 'COMPUTACION',
        	'estado' => 'AC'
        ]);
    }
}
