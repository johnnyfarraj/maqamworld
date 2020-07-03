<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Órgano Eléctrico Árabe (El Org)";
$page_description = "El Órgano Eléctrico Árabe (El Org)";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/org.php";
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
                        <h1>El Órgano Eléctrico Árabe</h1>
                        <h3>Órgano eléctrico de la década de 1970 equipado con algunos cuarto tonos</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="El Órgano Eléctrico">
                        <span>Pionero del organo Magdi el-Husseini (Egipto).</span>
                    </div>

                    <p>
                        El órgano eléctrico (comúnmente llamado <strong>org</strong> en árabe, del francés "orgue") se hizo muy popular en la música árabe desde finales de los sesenta hasta los setenta. Su pionero y superestrella fue el tecladista egipcio Magdi el-Husseini. La organización se modificó para reproducir tonos de cuarto suficientemente buenos (tan buenos como los del acordeón) que le permitieron tocar la mayoría de las escalas del <a href="../maqam.php">maqam</a>. La org fue usada para tocar una combinación de líneas melódicas y acordes simples. Juntos, la organización y <a href="guitar.php">la guitarra eléctrica</a> crearon un sonido y un estado de ánimo distintivos que marcaron la música árabe de esa década.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span>La canción de Abdel Halim Hafez, <strong>Qari'at al-Fingan</strong> (1976, música de Muhammad al-Mugi) presentando los instrumentistas del órgano eléctrico Magdi el-Husseini y Hani Mehanna (ambos forman parte de La Orquesta Diamante).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista de Magdi el-Husseini</b>
                                    <span>Entrevista de Magdi el-Husseini sobre su experiencia al conocer a el cantante Abdel Halim Hafez y a tocar en su orquesta.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista de Hani Mehanna</b>
                                    <span>Entrevista de Hani Mehanna sobre su experiencia al conocer a el compositor Muhammad Abdel Wahab y la cantante Umm Kulthum e interpretando la canción <strong>Leilet Hobb</strong> con su orquesta.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
                        <!--
                       <li><a href="org.php">El Órgano Eléctrico</a></li>
                        -->
                       <li><a href="keyboard.php">El Teclado Oriental</a></li>
                       <li><a href="piano.php">El Piano Árabe</a></li>
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
