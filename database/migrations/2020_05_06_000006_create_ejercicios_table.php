<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjerciciosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'ejercicios';

    /**
     * Run the migrations.
     * @table ejercicios
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('video', 245)->nullable();
            $table->mediumText('descripcion')->nullable();
            $table->unsignedInteger('partes_cuerpo_id');
            $table->unsignedInteger('niveles_ejercicios_id');

            $table->index(["niveles_ejercicios_id"], 'fk_ejercicios_niveles_ejercicios1_idx');

            $table->index(["partes_cuerpo_id"], 'fk_ejercicios_partes_cuerpo1_idx');


            $table->foreign('partes_cuerpo_id', 'fk_ejercicios_partes_cuerpo1_idx')
                ->references('id')->on('partes_cuerpo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('niveles_ejercicios_id', 'fk_ejercicios_niveles_ejercicios1_idx')
                ->references('id')->on('niveles_ejercicios')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
