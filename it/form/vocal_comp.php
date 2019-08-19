<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes Vocales Composées";
$page_description = "Formes Vocales Composées";
$page_keywords = "musique, arabe, formes, qawaleb, Il Dawr, Il Muwashah, Il Qadd, La Taqtuqa, L'ughniya, La Qasida, Il Monologo, Il Duetto, Il Dulab";
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
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Formes</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formes Vocales Composées</h1>
                        <h3>Il Dawr, Il Muwashah, Il Qadd, La Taqtuqa, L'ughniya, La Qasida, Il Monologo, Il Duetto, Il Dulab</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Formes</a>
                    <div class="clearfix"></div>

                    <p>Les formes vocales composées sont au centre de la musique arabe: celle-ci est en effet essentiellement une tradition vocale.</p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>Il Muwashah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Muwashah</a>
                    </div>
                    <p>
                        Il Muwashah (<em>Muwashahat</em> au pluriel) est une forme vocale complexe basée sur des poèmes arabes classiques de l'Andalousie (ce pourquoi les Muwashahat sont parfois qualifiés d'Andalous même si les mélodies ont été composées dans la région se situant entre la Syrie et l'Egitto et qu'ils ne sont apparus que depuis un ou deux siècles).
                    </p>
                    <p>
                        Les Muwashahat sont souvent composés sur des cycles rythmiques impairs et complexes (voir <a href="../iqaa.php">iqa‘at</a>), en partant de 5/4, à 7/4, 7/8, 10/8, 11/8, 13/8, 17/8, et ainsi de suite. Les mélodies des Muwashahat sont complexes, souvent syncopées et basées sur ces iqa'at.
                    </p>
                    <p>
                        Un Muwashah est traditionnellement interprété par un <em>moutreb</em> (chanteur principal) et un ensemble qui inclus des choristes. Le moutreb peut prendre une section composée et la répéter plusieurs fois, chaque fois avec une improvisation différente ou une modulation vers un autre <a href="../maqam.php">maqam</a> (cette pratique est nommée tafrid). Ces improvisations en solo sont entrecoupées de la mélodie centrale composée, chantée par les choristes. </p>

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
                                    <span>Enregistrement de Muhammad Khayri chantant le <strong>Muwashah Mala al-Kasat</strong>dans le <a href="../maqam/rast.php">Maqam Rast</a> (musique de Muhammad 'Uthman).</span>
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
                                <span>Enregistrement de Sabah Fakhri chantant le <strong>Muwashah Imla li al-Aqdaha</strong> dans le <a href="../maqam/bayati.php">Maqam Bayati</a>.</span>
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
                                    <b>Hassan al-Haffar Wasla</b>
                                    <span>Enregistrement de Hassan al-Haffar chantant une <a href="#wasla">wasla</a> de Mouashahat en <a href="../maqam/nahawand.php">Maqam Nahawand</a>, tous composés par ‘Omar al-Batsh.</span>
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
                    <p> Il Qadd (<em>qoudoud</em> au pluriel) est une chanson traditionnelle simple et légère qui est apparue à Alep (Siria). Les <em>qoudoud</em> sont généralement joués à la fin d'une wasla, après des pièces plus lourdes comme l'adwar, les qasa'id ou les muwashahat. Les paroles des <em>qoudoud</em> sont en dialecte aleppin (ou des fois en dialecte égyptien) et sont très faciles d'accès, terre à terre et facile à mémoriser.
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
                                    <b>Muhammad Khayri - suite de Qoudoud</b>
                                    <span>A la suite d'un <a href="improv.php#mawwal">Mawwal Baghdadien</a>, Muhammad Khayri chante les Qoudoud <strong>Awwal ‘Ishrit Mahboubi</strong>, <strong>Zaman Zaman</strong> et <strong>Ah Ya Hilou</strong> en <a href="../maqam/bayati.php">Maqam Bayati</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>The Dawr</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Dawr</a>
                    </div>
                    <p>
                        Il Dawr (<em>Adwar</em> au pluriel) est une forme vocale composée égyptienne qui s'est développée au tournant du 19<sup>ième</sup> siècle et a continué à l'être jusqu'aux années 1930. Le dawr est difficile à composer, à interpréter et à chanter. Il a été le centre de la <a href="#wasla">wasla</a> pendant une longue période. Les paroles du dawr sont toujours en dialecte égyptien.
                    </p>
                    <p>
                        Le <em>dawr</em> commence en général par un <a href="instr_comp.php#dulab">Dulab</a> suivi de plusieurs sections vocales, elles-mêmes suivies du "Ahat" (une section où le chanteur et les choristes échangent des mélodies sur le mot "Ah", en appels et réponses).
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
                                    <span>Sou'ad Muhammad (Lebano) interprète le D<strong>Dawr Inta Fahem</strong> dans le <a href="../maqam/huzam.php">Maqam Huzam</a>, composé par Zakaria Ahmad.</span>
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
                                    <b>Dawr Ahibb Ashoufak Kulli Yom (1931)</b>
                                    <span>Muhammad Abdel Wahab interprète le <strong>Dawr Ahibb Ashoufak Kulli Yom</strong> (1931), en <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
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
                                    <b>Dawr Dayya‘ti Moustaqbal Hayati (1914)</b>
                                    <span>Sabah Fakhri interprète le <strong>Dawr Dayya'ti Moustaqbal Hayati</strong> en <a href="../maqam/bayati_shuri.php">Maqam Bayati Shuri</a> (1914, musique de Sayyed Darwish).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>The Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Taqtuqa</a>
                    </div>
                    <p> La Taqtuqa (<em>Taqatiq</em> au pluriel) est la chanson standard arabe de 3-4 minutes et comprend plusieurs couplets et un refrain qui se répète. Les Taqatiq sont en général dans un <a href="../iqaa.php">iqa‘a</a> simple et bien connu comme le <a href="../iqaa/maqsum.php">Iqa‘ Maqsum</a> et ont des paroles accessibles et une mélodie simple, facilement mémorisable et chantable.
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
                                    <span>La chanteuse égypyienne Leila Murad interprète la tqatouqa <strong>Hayrana Leh</strong> en <a href="../maqam/rast.php">Maqam Rast</a> (1930), composée par Daud Husni.</span>
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
                                    <span>La chanteuese libanaise Sabah interprète la taqtouqa <strong>Ya Dala‘ Dalla‘</strong> en <a href="../maqam/rast.php">Maqam Rast</a> (1930, composée par Farid al-Atrach).
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
                                    <span>La chanson <strong>Min Azzibak</strong> de Muhammad Adbel Wahab dans le <a href="../maqam/rast.php">Maqam Rast</a>(années 1930).</span>
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
                                    <b>Waraqou el-Asfar</b>
                                    <span>La taqtouqa de la chanteuse libanaise Fairouz <strong>Waraqou el-Asfar</strong> en <a href="../maqam/rast.php">Maqam Rast</a>, composée par Philemon Wehbe.</span>
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

                    <p>Explorez d'autres groupes de formes:</p>
                    <ul>
                        <!-- <li><a href="vocal_comp.php">Formes Vocales Composées</a></li> -->
                        <li><a href="instr_comp.php">Formes Composées Instrumentales</a></li>
                        <li><a href="ottoman.php">Formes Instrumentales Ottomanes</a></li>
                        <li><a href="improv.php">Formes Improvisées</a></li>
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
