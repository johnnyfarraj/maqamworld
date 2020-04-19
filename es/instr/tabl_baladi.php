<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Tabl Baladi";
$page_description = "El Tabl Baladi";
$page_keywords = "El Daf, El Katem, El Mazhar Egipcio, El Riq, Los Sagat, La Tabla, El Tabl Baladi";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/tabl_baladi.php";
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
                        <h1>El Tabl Baladi</h1>
                        <h3>Tambor grande con piel en ambos lados</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>TODO Tabl Baladi with goat skin. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Tabl baladi</a>
                    </div>

                    <p>
                        El Tabl Baladi es un gran tambor con marco de madera y piel gruesa en ambos lados. Se cuelga de un cinturón alrededor del hombro del jugador y se juega con dos palos: el palo grueso es para el sonido <strong>dum</strong> que se reproduce con la mano dominante, y el palo delgado es para el sonido <strong>tak</strong> que se reproduce con la otra mano.
                    </p>
                    <p> 
                        El Tabl Baladi es ideal para la música al aire libre en un entorno de pueblo ("baladi" significa "del pueblo") y puede proporcionar el ritmo para bailes de línea como el <em>Dabke</em> junto con instrumentos igualmente ruidosos como <em>el mizmar</em>. El Tabl Baladi no tiene ritmos muy complejos u ornamentados y es ideal para 4/4 <a href="../iqaa.php">iqaat</a> pesados como <a href="../iqaa/baladi.php">Baladi</a>, <a href="../iqaa/saidi.php">Sa‘idi</a> y especialmente <a href="../iqaa/nawari.php">Nawari</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tabl Baladi with Mizmar</b>
                                    <span>Armenian-Lebanese tabl_baladi player Setrak Sarkissian starts the rhythm for singer Samira Tawfiq in her song <strong>‘al-‘Ein Mulayyitein</strong>, accompanied by a Riq and Table Baladi. Recorded on Lebanese Television with violinist Rafik Hobeika leading the orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos de percusión:</p>
                    <ul>
                        <li><a href="riqq.php">El Riq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <!--
                        <li><a href="tabl_baladi.php">El Tabl Baladi</a></li>
                        -->
                        <li><a href="daff.php">El Daf</a></li>
                        <li><a href="mazhar.php">El Mazhar Egipcio</a></li>
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
