<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Mudawwar";
$page_description = "Iqa‘ Mudawwar";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, mudawwar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/mudawwar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Mudawwar 12/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mudawwar.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Mudawwar</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Mudawwar ist im <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Repertoire sehr verbreitet. Das Wort "mudawwar" bedeutet auf Arabisch rund, kreisförmig.</p>
                    <!-- Viele Mudawwar-Stücke beginnen auf dem elften Schlag (dem letzten Tak).  -->

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mudawwar/adhkuru_al_hubba.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mudawwar/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Adhkuru al-Hubba</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Musik von Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar/fika_kullu_ma_ara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Fika Kullu Ma Ara Hasan</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar/nabbih_al_nudman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Nabbih al-Nudman Sahi</b>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>