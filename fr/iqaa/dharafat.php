<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Dharafat";
$page_description = "Iqa‘ Dharafat";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, dharafat, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/dharafat.php";
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
                        <h1>Iqa‘ Dharafat 13/8</h1>
                        <h3>(also spelled Zarafat)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dharafat.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Dharafat</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/dharafat.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Dharafat (also spelled Zarafat) is mostly used with the <a href="../form/vocal_comp.php#muwashah">Mouachah</a> vocal genre. Using this <em>iqa‘</em> outside <a href="../form/vocal_comp.php#muwashah">muwashahat</a> (e.g. in a popular song) has the effect of adding a classical color by evoking the former repertoire.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Tif Ya Dourri Bil Qanani</b>
                                    <span>Ensemble Al-Kindi (Syrie/France)</span>
                                    <span>Musique de Omar al-Batch</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room I - Maqam Hijazkar Kurd</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/tif_ya_durri_kaslik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Tif Ya Dourri Bil Qanani</b>
                                    <span>Chorale de la faculté de musique - Université Saint-Esprit de Kaslik (Liban)</span>
                                    <span>Chef d'orchestre: Aïda Chalhoub Ziadé</span>
                                    <span>Musique de Omar al-Batch</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/walladhi_wallaka_qalbi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Wal-ladhi Wallaka Qalbi</b>
                                    <span>Ensemble Morkos (Liban)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/il_hobb_kullo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>il-Houbbi Koullo (1971)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/mistanniyak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mistanniyak</b>
                                    <span>‘Aziza Galal</span>
                                    <span>Musique de Baligh Hamdi</span>
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