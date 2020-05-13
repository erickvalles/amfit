<?php

use App\ParteCuerpo;
use App\TipoUsuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        TipoUsuario::truncate();
        ParteCuerpo::truncate();

        $this->call(TipoUsuarioSeeder::class);
        $this->call(ParteCuerpoSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
