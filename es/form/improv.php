<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Improvisadas";
$page_description = "Formas Improvisadas";
$page_keywords = "Las Formas Musicales Árabes, Formas Improvisadas, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "en/form/improv.php";
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
                        <h1>Formas Improvisadas</h1>
                        <h3>El Taqsim, Los Layali, El Mawwal y La Qasida Improvisada</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <div class="clearfix"></div>

                    <p>
                        Las formas improvisadas son el vehículo más cerca/útil por un <em>mutrib</em> (cantante) o un músico para conectar con su audiencia mientras está explorando y trabajando con el <em>sayr</em> de un <a href="../maqam.php">maqam</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Los Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Layali</a>
                    </div>
                    
                    <p>
                        La forma Layali es una forma vocal sola, abajo de la frase “Ya Layl Ya ‘Ayn” (Ay Noche, Ay Ojos), donde “layali” es la palabra árabe plural de la palabra “layl.” Es una frase tradicional que no tiene que ver con la definición literal sino que ha trasformado un “relleno” vocal y un vehículo para la ornamentación vocal.
                    </p>
                    <p>
                        Los Layali puede estar solo, aunque es más común que se usa como preludio a la próxima forma vocal (como Mawwal, Qasida o también una <a href="vocal_comp.php">forma vocal compuesta</a>). En ese caso se sirve como calentamiento y se facilita la inmersión del cantante en el <a href="../maqam.php">maqam</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Kadni el-Hawa</b>
                                    <span>La grabación de Marie Jubran del <a href="vocal_comp.php#dawr">Dawr</a> <strong>Kadni el-Hawa</strong> (música de Muhammad ‘Uthman) empieza con un taqasim <a href="../instr/qanun.php">qanun</a> y está seguida por layali en el <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Taqtuqa Leh Ya Banafseg</b>
                                    <span>La grabación de <strong>Taqtuqa Leh Ya Banafseg</strong> de Saleh Abdel Hay (música de Riyad al-Sunbati) es una <a href="vocal_comp.php#wasla">Wasla</a> larga la cual empiece con un Taqsim de <a href="../instr/oud.php">Oud</a>, un <a href="ottoman.php/samai">Sama‘i</a>, un <a href="../instr/qanun.php">qanun</a> Taqsim, y un resumen del taslim Sama’i, luego un <em>Layali</em>, todo situado en <a href="../maqam/rast.php">Maqam Rast</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Khayri - Layali</b>
                                    <span>El cantante alepano Muhammad Khayri empieza su <a href="vocal_comp.php#wasla">Wasla</a> en el <a href="../maqam/rast.php">Maqam Rast</a> con un layali antes que procede a una <a href="#qasida">qasida improvisada</a>, luego <a href="vocal_comp.php#qadd">Qudud</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>The Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Mawwal</a>
                    </div>
                    
                    <p>
                        El Mawwal (el plural <em>Mawawil</em>) es una improvisación vocálica y sola de un poema árabe y coloquial. Por ejemplo, el poema podría estar en los dialectos egipcio, libanés, sirio, o iraquí. Como con las otras formas de la improvisación vocal, el mawwal es un vehículo para el <em>sayr</em> del <a href="../maqam.php">maqam</a>, también para la voz bella del cantante y la técnica de la ornamentación.
                    </p>
                    <p>
                        Un tipo del mawwal muy importante es el <strong>Mawwal Bagdadi</strong>,” también llamado como <em>Sab‘awi</em> (de <em>sab‘a</em> que significa siete) porque tiene siete líneas que riman como A, A, A, B, B, B, A. El Mawwal Bagdadi es muy popular en el repertorio de Alepo, al lado de <a href="vocal_comp.php#muwashah">Muwashahat</a> y de los <a href="vocal_comp.php#qadd">Qudud</a>.
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
                                    <b>Sadduk ‘Anni el-‘Ida</b>
                                    <span>
                                        El cantante alepano Muhammad Khayri empieza su <a href="vocal_comp.php#wasla">Wasla</a> en el <a href="../maqam/bayati.php">Maqam Bayati</a> con un <a href="ottoman.php/samai">Sama‘i</a>, seguido por Mawwal <strong>Mawwal Sadduk ‘Anni el-‘Ida</strong>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=8MMxY_CIi_I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/8MMxY_CIi_I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span>El Mawwal <strong>Ashki Li Min el-Hawa</strong> en el <a href="../maqam/kurd.php">Maqam Kurd</a> de Muhammad Abdel Wahab (1931).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2iMNi2qeA7w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2iMNi2qeA7w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Min Youm Firgak</b>
                                    <span>El Mawwal Baghdadi <strong>Min Youm Firgak</strong> de Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida Improvisada</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Qasida</a>
                    </div>
                    
                    <p> 
                        La Qasida (el plural <em>Qasa'ed</em>) es un poema métrico en el árabe clásico. Puede ser utilizado en una forma compuesta (ver <a href="vocal_comp.php#qasida">la qasida compuesta</a>) o, en este caso, empleando una forma improvisada. La qasida improvisada es la misma que un mawwal de la manera que usa un <em>sayr</em> del <a href="../maqam.php">maqam</a>, y los recursos del cantante.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Man Yara Admu‘i</b>
                                    <span>Qasida <strong>Ya Man Yara Admu‘i</strong> de Muhammad Khayri en el <a href="../maqam/rast.php">Maqam Rast</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qul Lil-Maliha</b>
                                    <span>La Qasida <strong>Qul Lil-Maliha</strong> de Sabah Fakhri en el <a href="../maqam/huzam.php">Maqam Huzam</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>El Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Taqsim</a>
                    </div>
                    
                    <p>
                        El Taqsim (el plural <em>Taqasim</em>) es una improvisación instrumental guiada por una marca de referencia tradicional que sigue muy cercana al <em>sayr</em> de un <a href="../maqam.php">maqam</a> (incluyendo la entonación, las frases y modulación). También demuestra la belleza del instrumento, sus posibilidades de la ornamentación, y los recursos, la técnica y la voz personal del realizador.
                    </p>
                    <p> 
                        Tiene que seguir un arco narrativo y consiste en unas secciones separadas de unas mini-cadencias y las pausas breves. Puede ser una obra sola o puede ser dentro de una canción o una <a href="vocal_comp.php#wasla">wasla</a>.
                    </p>
                    <p> 
                        El instrumento más popular y conocido del <em>taqsim</em> es el <a href="../instr/oud.php">oud</a>, junto con el <a href="../instr/violin.php">violin</a>, <a href="../instr/nay.php">nay</a> y <a href="../instr/qanun.php">qanun</a>. Los instrumentos arabizados como el <a href="../instr/accordion.php">acordeón</a> también puede ser utilizados para un <em>taqsim</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Aboud Abdel ‘Al</b>
                                    <span>Taqsim de <a href="../instr/violin.php">Violin</a> en el <a href="../maqam/bayati.php">Maqam Bayati</a> de Aboud Abdel ‘Al, anteriores de <a href="../ottoman.php#samai">Sama‘i</a> Bayati, Ibrahim al-’Aryan.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Amer Ammuri</b>
                                    <span>Taqsim de <a href="../instr/oud.php">Oud</a> de Amer Ammuri (Siria) en el <a href="../maqam/huzam.php">Maqam Huzam</a> durante un concierto de Sabah Fakhri.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros grupos de formas:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formas Vocálicas Compuestas</a></li>
                        <li><a href="instr_comp.php">Formas Compuestas Instrumentales</a></li>
                        <li><a href="ottoman.php">Formas Otomanos</a></li>
                        <!-- <li><a href="improv.php">Formas Improvisadas</a></li> -->
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
