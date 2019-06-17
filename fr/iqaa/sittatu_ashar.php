<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sittatou ‘Achar Masri";
$page_description = "Iqa‘ Sittatou ‘Achar Masri";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, sittatu ashar masri, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/sittatu_ashar.php";
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
                        <h1>Iqa‘ Sittatou ‘Achar Masri 32/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sittatu_ashar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sittatou ‘Achar Masri</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sittatu_ashar.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Sittatou ‘Achar Masri (<em>Sittatou ‘Achar</em> veut dire 'seize', <em>masri</em> veut dire 'égyptien') est un <em>iqa‘</em> rare utilisé surtout dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Il est composé de 8 mesures de 4/4, en faisant une signature métriques de 32/4.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sittatu_ashar/badat_ghada.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sittatu_ashar/badat_ghada.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Badat Min al-Khidri (khana)</b>
                                    <span>Ghada Chbeir (Liban)</span>
                                    <span><img src="/img/cd.png"> Mouachahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sittatu_ashar/badat_kaslik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Badat Min al-Khidri (khana)</b>
                                    <span>Louis Hage and Aïda Chalhoub Ziadé</span>
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