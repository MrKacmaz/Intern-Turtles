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
            'mapName' => 'Sewer Base', //str
            'mapBase' => 'Base', //str
            'mapImagePath' => '/img/Sahneler/1/(1)Base1.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Sewer Base', //str
            'mapBase' => 'Base', //str
            'mapImagePath' => '/img/Sahneler/1/(2)Base2.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Sewer Base', //str
            'mapBase' => 'Base', //str
            'mapImagePath' => '/img/Sahneler/1/(4)Base3.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Maps', //str
            'mapBase' => 'AllMaps', //str
            'mapImagePath' => '/img/Sahneler/Harita.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Dark Forest', //str
            'mapBase' => 'Forest', //str
            'mapImagePath' => '/img/Sahneler/1/(3)Forest.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Foggy Mountains', //str
            'mapBase' => 'Mountain', //str
            'mapImagePath' => '#', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Cave', //str
            'mapBase' => 'Cave', //str
            'mapImagePath' => '#', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Sewer', //str
            'mapBase' => 'Sewer', //str
            'mapImagePath' => '/img/Sahneler/1.1/(1.1)Lagim1.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Arpil`s Home', //str
            'mapBase' => 'Arpil`s Home', //str
            'mapImagePath' => '#', //str
        ]);
        DB::table('maps')->insert([
            'mapName' => 'Domin`s Pizza Restaurant', //str
            'mapBase' => 'Pizza', //str
            'mapImagePath' => '/img/Sahneler/1/(5)Pizzaci.png', //str
        ]);
        DB::table('maps')->insert([
            'mapName' => 'Old Factory', //str
            'mapBase' => 'Factory', //str
            'mapImagePath' => '/img/Sahneler/1.1/(1.10)Fabrika.png', //str
        ]);

        DB::table('maps')->insert([
            'mapName' => 'Blacksmith', //str
            'mapBase' => 'Blacksmith', //str
            'mapImagePath' => '/img/Sahneler/1.1/(1.7)Demirci.png', //str
        ]);
        DB::table('maps')->insert([
            'mapName' => 'WarArea', //str
            'mapBase' => 'WarArea', //str
            'mapImagePath' => '/img/Sahneler/1.1/lagim5.png', //str
        ]);
    }
}
