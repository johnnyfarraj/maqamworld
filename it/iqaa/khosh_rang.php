<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Khoch Rangue";
$page_description = "Iqa‘ Khoch Rangue";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, khosh rang, khush rank, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/khosh_rang.php";
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
                        <h1>Iqa‘ Khoch Rangue 17/8</h1>
                        <h3>(aussi écrit Khush Rank)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khosh_rang.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Khoch Rangue</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/khosh_rang.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Khoch Rangue (aussi écrit Khush Rank) est un <em>iqa‘</em> très rare et est utilisé dans un seul <a href="../form/vocal_comp.php#muwashah">Mouachah</a> connu aussi bien que plus de quelques compositions modernes.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Salla Fina al-Lahdha Hindiyya</b>
                                    <span>Ensemble Al-Kindi (Syrie/France)</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/khosh_rang/salla_fina_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Salla Fina al-Lahdha Hindiyya</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol 08 - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/khosh_rang/tareq_abdallah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Khush-Rank</b>
                                    <span>Composition Instrumentale pour Oud et Riqq</span>
                                    <span>Tarek Abdallah, Adel Shams El-Din</span>
                                    <span><img src="/img/cd.png"> Wasla (Suites musicales égyptiennes)</span>
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