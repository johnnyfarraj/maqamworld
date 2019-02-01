<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Egyptian Mazhar";
$page_description = "The Egyptian Mazhar";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/mazhar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>The Egyptian Mazhar</h1>
                        <h3>A Heavy and Deep Frame Drum with Cymbals</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>A tunable Egyptian Mazhar with a plastic head. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mazhar</a>
                    </div>

                    <p> The Egyptian Mazhar is a very heavy frame drum with large cymbals. It is designed for heavy pounding in a loud and diverse rhythm section, such as the one used in a <em>Zaffa</em> (wedding procession), where <a href = "../iqaa/zaffa.php">Iqaâ€˜ Zaffa</a> is featured.
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
                                    <span>An Egyptian Zaffa (wedding party) with a large group of percussionists using a combination of Egyptian Mazhar-s, <a href="katim.php">Katim</a>-s and <a href="tabla.php">Tabla</a>-s, all with synthetic heads.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <li><a href="riqq.php">Le Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Le Tabl Baladi</a></li>
                        <li><a href="daff.php">Le Daff</a></li>
                        <!-- <li><a href="mazhar.php">Le Mazhar</a></li> -->
                        <li><a href="katim.php">Le Katem</a></li>
                        <li><a href="sagat.php">Les Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
