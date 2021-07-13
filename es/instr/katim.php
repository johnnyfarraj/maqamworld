<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Katem";
$page_description = "El Katem";
$page_keywords = "El Daf, El Katem, El Mazhar Egipcio, El Riq, Los Sagat, La Tabla, El Tabl Baladi";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/katim.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>El Katem</h1>
                        <h3>Un tambor de marco apoyador con sonido amortiguado</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katem">
                        <span>Un Katem con una cabeza de plástico que se puede afinar. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Katem</a>
                    </div>
                    
                    <p>
                        El Katem (del verbo "katama", silenciar) es un tambor de marco pesado con un sonido sordo. El Katem generalmente se aprieta entre las rodillas del jugador y está destinado a tocar con las manos en lugar de con los dedos. La mayoría de los Katems de hoy tienen una cabeza de plástico y son ajustables. El papel principal del Katem es apoyar otros instrumentos en la sección de ritmo acentuando el <strong>dum</strong> y <strong>tak</strong> tomando sonidos básicos con mucha ornamentación.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (fiesta de bodas)</b>
                                    <span>Una Zaffa (fiesta de bodas) egipcia con un gran grupo de percusionistas que usa una combinación de Katem-s, <a href="mazhar.php">Mazhar</a>-es y <a href="tabla.php">Tabla</a>-s, todos con pieles sintéticas.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos de percusión:</p>
                    <ul>
                        <li><a href="riqq.php">El Riq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">El Tabl Baladi</a></li>
                        <li><a href="daff.php">El Daf</a></li>
                        <li><a href="mazhar.php">El Mazhar Egipcio</a></li>
                        <!-- 
                        <li><a href="katim.php">El Katem</a></li>
                        -->
                        <li><a href="sagat.php">Los Sagat</a></li>                  
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
