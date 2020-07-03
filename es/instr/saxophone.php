<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Saxofón Árabe";
$page_description = "El Saxofón Árabe";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/saxophone.php";
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
                        <h1>El Saxofón Árabe</h1>
                        <h3>Un saxofón que solía tocar escalas árabes del <a href="../maqam.php">Maqam</a></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="The Saxophone">
                        <span>Pionero del saxofón árabe Samir Surur (Egipto)</span>
                    </div>

                    <p>
                        El saxofón es un instrumento raro en la música árabe, a pesar del hecho de que puede producir una buena entonación a escala <a href="../maqam.php">maqam</a>. Nunca se generalizó de la forma en que lo hizo <a href="accordion.php">el acordeón</a> árabe y se usó principalmente para agregar un sonido innovador a los arreglos orquestales árabes.
                    </p>
                    <p>
                        El principal pionero del saxofón árabe es Samir Surour (Egipto), cuya formación fue en la banda de música militar. Surour tocó en unas cuantas canciones de Umm Kulthum y luego grabó una serie de álbumes instrumentales solistas con el nombre <em>Ashiq el-Sax</em> (El amante del saxofón).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Hawil Tiftikirni (1973)</b>
                                <span>La canción de Abdel Halim Hafez, <strong>Hawil Tiftikirni</strong> (1973, música de Baligh Hamdi) comienza con el órgano árabe, La Guitarra Eléctrica Árabe, y luego un solo de saxofón de Samir Surur.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=tNskrvpodqA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/tNskrvpodqA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fat el-Ma‘ad (1967)</b>
                                    <span>La canción de Umm Kulthum <strong>Fat el-Ma‘ad</strong> (1967, música de Baligh Hamdi) incluye en su arreglo Faruq Salama en El Acordeón Árabe, Abdel Fattah Khayri en La Guitarra Eléctrica Árabe y Samir Surur en el saxofón.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
                       <li><a href="org.php">El Órgano Eléctrico Árabe</a></li>
                       <li><a href="keyboard.php">El Teclado Oriental</a></li>
                       <li><a href="piano.php">El Piano Árabe</a></li>
                        <!--
                       <li><a href="saxophone.php">El Saxofón Árabe</a></li>
                        -->
                       <li><a href="trumpet.php">La Trompeta Árabe</a></li>
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
