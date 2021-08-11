<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('avatars')->insert([
            'npcName' => 'Micmicello',
            'npcImagePath' => 'asdasdasd',
            'npcBase' => 2,
            'npcLevel' => 1,
        ]);
    }
}
