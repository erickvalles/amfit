<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutinasPorPartesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'rutinas_por_partes';

    /**
     * Run the migrations.
     * @table rutinas_por_partes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('rutinas_id');
            $table->unsignedInteger('partes_cuerpo_id');

            $table->index(["partes_cuerpo_id"], 'fk_rutinas_has_partes_cuerpo_partes_cuerpo1_idx');

            $table->index(["rutinas_id"], 'fk_rutinas_has_partes_cuerpo_rutinas1_idx');


            $table->foreign('rutinas_id', 'fk_rutinas_has_partes_cuerpo_rutinas1_idx')
                ->references('id')->on('rutinas')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('partes_cuerpo_id', 'fk_rutinas_has_partes_cuerpo_partes_cuerpo1_idx')
                ->references('id')->on('partes_cuerpo')
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
