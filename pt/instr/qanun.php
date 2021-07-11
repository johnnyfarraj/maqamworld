<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Qanoun";
$page_description = "O Qanoun";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, arabic violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/qanun.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Qanoun</h1>
                        <h3>Uma Cítara de Cordas Pinçadas</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/qanun.jpg" alt="O Qanoun">
                        <span>Qanun sírio fabricado por Bashir Bij. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qanun.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qanoun</a>
                    </div>

                    <!-- TODO The qanun’s origins are traced back to ancient Greece and Pythagoras or the Egyptian harp. It takes its name from the ancient Greek word ‘κανών’, which means “rule”. Also, it appears in Byzantium with the name “psaltirion”. 
                    -->
                    <p>O Qanun é um descendente da antiga harpa egípcia. Desempenha um papel fundamental na música árabe desde o século X. A palavra <em>qanun</em> significa "lei" em árabe, e a palavra existe em português na forma de "cânone". Este nome provavelmente foi dado ao qanun porque é o instrumento que estabelece o tom para outros instrumentos e cantores.
                    </p>
                    <p>O corpo do qanun consiste em uma placa de madeira em forma de trapézio sobre a qual 81 cordas são esticadas em grupos de três, com 24 cordas agudas compostas por três cordas para cada nota. O instrumento é apoiado sobre o colo do músico ou sobre uma pequena mesa. As cordas do qanun são dedilhadas com dois plectros, um plectro preso ao dedo indicador de cada mão. Uma longa ponte no lado direito do instrumento repousa sobre janelas cobertas de couro de cabra (ou peixe) que transportam a ressonância para a caixa. No lado esquerdo, cada conjunto de cordas atravessa uma série de pequenas alavancas de latão que são usadas para fazer mudanças microtonais na afinação.
                    </p>
                    <p>Como o qanun inclui apenas 8 notas por oitava, o instrumentista inicialmente regula as alavancas para criar a escala do <a href="../maqam.php">maqam</a> inicial. Quando o instrumentista precisa modular para outro <a href="../maqam.php">maqam</a>, ele ou ela precisa girar algumas alavancas para frente e para trás com a mão esquerda enquanto toca com a mão direita. Uma modulação rápida também pode ser obtida usando a unha do polegar esquerdo para subir temporariamente a afinação de algumas cordas.
                    </p>

                     <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=fZPY3or3D-Y&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/fZPY3or3D-Y/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Muhammad Abdu Saleh</b>
                                    <span>Instrumentista de Umm Kulthum por décadas, Muhammad Abdu Saleh (Egito) em um medley de suas canções mais conhecidas</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IUMC6-OHp1I&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IUMC6-OHp1I/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Muhammad ‘Abdu Saleh</b>
                                    <span>Muhammad ‘Abdu Saleh (Egito) em um Taqsim no Qanun no <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=QqLcPLu6PXc&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/QqLcPLu6PXc/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Abdel Fattah Mansi</b>
                                    <span>Abdel Fattah Mansi (Egito) toca a canção <strong>Ana Fi-ntizarak</strong> (1943, música de Zakariya Ahmad), de Umm Kulthum</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DJnoomttU9Y&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DJnoomttU9Y/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Abdel Halim Nuwayra</b>
                                    <span>Abdel Halim Nuwayra (Egito), diretor musical do Arabic Music Ensemble, toca um Taqsim no Qanun no <a href="../maqam/bayati.php">Maqam Bayati</a>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                   <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GS9v3r3WDro&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GS9v3r3WDro/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Abraham Salman</b>
                                    <span>Abraham Salman (Iraque) em um Taqsim no Qanun no <a href="../maqam/rast.php">Maqam Rast</a>, do seu CD <strong>Saltanah</strong> (1998)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos tradicionais:</p>
                    <ul>
                        <li><a href="oud.php">O Oud</a></li>
                        <li><a href="nay.php">O Nay</a></li>
                        <li><a href="violin.php">O Violino Árabe</a></li>
                        <li><a href="buzuq.php">O Buzuq</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
