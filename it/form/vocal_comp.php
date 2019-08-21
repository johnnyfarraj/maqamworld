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
                        <h3>Il Dawr, Il Muwashah, Il Qadd, La Taqtuqa, L'Ughniya, La Qasida, Il Monologo, Il Duetto, Il Dulab</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <div class="clearfix"></div>

                    <p>Le forme di composizioni vocali sono il pane e il burro della musica araba, vista la grande tradizione vocale.
                    </p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>Il Muwashah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Muwashah</a>
                    </div>
                    
                    <p>Il Muwashah (plurale <em>Muwashahat</em>) è una forma vocale complessa basato sulla forma dei poemi classici arabi dell' Andalusia (i muwashahat sono a volte qualificati come andalusi anche se le loro melodie arrivano dalla Siria all'Egitto e risalgono a uno o due secoli fa).
                    </p>
                    
                    <p>I Muwashahat sono spesso ritmi dispari e complessi (leggi <a href="../iqaa.php">iqa‘at</a>) partendo dal 5/4, al 7/4, 7/8, 10/8, 11/8, 13/8, 17/8 e così via. Le melodie dei muwashahat sono intricate, spesso sincopate e influenzano questi iqa‘at.
                    </p>
                    
                    <p>La tradizione è quella di eseguire un muwashshah da un <em>mutreb</em> (cantante principale) e da un gruppo che include i coristi. Il mutrib può prendere una sezione e ripeterla più volte, ogni volta con una differente improvvisazione o modulazioni di <a href="../maqam.php">maqam</a> (questa pratica è chiamata tafrid). Questa improvvisazione è alternata ai cantanti di supporto che cantano la melodia originale.
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
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qadd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qadd</a>
                    </div>
                    <p> Il qadd (plurale <em>qudud</em>) è una canzone tradizionale leggera e semplice, nata ad Aleppo, Siria. I <em>qudud</em> sono solitamente eseguiti alla fine del wasla, dopo pezzi pesanti come l'adwar, il qasa'id o il muwashahat. I testi dei <em>qudud</em> sono informali in dialetto di aleppo (a volte in egiziano) e sono molto accessibili, pratici e facili da memorizzare.
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
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Dawr</a>
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
                                    <span>Su‘ad Muhammad (Lebano) fa una cover del <strong>Dawr Inta Fahem</strong> su un <a href="../maqam/huzam.php">Maqam Huzam</a> composto da Zakariyya Ahmad.
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
                                    <span>Registrazione del dawr <strong>Dawr Dayya'ti Mustaqbal Hayati</strong> di Sabah Fakhri sul <a href="../maqam/bayati_shuri.php">Maqam Bayati Shuri</a> (1914, musica di Sayyed Darwish).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>La Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Taqtuqa</a>
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
                                    <span><strong>Ya Dala‘ Dalla‘</strong> canzone di Sabah (Lebano) sul <a href="../maqam/rast.php">Maqam Rast</a> (1974, musica di Farid al-Atrash).
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
                        <h3>L'ughniya (chanson longue)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ughniya.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Oughnia</a>
                    </div>
                    <p>La
                        Oughnia (<em>aghani</em> au pluriel) est une chanson longue, forme développée au milieu du 20<sup>ième</sup> siècle. L'ughniya peut durer jusqu'à une heure et a une longue introduction (voir <a href="instr_comp.php#muqaddima">la mouqaddima</a>) ainsi que plusieurs sections avec des modulations de <a href="../maqam.php">maqam</a> à maqam. L'ughniya est généralement interprétée par un grand orchestre et par des superstars telles que Oum Koulthoum, Adel Halim Hafez et Warda.
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
                                    <span>Le chanteur égyptien Adel Halim Hafez interprète <strong>Qari'at al-Fingan</strong> (1976, composée par Muhammad al-Mugi).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida (composta)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qasida</a>
                    </div>
                    <p> La Qasida (<em>Qassa'id</em> au pluriel) réfère à un poème en mètres en arabe classique ainsi qu'à la forme musicale composée utilisant ce type de poème et ses paroles. La qassida est en général interprétée par un chanteur soliste accompagné d'un ensemble. Cette forme tend à être longue et élaborée de manière à mettre en lumière le chanteur.
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
                                    <span>La Qasida <strong>al-Atlal</strong> (les ruines) interprétée par Oum Koulthoum, composée par Riyad al Soumbati en 1966.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>Il Monologo</h3>
                    </div>
                    <p> Le monologue est une forme de chanson composée inspirée de l'aria de la musique d'Opéra. Cette forme était populaire autour du milieu du 20<sup>ième</sup> siècle. Le monologue est interprété par un chanteur et un ensemble qui l'accompagne et n'a aucune section qui se répète, ce qui implique que de nouvelles phrases et mélodies sont ajoutées constamment du début à la fin du monologue.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=r3mrDcKXxd0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/r3mrDcKXxd0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Touyour (1941)</b>
                                    <span>Le monologue de Asmahan <strong>Ya Touyour</strong> (1941) composé par Muhammad al-Qassabgi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>Il Duetto</h3>
                    </div>
                    <p>Le duo est une pièce composée pour deux chanteurs, souvent un homme et une femme, qui chantent chacun leur tour ou en même temps. Cette forme était populaire surtout dans le théâtre musical et les films du début du 20<sup>ième</sup> siècle. Les paroles sont en général romantiques, dramatiques et théâtrales.
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
                                    <span>Muhammad Abdel Wahab et Leila Murad interprétant <strong>Ya Din-Na‘im</strong> de Muhammad Abdel Wahab, du film <strong>Yahya al-Hubb</strong> (1938).</span>
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
                                    <b>Ya Salam ‘Ala Houbbi wi Houbbak (1957)</b>
                                    <span>Farid al-Atrach et Chadia interprétant <strong>Ya Salam ‘Ala Houbbi wi Houbbak</strong>de Farid al-Atrach, du film <strong>Inta Habibi</strong> (1957).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>La Wasla</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wasla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Wasla</a>
                    </div>
                    <p> La Wasla (<em>waslat</em> au pluriel) est une forme qui contient plusieurs formes interprétées de façon consécutive en tant qu'unité, généralement dans un même <a href="../maqam.php">maqam</a>. Une wasla courte peut durer de 5 à 10 minutes alors qu'une wasla longue peut durer jusqu'à une heure. Les pièces composant la wasla sont organisées de manière à commencer lentement et à établir le maqam (souvent à l'aide de pièces instrumentales). Ensuite sont ajoutées les pièces vocales complexes et difficiles à chanter. La wasla se termine en général par des pièces courtes et simples. Tout ceci crée une pièce qui a la forme d'un arc avec un sommet au milieu.
                    </p>
                    <p>

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
                                    <span>Wasla de Saleh Abdel Hayy en <a href="../maqam/rast.php">Maqam Rast</a> avec <a href="improv.php#taqsim">Taqsim</a> de <a href="../instr/oud.php">oud</a>, une partie du <a href="ottoman.php#samai">Sama‘i</a> Rast de Tatyos Effendi, un Taqsim au <a href="../instr/violin.php">violon</a>, des <a href="improv.php#layali">Layali</a> accompagnés au <a href="../instr/qanun.php">qanun</a> et, finalement, la <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> <strong>Leh Ya Banafseg</strong> (1961), composée par Riyad al-Sunbati.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=W0yIIR0GxDA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/W0yIIR0GxDA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr ‘Ishna wi Shoufna</b>
                                    <span> Une wasla en <a href="../maqam/rast.php">Maqam Rast</a> par le chanteur égyptien 'Abbass al-Bleidi comprenant un <a href="improv.php#taqsim">Taqsim</a> au <a href="../instr/oud.php">oud</a> par George Michel, une partie du <a href="ottoman.php#samai">Sama‘i</a> Rast de Tatyos Effendi, un taqsim au <a href="../instr/violin.php">Violon</a> par Muhammad al-'Aqqad, le Muwashah Atani Zamani, un taqsim au <a href="../instr/qanun.php">qanun</a> par Fihmi 'Awad, un Layali et finalement, le <strong>Dawr ‘Ishna wi Shoufna</strong> (composé par Muhammad 'Uthman).</span>
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
