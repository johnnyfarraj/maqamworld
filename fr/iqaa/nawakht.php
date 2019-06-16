<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Nawakht";
$page_description = "Iqa‘ Nawakht";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, nawakht, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/nawakht.php";
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
                        <h1>Iqa‘ Nawakht 7/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nawakht.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nawakht</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/nawakht.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Nawakht is a very popular <em>iqa‘</em> in the <a href="../form/vocal_comp.php#muwashah">Mouachah</a> repertoire, and tends to be played at mellow speed.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawakht/ya_hilalan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/nawakht/ya_hilalan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Hilalan</b>
                                    <span>Ensemble Abdel Halim Noueirah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Badru Timmin Haza Husnan</b>
                                    <span>Ensemble Abdel Halim Noueirah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/qultu_lamma.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Qoultou Lamma Ghaba ‘Anni</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/hati_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hati Ya Habibi</b>
                                    <span>Ensemble Abdel Halim Noueirah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/ijma3u_bil_qurbi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ijmaou bil-Qourbi Chamli</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/jalla_man_qad_sagha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Jalla Man Qad Sagha Badran</b>
                                    <span>Ensemble Morkos (Liban)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawakht/khala_al_idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Khala al-‘Idhar</b>
                                    <span>Interprétation et Musique de Omar al-Batch</span>
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