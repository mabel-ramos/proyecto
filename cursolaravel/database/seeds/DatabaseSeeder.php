<?php

use App\personas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncatetables(['categorias','productos','personas','profesions']);

        $this->call(CategoriaSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(PersonasSeeder::class);
        $this->call(ProfesionSeeder::class);
    }

    protected function truncatetables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	foreach ($tables as $table) {
    		DB::table($table)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
