<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Wahda Saghira";
$page_description = "Iqa‘ Wahda Saghira";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, wahda saghira, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/wahda_saghira.php";
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
                        <h1>Iqa‘ Wahda Saghira 2/4</h1>
                        <h3>(aussi appelé <strong>Wahda Basita</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_saghira.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Wahda Saghira</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/wahda_saghira.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Wahda Saghira est un <em>iqa‘</em> simple en 2/4 utilisé tant pour les phrases vocales qu'instrumentales. <em>Wahda</em> veut dire 'un' en arabe et réfère au seul <em>doum</em> de la mesure, tandios que <em>Saghira</em> veut dire 'petit'. Ce <em>iqa‘</em> est aussi connu sous le nom de <strong>Wahda Basita</strong> (<em>basita</em> veut dire 'simple' en arabe).</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_saghira/darit_il_ayyam.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/wahda_saghira/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Daret el-Ayyam (1970)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_saghira/3ala_hisbi_widab_albi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ala Hesb Widad Albi (1953)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_saghira/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qassida Moudnaka (1938)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_saghira/nibtidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nibtidi Mnein el-Hikaya (1975)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_saghira/qal_eh_biyisaluni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Al Eh Biyis'alouni</b>
                                    <span>Warda (France/Algérie)</span>
                                    <span>Musique de Sayyed Makkawi</span>
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