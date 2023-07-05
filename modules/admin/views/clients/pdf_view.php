<?php

use yii\helpers\Html;
use yii\grid\GridView;



$this->title='pdf view';
$this->params['breadcrumbs'][] = $this->title;

?>
<style>

*{
    font-family: 'Calibri Light'!important;
}
    .img{
        width: 120px;
        height: 80px;
        top: 15px;
    }
    fs10{
        font-size:10px;
    }

    .center{
        text-align: center;
    }
    .img{

        background-image: url("admin-files/images/marmara.png");
        background-repeat: no-repeat;
        background-size: contain;
        background-position: left top;
        margin: 0;

    }
    .marginn{
        margin-top: -100px!important;
    }


</style>
<!--<img class="img"  src="admin-files/images/marmara.png" alt="">-->
<div class="container marginn">
    <div class="img"></div>
    <div class="row ">
        <p style="font-size: 15px;font-weight: bold;text-align: center">ШАРТНОМА  № <?=$model->id?></p>
        <p style="text-align: center;font-size: 10px;">ЖИСМОНИЙ ШАХСЛАРГА ХИЗМАТ КЎРСАТИШ</p>
    </div>

    <div class="row ">
        <p style="font-size: 12px">
            Наманган шахри &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?=$model->created_at?>
        </p>
    </div>
    <div>
        <p style="font-size: 12px">
            “MARMARA TRAVEL NAMANGAN” Масъулияти чекланган жамияти бундан кейин “Агент” деб юритилади.
            Директор &nbsp;DJURAYEV XUSAN MAXMUDOVICH&nbsp;&nbsp; бир томондан Низом асосида&nbsp;&nbsp; харакат қилади &nbsp; ва фуқаро
             <?= $model->client_full_name?> кейинчалик “Ариза берувчи”
            деб юритилади (<?=$model->client_passport_series?> &nbsp;&nbsp;<?=$model->client_passport_number?>&nbsp;&nbsp; паспорт берилган санаси&nbsp;&nbsp; <?=$model->client_passport_given_date?>
            &nbsp;&nbsp;<?=$model->client_passport_given_by?>) бошқа томоннинг бундан кейин якка
            тартибда ёки жамоавий равишда томонлар деб аталадиган бўлса томонлар ушбу шартномани қуйидагича туздилар
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">ТАЪРИФЛАР</p>
        <p style="font-size: 12px">
            Саудия Арабистони элчихонасининг консуллик бўлимига виза олиш учун зарур хужжатларнинг  тўлиқ тўпламини тўплаш,
            топшириш, онлайн ариза шаклини тўлдириш, хужжатларни ва анкеталарни текшириш ва тахлил қилиш, консалтинг
            хизматларни фақат “Агент” томонидан амалга оширилади.
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">1.ШАРТНОМА МАЗМУНИ</p>
        <p style="font-size: 12px">
            1.1&nbsp;&nbsp; Ушбу шартномада белгиланган тартибда ва шартларда “Агент” “Ариза берувчи”га виза хизматини &nbsp; тақдим&nbsp;  этиш
            &nbsp; мажбуриятини &nbsp; олади&nbsp;  “Ариза берувчи”&nbsp;  “Агент”га ушбу хизмат учун &nbsp; Базавий хисоблаш миқдори 1&nbsp; (бир)баробар&nbsp;
            миқдорда&nbsp;  тўловни амалга &nbsp; ошириш мажбуриятини олади. Шартнома матнида “Ариза берувчи” кўрсатилган бўлса,
            у шунингдек, “Ариза берувчи”  манфаатларини кўзлаб иш тутадиган учинчи шахслар, унга хамрох бўлган шахслар,шу
            жумладан вояга етмаганлар ва бошқа шахсларни хам англатади.<br>
            1.2  &nbsp;  &nbsp;  Виза олиш учун хужжатларни тайёрлаш муддати ариза берувчилар сонига ва “Ариза берувчи”  ва учинчи шахслар томонидан тақдим этилган хужжатлар хажмига қараб “Агент” нинг тарифига мувофиқ хужжатлар тўпламини шошилинч шакллантириш муддати 1 дан 30 иш кунига тайёрланади.
            <br>
            1.3&nbsp;&nbsp;Консуллик йиғими “Агент” хизматлари нархига киритилмайди ва “Ариза берувчи” томонидан алохида тўланади. Саудия Арабистонига виза учун виза йиғими миқдори элчихона томонидан хорижий валютада белгиланади.“Агент”&nbsp;иш бошлашдан&nbsp; олдин “Ариза берувчи”&nbsp;га тўлов&nbsp;усуллари &nbsp;ва консуллик&nbsp; йиғими миқдори хақида ўзбек сўмида хабар беради.
            <br>
            1.4  Саудия Арабистонига визани кўриб чиқишнинг расмий шартлари “Агент”га боғлиқ эмас ва ўзгариши мумкин. Фақат Саудия Арабистони элчихонаси ваколатли шахсларнинг қарори билан (катталаштирилган ёки қискартирилган) барча аризаларни кўриб чиқилади.Индивидуал равишда  “Агент” визани кўриб чиқиш муддатига ва виза ходимининг қарорига таъсир ўтказа олмайди ва бунга хақли эмас.<br>
            1.5  “Ариза берувчи” томонидан Саудия Арабистони консуллик бўлимига хужжатларни топшириш санаси ва вақти белгиланади.Саудия Арабистонининг консуллик бўлими ва “Агент”дан мустақил.
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">2.ТОМОНЛАРНИНГ МАЖБУРИЯТЛАРИ ВА ХУҚУҚЛАРИ</p>
        <p style="font-size: 12px">
            “Ариза берувчи” <br>
            2.1 &nbsp;“Агент”га &nbsp;хужжатларнинг асл &nbsp;нусхаларини ёки нусхаларини &nbsp;тақдим&nbsp; этиш мажбуриятини олади. Электрон шаклда “Агент”нинг веб-сайтида жойлаштирилган рўйхатга мувофиқ хар бир аризачи учун тўлиқ хажмда&nbsp;&nbsp;хужжатлар&nbsp; рўйхати&nbsp; сўралган&nbsp; виза&nbsp; турига ва қонунчиликдаги ўзгаришларга қараб ўзгариши мумкин Саудия Арабистонига “Ариза берувчи” виза олиши учун хужжатларнинг асл нусхасини тақдим этиши керак.
            <br>
            2.2&nbsp;“Ариза берувчи”  “Агент”га&nbsp; тўлдирилган&nbsp; ва имзоланган&nbsp; сўровномани тақдим этиш мажбуриятини олади.анкетадаги хар бир мурожаат этувчи учун анкета чет элда полиция томонидан тергов остида бўлган мамлакатдан депортация қилиш ва виза анкетасини тўлдириш учун бошқа маълумотлар анкетаси “Ариза берувчи”  “Агент”га  виза режимининг бузилиши  судланганлик холатлари консуллик бўлимлари ёки давлат идоралари билан боғлиқ муаммолар тўғрисида хар қандай давлатга визалар беришдан бош тортишлар мавжудлиги тўғрисида ишончли маълумот беришга мажбурдир.
            <br>
            2.3 &nbsp;“Ариза берувчи” “Агент”га виза хизматини амалга ошириш учун зарур бўлган маблағларни тақдим этиши шарт.
            <br>
            “Агент”
            <br>
            2.4&nbsp;“Агент” Саудия Арабистони элчихоналари ва Саудия Арабистони консуллигининг Саудия Арабистони мигратция қонунчилиги қоидаларига мувофиқ хужжатларни тайёрлайди.
            <br>
            2.5 &nbsp;Хужжатларни&nbsp;&nbsp;&nbsp; тайёрлашда&nbsp;&nbsp;&nbsp; “Агент”&nbsp;&nbsp;&nbsp; учинчи&nbsp;&nbsp;&nbsp; шахслар&nbsp;&nbsp;&nbsp; билан&nbsp;&nbsp;&nbsp; масалан&nbsp;&nbsp;&nbsp; таълим&nbsp;&nbsp; муассасалари мехмонхоналар қариндошлар ва бошқа учинчи шахслар ва ташкилотлар билан ёзмайди ёки алоқа қилмайди.
            <br>
            2.6 &nbsp;“Агент” тўлиқ бўлмаган хужжатлар тўпламини қайтариб бермасдан “Ариза берувчи” га виза беришни рад этишга хақли.
            <br>
            2.7&nbsp;“Агент”  “Ариза берувчи”дан тўлиқ бўлмаган хужжатлар тўпламини қабул қилиши мумкин  “Агент” эса виза бериш рад этилган тақдирда барча жавобгарликдан озод қилинади.
            <br>
            2.8&nbsp;“Агент”  “Ариза берувчи” томонидан тўлиқ бўлмаган ёки нотўғри маълумотлар тақдим этилганлиги учун жавобгар эмас (қасддан ёки билмасдан)
            <br>
            2.9&nbsp;Агар “Ариза берувчи”  “Агент”га боғлиқ бўлмаган сабабларга кўра Саудия Арабистонига виза беришдан бош тортса яъни маълумотни яшириш ёки ошкор қилмаслик учун “Агент” жавобгар бўлмайди.(қасддан ёки билмасдан) &nbsp;&nbsp;Саудия&nbsp;&nbsp; Арабистони&nbsp;&nbsp; консуллигига&nbsp;&nbsp; виза&nbsp;&nbsp; учун&nbsp;&nbsp; тўлиқ&nbsp;&nbsp; бўлмаган&nbsp;&nbsp; хужжатлар&nbsp;&nbsp; тўпламини тақдим этиш хар қандай давлатга виза беришда рад этиш мавжудлиги.
            <br>
            2.10&nbsp;“Агент” виза ходимининг Саудия Арабистонига виза бериш хақидаги қарори учун жавобгар эмас. “Агент” Саудия Арабистони элчихонаси ёки консуллигида “Ариза берувчи”нинг хужжатларига етказилган зарар учун жавобгар эмас. “Агент”  Саудия Арабистони элчихонаси ёки консуллиги ходимлари томонидан хужжатларнинг ёқолиши учун жавобгар эмас  шунингдек курьерлик   хизмати орқали хужжатларни ёқотиш ва бузиш холатлари.
            “Агент”  Саудия Арабистони элчихонаси ёки консуллиги ходимлари томонидан тақдим этилган маълумотлар учун жавобгар эмас. Хам оғзаки&nbsp; хам&nbsp; электрон&nbsp; ва&nbsp; СМС&nbsp;&nbsp; хабарномаларни&nbsp;&nbsp; электрон тарқатиш орқали “Агент”  виза бериш масаласини кўриб чиқиш муддати шунингдек виза мухридаги хатолар ва виза шартларидаги хатолар ва Саудия Арабистони элчихонаси ёки консуллиги томонидан содир этилган бошқа харакатлар учун жавобгар эмас ва Саудия Арабистони консуллиги ходимлари.

        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">3. ХИЗМАТЛАРНИ КЎРСАТИШ ТАРТИБИ, ТЎЛОВ ШАРТЛАРИ</p>
        <p style="font-size: 12px">
            3.1&nbsp;Шартномани&nbsp;&nbsp; тузишда&nbsp;&nbsp; “Ариза берувчи”&nbsp;&nbsp; “Агент”нинг&nbsp;&nbsp; веб-сайтида&nbsp;&nbsp; кўрсатилган&nbsp;&nbsp; тариф&nbsp;&nbsp; бўйича хизматларни кўрсатишни бошлаши учун зарур бўлган тўловни амалга оширади. Ушбу шартнома бўйича барча турдаги тўловлар ўзбек сўмида амалга оширилади.
            <br>
            3.2&nbsp;“Агент”га тўлов ушбу шартномада кўрсатилган “Агент”нинг хисоб-китоб хисоб варағига нақд пул. пластик карта. пул маблағларини ўтказиш йўли билан амалга оширилади. Тўлов шартнома тузилган кундан бошлаб 3 банк иш куни ичида амалга оширилиши керак.
            <br>
            3.3&nbsp;“Ариза берувчи” томонидан тўлов кечиктирилган тақдирда  “Агент” шартномани бир томонлама бекор қилишга хақли.
            <br>
            3.4&nbsp;Тўлов мажбуриятлари “Агент”га маблағлар киритилган пайтдан бошлаб бажарилган хисобланади.
            <br>
            3.5&nbsp;“Агент” хизматларидан воз кечилган тақдирда “Агент”нинг пуллик хизматларининг нархи яъни пули қайтарилмайди.
            <br>
            3.6&nbsp;Виза олиш рад этилган тақдирда қўшимча хизматлар учун тўланган виза тўлови нархини шунингдек “Агент”нинг пуллик хизматлари нархини кўриб чиқишни кечиктириш ва қайтариб берилмайди.

        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">4. ШАРТНОМА МУДДАТИ</p>
        <p style="font-size: 12px">
            4.1&nbsp;Ушбу шартнома “Агент” ва “Ариза берувчи” томонидан имзоланган кундан бошлаб кучга киради ва бир йил давомида амал қилади.
            <br>
            4.2&nbsp;Шартномага киритилган барча ўзгартириш ва қўшимчалар  агар улар ёзма шаклда тузилган бўлса ва “Агент” ва “Ариза берувчи” томонидан ваколатли вакиллари томонидан имзоланган бўлса хақиқий хисобланади
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">5.ШАРТНОМАНИ ЎЗГАРТИРИШ ВА БЕКОР ҚИЛИШ</p>
        <p style="font-size: 12px">
            5.1&nbsp;Ушбу шартнома томонларнинг келишувига биноан ёки Ўзбекистон Республикасининг амалдаги қонунчилигида ёки ушбу шартномада назарда тутилган бошқа асосларга кўра ўзгартирилиши ёки бекор қилиниши мумкин.
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">6.ТОМОНЛАРНИНГ ЖАВОБГАРЛИГИ</p>
        <p style="font-size: 12px">
            6.1&nbsp;Тарафлар ўз зиммаларига олган мажбуриятларини бузганликлари учун Наманган хўжалик судида Ўзбекистон Республикаси қўнун хужжатларига мувофиқ жавобгар бўладилар
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">7.ФОРС МАЖОР</p>
        <p style="font-size: 12px">
            7.1&nbsp;Томонлар ушбу шартнома бўйича мажбуриятларини қисман ёки тўлиқ бажармаганлик учун жавобгарликдан озод қилинади.агар бу бажарилмаслиги ушбу шартнома тузилганидан кейин юзага келган форс-мажор холатларининг натижаси бўлса сув тошқинлари ёнғинлар зилзилалар ва бошқа табиий ходисалар каби фавқулодда вазиятлар шунингдек уруш харбий харакатлар хокимият органларининг таъқиқловчи хатти харакатлари ва давлат органларининг хатти харакатларини блокировка қилиш алоқа воситаларини бузиш ва ушбу шартноманинг амал қилиш муддати давомида томонлар олдиндан кўра олмаган ёки олдини ололмаган электр тармоқлари портлашлари.
            <br>
            7.2&nbsp;Ушбу шартноманинг 6.1 бандида кўрсатилган холатлар юзага келган тақдирда томон бу хақда бошқа томонни дархол ёзма равишда хабардор қилиши шарт хабарномада холатларнинг мохияти тўғрисидаги маълумотлар шунингдек ушбу холатлар мавжудлигини тасдиқловчи расмий хужжатлар ва иложи бўлса томонларнинг ушбу шартнома бўйича ўз мажбуриятларини бажариш қобилиятига таъсирини бахолаш.
            <br>
            7.3&nbsp;Ушбу шартноманинг 6.1 бандида назарда тутилган холатлар юзага келган тақдирда тараф томонидан мажбуриятларни бажариш муддати ушбу шартнома ушбу холатлар ва уларнинг оқибатлари амалда бўлган вақега мутаносиб равишда кечиктирилади

        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">8. ШАРТНОМА ШАРТЛАРИ</p>
        <p style="font-size: 12px">
            8.1 Ушбу шартнома ўзбек тилида икки нусхада тузилган бўлиб бир хил юридик кучга эга электрон ва факсимил мухр ва имзо учун қонуний кучга эга.
            <br>
            8.2  Шартномани имзолашдан олдин “Ариза берувчи” элчихона (консуллик) томонидан тақдим этилган талаблар тўғрисидаги маълумотлар билан танишди.вақтинча истиқомат қилувчи мамлакатлар виза бериш ва хорижий паспортларнинг амал қилиш муддати хорижий давлатларнинг консуллик муассасалари томонидан визалар бериш тартиби ва муддатлари.
        </p>
        <p style="text-align: center;font-size: 12px; font-weight: bold">9.ТОМОНЛАРНИНГ МАНЗИЛГОХЛАРИ ВА ИМЗОЛАРИ</p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;“АГЕНТ” &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;“АРИЗА БЕРУВЧИ”</p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;Номи: “MARMARA TRAVEL NAMANGAN” МЧЖ&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Фуқаро: <?=$model->client_full_name?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;“Истиқбол” МФЙ Тадбиркор лўчаси 7 пр 25 –уй &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Манзили:<?=$model->client_live_address?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;Х/р:  2020 8000 1055 4080 9001&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Паспорт рақами:  <?=$model->client_passport_series?><?=$model->client_passport_number?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;Банк:  АЖ “Асакабанк” Наманган филиали&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Берилган санаси:<?=$model->client_passport_given_date?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;МФО: 00231.     ИНН: 309 658 581 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ЖШШИР рақами:  <?=$model->client_passport_jshir_number?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;Телефонлар:  +99891 3534411; +99899 0036116 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Телефон рақами:  <?=$model->client_phone?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp;Директор:  __________________ X.M.Djurayev &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Фуқаро: _____________  <?=$model->client_full_name?></p>
        <p style="font-size: 10px">&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Имзо&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Имзо</p>

    </div>

</div>

