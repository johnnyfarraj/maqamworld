<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nahawand";
$page_description = "Maqam Nahawand";
$page_keywords = "musique arabe, mode arabe, maqam, jins, nahawand, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/nahawand.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Nahawand</h1>
                        <h3>Le maqam principal dans la <a href="f_nahawand.php">Famille du Maqam Nahawand</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nahawand</a>
                    </div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/farahfaza.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Farahfaza</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="67,137,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="144,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="221,121,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="298,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="376,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="453,97,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="530,89,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="608,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="685,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="761,96,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1"><!-- unchanged -->
                      <area shape="circle" coords="839,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="135,11,308,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="440,7,558,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="670,11,786,39" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Maqam Nahawand est le maqam principal de la <a href="f_nahawand.php">famille du Maqam Nahawand</a>. Sa gamme commence avec le jins de base <a href="../jins/nahawand.php">Jins Nahawand</a> sur la tonique, suivi du <a href="../jins/hijaz.php">Jins Hijaz</a> ou du <a href="../jins/kurd.php">Jins Kurd</a> sur le 5<sup>ième</sup> degré. 
                    </p>
                    <p>Le <strong>Maqam Farahfaza</strong> est le Maqam Nahawand transposé sur Sol.
                    </p>

                    <p>Explorez d'autres maqams dans la <a href="f_nahawand.php">Famille du Maqam Nahawand</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nahawand/balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Balad el-Mahboub (1951)</b>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/alf_leila_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w-Leila (1969)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dhikrayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dhikrayati (1944)</b>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/hati_isqiniha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hat Isqiniha</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                    <span>Musique de Yehya al-Saoudi</span>
                                    <span><img src="/img/cd.png"> The Aleppo Suites</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/ramani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ramani Bi Sahmi Hawahou</b>
                                    <span>Khaled al-Hafez (Syrie)</span>
                                    <span>Musique de Daoud Housni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_masud_jamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nahawand</b>
                                    <span>Ensemble Simon Shaheen</span>
                                    <span>Musique de Mesut Cemil (Turkey)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_safar_ali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nahawand</b>
                                    <span>Ensemble Abdel Halim Nouéra (Égypte)</span>
                                    <span>Musique de Safar Ali</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_farahfaza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Farahfaza</b>
                                    <span>Ensemble Simon Shaheen</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_jamilbey.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Nahawand</b>
                                    <span>Anouar Brahem</span>
                                    <span>Musique de Tanburi Cemil Bey</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_yorgo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Nahawand</b>
                                    <span>Abdel Halim Nouéra Ensemble</span>
                                    <span>Musique de Yorgo Baganos</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dulab_aboul_ela.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Doulab Nahawand</b>
                                    <span>Cheikh Abou el-Éla Mouhammad (Égypte)</span>
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
