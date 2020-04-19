<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Los Sagat";
$page_description = "Los Sagat";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/sagat.php";
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
                        <h1>Los Sagat</h1>
                        <h3>Platillos de dedo de latón</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Un par de sagat. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Tura</a>
                    </div>

                    <p>
                        Sagat (llamado Sajat fuera de Egipto) son platillos de latón con un diámetro de aproximadamente 1&#189; a 2 pulgadas de diámetro (existen platillos más grandes de hasta dos veces ese diámetro y se llaman <em>Tura</em>). Se usan en el pulgar y el tercer dedo de cada mano con bandas elásticas. Sagat son a veces llamados por su nombre turco "zills".
                    </p>
                    <p>
                        Los Sagat son muy populares entre los profesionales de <em>Raqs Sharqi</em> (bailarinas del vientre) ya que acentúan y agregan color a otros instrumentos de perussion en la sección de ritmo. Por esta razón, existen innumerables videos de YouTube sobre la técnica y el rendimiento de los platillos con los dedos.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UpG__9CAiVE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UpG__9CAiVE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Karim Nagi</b>
                                    <span>Percussionist Karim Nagi (Egypt/USA) plays a Sagat solo</span>
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
                        <li><a href="katim.php">El Katem</a></li>
                        <!--
                        <li><a href="sagat.php">Los Sagat</a></li>
                        -->
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
