<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_levels')->insert([
            'userLevel' => 1, // int
            'userExp' => 0, // int
            'userMoney' => 0, // int
            'userLastMissionId' => 1, // foreign key
            'userLastDialogId' => 1, // foreign key
            'lastSave' => date('Y-m-d H:i:s'), // date format
        ]);
    }
}
