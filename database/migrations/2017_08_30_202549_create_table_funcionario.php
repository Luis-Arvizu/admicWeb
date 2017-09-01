<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('funcionario')) {
            Schema::table('funcionario', function (Blueprint $table) {
                $this->addOrUpdate($table);
            });
        } else {
            Schema::create('funcionario', function (Blueprint $table) {
                $this->addOrUpdate($table);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario');
    }

    private function addOrUpdate(Blueprint $table) {
        $table->increments('id');
        $table->integer('id_usuario')->unsigned();
        $table->integer('id_rol')->unsigned();
        $table->integer('id_puesto')->unsigned();
        $table->string('rfc');
        $table->integer('clave');
        $table->string('telefono');
        $table->tinyInteger('estatus');

        $table->foreign('id_usuario')->references('id')->on('usuario');
        $table->foreign('id_rol')->references('id')->on('rol');
        $table->foreign('id_puesto')->references('id')->on('puesto');

        $table->timestamps();
        $table->softDeletes();
    }
}