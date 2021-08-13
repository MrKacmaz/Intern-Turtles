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

        DB::table('maps')->insert([
            'mapName' => 'Dark Forest', //str
            'mapBase' => 'Forest', //str
            'mapImagePath' => 'empty', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Foggy Mountains', //str
            'mapBase' => 'Mountain', //str
            'mapImagePath' => 'empty', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Cave', //str
            'mapBase' => 'Cave', //str
            'mapImagePath' => 'empty', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Sewer', //str
            'mapBase' => 'Sewer', //str
            'mapImagePath' => 'empty', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'April`s Home', //str
            'mapBase' => 'April`s Home', //str
            'mapImagePath' => 'empty', //str
        ]);
        DB::table('maps')->insert([
            'mapName' => 'Domin`s Pizza Restaurant', //str
            'mapBase' => 'Pizza', //str
            'mapImagePath' => 'empty', //str
        ]);
        DB::table('maps')->insert([
            'mapName' => 'Old Factory', //str
            'mapBase' => 'Factory', //str
            'mapImagePath' => 'empty', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Blacksmith', //str
            'mapBase' => 'Blacksmith', //str
            'mapImagePath' => 'empty', //str
        ]);
    }
}
