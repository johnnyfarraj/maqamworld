<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Aouj ‘Iraq";
$page_description = "Maqam Aouj ‘Iraq";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, awj iraq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/awj_iraq.php";
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
                        <h1>Maqam Aouj ‘Iraq</h1>
                        <h3>Membre de la <a href="f_sikah.php">Famille du Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Aouj ‘Iraq</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="54,69,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="123,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="212,85,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="289,93,13" href="#" alt="La♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
					  <area shape="circle" coords="367,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="444,110,13" href="#" alt="Fa♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
					  <area shape="circle" coords="521,117,13" href="#" alt="Mi♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
					  <area shape="circle" coords="599,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="676,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="752,142,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,7,540,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,745,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Maqam Awj 'Iraq est une version du <a href="huzam.php">Maqam Rahat al-Arwah/Maqam Houzam</a> et du <a href="iraq.php">Maqam ‘Iraq</a>, avec un <em>sayr</em> qui commence sur la tonique à l'octave supérieure et redescend vers la tonique. Il partage la plupart de ses ajnas avec le <a href="huzam.php">Maqam Houzam</a>.
                    </p>
                    <p>Le Maqam Awj 'Iraq  commence avec le jins de base <a href="../jins/sikah.php">Sikah</a> sur la tonique, suivi du <a href="../jins/hijaz.php">Jins Hijaz</a> sur le 3<sup>ième</sup> degré, puis d'un autre Jins Sikah sur le 8<sup>ième</sup> degré.
                    </p>

                    <p>Explorez d'autres maqams dans la <a href="f_sikah.php">Famille du Maqam Sikah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Samiri Da‘a Sabri</b>
                                    <span>Interprétation de Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hayya Wa Nadim</b>
                                    <span>Interprétation de Samer Nachar (Syrie)</span>
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
