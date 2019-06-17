<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Katakoufti";
$page_description = "Iqa‘ Katakoufti";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, katakufti, nawari, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/katakufti.php";
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
                        <h1>Iqa‘ Katakoufti 4/4</h1>
                        <h3>(aussi appelé Nawari)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Katakoufti</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/katakufti.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Katakoufti (aussi appelé Nawari) is variation on <a href="saidi.php">Iqa‘ Sa‘idi</a> and <a href="baladi.php">Baladi</a> primarily used in Levantine folk music and Dabke line dances.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/katakufti/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya ‘Ein Moulayyitein</b>
                                    <span>Samira Tawfiq</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/katakufti/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dal‘ona (traditional)</b>
                                    <span>(interprète inconnu)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/katakufti/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Initiation Of Ecstasy</b>
                                    <span>Ensemble El-Founoun</span>
                                    <span><img src="/img/cd.png"> Zaghareed: Music From The Palestinian Holy Land</span>
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