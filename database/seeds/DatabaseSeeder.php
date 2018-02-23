<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.  php artisan db:seed   para ejecutar las pruebas de datos
     *
     * @return void
     */
    public function run()
    {
    	$this->call(datos_tabla_intro_progra::class);
        
    }
}
