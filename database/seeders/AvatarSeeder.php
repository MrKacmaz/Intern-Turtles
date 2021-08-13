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
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Lovabardo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Rapoyel',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Domateslo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Micmicello',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 2,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Lovabardo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 2,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Rapoyel',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 2,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Domateslo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 2,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Micmicello',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 3,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Lovabardo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 3,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Rapoyel',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 3,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Domateslo',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 3,
        ]);





        DB::table('avatars')->insert([
            'npcName' => 'Süprüntür',
            'npcImagePath' => 'empty',
            'npcBase' => 1,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Domin Usta',
            'npcImagePath' => 'empty',
            'npcBase' => 7,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Demirci Eitri',
            'npcImagePath' => 'empty',
            'npcBase' => 9,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Arpil',
            'npcImagePath' => 'empty',
            'npcBase' => 6,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Lağım Canavarı 1',
            'npcImagePath' => 'empty',
            'npcBase' => 5,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Lağım Canavarı 2',
            'npcImagePath' => 'empty',
            'npcBase' => 5,
            'npcLevel' => 1,
        ]);
        DB::table('avatars')->insert([
            'npcName' => 'Şurader',
            'npcImagePath' => 'empty',
            'npcBase' => 8,
            'npcLevel' => 3,
        ]);
    }
}
