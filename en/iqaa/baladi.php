<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Baladi";
$page_description = "Iqa‘ Baladi (Masmudi Saghir)";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, baladi, masmudi saghir, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "en/iqaa/baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Baladi 4/4</h1>
                        <h3>(also called <strong>Masmudi Saghir</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Baladi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/baladi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Baladi is a very common <em>iqa‘</em> in the Near Eastern Arabic vocal repertoire. It is also called <strong>Masmudi Saghir</strong>, "saghir" meaning little in Arabic, to distinguish it from <a href="masmudi_kabir.php">Masmudi Kabir</a>, which spans two 4/4 measures instead of one. Baladi modulates frequently to <a href="maqsum.php">Maqsum</a> and back, as well as to <a href="malfuf.php">Malfuf</a> (using 2 measures of <a href="malfuf.php">Malfuf</a> to 1 measure of Baladi).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/baladi/aziza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/baladi/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>Instrumental Composition</span>
                                    <span>Music by Muhammad Abdel Wahab (from the movie ‘Aziza, 1955)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/halummu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Halummu Li</b>
                                    <span>Hassan al-Haffar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Malik Ya Hilwa</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/baladi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Baladi 4/4</b>
                                    <span>Tabla demonstration by Faisal Zedan</span>
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>