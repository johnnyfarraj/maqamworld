<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Saba Zamzam";
$page_description = "Jins Saba Zamzam";
$page_keywords = "musique arabe, maqam, instruments, jins Saba Zamzam, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/saba_zamzam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Saba Zamzam</h1>
                        <h3>(ambiguous size)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba_zamzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Saba Zamzam</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_zamzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="39,100,12" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="120,92,14" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="196,84,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="274,76,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="349,68,13" href="#" alt="G4♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="427,60,13" href="#" alt="A4♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="504,52,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Jins Saba Zamzam (like Jins Saba) has an ambiguous size. It is notated here with its tonic on D and two <em>ghammaz</em> possibilities: the 3<sup>rd</sup> degree (notated on F) or the 6<sup>th</sup> degree (notated on B&#x266d;). Jins Saba Zamzam is the first <em>jins</em> in <a href="../maqam/saba_zamzam.php">Maqam Saba Zamzam</a>.</p>


                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_zamzam/3ala_hesb_widad.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_zamzam/3ala_hesb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Hisb Widad Albi (1953)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/gana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gana el-Hawa (1969)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zayy el-Hawa (1970)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/nibtidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nibtidi Mnein el-Hikaya (1975)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/ya_bint_el_sultan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Bint el-Sultan</b>
                                    <span>Vocals by Ahmed Adaweya</span>
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