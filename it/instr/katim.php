<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Katem";
$page_description = "Il Katem";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, tromba, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/katim.php";
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
                        <h1>Il Katem</h1>
                        <h3>Un tambour sur cadre de support rythmique</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katim">
                        <span>Un Katèm accordable à peau de plastique. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Katèm</a>
                    </div>

                    <p> Il Katem (du verbe <em>katama</em>, 'assourdir' ou 'étouffer') est un tambour sur cadre lourd qui produit un son étouffé. Il Katem est généralement posé entre les genoux du musicien et est fait pour être joué avec les mains plutôt qu'avec les doigts. La plupart des Katèms actuels ont des peaux de plastiques et sont accordables. Le rôle du Katèm est de supporter les autres instruments de la section rythmique en accentuant les sons <em>doum</em> et <em>tak</em> de base avec beaucoup d'ornementation.</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (fête de mariage)</b>
                                    <span>Une Zaffa égyptienne (fête de mariage) avec un grand groupe de percussionnistes utilisant une combinaison de <a href="mazhar.php">Mazhars</a> égyptiens, de Katims et de <a href="tabla.php">Tablas</a>, tous munis de peaux synthétiques.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <li><a href="daff.php">Il Daff</a></li>
                        <li><a href="mazhar.php">Il Mazhar</a></li>
                        <!-- <li><a href="katim.php">Il Katem</a></li> -->
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
