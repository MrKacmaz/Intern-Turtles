<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('missions')->insert([
            'missionLevel'=>' ',//str
            'missionName'=>' ',//str
            'missionStatus'=>' ',//str
            'missionLocation'=>' ',//FK
            'missionMoney'=>' ',//int
            'missionExp'=>' ',//int
        ]);
    }
}
