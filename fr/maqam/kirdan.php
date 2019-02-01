<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Kirdan/Maqam Sazkar";
$page_description = "Maqam Kirdan/Maqam Sazkar";
$page_keywords = "arabic, music, arab, world, maqam kirdan, maqam sazkar, jins, kirdan, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/kirdan.php";
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
                        <h1>Maqam Kirdan</h1>
                        <h1>Maqam Sazkar</h1>
                        <h3>A member of the <a href="f_rast.php">Famille du Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kirdan.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Kirdan</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sazkar</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/kirdan.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="75,81,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="148,89,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
	  <area shape="circle" coords="225,97,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="304,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="381,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="458,123,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="537,131,13" href="#" alt="D4â™¯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
	  <area shape="circle" coords="589,131,13" href="#" alt="D4â™®" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="640,139,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="95,6,274,38" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="420,9,525,38" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,173,528,202" href="../jins/sazkar.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Maqam Kirdan is a version of <a href="rast.php">Maqam Rast</a> whose sayr starts on the octave and eventually descends to the tonic. Its scale starts at the bottom with the root <a href="../jins/rast.php">Jins Rast</a> on the tonic, followed by <a href="../jins/upper_rast.php">Jins Haut Rast</a> on the 5<sup>th</sup> degree (with its tonic up on the 8<sup>th</sup> degree).
                    </p>
                    <p><strong>Maqam Sazkar</strong> is nearly identical to Maqam Kirdan, except for the prominence of the raised 2<sup>nd</sup> degree that occurs in some melodic passages, which results in <a href="../jins/sazkar.php">Jins Sazkar</a> on the tonic.</p>

                    <p>Explore other maqamat in the <a href="f_rast.php">Famille du Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kirdan/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kirdan/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Sihtu Wajdan</b>
                                    <span>Choir of the faculty of Music - Kaslik University (Lebanon)</span>
                                    <span>Conductor: Aïda Shalhoub Ziadé</span>
                                    <span>Musique de Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/ya_shadil_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Shadi al-Alhan</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musique de Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayrana Leh (1930)</b>
                                    <span>Leila Murad</span>
                                    <span>Musique de Dawud Husni</span>
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
