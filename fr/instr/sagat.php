<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Les Sagat";
$page_description = "Les Sagat";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/sagat.php";
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
                        <h1>Les Sagat</h1>
                        <h3>Cymbales en laiton tenues par les doigts</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Une paire de Sagat en laiton. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Toura</a>
                    </div>

                    <p>Les Sagats (appelées <em>Sajat</em> à l'extérieur de l'Égypte) sont des cymbales en laiton tenues par les doigts qui ont un diamètre de 3,5 à 5 centimètres (des cymbales pouvant être jusqu'à deux fois plus larges existent aussi et sont appelées <em>Toura</em>). Elles sont portées sur le pouce et le troisième doigt de chaque main à l'aide de bandes élastiques.
                    </p>
                    <p>Les Sagats sont très populaires chez les <em>Raqs Charqi</em> professionnelles (les danseuses du ventre) parce qu'elles accentuent joliment et ajoutent de la couleur aux autres instruments de percussion de la section rythmique. Pour cette raison, beaucoup de vidéos YouTube existent sur les techniques de doigté pour les cymbales et sur la performance.
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
                                    <span>Karim Nagi(percussionniste de l'Égypte/Etats-Unis) joue un solo de Sagat. </span>
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
                        <li><a href="mazhar.php">Le Mazhar</a></li>
                        <li><a href="katim.php">Le Katèm</a></li>
                        <!-- <li><a href="sagat.php">Les Sagat</a></li> -->
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
