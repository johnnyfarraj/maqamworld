<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Compuestas Instrumentales";
$page_description = "Formas Compuestas Instrumentales";
$page_keywords = "Las Formas Musicales Árabes, Las Formas Compuestas Instrumentales, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "en/form/instr_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formas Compuestas Instrumentales</h1>
                        <h3>El Dulab, La Maqtu‘a, La Muqaddima, La Tahmila, y El Darij</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <div class="clearfix"></div>

                    <p>
                        Las formas compuestas instrumentales no están tan extendidas o comunes como las <a href="vocal_comp.php">formas vocálicas compuestas</a> en la música árabe, ya que esa tradición es principalmente vocal. Así que, las actuaciones de música árabe puramente instrumental son raras. Sin embargo, la música instrumental complementa maravillosamente la música vocal y proporciona introducciones, transiciones e interludios esenciales, al mismo tiempo que muestra a los instrumentistas en el conjunto del cantante.
                    </p>

                    <div id="maqtua" class="heading jins text-center full-width">
                        <h3>La Maqtu‘a</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/maqtua.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Maqtu‘a</a>
                    </div>
                    <p> 
                        La Maqtu’a (literalmente una pieza) es una composición instrumental genérica. También es conocido como ma’zufa (tocado por un instrumento, como en vez de cantar). La forma <em>maqtu‘a</em> es muy popular en la música de Raqs Sharqi (baile del vientre).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=9sxZVdKGe48">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/9sxZVdKGe48/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zikrayati (1944)</b>
                                    <span>La composición instrumental de Muhammad al-Qasabji, <strong>Zikrayati</strong> (19440 en el <a href="../maqam/nahawand.php">Maqam Nahawand</a>, la grabación de la Orquesta Nacional Árabe (EE.UU.)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DwXurHF47j8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DwXurHF47j8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>La composición instrumental de Muhammad Abdel Wahab, <strong>‘Aziza</strong>, de la 1955 película <strong>‘Aziza</strong>).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NtkG3weZkwc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NtkG3weZkwc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tuta</b>
                                    <span>La composición instrumental de Farid al-Atrash, <strong>Tuta</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=jvdTH_mEcGk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/jvdTH_mEcGk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Layali Zaman</b>
                                    <span>La composición instrumental del violinista ‘Abdu Dagher, <strong>Layali Zaman</strong>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="muqaddima" class="heading jins text-center full-width">
                        <h3>La Muqaddima</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muqaddima.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Muqaddima</a>
                    </div>
                    <p> 
                        La Muqaddima significa literalmente una "introducción". Esta forma volvía a ser popular alrededor de la mitad del siglo XX cuando los compositores añadieron introducciones largas a la forma cancionera popular de <a href="vocal_comp.php#ughniya">Ughniya</a> (canción larga). <em>Muqaddimas</em> complicadas a veces duraron más de 5 minutos y tenían varias secciones, tanto como los modulaciones del <a href="../maqam.php">maqam</a> y los instrumentos solos.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ul4z6sLnXYY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ul4z6sLnXYY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Alf Leila wi Leila (1969)</b>
                                    <span>La introducción de la larga canción de Umm Kulthum, <strong>Alf Leila wi Leila</strong> (1969) compuesto de Baligh Hamdi. 
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=g1o5EdK2meI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/g1o5EdK2meI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim</span>
                                    <span>La introducción de la larga canción de Abdel Halim Hafez, <strong>Qari’at al-Fingan</strong> (1976) compuesto de Muhammad al-Mugi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ii0_uVzQ_44&t=917s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ii0_uVzQ_44/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fi Youm wi Leila (1978)</b>
                                    <span>La introducción de la canción larga de Warda, <strong>Fi Youm wi Leila</strong> (1978) compuesto de Muhammad Abdel Wahab.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dulab" class="heading jins text-center full-width">
                        <h3>El Dulab</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dulab.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Dulab</a>
                    </div>
                    <p> 
                        El Dulab es una composición corta que tiene y que introduce un <a href="../maqam.php">maqam</a>. Su nombre significa “rueda” en árabe porque la misma melodía está repetida muchas veces. El <em>dulab</em> podría ser un solo antes de una <a href="improv.php">improvisación</a> o podría ser la introducción a un <a href="vocal_comp.php#dawr">dawr</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n60D-Mnodms">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n60D-Mnodms/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dulab Kurd</b>
                                    <span>La Wasla de Sabah Fakhri en el <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> abre con un Dulab Kurd tradicional.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zxAYZFI1zio">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zxAYZFI1zio/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Inta Fahim</b>
                                    <span>Dawr <strong>Inta Fahim</strong> de Zakariya Ahmed abre con un solo repetición del Dulab, en el <a href="../maqam/huzam.php">Maqam Rahat al-Arwah</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="tahmila" class="heading jins text-center full-width">
                        <h3>La Tahmila</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tahmila.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Tahmila</a>
                    </div>
                    <p>
                        La Tahmila es una obra instrumental que combina a los refranes repetidos con versos que son parte-compuestos y parte-improvisados. Normalmente está tocada por un <em>takht</em> pequeño (conjunto pequeño tradicional) dónde cada músico toma giros para tocar el verso y el refrán está tocada por todo el conjunto.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=bmtF02i7Oh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/bmtF02i7Oh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tahmila Suznak</b>
                                    <span>Tahmila <a href="../maqam/suznak.php">Suznak</a> (la tahmila más conocida) grabación de Ahmad al-Hifnawi en el <a href="../instr/violin.php">violin</a>, George Michel en el <a href="../instr/oud.php">oud</a>, Mahmoud Effat en el <a href="../instr/nay.php">nay</a> y Hassan Anwar en el <a href="../instr/riqq.php">riq</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=9ZTIzWZrmW4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/9ZTIzWZrmW4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tahmila Saba</b>
                                    <span>El violinista Sami al-Shawwa, grabando ambos <em>tahmilas</em>, entre quién está la Tahmila en el <a href="../maqam/saba.php">Maqam Saba</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="darij" class="heading jins text-center full-width">
                        <h3>El Darij</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/darij.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Darij</a>
                    </div>
                    <p> 
                        La forma Darij (llamada formalmente <em>Sama‘i Darij</em>) es una composición instrumental simple nombrada por el <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darij (3/4)</a> lo que utiliza. Como <a href="ottoman.php">las formas de los instrumentos otomanos</a>, la composición <em>darij</em>, está anclado en un <a href="../maqam.php">maqam</a> principal que se presta su nombre , seguido por el nombre del compositor.
                    </p>
                    <p>
                        Las composiciones del <em>Darij</em> fueron extendidos en el mundo árabe antes del siglo XX, aunque ahora es raro que son realizados o compuestos.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n49RxJwqBT4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n49RxJwqBT4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Darij Bayati</b>
                                    <span>El darij más conocido es el que ha composado del violinista siriano Sami al-Shawwa en el <a href="../maqam/bayati.php">Maqam Bayati</a>. 
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rK-9pOupq6I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rK-9pOupq6I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Darij Hijaz</b>
                                    <span>Un <em>darij</em> muy conocido en el <a href="../maqam/hijaz.php">Maqam Hijaz</a> (por un compositor desconocido) grabado del violinista siriano Sami al-Shawwa en el año 1924.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros grupos de formas:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formas Vocálicas Compuestas</a></li>
                        <!-- <li><a href="instr_comp.php">Formas Compuestas Instrumentales</a></li> -->
                        <li><a href="ottoman.php">Formas Otomanos</a></li>
                        <li><a href="improv.php">Formas Improvisadas</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
