<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('username', 45)->nullable();
            $table->string('email', 145)->nullable();
            $table->string('password', 45)->nullable();
            $table->string('nombre', 145)->nullable();
            $table->string('apellido_paterno', 145)->nullable();
            $table->string('apellido_materno', 145)->nullable();
            $table->unsignedInteger('tipos_usuarios_id');
            $table->unsignedInteger('objetivos_id');


            $table->index(["objetivos_id"], 'fk_users_objetivos1_idx');

            $table->index(["tipos_usuarios_id"], 'fk_users_tipos_usuarios_idx');


            $table->foreign('tipos_usuarios_id', 'fk_users_tipos_usuarios_idx')
                ->references('id')->on('tipos_usuarios')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('objetivos_id', 'fk_users_objetivos1_idx')
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
