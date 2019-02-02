<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Suznak";
$page_description = "Maqam Suznak";
$page_keywords = "arabic, music, arab, world, maqam, jins, suznak, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/suznak.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Suznak</h1>
                        <h3>Membre de la <a href="f_rast.php">Famille du Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suznak.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Suznak</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/suznak.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="65,137,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="141,129,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="219,121,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="296,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="374,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="450,97,13" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="528,89,13" href="#" alt="B4♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="606,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="154,9,265,36" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="422,8,546,35" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Maqam Suznak is the most popular modulation of <a href="rast.php">Maqam Rast</a>, where the modulation to <a href="../jins/hjaz.php">Jins Hijaz</a> on the 5<sup>th</sup> scale degree is practically obligatory in any taqsim or mawwal starting on the root <a href="jns/rast.php">Jins Rast</a>.</p>

                    <p>Explorez d'autres maqamat dans la <a href="f_rast.php">Famille du Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/suznak/qadd_malik_ya_hilwa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/suznak/qadd_malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qadd Malik Ya Hilwa</b>
                                    <span>Mouhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/dawr_asl_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Asl il-Gharam</b>
                                    <span>Nour el-Hoda</span>
                                    <span>Musique de Mouhammad ‘Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/ghannili_verse3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Chwayy Chwayy (1945)</b>
                                    <span>Oum Koulthoum</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/tahmila_suznak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tahmila Suznak</b>
                                    <span>Simon Shaheen</span>
                                    <span><img src="/img/cd.png"> Turath - Masterworks of the Middle East</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/taqsim_qanun_salman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun en Maqam Suznak</b>
                                    <span>Abraham Salman (Irak)</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
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
