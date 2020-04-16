<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Mazhar Egipcio";
$page_description = "El Mazhar Egipcio";
$page_keywords = "El Daf, El Katem, El Mazhar Egipcio, El Riq, Los Sagat, La Tabla, El Tabl Baladi";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/mazhar.php";
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
                        <h1>El Mazhar Egipcio</h1>
                        <h3>Un tambor de marco pesado y profundo con platillos</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>TODO A tunable Egyptian Mazhar with a plastic head. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Mazhar</a>
                    </div>
                    
                    <p>
                        El Mazhar Egipcio es un tambor de bastidor muy pesado con grandes platillos. Está diseñado para golpes fuertes en una sección de ritmo ruidosa y diversa, como la que se usa en una "zaffa" (procesión de bodas), donde se presenta <a href = "../iqaa/zaffa.php">Iqa‘ Zaffa</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (Wedding party)</b>
                                    <span>An Egyptian Zaffa (wedding party) with a large group of percussionists using a combination of Egyptian Mazhar-s, <a href="katim.php">Katem</a>-s and <a href="tabla.php">Tabla</a>-s, all with synthetic heads.</span>
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
                        <!-- 
                        <li><a href="mazhar.php">El Mazhar Egipcio</a></li>
                        -->
                        <li><a href="katim.php">El Katem</a></li>
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
