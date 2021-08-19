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

        DB::table('missions')->insert([
            'missionLevel' => 1, //int
            'missionName' => 'Kalacağın yeri pırıl pırıl yap', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 1, //FK
            'missionMoney' => 25, //int
            'missionExp' => 25, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 1, //int
            'missionName' => 'Karanlık ormanı aç', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 2, //FK
            'missionMoney' => 100, //int
            'missionExp' => 50, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 1, //int
            'missionName' => 'Domin Usta`ya uğra ve tanış', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 7, //FK
            'missionMoney' => 100, //int
            'missionExp' => 75, //int
            // Ekstra olarak 2 pizza kazanacak
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 1, //int
            'missionName' => 'Demirciyi aç', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 9, //FK
            'missionMoney' => 100, //int
            'missionExp' => 100, //int
            // Damage power + 10
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 2, //int
            'missionName' => 'Lağımı aç', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 5, //FK
            'missionMoney' => 100, //int
            'missionExp' => 150, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 2, //int
            'missionName' => 'Bomba imha araştırmasını tamamla', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 5, //FK
            'missionMoney' => 200, //int
            'missionExp' => 300, //int
            // ekstra 1 pizza
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 2, //int
            'missionName' => 'Bilgileri ulaştır', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 1, //FK
            'missionMoney' => 200, //int
            'missionExp' => 500, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Demirciyi uyar', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 9, //FK
            'missionMoney' => 100, //int
            'missionExp' => 300, //int

            // demirci yan görevleri aktif edilecek
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Pizzacıda son keyifleri yap', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 7, //FK
            'missionMoney' => 0, //int
            'missionExp' => 0, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Kötü adamları alt et', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 5, //FK
            'missionMoney' => 500, //int
            'missionExp' => 600, //int
            // ekstra 2 pizza
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'İyi bir dünya için son adım', //str
            'missionStatus' => 'Main', //str
            'missionLocation' => 5, //FK
            'missionMoney' => 1000, //int
            'missionExp' => 1000, //int
        ]);


        //-----------------YAN GÖREVLER -----------------------------------


        //Pizza
        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Fırını sıcak tut', //str
            'missionStatus' => 'Side', //str
            'missionLocation' => 7, //FK
            'missionMoney' => 200, //int
            'missionExp' => 200, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Yeni kürek yap', //str
            'missionStatus' => 'Side', //str
            'missionLocation' => 7, //FK
            'missionMoney' => 200, //int
            'missionExp' => 200, //int
        ]);

        //Demirci
        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Madenden demir topla', //str
            'missionStatus' => 'Side', //str
            'missionLocation' => 9, //FK
            'missionMoney' => 400, //int
            'missionExp' => 250, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Ormandan odun topla', //str
            'missionStatus' => 'Side', //str
            'missionLocation' => 9, //FK
            'missionMoney' => 500, //int
            'missionExp' => 300, //int
        ]);

        DB::table('missions')->insert([
            'missionLevel' => 3, //int
            'missionName' => 'Demirci Eitriye pizza götür', //str
            'missionStatus' => 'Side', //str
            'missionLocation' => 9, //FK
            'missionMoney' => 500, //int
            'missionExp' => 300, //int
            //ekstra 1 pizza
        ]);
    }
}
