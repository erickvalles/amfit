<?php

use App\ParteCuerpo;
use Illuminate\Database\Seeder;

class ParteCuerpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = 200;

        factory(ParteCuerpo::class,$number)->create();
    }
}
