<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Forme per Composizioni Vocali";
$page_description = "Forme per Composizioni Vocali";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, qawaleb, Il Dawr, Il Muwashah, Il Qadd, La Taqtuqa, L'Ughniya, La Qasida, Il Monologo, Il Duetto, Il Dulab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "it/form/vocal_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Forme per Composizioni Vocali</h1>
                        <h3>Il Dawr, Il Muwashah, Il Qadd, La Taqtuqa, L'Ughniya, La Qasida, Il Monologo, Il Duetto</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <div class="clearfix"></div>

                    <p>Le forme di composizioni vocali sono il pane e il burro della musica araba, vista la grande tradizione vocale.
                    </p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>Il Muwashah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Muwashah</a>
                    </div>
                    
                    <p>Il Muwashah (plurale <em>Muwashahat</em>) è una forma vocale complessa basata sulla forma dei poemi classici arabi dell' Andalusia (i muwashahat sono a volte qualificati come andalusi anche se le loro melodie arrivano dalla Siria all'Egitto e risalgono a uno o due secoli fa).
                    </p>
                    
                    <p>I Muwashahat usano spesso ritmi dispari e complessi (leggi <a href="../iqaa.php">iqa‘at</a>) partendo dal 5/4, al 7/4, 7/8, 10/8, 11/8, 13/8, 17/8 e così via. Le melodie dei muwashahat sono intricate, spesso sincopate e influenzano questi iqa‘at.
                    </p>
                    
                    <p>La tradizione è quella di eseguire un muwashshah da un <em>mutreb</em> (cantante principale) e da un gruppo che include i coristi. Il mutreb può prendere una sezione e ripeterla più volte, ogni volta con una differente improvvisazione o modulazioni di <a href="../maqam.php">maqam</a> (questa pratica è chiamata tafrid). Questa improvvisazione è alternata ai cantanti di supporto che cantano la melodia originale.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=eK6iCYSuaKI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/eK6iCYSuaKI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muwashah Mala al-Kasat</b>
                                    <span>Muwashah Mala al-Kasat registrata da Muhammad Khayri sul <strong>Muwashah Mala al-Kasat</strong> (musica di Muhammad ‘Uthman).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FIbZbvU7UZ8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FIbZbvU7UZ8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muwashah Imla li al-Aqdaha</b>
                                    <span><strong>Muwashah Imla li al-Aqdaha</strong> registrata da Sabah Fakhri sul <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=asf278QZx4E">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/asf278QZx4E/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Wasla di Hassan al-Haffar</b>
                                    <span><a href="#wasla">Wasla</a> di Muwashahat registrata da Hasan al-Haffar sul <a href="../maqam/nahawand.php">Maqam Nahawand</a>, tutte composizioni di Omar al-Batsh.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qadd" class="heading jins text-center full-width">
                        <h3>Il Qadd</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qadd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qadd</a>
                    </div>
                    <p> Il qadd (plurale <em>qudud</em>) è una canzone tradizionale leggera e semplice, nata ad Aleppo, Siria. I <em>qudud</em> sono solitamente eseguiti alla fine del wasla, dopo pezzi pesanti come l'adwar, il qasa'id o i muwashahat. I testi dei <em>qudud</em> sono in dialetto informale di aleppo (a volte in egiziano) e sono molto accessibili, pratici e facili da memorizzare.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Khayri - seguente di Qudud</b>
                                    <span>Seguendo un <a href="improv.php#mawwal">Mawwal Baghdadi</a>, Muhammad Khayri canta Qudud <strong>Awwal ‘Ishrit Mahbubi</strong>, <strong>Zaman Zaman</strong> e <strong>Ah Ya Hilu</strong> sul <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>Il Dawr</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Dawr</a>
                    </div>
                    
                    <p>Il dawr (plurale <em>Adwar</em>) è una forma di composizione vocale egiziana nata all'inizio del XIX secolo e si diffuse fino al 1930. Il dawr è complesso da comporre, da suonare e faticoso da cantare. Fu il centro del <a href="#wasla">wasla</a> per molto tempo. Il testo del dawr è sempre in egiziano informale.
                    </p>
                    
                    <p>Il <em>dawr</em> solitamente inizia con un <a href="instr_comp.php#dulab">Dulab</a> seguito da sezioni vocali differenti e successivamente l'<em>Ahat</em> (sezione dove il cantante e i coristi si scambiano melodie con il testo "Ah",  in un chiamata e risposta).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UzVLpFNjsgs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UzVLpFNjsgs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Inta Fahem</b>
                                    <span>Su‘ad Muhammad (Libano) fa una cover del <strong>Dawr Inta Fahem</strong> su un <a href="../maqam/huzam.php">Maqam Huzam</a> composto da Zakariya Ahmad.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=iL71BmxC9Do">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/iL71BmxC9Do/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Ahibb Ashufak Kulli Yom (1931)</b>
                                    <span>Il <strong>Dawr Ahibb Ashufak Kulli Yom</strong> (1931) sul <a href="../maqam/nahawand.php">Maqam Nahawand</a> di Muhammad Abdel Wahab.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IrfNZ3oN0Yg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IrfNZ3oN0Yg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Dayya‘ti Mustaqbal Hayati (1914)</b>
                                    <span>Registrazione del dawr <strong>Dawr Dayya‘ti Mustaqbal Hayati</strong> di Sabah Fakhri sul <a href="../maqam/bayati_shuri.php">Maqam Bayati Shuri</a> (1914, musica di Sayyed Darwish).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>La Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Taqtuqa</a>
                    </div>
                    <p> la Taqtuqa (plurale <em>Taqatiq</em>) è uno standard di canzone araba di 3-4 minuti con differenti strofe e ritornelli ripetuti. I taqatiq solitamente usano degli <a href="../iqaa.php">iqa‘a</a> semplici come l'<a href="../iqaa/maqsum.php">Iqa‘ Maqsum</a> e hanno testi e melodie semplici da memorizzare e da cantare.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uO8eElxaaUY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uO8eElxaaUY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hayrana Leh (1930)</b>
                                    <span><strong>Hayrana Leh</strong> di Leila Murad sul <a href="../maqam/rast.php">Maqam Rast</a> (1930, composta da Dawud Husni).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_UxfjsIe6nI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_UxfjsIe6nI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Dala‘ Dalla‘ (1974)</b>
                                    <span><strong>Ya Dala‘ Dalla‘</strong> canzone di Sabah (Libano) sul <a href="../maqam/rast.php">Maqam Rast</a> (1974, musica di Farid al-Atrash).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TEAgQgA_mBA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TEAgQgA_mBA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Min Azzibak (c.1930s)</b>
                                    <span><strong>Min Azzibak</strong> canzone di Muhammad Abdel Wahab sul <a href="../maqam/rast.php">Maqam Rast</a> (circa 1930).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=a-7eto6cJq8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/a-7eto6cJq8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Waraqu el-Asfar</b>
                                    <span><strong>Waraqu el-Asfar</strong> canzone di Fairouz sul <a href="../maqam/rast.php">Maqam Rast</a>, composta da Philemon Wehbe.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="ughniya" class="heading jins text-center full-width">
                        <h3>L'Ughniya (canzone lunga)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ughniya.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Ughniya</a>
                    </div>
                    <p>L'Ughniya (plurale <em>aghani</em>) è una canzone lunga sviluppata durante la metà del XX secolo. L' ughniya può durare fino a un'ora durante i concerti e ha una lunga introduzione (vedi <a href="instr_comp.php#muqaddima">la muqaddima</a>) e diverse sezioni con modulazioni di <a href="../maqam.php">maqam</a> complete. L' ughniya è eseguita solitamente da una grande orchestra insieme a dei cantanti molto famosi come Umm Kulthum, Abdel Halim Hafez e Warda.
                    </p>
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=723s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span><strong>Qari'at al-Fingan</strong> di Abdel Halim Hafez (1976, composizione di Muhammad al-Mugi).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida (composta)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qasida</a>
                    </div>
                    <p>La Qasida (plurale <em>Qasa'ed</em>) è il metro di un poema arabo calssico, e la forma della composizione utilizza questo poema come testo. La Qasida è solitamente eseguita da un cantante solista acoompagnato da un gruppo, e tende ad essere lunga ed elaborata per esaltare le abilità del cantante.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5z8LvG5tfOE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5z8LvG5tfOE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qasida al-Atlal (1966)</b>
                                    <span>La Qasida <strong>al-Atlal</strong> di Umm Kulthum (1966) composta da Riyad al-Sunbati.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>Il Monologo</h3>
                    </div>
                    <p> Il monologo è una composizione basata, vagamente, sull'aria dell'Opera. Era una forma molto popolare verso la metà del XX secolo. Il monologo è eseguito da un cantante accompagnato da un gruppo, non ha nessuna sezione ripetuta, il che vuol dire che continua ad introdurre nuove frasi e melodie dall'inizio alla fine.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=t-easvB208E">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/t-easvB208E/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Tuyur (1941)</b>
                                    <span><strong>Ya Tuyur</strong> monologo di Asmahan (1941) composto da Muhammad al-Qasabgi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>Il Duetto</h3>
                    </div>
                    <p>Il duetto è un pezzo composto per due cantanti, spesso un uomo e una donna, che cantano insieme o uno per volta. Il duetto era molto popolare all'inizio del XX secolo nei drammi e nei film. Il testo di un duetto tende ad essere romantico, drammatico e teatrale.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=is-xYmL9YVc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/is-xYmL9YVc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Din-Na‘im</b>
                                    <span><strong>Ya Din-Na‘im</strong> di Muhammad Abdel Wahab e Leila Murad composto da Muhammad Abdel Wahab, tratto dal film <strong>Yahya al-Hubb</strong> (1938).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=amjqJ_MGg0A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/amjqJ_MGg0A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Salam ‘Ala Hubbi wi Hubbak (1957)</b>
                                    <span><strong>Ya Salam ‘Ala Hubbi wi Hubbak</strong> di Farid al-Atrash and Shadia composto da Farid al-Atrash, tratto dal film <strong>Inta Habibi</strong> (1957).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>La Wasla</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/wasla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Wasla</a>
                    </div>
                    
                    <p> Il wasla (plurale <em>waslat</em>) è una forma che contiene altre forme che sono eseguite in modo consecutivo come fossero una singola forma, solitamente basate sullo stesso <a href="../maqam.php">maqam</a>. Un wasla corto può durare 5-10 minuti, mentre un wasla più lungo può arrivare fino a un'ora. I pezzi all'interno del wasla sono ordinati in modo che inizi in modo lento e definisca il maqam (spesso con pezzi strumentali) per poi presentare pezzi complessi e difficili da cantare. Il wasla finisce con un pezzo semplice e corto, creando così un arco esecutivo con un picco verso la sua metà.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8&t=1103s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Leh Ya Banafseg (1961)</b>
                                    <span>Un wasla di Saleh Abdel Hayy sul <a href="../maqam/rast.php">Maqam Rast</a> con un <a href="improv.php#taqsim">Taqsim</a> sull'<a href="../instr/oud.php">oud</a>, una parte di <a href="ottoman.php#samai">Sama‘i</a> Rast di Tatyos Effendi, un taqsim sul <a href="../instr/violin.php">violino</a>, <a href="improv.php#layali">Layali</a> accompagnato dal <a href="../instr/qanun.php">qanun</a>, e per finire la <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> <strong>Leh Ya Banafseg</strong>  (1961), composto da Riyad al-Sunbati.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=AdAuadp8tq4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/AdAuadp8tq4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr ‘Ishna wi Shufna</b>
                                    <span> Un wasla sul <a href="../maqam/rast.php">Maqam Rast</a> del cantante egiziano ‘Abbas al-Bleidi che include un <a href="improv.php#taqsim">Taqsim</a> sull'<a href="../instr/oud.php">oud</a> di George Michel, una parte di <a href="ottoman.php#samai">Sama‘i</a> Rast di Tatyos Effendi, un taqsim sul <a href="../instr/violin.php">violino</a> di Muhammad al-‘Aqqad, Muwashah Atani Zamani, un taqsim sul <a href="../instr/qanun.php">qanun</a> di Fihmi ‘Awad, Layali, e per finire il <strong>Dawr ‘Ishna wi Shufna</strong> (composto da Muhammad ‘Uthman).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Esplora altri gruppi di forme:</p>
                    <ul>
                        <!-- <li><a href="vocal_comp.php">Forme per Composizioni Vocali</a></li> -->
                        <li><a href="instr_comp.php">Forme di Composizioni Strumentali</a></li>
                        <li><a href="ottoman.php">Forme Strumentali Composte Ottomane</a></li>
                        <li><a href="improv.php">Forme Improvisate</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
