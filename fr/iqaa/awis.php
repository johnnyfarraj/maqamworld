<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ ‘Awisse";
$page_description = "Iqa‘ ‘Awisse";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, aqsaq, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/awis.php";
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
                        <h1>Iqa‘ ‘Awisse 11/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/awis.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de ‘Awisse</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/awis.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ ‘Awisse est surtout utilisé dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Certains pièces dans ce <em>iqa‘</em> commencent sur le 3<sup>ième</sup> temps (le premier <em>tak</em>), par exemple le <strong>Mouachah Mouniati Man Roumtou Qourbouhou</strong>.  Le <strong>Mouachah ibbi Da‘ani Lil-Wisal</strong> commence quant à lui sur le 11<em>ième</em> temps (le dernier <em>tak</em>).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Sayyed Darwich</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.2 - Bayati Chouri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Mouniati Man Roumtou Qourbouhou</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Omar al-Batch</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.9 - Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_sidul_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Mouniati Sidou-l-Milah</b>
                                    <span>(chanté en 11/4)</span>
                                    <span>le chantre Mahmoud Farès</span>
                                    <span>Musique de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/ukhfi_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ukhfi el-Hawa (2019)</b>
                                    <span>Ensemble du patrimoine musical arabe (Liban)</span>
                                    <span>Musique de Dr. Hayaf Yassine</span>
                                    <span>Poème de Omar Ibn al-Fared</span>
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