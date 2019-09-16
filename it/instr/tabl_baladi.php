<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Tabl Baladi";
$page_description = "le Tabl Baladi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Tabl Baladi";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/tabl_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Il Tabl Baladi</h1>
                        <h3>Grande tamburo con la pelle su entrambi i lati</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>Un tabl baladi con la pelle in capra. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Tabl baladi</a>
                    </div>

                    <p>
                        Il tabl baladi è un grande tamburo con la struttura in legno e una pesante pelle su entrambi i lati. È legato attorno alle spalle del musicista tramite una cintura ed è suonato con due bacchette: La bacchetta spessa è usata per il suono <em>dum</em> ed è suonato con la mano predominante mentre la bacchetta più sottile è usata per ottenere il suono <em>tak</em> ed è suonata con l'altra mano.
                    </p>

                    <p>Il tabl baladi è ideale per gli ambienti aperti (<em>baladi</em> significa "dal villaggio") e può produrre un ritmo adatto  per le danze come la <em>Dabke</em> insieme ad altri strumenti che producono un suono ad alto volume come il <em>Mizmar</em>. Il Tabl Baladi non suona <a href="../iqaa.php">ritmi</a> complessi ed è ideale per un solido ritmo in 4/4 come il <a href="../iqaa/baladi.php">Baladi</a>, il <a href="../iqaa/saidi.php">Saïdi</a>,  e specialmente per il <a href="../iqaa/nawari.php">Nawari</a>.
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
                                    <b>Un Tabl Baladi con il mizmar</b>
                                    <span>Il libanese armeno Setrak Sarkissian, suonatore di tabl baladi, esegue un ritmo per la cantante Samira Tawfiq nella sua canzone <strong>‘al-‘Ein Mulayyitein</strong>, accompagnato da un riqq e un tabl baladi. Registrato dalla televisione libanese con il violinista Rafik Hobeika che dirige l'orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti  a percussione:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <!-- <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li> -->
                        <li><a href="daff.php">Il Daff</a></li>
                        <li><a href="mazhar.php">Il Mazhar</a></li>
                        <li><a href="katim.php">Il Katem</a></li>
                        <li><a href="sagat.php">Le Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
