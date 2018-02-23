<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramasJavaIntroProgra extends Migration
{
    /**
     * php artisan migrate, make:migration ejemplo, php artisan migrate:fresh refrescar tablas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intro_programacion', function (Blueprint $column) {
            $column->increments('id');
            $column->integer('capitulo');
            $column->string('tema',200);
            $column->string('url_video');
            $column->string('descripcion')->nullable();
            $column->string('codigo_fuente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intro_programacion');
    }
}
