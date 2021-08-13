<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('levels')->insert([
            'requiredExp' => 150, //int
            'damagePower' => 25, //int
            'staminaPower' => 30, //int
        ]);

        DB::table('levels')->insert([
            'requiredExp' => 400, //int
            'damagePower' => 50, //int
            'staminaPower' => 60, //int
        ]);

        DB::table('levels')->insert([
            'requiredExp' => 1000, //int
            'damagePower' => 100, //int
            'staminaPower' => 120, //int
        ]);
    }
}
