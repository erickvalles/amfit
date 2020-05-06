<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'rutinas';

    /**
     * Run the migrations.
     * @table rutinas
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 145)->nullable();
            $table->mediumText('descripcion')->nullable();
            $table->unsignedInteger('objetivos_id');

            $table->index(["objetivos_id"], 'fk_rutinas_objetivos1_idx');


            $table->foreign('objetivos_id', 'fk_rutinas_objetivos1_idx')
                ->references('id')->on('objetivos')
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
