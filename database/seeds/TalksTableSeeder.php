<?php

use App\Locale;
use App\Talk;
use App\TalkSubject;
use App\User;
use Illuminate\Database\Seeder;

class TalksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('talks')->delete();
        DB::table('talk_subjects')->delete();

        $ht_talks = [
            ['number' => 1, 'subject' => 'Eske w byen konnen Bondye?'],
            ['number' => 2, 'subject' => 'Eske n ap chape nan denye jou yo?'],
            ['number' => 3, 'subject' => 'Annou sevi Jewova nan oganizasyon l lan ki ini'],
            ['number' => 4, 'subject' => 'Monn ki antoure nou an bay prev Bondye egziste'],
            ['number' => 5, 'subject' => 'Yonvi fanmi ki bay ke kontan'],
            ['number' => 6, 'subject' => 'Ki sa delij nan epok Noye a vle di pou nou?'],
            ['number' => 7, 'subject' => 'Mizerikod se youn nan kalite prensipal vre kretyen yo genyen'],
            ['number' => 8, 'subject' => 'Ann pa viv pou tet nou, men pito ann viv pou n fe volonte Bondye'],
            ['number' => 9, 'subject' => 'Pinga nou janm vin moun ki tande di'],
            ['number' => 10, 'subject' => 'Annou toujou aji yon fason ki onet'],
            ['number' => 11, 'subject' => 'Menm jan ak Kris, pinga nou “fe pati monn nan”'],
            ['number' => 12, 'subject' => 'Le n respekte otorite se yon pwoteksyon pou nou'],
            ['number' => 13, 'subject' => 'Ki sa Bondye di sou seks ak maryaj?'],
            ['number' => 14, 'subject' => 'Yon pep ki pwop ap onore Jewova'],
            ['number' => 15, 'subject' => 'Antanke kretyen, nou gen sousi pou lot moun'],
            ['number' => 16, 'subject' => 'Annou kontinye cheche gen pi bon relasyon ak Bondye'],
            ['number' => 17, 'subject' => 'Annou sevi ak tout sa n genyen pou n bay Bondye glwa'],
            ['number' => 18, 'subject' => 'Eske nou fe Jewova tounen fotres nou toutbonvre?'],
            ['number' => 19, 'subject' => 'Ki jan w ka rive konnen sa demen sere pou ou?'],
            ['number' => 20, 'subject' => 'Eske le a rive pou Bondye dirije monn nan?'],
            ['number' => 21, 'subject' => 'Ki janw ka montre w diy pou Wayom Bondye a?'],
            ['number' => 22, 'subject' => 'Eske w satisfe ak dispozisyon Jewova pran yo?'],
            ['number' => 23, 'subject' => 'Rezon ki fe nou egziste'],
            ['number' => 24, 'subject' => 'Byenfe n ap jwenn si nou kite Bondye dirije nou'],
            ['number' => 25, 'subject' => 'Annou reziste kont lespri monn nan'],
            ['number' => 26, 'subject' => 'Eske w gen vale nan je Bondye?'],
            ['number' => 27, 'subject' => 'Fason pou n byen komanse maryaj nou'],
            ['number' => 28, 'subject' => 'Demontre respe ak lanmou pou moun ou marye ave l la'],
            ['number' => 29, 'subject' => 'Responsablite paran yo genyen ak rekonpans yo jwenn'],
            ['number' => 30, 'subject' => 'Nan fanmi yo, li enpotan pou n kominike youn ak lot e avek Bondye'],
            ['number' => 31, 'subject' => 'Ki jan moun ki grangou ka gen ke kontan?'],
            ['number' => 32, 'subject' => 'Fason nou ka fe fas ak tetchaje ki gen nan lavi a'],
            ['number' => 33, 'subject' => 'Ki sa k fe moun gen tandans fe rebelyon?'],
            ['number' => 34, 'subject' => 'Eske w resevwa “mak” k ap pemet ou sove a?'],
            ['number' => 35, 'subject' => 'Eske l posib pou w viv pou toutan? Eske w pral viv pou toutan?'],
            ['number' => 36, 'subject' => 'Eske se vi sa a selman ki genyen?'],
            ['number' => 37, 'subject' => 'Depi kounye a, annou defann dwa Bondye genyen pou l dirije'],
            ['number' => 38, 'subject' => 'Annou aji avek sajes toutpandan lafen an ap pwoche'],
            ['number' => 39, 'subject' => 'Ann met konfyans nou nan viktwa Bondye pral ranpote a'],
            ['number' => 40, 'subject' => 'Ki sa demen sere pou nou?'],
            ['number' => 41, 'subject' => '“Rete trankil, epi gade ki jan Jewova ap sove nou”'],
            ['number' => 42, 'subject' => 'Ki enfliyans Wayom Bondye a gen sou vi w?'],
            ['number' => 43, 'subject' => 'Eske nou fe sa Bondye mande nou?'],
            ['number' => 44, 'subject' => 'Annou kontinye cheche Wayom Bondye a'],
            ['number' => 45, 'subject' => 'Annou mache sou wout lavi a'],
            ['number' => 46, 'subject' => 'Annou kenbe konfyans nou genyen an fem jiska lafen'],
            ['number' => 47, 'subject' => '“Se pou nou gen lafwa nan bon nouvel la”'],
            ['number' => 48, 'subject' => 'Antanke kretyen, annou lite pou n ret fidel'],
            ['number' => 49, 'subject' => 'Eske nou gen pou nviv sou yon te ki pwop?'],
            ['number' => 50, 'subject' => 'Ki jan pou nou pran bon desizyon?'],
            ['number' => 51, 'subject' => 'Eske laverite chanje lavi w?'],
            ['number' => 52, 'subject' => 'Kiyes ki Bondye w?'],
            ['number' => 53, 'subject' => 'Eske panse w ann amoni ak panse Bondye?'],
            ['number' => 54, 'subject' => 'Fotifye lafwa w nan Sila a ki kreye lom nan'],
            ['number' => 55, 'subject' => 'Ki repitasyon nou genyen devan Bondye?'],
            ['number' => 56, 'subject' => 'Annou antre nan monn nouvo a anba direksyon Kris'],
            ['number' => 57, 'subject' => 'Annou andire anba pesekisyon'],
            ['number' => 58, 'subject' => 'Ki jan nou ta dwe sevi Bondye?'],
            ['number' => 59, 'subject' => 'Sa nou simen se li n ap rekolte'],
            ['number' => 60, 'subject' => 'Poukisa n ap viv?'],
            ['number' => 61, 'subject' => 'Pwomes kiyes ou fe konfyans?'],
            ['number' => 62, 'subject' => 'Gen yon sel remed ki egziste pou limanite ki malad'],
            ['number' => 63, 'subject' => 'Eske w se yon moun ki renmen evanjelize?'],
            ['number' => 64, 'subject' => 'Eske w se zanmi plezi oswa zanmi Bondye?'],
            ['number' => 65, 'subject' => 'Nou jwenn one ak ke kontan nan sevis Bondye'],
            ['number' => 66, 'subject' => 'Annou travay kom esklav pou Met rekot la'],
            ['number' => 67, 'subject' => 'Annou pran tan pou n medite sou bagay ki gen rapo ak Bondye'],
            ['number' => 68, 'subject' => 'Eske w kenbe rankin oubyen eske w padone?'],
            ['number' => 69, 'subject' => 'Annou kontinye montre nou dispoze fe sakrifis'],
            ['number' => 70, 'subject' => 'Mete konfyans nou nan Jewova'],
            ['number' => 71, 'subject' => 'Fason pou nou rete je kle nan sevis Bondye'],
            ['number' => 72, 'subject' => 'Lanmou pemet moun idantifye vre kongregasyon kretyen an'],
            ['number' => 73, 'subject' => 'Annou cheche gen yon ke ki gen sajes'],
            ['number' => 74, 'subject' => 'Je Jewova ap gade nou'],
            ['number' => 75, 'subject' => 'Eske w rekonet souvrente Jewova nan lavi w?'],
            ['number' => 76, 'subject' => 'Eske prensip ki nan Bib la ka ede nou fe fas ak pwoblem ki gen jodi a?'],
            ['number' => 77, 'subject' => 'Pran abitid akeyi moun'],
            ['number' => 78, 'subject' => 'Annou sevi Jewova ak ke kontan'],
            ['number' => 79, 'subject' => 'Eske w ap chwazi fe zanmi ak Bondye oubyen ak monn nan?'],
            ['number' => 80, 'subject' => 'Eske se sou lasyans nou met espwa nou oubyen sou Labib?'],
            ['number' => 81, 'subject' => 'Kiyes ki kalifye pou vin sevite Bondye?'],
            ['number' => 82, 'subject' => 'Eske Jewova ak Kris fe pati yon trinite?'],
            ['number' => 83, 'subject' => 'Le jijman relijyon yo rive'],
            ['number' => 84, 'subject' => 'Eske w pral sibi menm so ak monn nan?'],
            ['number' => 85, 'subject' => 'Genyonbonnouvelnanyonmonnvyolan'],
            ['number' => 86, 'subject' => 'Priye Bondye tande yo'],
            ['number' => 87, 'subject' => 'Ki kalite relasyon ou gen ak Bondye?'],
            ['number' => 88, 'subject' => 'Poukisa nou dwe viv ann ako ak prensip ki nan Bib la?'],
            ['number' => 89, 'subject' => 'Vini, ou menm ki swaf verite!'],
            ['number' => 90, 'subject' => 'Lite pou w gen lavi toutbon an'],
            ['number' => 91, 'subject' => 'Prezans Mesi a ak rey li a'],
            ['number' => 92, 'subject' => 'Wol relijyon jwe nan zafe monn nan'],
            ['number' => 93, 'subject' => 'Eske se Bondye ki responsab katastwof natirel yo?'],
            ['number' => 94, 'subject' => 'Vre relijyon an satisfe bezwen lezom'],
            ['number' => 95, 'subject' => 'Sa Labib di sou pratik ki gen rapo ak movezespri yo'],
            ['number' => 96, 'subject' => 'Fo relijyon pral detwi tale konsa'],
            ['number' => 97, 'subject' => 'Annou rete san repwoch nan mitan yon jenerasyon ki kwochi'],
            ['number' => 98, 'subject' => 'Annou rete pwop parapo ak salte ki nan gen monn nan'],
            ['number' => 99, 'subject' => 'Rezon ki fe w ka fe Labib konfyans'],
            ['number' => 100, 'subject' => 'AnnouchechevinyonvrezanmipouBondyeepoupwochennou'],
            ['number' => 101, 'subject' => 'Jewova se Gran Kreyate a'],
            ['number' => 102, 'subject' => 'Annou fikse atansyon nou sou pawol ki ekri nan pwofesi yo'],
            ['number' => 103, 'subject' => 'Nou kapab jwenn ke kontan nan sevis Bondye a'],
            ['number' => 104, 'subject' => 'Paran, eske w ap bati ak materyo ki kapab reziste anba dife?'],
            ['number' => 105, 'subject' => 'Nou jwenn konsolasyon nan tout tribilasyon nou yo'],
            ['number' => 106, 'subject' => 'Bondye pral pini moun k ap detwi te a'],
            ['number' => 107, 'subject' => 'Se pou konsyans nou rete kle nan monn sa a k ap benyen nan peche'],
            ['number' => 108, 'subject' => 'Nou pa bezwen pe lavni'],
            ['number' => 109, 'subject' => 'Wayom Bondye a toupre'],
            ['number' => 110, 'subject' => 'Pou yon fanmi viv byen yo dwe met Bondye an premye'],
            ['number' => 111, 'subject' => 'Ki benediksyon gerizon nasyon yo ap jwenn nan pote?'],
            ['number' => 112, 'subject' => 'Fason nou ka demontre lanmou nan yon monn ki pa respekte lalwa'],
            ['number' => 113, 'subject' => 'Koman jen yo ka fe fas ak kriz ki gen nan monn nan jodi a?'],
            ['number' => 114, 'subject' => 'Annou apresye mevey ki gen nan kreyasyon Bondye a'],
            ['number' => 115, 'subject' => 'Ki jan nou ka pwoteje tet nou kont pyej Satan yo?'],
            ['number' => 116, 'subject' => 'Annou aji avek sajes le n ap chwazi ki moun n ap frekante'],
            ['number' => 117, 'subject' => 'Fason pou nou venk mal la avek byen'],
            ['number' => 118, 'subject' => 'Annou konsidere jen yo menm jan Jewova konsidere yo'],
            ['number' => 119, 'subject' => 'Ki benediksyon kretyen yo jwenn le yo ret separe ak monn nan?'],
            ['number' => 120, 'subject' => 'Rezon ki fe nou dwe soumet devan Bondye antanke Chef depi kounye a'],
            ['number' => 121, 'subject' => 'Fre yo nan lemonnantye delivre anba kalamite'],
            ['number' => 122, 'subject' => 'Ki sa k pral mete lape nan lemonnantye?'],
            ['number' => 123, 'subject' => 'Rezon ki fe kretyen yo dwe diferan'],
            ['number' => 124, 'subject' => 'Rezon ki fe nou gen konfyans se Bondye ki fe ekri Bib la'],
            ['number' => 125, 'subject' => 'Rezon ki fe limanite bezwen yon ranson'],
            ['number' => 126, 'subject' => 'Ki moun k ap sove?'],
            ['number' => 127, 'subject' => 'Sa k rive le nou mouri?'],
            ['number' => 128, 'subject' => 'Eske se vre lanfe se yon kote yo toumante moun nan dife?'],
            ['number' => 129, 'subject' => 'Eske trinite se yon anseyman ki nan Labib?'],
            ['number' => 130, 'subject' => 'Te a ap rete la pou toutan'],
            ['number' => 131, 'subject' => 'Eske Dyab la egziste toutbonvre?'],
            ['number' => 132, 'subject' => 'Grasa rezireksyon, n ap pot laviktwa sou lanmo'],
            ['number' => 133, 'subject' => 'Eske sa nou kwe sou orijin lom gen enpotans?'],
            ['number' => 134, 'subject' => 'Eske kretyen yo dwe obseve saba?'],
            ['number' => 135, 'subject' => 'Lavi ak san se bagay ki sakre'],
            ['number' => 136, 'subject' => 'Eske Bondye dako pou n sevi ak imaj nan adorasyon n ap ba l?'],
            ['number' => 137, 'subject' => 'Eske mirak Bib la rapote yo te fet vre?'],
            ['number' => 138, 'subject' => 'Annou viv avek bonsans nan yon monn deprave'],
            ['number' => 139, 'subject' => 'Cheche gen sajes Bondye nan monn sa a ki met konfyans li nan lasyans'],
            ['number' => 140, 'subject' => 'Jezi Kris se nouvo Chef te a'],
            ['number' => 141, 'subject' => 'Ki le limanite ap sispann jemi?'],
            ['number' => 142, 'subject' => 'Rezon ki fe nou dwe cheche pwoteksyon Jewova'],
            ['number' => 143, 'subject' => 'Annou mete konfyans nou nan Bondye tout konsolasyon an'],
            ['number' => 144, 'subject' => 'Yon kongregasyon ki fidel ki soumet anba otorite Kris'],
            ['number' => 145, 'subject' => 'Kiyes ki tankou Jewova, Bondye nou an?'],
            ['number' => 146, 'subject' => 'Annou sevi ak fomasyon nou resevwa yo pou nou louwe Jewova'],
            ['number' => 147, 'subject' => 'Ann met konfyans nou nan pouvwa Jewova genyen pou l sove nou'],
            ['number' => 148, 'subject' => 'Eske w konsidere lavi menm jan ak Bondye?'],
            ['number' => 149, 'subject' => 'Eske w ap mache ak Bondye?'],
            ['number' => 150, 'subject' => 'Eske Bondye vreman reyel pou ou?'],
            ['number' => 151, 'subject' => 'Jewova se “yon kote ki wo pou pwoteje” pep li'],
            ['number' => 152, 'subject' => 'Vre Amagedon an: poukisa l ap fet e ki le?'],
            ['number' => 153, 'subject' => 'Annou toujou kenbe ‘jou ki bay lakrentif la’ nan lespri nou!'],
            ['number' => 154, 'subject' => 'Le yo peze gouvenman lezom yo nan balans, ki sa yo jwenn?'],
            ['number' => 155, 'subject' => 'Eske le pou yo jije Babilon nan rive?'],
            ['number' => 156, 'subject' => 'Eske Jou jijman an se yon jou ki bay laperez oubyen ki bay espwa?'],
            ['number' => 157, 'subject' => 'FasonvrekretyenyofeanseymanBondyeavinpibel'],
            ['number' => 158, 'subject' => 'Mete kouraj sou nou, epi fe Jewova konfyans'],
            ['number' => 159, 'subject' => 'Fason pou nou jwenn sekirite nan yon monn ki danjere'],
            ['number' => 160, 'subject' => 'Ann pwoteje idantite nou antanke kretyen!'],
            ['number' => 161, 'subject' => 'Poukisa Jezi te soufri e li te mouri?'],
            ['number' => 162, 'subject' => 'Nou delivre anba yon monn fenwa'],
            ['number' => 163, 'subject' => 'Poukisa nou dwe gen krent pou vre Dye a?'],
            ['number' => 164, 'subject' => 'Eske se Bondye ki Souvren an toujou?'],
            ['number' => 165, 'subject' => 'Prensip kiyes nou bay plis vale?'],
            ['number' => 166, 'subject' => 'Annou fe fas ak lavni avek lafwa ak kouraj'],
            ['number' => 167, 'subject' => 'Annou aji avek sajes nan yon monn ki ensanse'],
            ['number' => 168, 'subject' => 'Ou kapab santi w an sekirite nan monn sa a ki chaje ak pwoblem'],
            ['number' => 169, 'subject' => 'Poukisa nou dwe kite Bib la gide nou?'],
            ['number' => 170, 'subject' => 'Kiyes ki kalifye pou dirije limanite?'],
            ['number' => 171, 'subject' => 'Ou ka viv anpe depi kounye a e pou toutan!'],
            ['number' => 172, 'subject' => 'Ki jan Bondye we w?'],
            ['number' => 173, 'subject' => 'Selon Bondye, eske gen yon vre relijyon?'],
            ['number' => 174, 'subject' => 'Ki moun k ap kapab antre nan monn nouvo Bondye a?'],
            ['number' => 175, 'subject' => 'Ki sa k montre Bib la se Pawol Bondye toutbonvre?'],
            ['number' => 176, 'subject' => 'Ki le n ap gen lape ak sekirite toutbon an?'],
            ['number' => 177, 'subject' => 'Ki kote nou ka jwenn ed nan moman detres?'],
            ['number' => 178, 'subject' => 'Annou mache nan chemen entegrite a'],
            ['number' => 179, 'subject' => 'Ann rejte rev monn sa a e ann kontinye cheche reyalite Wayom nan'],
            ['number' => 180, 'subject' => 'Rezon ki fe esperans rezireksyon an dwe reyel pou nou'],
            ['number' => 181, 'subject' => 'Eske lafen an pa pi pre pase sa n panse?'],
            ['number' => 182, 'subject' => 'Sa Wayom Bondye a ap fe pou nou kounye a'],
            ['number' => 183, 'subject' => 'Pa ret ap gade bagay ki pa vo anyen!'],
            ['number' => 184, 'subject' => 'Eske lanmo mete fen nan tout bagay?'],
            ['number' => 185, 'subject' => 'Ki enfliyans laverite gen sou lavi w?'],
            ['number' => 186, 'subject' => 'Annou Ini Ak Pèp Bondye A Ki Gen Kè Kontan'],
            ['number' => 187, 'subject' => 'Annou Ini Ak Pèp Bondye A Ki Gen Kè Kontan'],
            ['number' => 188, 'subject' => 'Èske W Mete Konfyans Ou Nan Jewova?'],
        ];

        $admin = User::first();
        $ht = Locale::where('code', 'ht')->first();

        foreach ($ht_talks as $ht_talk) {
            $talk = new Talk();
            $talk->number = $ht_talk['number'];
            $talk->createdBy()->associate($admin);
            $talk->updatedBy()->associate($admin);
            $talk->save();

            $talk_subject = new TalkSubject();
            $talk_subject->subject = $ht_talk['subject'];
            $talk_subject->talk()->associate($talk);
            $talk_subject->locale()->associate($ht);
            $talk_subject->createdBy()->associate($admin);
            $talk_subject->updatedBy()->associate($admin);
            $talk_subject->save();
        }
    }
}
