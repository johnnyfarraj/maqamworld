<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Mourabba";
$page_description = "Iqa‘ Mourabba";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, murabbaa, murabba‘, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/murabbaa.php";
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
                        <h1>Iqa‘ Mourabba‘ 13/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/murabbaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mourabba‘</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/murabbaa.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Mourabba‘ est un <em>iqa‘</em>em> en général confiné au répertoire vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Le mot <em>mourabba‘</em> veut dire 'carré ou basé sur le chiffre 4' en arabe, ce qui fait que le sens du nom n'est pas lié au rythme en question.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/murabbaa/hayyara_al_afkar.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/murabbaa/hayyara_al_afkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Hayyar al-Afkar</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/hibbi_malik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hibbi Malik al-Milah</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/isqini_al_rah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Isqini al-Rah</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/jalla_man_qad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Jalla Man Qad Ansha Jamalak</b>
                                    <span>Omar Sarmini et l'ensemble Al-Kindi </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/qum_bina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Qum Bina Ya Nour ‘Ayni</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ramani Bi Sahmi Hawahu</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                    <span>Musique de Daoud Housni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/ya_3udhayb.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya ‘Oudhayb al-Marchaf</b>
                                    <span>Chorale de la faculté de musique - Université Saint-Esprit de Kaslik (Liban)</span>
                                    <span>Chef d'orchestre: Aïda Chalhoub Ziadé</span>
                                    <span>Musique de Sayyed Darwich</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah et Chansons</span>
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