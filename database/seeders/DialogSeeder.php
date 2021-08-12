<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DialogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dialogs')->insert([
            'currentLevel'=>' ',//int
            'text'=>' ',//str
            'halfImagePath'=>' ',//str
            'npcName'=>' '//str
        ]);
    }
}
