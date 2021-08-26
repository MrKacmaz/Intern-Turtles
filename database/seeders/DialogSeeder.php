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
        // DB::table('dialogs')->insert([
        //     'currentMissionLevel' => 2, //int
        //     'text' => 'Ama usta, burası pislik içinde', //str
        //     'halfImagePath' => 'empty', //str
        //     'npcName' => 'Kap2' //str
        // ]);
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
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        //KÜT
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Bayıldı mı?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Kontrol etsene Kap3', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Neden ben kontrol ediyorum sen et.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'O zaman Kap4 etsin', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'O çirkin suratınla adamı öldüren sensin Kap2. Zavallı adam kalpten gitti.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ayılıyor. Sen konuş Kap1. Aramızdaki en sevimli surat sende.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Sensin sevimli surat. Heeeeey ihtiyar sakın korkma.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        //KÜT
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ne zaman pizza yiyeceğiz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Sırası mı şimdi karpuz kafa? Ustamızın en eski dostunu öldürdük.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Nefes alıyor. Yine bayılmış. Pizza zamanı. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'İyi de burada hiç pizza yok. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Dükkanımı tekrar soymanıza izin vermeyeceğim sizi soytarılar. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'A uyandı. Merhaba yaşlı insan dostum. Acaba pizzan var mı? ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ah pizzalar. Lanet olsun siparişler birikti. Şu lanet hırsızlar dükkanımı soyduğundan beri hiçbirşey yapamıyorum. O Ayak Takımı çetesi. Tüm kasamı boşalttılar.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Peki size yardımcı olsak bize pizza yapar verir misin?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'İstediğiniz kadar alabilirsiniz. Ama o üzerinizdeki koca kıyafetlerle nasıl hareket edeceksizin? İtiraf edeyim bir an gerçek sandım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => '2 an diyelim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Peki bu Ayak Takımı’nı nerede bulabiliriz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ormana doğru gittiklerini gördüm. İyi şanslar gerip dostlarım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Ama bu Süprüntür Usta’yı çok kızdıracak.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 3, //int
            'text' => 'Herkesi mutlu edemezsin Kap2. Çünkü sen bir pizza değilsin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        // --------- END MISSION 3 ---------


        // --------- START MISSION 4 ---------
        //Görev Sonu: 75 Exp, 100 Gold, 2 Pizza
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Pizzaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'O kadar çok kötü adam dövdüm ki midem kazınıyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Teşekkür ederim garip dostlarım. İşte pizzalarınız. Minnettarım.
            İstediğiniz zaman gelebilirsiniz. Kapım size daima açık.
            ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        //BASE'DE 
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Başardınız! Hadi yiyelim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'İhtiyara neler yaşadığımızı söyleyenin kabuğunu kırarım ona göre.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Bu şey geçekten çok lezzetli 😊.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Kap1, senin silahına ne oldu?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Iıııı şey, merdivenlerden çıkarken ayağım kaydı ve sırt üstü düştüm. Şanslıyım ki kabuğum kırılmadı.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Evet gerçekten şanslıymışsın(Şüpheli). Buranın Batısında bir demirci var. Gidip silahını düzelt. O şeyle savaşamazsın.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 4, //int
            'text' => 'Emredersin Usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);


        // --------- END MISSION 4 ---------

        // --------- START MISSION 5 ---------
        //Üçüncü Görev(Demirciyi Aç):
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Merhaba iri ve sakallı usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Ne oldu ? Şehirde sirk mi açıldı?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Eeeeeee, evet evet. Dinle akşama gösterim var ama bu dandik şey kırıldı. Acaba tamir edebilir miyiz?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Bunu düzeltmemiz mümkün değil. Sana yenisi lazım. Daha iyisini yapabilirim. Ama hiç girit taşım kalmamış. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => ' Eskiden ormandan toplayıp gelirdim ama ayağım beni öldürüyor. Bak ne diyeceğim; Gidip benim için biraz girit taşı toplarsan senin için bunu bedavaya yaparım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Bedava bedava mı?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Bayağı bedava.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Olmuş bil sakallı usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Adım Eitri.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 5, //int
            'text' => 'Pekala iri usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);


        // --------- END MISSION 5 ---------
        // --------- START MISSION 6 ---------
        //Görev Sonu: + 10 damage. 100 gold 100 Exp.  
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Aha , dönmüşsün! Bir an düşüp o kostümün içinde boğulduğunu düşündüm.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Çok beklersin Epri amca.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Benim adım Eitri!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Ben de öyle dedim zaten Etirli usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Seninle uğraşamayacağım işte silahın.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Vay be! Harika duruyor. Muhteşem! Harkülade! ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 6, //int
            'text' => 'Uzatma, ikile.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);


        // --------- END MISSION 6 ---------
        // --------- START MISSION 7 ---------
        //Dördüncü Görev (Lağımı Aç):
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Kaybolduk galiba.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Üzerime gelme. Bu yeni üssün yerini ezberleyemedim hala', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Pizzalar soğuyacak.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Pizzadan başka bir şey düşünmez misin?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Pizzadan sonra ne dedin? ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Pes ediyorum. Aptallığının bir sınırı yok.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Siz ikiniz kapayın kesin sesinizi. Galiba bir şey duydum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Hemen şu köşeden geliyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 7, //int
            'text' => 'Gidip bi bakalım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);

        // --------- END MISSION 7 ---------

        // --------- START MISSION 8 ---------
        //Görev Sonu(100 gold. 150 Exp. )
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Ne yapıyorlar onlar orada?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Kocaman bir şey var ortada. Sen pizza mı yiyiyorsun lan !', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'acum num um şom num şlap şşll.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Bekleyin galiba bir şey konuşuyorlar.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Umarım biz buradayken bu lanet şey patlamaz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kötü Adam' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Patlama mı ! O şey bir bomba mı ?  ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Bomba olan bomba dan mı ?  ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Zeki kardeşim benim ! ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Bunu Süprüntür Ustaya hemen bildirmeliyiz. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 8, //int
            'text' => 'Hemen harekete geçmeliyiz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);

        // --------- END MISSION 8 ---------
        // --------- START MISSION 9 ---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'USTA USTA USTA USTAAAAAAA !', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Ne var kabuğuna siçtuğum', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Bir şey gördük usta. Patlamak, bomba, lağım, ııııı', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Bu aptalın demeye çalıştığı, lağımda dolaşırken bir şey gördük. Maskeli kötü adamlar bir bombadan bahsediyorlardı. Galiba şehri havaya uçuracaklar.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Maskeli mi ? Bunlar Ayak Takımı olmasın ?! Şurader’in adamları.. O gözü dönmüş canavar ben daha küçük bir lağım faresi olduğum zamandan beri bu şehri ele geçirmeye çalışıyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Ayak Takımı mı? Onlardan bir kaçıyla karşılaştım. Zavallılar onlarla işim bittiğinde zar zor yürüyorlardı. ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Bakın evlatlarım bu işte çok dikkatli olmanızı istiyorum. Bu mesele dalga geçilecek bir mesele değil. Buranın Güneyinde bir  fabrika var. Orayı mesken edinmişler.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Gitmeden yolluk pizza mı yesek ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Pizza mı bıraktın ki kabuk kafa.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Gidip orayı kontrol etmenizi istiyorum öğrencilerim. Unutmayın onlar silahlı ve tehlikeli kötü adamlar… Çok dikkatli olmanızı istiyorum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 9, //int
            'text' => 'Anlaşıldı Usta..', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //GÖREV SONU(ARPİLİN EVİ AÇILIR): 300EXP, 200 GOLD 1PİZZA
        // --------- END MISSION 9  ---------
        // --------- START MISSION 10 ---------

        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Usta haklıymış ! Burası gerçekten Ayak Takımı kaynıyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'iyi de neden bombayı lağımda yapıyorlar ki ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Bombayı fabrika da mı patlatmak zarar verir yoksa şehrin altında mı ? Hem de lağım metan gazı kaynıyorken ? Eğer önlem almazsak bütün bir şehri havaya uçurabilir …', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Pizzacı patlarsa ne yaparızzzz', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Siz soytarılar burada ne yapıyorsunuz ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Kapa çeneni seni sersem o sadece bir gazeteci bir kız', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Çok güzel gazeteci bir kız <3', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Bu kılıkla burada ne yapıyorsunuz soytarılar. Bunlar tehlikeli adamlar. Evinizden çok uzaklaşmış olmalısınız.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Çok uzaklaşmış sayılmayız aslında hemen şurada otu…..', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Napıyorsun seni sersem ! ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Asıl sen burada ne yapıyorsun ? Senin gibi güzel bir kadının bu saatte burada ne işi olabilir ki ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Benim işim bu. Ben bir gazeteciyim ve uzun zamandır bu adamların peşindeyim. Yine birşeyler karıştırıyorlar ve ben bunu çözeceğim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Aaaa… evet biz çoktan öğrendik gibi bomb…….', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => '(dırşk)… Sen artık konuşmasan mı .. Sen onun kusuruna bakma son zamanlarda yediği pizza miktarından dolayı bir pizzadan fazla düşünemez oldu .', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Her neyse benim artık gitmem gerek. Siz de buralarda dolaşıp başınıza bela almayın. Eğer bir şey duyar ya da görürseniz evim hemen şurada bana gelip haber verin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpill' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Bir dakika ben bu adamı bir yerden tanıyorum. Bu Ekşi Usta… Yoksa onlara yardım mı ediyor?!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'O da kim ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Silahımı yeni baştan yaratan bir demirci. Çok iyi bir insana benziyordu. Bu kötü Ayak Takımıyla ne işi olablir ki ? Rehin falan alınmış olmasın ? ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Hiç de rehin alınmış gibi değil daha çok halinden memnunmuş gibi duruyor. Yanındaki maskeli kötü adam patronları gibi duruyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Eliptir’i uyarmalı ve derhal Süprüntür Ustaya haber vermeliyiz..', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Görüşürüz güzellik. Bekle ııııı adını hiç söylemedin ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Benim adım Arpil. Tanıştığıma memnun oldum tuhaf, iri, yeşil dostlarım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Bir ara karşılıklı pizza yiyelim Arpil.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Yerinde olsam bu hamur kafalının teklifini kabul etmezdim Arpil .', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 10, //int
            'text' => 'Bilgilendirme için teşekkür ederim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        // --------- END MISSION 10 ---------
        // --------- START MISSION 11 ---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Ustaa.. Haklısın Ayak takımı fabrikayı mesken tutmuş ve başlarında maskeli bir adam var. Patronları gibi duruyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Bir de çok güzel bir kızla karşılaştık. Aynı pizza gibiydi', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Sizi başkalarının görmesine izin mi verdiniz ! Bu kabul edilemez bir hata. Zarar görebilirdiniz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Merak etme usta zaten bizim ne olduğumuzu anlayamadı gazeticiymiş', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Haaaa bir de konuştunuz demek. İnsanların konuşan kaplumbağa gördüklerinde nasıl bir tepki vereceğini düşünebiliyor musunuz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 11, //int
            'text' => 'Sizi yakalayıp bir hücreye kapatıp üstünüzde deneyler yapmalarını mı istiyorsunuz! Bu kadarı yeter… hepiniz cezalısınız. Artık pizza ve dışarı çıkmak yok !', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Süprüntür' //str
        ]);
        //GÖREV SONU: 500 EXP 200GOLD 

        // --------- END MISSION 11 ---------
        // --------- START MISSION 12 ---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 12, //int
            'text' => 'Elixir’i uyarmalıyız. O adamlara daha fazla yardım ederse şehir yok olacak.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 12, //int
            'text' => 'iyi de Usta dışarı çıkmamızı yasakladı. Nasıl yapmayı düşünüyorsun bunu…', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 12, //int
            'text' => 'Pizzacıya bir şey olmasına izin veremeyiiizzz', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 12, //int
            'text' => 'Usta uyuduktan sonra gizlice çıkıp derhal bu işi halletmeliyiz', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        // --------- END MISSION 12 ---------
        // --------- START MISSION 13 ---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Merhaba Erikli Usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Adımı söyleyemeyen daha fazla arkadaşını mı getirdin?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Sana yardımcı olmaya geldik Usta. Birlikte çalıştığın adamların kötü insanlar olduğunu biliyor musun?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Evet ama bir şekilde para kazanmam lazım değil mi. Zaten sadece demir veriyorum. Onlar ise bana para veriyorlar. Herkes mutlu.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'O bomba patlarsa kimse mutlu olmayacak.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Bekle bir dakika, ne bombası?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Şehrin altına devasa bir bomba yerleştiriyorlar. Ve sen de onlara yardım ediyorsun. Hepizimi öldürteceksin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'O şerefsizler! Bunu beklemiyordum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Kötü adamların kötü bir şey yapmasını mı? ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 13, //int
            'text' => 'Artık onlara yardım etmeyeceğim. Lanet olsun ne aptalmışım. Para buna değmez.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);

        //Görev Sonu (Exp 300, 100 Gold. Demirci yan görevler açıldı).
        // --------- END MISSION 13 ---------
        // --------- START MISSION 14 ---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 14, //int
            'text' => 'Bunun kötü sonuçlarının olacağının farkındasın değil mi?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 14, //int
            'text' => 'Siz de bu yüzden buradasınız. Beni korumak için. Bana yardımcı olursanız ben de siz ve o sırtınızdaki parlak silahlarınıza yardımcı olurum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 14, //int
            'text' => 'Mantıklı konuşuyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 14, //int
            'text' => 'Teşekkürler demirci, doğru bir karar verdin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);

        // --------- END MISSION 14 ---------
        // --------- START MISSION 15 ---------
        //Pizzacıda.
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Hey çocuklar, sizi burada bulacağımı biliyordum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Demek kalplerimiz gerçekten de kenetlenmiş.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Merhaba Arpil. Hangi rüzgarattı seni buraya.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Kötü haberlerim var. Fabrikanın orada bir hareketlilik var. Galiba bu gün bir şeyler planlıyorlar.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Gitmeli miyiz Kap1? Zaten cazalıyız ve şu an kaçak sayılırız.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Yaşayacak yerimizin olmaması birkaç yüz ceza şınavından daha korkutucu bence. Hadi gidip biraz kötü adam tokatlayalım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'HADİ!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 15, //int
            'text' => 'Lütfen dikkatli olun. Ben uzaktan sizi takip ediyor olacağım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);


        // --------- END MISSION 15 ---------
        // --------- START MISSION 16 ---------
        // Kötü Adamlarla Dövüş Kısmı(600 Exp.2 Pizza, 500 Gold ).
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Planımı bozamayacaksınız sizi küçük lağım fareleri.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Şurader' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Süprüntür Usta dan mı bahsediyor.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Demek Süprüntür ha. O iğrenç farenin adını duymayalı yıllar oldu. Siz de onun küçük yaratıklarısınız öyle mi?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Şurader' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Hey ustamız hakkında düzgün konuş.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Siz iğrenç yaratıkları ayağımın altında ezeceğim.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Şurader' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 16, //int
            'text' => 'Dene de gör!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);

        // --------- END MISSION 16 ---------
        // --------- START MISSION 17 ---------
        //Şurader ile dövüş kısmı.(1000 Exp. 1000 Gold).
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Bu kadar kolay kurtulamayacaksınız sizi iğrenç yaratıklar. Sizinle sonra görüşeceğiz.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Şurader' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Kazandık mı?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap2' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Çok yoruldum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Vay be! Harikaydınız çocuklar. Mmmmuah.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Arpil' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Galiba bütün yorgunluğum bir anda bitti.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap4' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'Biz kazandık çocuklar. Hadi Gidip Kutlayalım.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 17, //int
            'text' => 'PİZZA ZAMANI!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap3' //str
        ]);




        // --------- END MISSION 17 ---------

        //**************YAN GÖREVLER **********************/



        //-----------MISSION 18---------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 18, //int
            'text' => 'Pizza yapmak için fırınımı daima sıcak tutmalıyım. Ama fırına atacak odunum kalmadı. Bana odun toplar mısın? ', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 18, //int
            'text' => 'Tabii ki Eliptik usta.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //GÖREV YAPILDIKTAN SONRA
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 18, //int
            'text' => 'işte odunlarını topladım. Artık daha çok pizza yapabilirsin.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //---------- END MISSION 18-----------

        //---------- MISSION 19 ----------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 19, //int
            'text' => 'Haydutlar dükkanın altını üstüne getirdikten sonra küreğimin geldiği hale bakarmısınız.. Artık bu kürek kullanılacak durumda değil. Bana yeni bir kürek lazım bu işi halledebilir misiniz?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Domin Usta' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 19, //int
            'text' => 'Aaaa Epikriz usta bu işi yapabilir. Hemen gidip soralım..', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //GÖREV YAPILDIKTAN SONRA
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 19, //int
            'text' => 'işte küreğin burada Epikriz ustanın halledemeyeceği şey yok. Şimdi gitmeliyim Epikriz ustanın da yardımıma ihtiyacı varmış.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //---------------END MISSION 19-------------

        //----------------MISSION 20-------------------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 20, //int
            'text' => 'Daha fazla silah yapıp satabilmem için bana işleyebileceğim demir lazım. Fakat çalışmaktan fırsat bulup madene gidemiyorum. Bu işi benim için halledebilir misin ?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 20, //int
            'text' => 'Senin için herşeyi yapabilirim usta bu işi olmuş bil.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
        //GÖREV YAPILDIKTAN SONRA 
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 20, //int
            'text' => 'bu topladıklarım işini görür mü?', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);
       
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 20, //int
            'text' => ' ahh evet çok teşekkür ederim sana .', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        //------------------END MISSION 20-------------
        //-------------------MISSION 21------------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 21, //int
            'text' => 'Ateş yoksa demiri eritemem. Bana ormandan biraz odun toplar mısın? Biliyorsun karşılğını cömertçe veririm.  😉', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 21, //int
            'text' => 'Tamam', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);

        //GÖREV YAPILDIKTAN SONRA 
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 21, //int
            'text' => ' Vay be. Ne kadar çok odun var. Teşekkür ederim kabuklu dostum.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 21, //int
            'text' => 'Eyv', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]); 
        //------- END MISSION 21------------
        //--------------MISSION 22----------------
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 22, //int
            'text' => ' Bu siparişlerin altından kalkamıyorum. Üstelik karnım da çok aç. Bana Domin Usta’nın pizzalarından getirebilir misin. 1 tane de kendie al. 😉', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]);
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 22, //int
            'text' => 'PİZZA!!!!', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]); 
        //GÖREV YAPILDIKTAN SONRA 
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 22, //int
            'text' => 'Vay be! Çok lezzetli', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Demirci Eitri' //str
        ]); 
        DB::table('dialogs')->insert([
            'currentMissionLevel' => 22, //int
            'text' => 'Mmmmm.', //str
            'halfImagePath' => 'empty', //str
            'npcName' => 'Kap1' //str
        ]);       
    }
}
