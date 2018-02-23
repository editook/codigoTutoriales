<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class datos_tabla_intro_progra extends Seeder
{
    /**
     * Run the database seeds.  php artisan db:seed   para ejecutar las pruebas de datos
     *
     * @return void
     */
    public function run()
    {
    	//DB::insert('INSERT INTO intro_programacion (capitulo,tema,url_video,descripcion,codigo_fuente) VALUES ("12","as","hola","saas","123")');

    	//$response=DB::select('SELECT tema FROM intro_programacion');
    	//$response = DB::table('intro_programacion')->get();
    	$response = DB::table('intro_programacion')->select('tema','url_video')->where('tema','=','como programar en java ')->first();
    	dd($response);
    	DB::table('intro_programacion')->truncate();
        DB::table('intro_programacion')->insert([
        	'capitulo'=>'1',
        	'tema'=>'como programar en java ',
        	'url_video'=>'https://styde.net/insercion-de-datos-con-los-seeders-de-laravel/',
        	'descripcion'=>'No se puede acceder a este sitio web',
        	'codigo_fuente'=>'<h3>listado vacio</h3>@endif</lu>endsection@sectioh2>otros datos en'

        ]);
        DB::table('intro_programacion')->insert([
        	'capitulo'=>'2',
        	'tema'=>'lo mejor de java ee',
        	'url_video'=>'https://www.walikiisoft.com',
        	'descripcion'=>'pagina aun le falta algo no se que es',
        	'codigo_fuente'=>'public function run(){ $this->call(ProfessionSeeder::class);}'

        ]);
        DB::table('intro_programacion')->insert([
        	'capitulo'=>'3',
        	'tema'=>'programacion orientada a objetos',
        	'url_video'=>'https://www.walikiisoft.com/index.jajajja',
        	'descripcion'=>'pagina aun le falta algo no se que espagina aun le falta algo no se que espagina aun le falta algo no se que es',
        	'codigo_fuente'=>'public function ublic functiorun(){ $tublic functiohis->call(ProfessionSeeder::class);}'

        ]);
    }
}
