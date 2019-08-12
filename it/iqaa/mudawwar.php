<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Mudawwar";
$page_description = "Iqa‘ Mudawwar";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, mudawwar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/mudawwar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Mudawwar Masri 12/4</h1>
                        <h1>Iqa‘ Mudawwar Chami 10/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mudawwar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mudawwar</a>
                    </div>

                    <p>Le Iqa‘ Mudawwar est un <em>iqa‘</em> populaire dans le répertoire vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Le mot 'moudawwar' veut dire 'rond/circulaire' en arabe.
                    </p>
                    <p>Many forms of Iqa‘ Mudawwar are in use, among which Mudawwar Masri (Egyptian Mudawwar) and Mudawwar Chami (Damascene/pan-Syrian Mudawwar).
                    </p>
                    
                    <br>
                    <div class="heading jins text-center">
                        <h3>Iqa‘ Mudawwar Masri 12/4</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar_masri.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Adhkuru al-Hubba</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Music by Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_12_4/fika_kullu_bayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Fika Kullu Ma Ara Hasan</b>
                                    <span>Composed in <a href="../maqam/bayati.php">Maqam Bayati</a></span>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <br>
                    <div class="heading jins text-center">
                        <h3>Iqa‘ Mudawwar Chami 10/4</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar_shami.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sarmini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Fika Kullu Ma Ara Hasan</b>
                                    <span>Composed in <a href="../maqam/hijaz.php">Maqam Hijaz</a></span>
                                    <span>Omar al-Sarmini</span>
                                    <span>Al-Kindi Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Fika Kullu Ma Ara Hasan</b>
                                    <span>Composed in <a href="../maqam/hijaz.php">Maqam Hijaz</a></span>
                                    <span>Sabah Fakhri</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>