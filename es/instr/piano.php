<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Piano Árabe";
$page_description = "El Piano Árabe";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/piano.php";
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
                        <h1>El Piano Árabe</h1>
                        <h3>Un piano que toca <a href="../maqam.php">maqamat</a> sin armonía</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="El Piano Árabe">
                        <span>TODO Lebanese pianist Ziad Rahbani, from a concert poster in the 1980s</span>
                    </div>

                    <p>
                        Aunque el piano se incluyó en la música árabe desde principios del siglo XX, se usó como un instrumento occidental para agregar un color clásico a las composiciones árabes (por ejemplo, en "al-Siba wal-Gamal" de Muhammad Abdel Wahab, 1939). Por piano árabe, sin embargo, nos referimos a un piano que se toca melódicamente (sin armonía) dentro del marco del <a href="../maqam.php">maqam</a> árabe.
                    </p>
                    <p>
                        El primer pionero del piano árabe fue el libanés Wadih Sabra, quien tocó un piano con notas adicionales (tonos de cuarto) durante el Congreso de Música Árabe de El Cairo de 1932. Más tarde, el libanés Abdallah Chahine también modificó un piano para tocar los tonos de tono y grabó un álbum llamado "al- Nagham al-Khalid "con <a href="../form/improv.php#taqsim">taqasim</a> en el <a href="../maqam.php">maqamat</a> más común.
                    </p>
                    <p>
                        Hacia el final del siglo XX, el músico y dramaturgo libanés Ziad Rahbani grabó muchas canciones y composiciones instrumentales usando un piano acústico o eléctrico (un Fender Rhodes) para interpretar líneas melódicas del <a href="../maqam.php">maqam</a>, o armonía dentro de un género de fusión de jazz.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdallah Chahine</b>
                                <span>Lebanese pianist Abdallah Chahine playing a Piano Taqsim in <a href="../maqam/saba.php">Maqam Saba</a> followed by the song <strong>Batit ‘Uyuni</strong> from his album "Angham Min al-Sharq".</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>Lebanese pianst Ziad Rahbani plays Arabic piano on his song <strong>Shu Hal-Iyam</strong> from his CD <strong>Ana Moush Kafer</strong>, 1985.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>W'Qamh</b>
                                <span>Ziad Rahbani's instrumental composition <strong>W'Qamh</strong> in <a href="../maqam/hijaz.php">Maqam Hijaz</a> uses El Piano Árabe in a Jazz fusion arrangement. From Fairouz's CD <strong>Mish Kayin Hayk Tkoun</strong>, 1987.</span>
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
                        <!--
                       <li><a href="piano.php">El Piano Árabe</a></li>
                        -->
                       <li><a href="saxophone.php">El Saxofón Árabe</a></li>
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
