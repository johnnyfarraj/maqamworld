<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Warchane ‘Arabi";
$page_description = "Iqa‘ Warchane ‘Arabi";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, sittatu ashar masri, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/warshan_arabi.php";
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
                        <h1>Iqa‘ Warchane ‘Arabi 32/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/warshan_arabi.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Warchane ‘Arabi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/warshan_arabi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Warchane ‘Arabi (<em>‘Arabi</em> veut dire 'arabe') est un <em>iqa‘</em> rare utilisé surtout dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Il est composé de 8 mesures de 4/4, en faisant une signature métriques de 32/4.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Qatili Bi Ghounji al-Kahali</b>
                                    <span>Ensemble Al-Kindi (Syrie/France)</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient - I (Maqam Bayati)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/ah_min_jour_el_ghawani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ahi Min Jouri al-Ghawani</b>
                                    <span>Ensemble Abdel Halim Nouéra (Égypte)</span>
                                    <span>Musique de Ahmad Abou Khalil al-Qabbani</span>
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
