<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Teclado Oriental";
$page_description = "El Teclado Oriental";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/keyboard.php";
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
                        <h1>El Teclado Oriental</h1>
                        <h3>Un sintetizador / sampler con capacidad completa de cuarto tonos</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="El Teclado Oriental">
                        <span>El Teclado Oriental "Ketron Vega".</span>
                    </div>

                    <p>
                        El teclado oriental es el sucesor de la organización y llegó al mercado hacia finales del siglo XX. Su fuerza era que podía imitar sonidos de varios instrumentos árabes tradicionales al muestrearlos, y como tal, el jugador podía convocar a un <em>Mijwiz</em>, un <a href="qanun.php">qanun</a> o incluso un <a href="saxophone.php">saxofón</a> con solo tocar un botón.
                    </p>
                    <p>
                        La mayoría de las compañías de sintetizadores (como Roland, Yamaha, GEM, Kawai, Korg y Ketron) fabrican modelos de Teclado Oriental e incluyen un generador de ritmo electrónico incorporado donde el jugador puede complementar su melodía / acordes con <a href="../iqaa.php">iqaat</a> grabado previamente en árabe muestreado. Instrumentos de percusión. Esto hace que el teclado oriental sea un instrumento muy potente y versátil, y un instrumento esencial en el pop árabe y la música de baile.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="El Teclado Oriental's Quartertone Buttons">
                        <span>TODO 12 switches to lower each note on the keyboard by a quartertone</span>
                    </div>

                    <p>
                        El teclado oriental puede tocar un cuarto tono en cualquiera de las 12 notas del teclado simplemente presionando un interruptor.
                    </p>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Aw‘idak</b>
                                    <span>The National Arab Orchestra (U.S.A.) performing Su‘ad Muhammad's song <strong>Aw‘idak</strong> in an arrangement that includes El Teclado Oriental and La Guitarra Eléctrica Árabe alongside traditional Arabic instruments.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Shamstep by 47Soul</b>
                                <span>Pan-Palestinian group 47Soul added an interesting twist to the normal usage of El Teclado Oriental by using sound effects to create a new genre of techno-<em>dabke</em>, as in their hit song <strong>Shamstep</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
                       <li><a href="org.php">El Órgano Eléctrico Árabe</a></li>
                        <!-- 
                       <li><a href="keyboard.php">El Teclado Oriental</a></li>
                        -->
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
