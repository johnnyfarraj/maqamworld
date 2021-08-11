<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Acordeão Árabe";
$page_description = "O Acordeão Árabe";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/accordion.php";
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
                        <h1>O Acordeão Árabe</h1>
                        <h3>Um Acordeão alterado para incluir quartos de tom</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="O Acordeão Árabe">
                        <span>Faruq Salama tocando acordeão na canção de Umm Kulthum <strong>Ya Msahharni</strong>, Cairo, 1971</span>
                    </div>

                    <p>O acordeão (ou acordeon) entrou na cena musical árabe no Egito no início do século XX, e foi originalmente usado sem qualquer alteração, para adicionar um tempero estrangeiro à música (por exemplo, em "<em>Sahirtu</em>" de Muhammad Abdel Wahab em 1935). Mais tarde, ele foi alterado para adicionar novas notas (os "quartos de tom") que lhe permitiam tocar muito mais escalas de <a href="../maqam.php">maqam</a> árabes com afinação suficientemente boa.
                    </p>
                    <p>O acordeão é extremamente popular nos gêneros <em>Raqs Sharqi</em> (dança do ventre) e <em>Sha‘bi</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_0JgmVgSa94&t=376s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_0JgmVgSa94/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Ya Msahharni</b>
                                    <span>Pioneiro no acordeão árabe, o egípcio Faruq Salama toca a introdução da canção <strong>Ya Msahharni</strong> de Umm Kukthum (1972, música de Sayyed Makkawi).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=qhFLg5RQjQk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/WLQD2L5TiTM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista com Faruq Salama</b>
                                    <span>Entrevista com Faruq Salama sobre sua experiência tocando o acordeão árabe na orquestra de Umm Kulthum.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=1nUqK5wLiME">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/1nUqK5wLiME/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fifi ‘Abdou</b>
                                    <span>Um clipe de dança com a bailarina egípcia Fifi ‘Abdou que inicia com um acordeão árabe.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oANW6M63pRE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oANW6M63pRE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ahmed ‘Adaweya</b>
                                    <span>De Ahmed ‘Adaweya, a canção <strong>Ya Hilu il-Malamih</strong> (no gênero egípcio <em>Sha‘bi</em>) acompanhado por uma bailarina.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://youtu.be/7f5a9BhGios?t=650s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7f5a9BhGios/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Elias Lammam</b>
                                    <span>A National Arab Orchestra (EUA) executa <strong>Kahramana</strong>, composição instrumental de Farid al-Atrash, em um arranjo em que o acordeão árabe figura ao lado de instrumentos árabes tradicionais.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <p>Explore outros instrumentos arabizados:</p>
                    <ul>
                        <!--
                       <li><a href="accordion.php">O Acordeão Árabe</a></li>
                        -->
                       <li><a href="guitar.php">A Guitarra Elétrica</a></li>
                       <li><a href="org.php">O Org Árabe</a></li>
                       <li><a href="keyboard.php">O Teclado Oriental</a></li>
                       <li><a href="piano.php">O Piano Árabe</a></li>
                       <li><a href="saxophone.php">O Saxofone</a></li>
                       <li><a href="trumpet.php">O Trompete</a></li>
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
