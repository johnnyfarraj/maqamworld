<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Zanjaran";
$page_description = "Maqam Zanjaran";
$page_keywords = "arabic, music, arab, world, maqam, jins, zanjaran, hijaz, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/zanjaran.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Zanjaran</h1>
                        <h3>Appartenente alla <a href="f_hijaz.php">Famiglia Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/zanjaran.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Zanjarane</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/zanjaran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="49,81,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="126,89,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="202,97,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1"><!-- Ajam 3rd, tune down from 440 -->
	  <area shape="circle" coords="280,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="358,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="434,122,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
	  <area shape="circle" coords="512,130,13" href="#" alt="Ré♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
	  <area shape="circle" coords="590,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
	  <!-- Links -->
                      <area shape="rect" coords="135,9,263,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="415,9,538,40" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">


					</map>
                    <p>Le Maqam Zanjaran est une variante du <a href="hijaz.php">Maqam Hijaz</a> avec le <a href="../jins/ajam.php">Jins ‘Ajam</a> comme second jins (sur le 4<sup>ième</sup> degré) et le jins de base <a href="../jins/hijaz.php">Hijaz</a> sur la tonique.</p>

                    <p>Scopri altri maqamat della <a href="f_hijaz.php">Famiglia Maqam Hijaz</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Halawit el-Dounya (c.1950)</b>
                                    <span>Sayyed Makkawi (Égypte)</span>
                                    <span>Musique de Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/aya_daraha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Aya Daraha Bil-Houzn</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                    <span>Musique de Majdi al-‘Aqili</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/mawwal_amana_ya_leil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Amana Ya Leil (1931)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/layali_zanjaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Zanjarane</b>
                                    <span>Ahmad Khabbari</span>
                                    <span>Ensemble Al-Tourath (Syrie)</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al-Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Semiramis (Taqsim Oud en Maqam Zanjaran)</b>
                                    <span>‘Amer ‘Ammouri (Syrie)</span>
                                    <span><img src="/img/cd.png"> Takasim Oud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun en Zanjarane</b>
                                    <span>Abraham Salman (Irak)</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_buzuq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Bouzouk en Zanjarane</b>
                                    <span>Mouhammad Abdel Karim</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
