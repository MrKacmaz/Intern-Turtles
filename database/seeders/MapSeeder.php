<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('maps')->insert([
            'mapName'=>' ',//str
            'mapBase'=>' ',//str
            'mapImagePath'=>' ',//str
        ]);
    }
}
