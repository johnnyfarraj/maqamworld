<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sama‘i Sarabande";
$page_description = "Iqa‘ Sama‘i Sarabande";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, sama‘i, samai saraband, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/samai_saraband.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Sama‘i Sarabande 3/8</h1>
                        <h3>(aussi appelé <strong>Sama‘i Ta’er</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/samai_saraband.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sama‘i Sarabande</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/samai_saraband.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Sama‘i Sarabande, aussi appelé <strong>Sama‘i Ta’er</strong> (<em>ta’er</em> veut dire 'volant' en arabe), est un <em>iqa‘</em> léger et rapide, populaire dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/samai_saraband/qultu_lamma.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/samai_saraband/qultu_lamma.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Qoultou Lamma Ghaba ‘Anni</b>
                                    <span>Hamam Khayri</span>
                                    <span>Musique de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>

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