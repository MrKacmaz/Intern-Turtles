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

        // --------- START STORY ---------

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Arpil’in babası bir laboratuvarda çalışan bilim insanıydı. Genetik mutasyonlar üzerine bir deneyde yönetici olarak arkadaşı Şurader ile birlikte çalışıyordu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Fare, kablumbağa, tavşan, maymun gibi denek hayvanlarını kullanarak yürüttüğü deney ile süper insan yaratmayı hedefliyorlardı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Deneylerde başarıya ulaşmaları çok yakındı fakat kötü kalpli Şurader arkadaşının başarısını kıskandı ve bütün başarıyı kendi üzerine çekmek için bu deney sonuçlarını biyolojik bir silah üretmek üzere kullanılmasını şirketin yönetimine sundu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => ' Bu durumdan çok fazla para kazanabileceğini düşünen şirket yönetimi projenin başına Şurader’e geçirdi.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Hayatının araştırmasının kötüye kullanılacağını ve hayvanların telef edileceğini düşünen Arpil’in babası Kirbo, bütün hayvanları doğal yaşamlarına salarak laboratuvarı ve bulduğu bütün çalışmaları ateşe verdi...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Kirbo’nun atladığı tek şey o gece orada Arpil’in de olmasıydı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Alevlerin arasında kalan Ayten, yangın çıkmadan önceki oynadığı en iyi arkadaşları olan kaplumbağaları Miçmiçello, Lavobardo, Rapoyel, Domateslo ve fare Süprüntür’ü kucaklayarak kendini alevlerin arasından dışarıya attı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Bunu gören Şurader, Arpil’in peşine düştü fakat bir patlama sonucunda ortaya çıkan kimyasal gazlara maruz kaldı. Bu şekilde insanüstü güzlere ulaştı fakat bu ciğerlerine mal oldu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Bu sırada Arpil, ardına bakmadan can havliyle koşarken ayağı kaldırıma takıldı. Düşerken elindeki dostları havaya savruldu ve mazgaldan kanalizasyona düştü.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Bu zamana kadar Arpil ile daha fazla zaman geçiren Süprüntür, aldığı kimyasalların etkisiyle çoktan insanlar gibi düşünmeye ve konuşmaya başlamıştı. Böylece küçük dostlarına göz kulak olmak için onları eğitmeye başladı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 0, //int
            'text' => 'Ama Süprüntür tarzıyla...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);


        // --------- END START STORY ---------




        // --------- START MISSION 1 ---------


        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Kahramanlarımızın iyice büyümesiyle birlikte eskiden sığındıkları yere artık sığamamaya başladılar. Böylece yeni bir üsse yerleşmek için arayışa başladılar.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'God' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Burası uygun görünüyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Ama usta, burası pislik içinde', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Bu lanet yere kablumbağa bağlasan durmaz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Gevezeliği kesin! Burayı hemen tertemiz yapmanızı istiyorum öğrencilerim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Offf… Emredersin Usta Süprüntür.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Az laf, çok iş. Haydi çap çap.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);

        // ARA SAHNE DE ---->

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Hiç bitmeyecek diye çok korktum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'O yaşlı bunak bizi fazla zorluyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'O yaşlı bunak hemen arkanda duruyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Yani Usta şey ımmm.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Tamam yeter. Güzel iş çıkardınız öğrencilerim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 1, //int
            'text' => 'Lanet olsun çok yoruldum...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);

        // --------- END MISSION 1 ---------







        // --------- START MISSION 2 ---------


        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Burası çok soğuk.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Ayak parmaklarımı hissetmiyorum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Ama usta, burası pislik içinde', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Kabuğum soğuktan çatlayacak.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Bu güne kadar dışarıya hiç çıkmadığınızı biliyorum. Ama ısınmaya ihtiyacımız var ve artık hazırsınız. Buranın Kuzey-Batı’sında bir orman var. Oraya gidip odun toplamanızı istiyorum. Unutmayın, siz dış dünyaya ait değilsiniz. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Bu yüzden sizi kimse görmemeli evet evet, biliyoruz usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Pekala, yola çıkma vakti. Güç sizinle olsun...', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Bu kulağa pek doğru gelmedi.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);



        // ARA SAHNE -------->

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Hey Kap2, o koca kabuğun yüzünden küçük kız az daha bizi görecekti.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Ama o küçük insanın elindeki üçgen şey çok güzel kokuyordu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Ona pizza deniyor seni yamuk kafalı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => 'Bir ısırık alabilmek için bir parmağımı verirdim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 2, //int
            'text' => '3 parmakla bile bu kadar işe yaramazken 2 parmakla seni düşünemiyorum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);

        // --------- END MISSION 2 ---------


        // --------- START MISSION 3 ---------

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Demek pizzayı çok sevdin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Evetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevetevet.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Tamam tamam heyecanlanma. Yıllar oldu ama sanki buranın Güney-Batısında küçük Arpil’in çok sevdiği bir pizzacı vardı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Yaşlı Domin Usta’nın yüreğine indirmeden pizza alabilirsiniz. Arka kapıdan mutfağa girin. Ve dua edin pizzalar hala sıcak olsun.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ağzım sulanıyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Sessiz ol Kap3. Nefesin yolun karşısından duyuluyor', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ben değilim. Kap4 nefes alıyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Yalan söyleme', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
    }
}
