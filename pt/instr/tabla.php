<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "A Tabla";
$page_description = "A Tabla";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/tabla.php";
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
                        <h1>A Tabla</h1>
                        <h3>Também chamada Dirbakki ou Darbuka</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="A Tabla">
                        <span>Tabla feita de alumínio com pele de plástico da Gawharet El-Fan, Egito. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Tabla</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Dirbakki</a>
                    </div>

                    <p>A Tabla (também chamada de "Dirbakki" nos dialetos levantinos ou "Darbuka" nos países ocidentais) é um tambor em forma de cálice com uma pele fixada em um dos lados.
                    </p>
                    
                    <p>As tabla-s tradicionais são feitas de argila e têm pele de peixe ou cabra colada e presa firmemente com um sistema de fios tecidos. Tabla-s modernas têm um corpo de alumínio com uma pele de plástico substituível e ajustável (Mylar).
                    </p>
                    
                    <p>A tabla é um instrumento muito utilizado na música folclórica e no pop, e é especialmente popular no gênero musical para Dança do Ventre. É usada até certo ponto em gêneros mais clássicos.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Hossam Ramzi</b>
                                    <span>O veterano derbakista egípcio Hossam Ramzy fala sobre o instrumento em uma entrevista na Analogue to Digital Music Expo de 2013
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=KmnkOfE6G58">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/KmnkOfE6G58/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Sa‘id al-Artist</b>
                                    <span>O mestre egípcio da tabla e professor Sa'id al-Artist com seu conjunto de percussão
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos de percussão:</p>
                    <ul>
                        <li><a href="riqq.php">O Riqq</a></li>
                        <!--
                        <li><a href="tabla.php">A Tabla</a></li>
                        -->
                        <li><a href="tabl_baladi.php">O Tambor de Aldeia</a></li>
                        <li><a href="daff.php">O Daff</a></li>
                        <li><a href="mazhar.php">O Mazhar</a></li>
                        <li><a href="katim.php">O Katem</a></li>
                        <li><a href="sagat.php">As Sagat</a></li>
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
