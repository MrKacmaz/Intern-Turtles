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
            'currentLevel' => 1, //int
            'text' => 'Arpil’in babası bir laboratuvarda çalışan bilim insanıydı. Genetik mutasyonlar üzerine bir deneyde yönetici olarak arkadaşı Şurader ile birlikte çalışıyordu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Fare, kablumbağa, tavşan, maymun gibi denek hayvanlarını kullanarak yürüttüğü deney ile süper insan yaratmayı hedefliyorlardı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Deneylerde başarıya ulaşmaları çok yakındı fakat kötü kalpli Şurader arkadaşının başarısını kıskandı ve bütün başarıyı kendi üzerine çekmek için bu deney sonuçlarını biyolojik bir silah üretmek üzere kullanılmasını şirketin yönetimine sundu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => ' Bu durumdan çok fazla para kazanabileceğini düşünen şirket yönetimi projenin başına Şurader’e geçirdi.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Hayatının araştırmasının kötüye kullanılacağını ve hayvanların telef edileceğini düşünen Arpil’in babası Kirbo, bütün hayvanları doğal yaşamlarına salarak laboratuvarı ve bulduğu bütün çalışmaları ateşe verdi...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Kirbo’nun atladığı tek şey o gece orada Arpil’in de olmasıydı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Alevlerin arasında kalan Ayten, yangın çıkmadan önceki oynadığı en iyi arkadaşları olan kaplumbağaları Miçmiçello, Lavobardo, Rapoyel, Domateslo ve fare Süprüntür’ü kucaklayarak kendini alevlerin arasından dışarıya attı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Bunu gören Şurader, Arpil’in peşine düştü fakat bir patlama sonucunda ortaya çıkan kimyasal gazlara maruz kaldı. Bu şekilde insanüstü güzlere ulaştı fakat bu ciğerlerine mal oldu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Bu sırada Arpil, ardına bakmadan can havliyle koşarken ayağı kaldırıma takıldı. Düşerken elindeki dostları havaya savruldu ve mazgaldan kanalizasyona düştü.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Bu zamana kadar Arpil ile daha fazla zaman geçiren Süprüntür, aldığı kimyasalların etkisiyle çoktan insanlar gibi düşünmeye ve konuşmaya başlamıştı. Böylece küçük dostlarına göz kulak olmak için onları eğitmeye başladı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentLevel' => 1, //int
            'text' => 'Ama Süprüntür tarzıyla...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
    }
}
