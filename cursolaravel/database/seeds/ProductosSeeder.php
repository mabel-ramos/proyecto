<?php

use Illuminate\Database\Seeder;
use \App\Productos;
class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::create([
        	'categoria_id' => 2,
        	'nombre' => 'MONITOR',
        	'precio' => 100,
        	'estado' => 'AC'
        ]);
    }
}
