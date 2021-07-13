<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Nikriz";
$page_description = "Jins Nikriz";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "de/jins/nikriz.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Nikriz</h1>
                        <h3>Wurzel-Jins der <a href="../maqam/f_nikriz.php">Maqam-Nikriz-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nikriz.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Nikriz</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/nikriz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,116,12" href="#" alt="A3♭" class="playNote" data-frequency="209" data-parent="#notation1"><!--fine tuned up from 205.5-->
					  <area shape="circle" coords="138,107,12" href="#" alt="B3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="220,100,14" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="295,91,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="373,83,13" href="#" alt="E4♭" class="playNote" data-frequency="315" data-parent="#notation1">
					  <area shape="circle" coords="450,74,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="528,66,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					   <area shape="circle" coords="601,58,12" href="#" alt="A4♭" class="playNote" data-frequency="414" data-parent="#notation1"><!-- fine tuned up from 411-->
					  <area shape="circle" coords="640,58,12" href="#" alt="A4♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="678,50,12" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Jins Nikriz ist ein Fünfton-Jins. Es ist hier notiert mit C als Tonika und G als Ghammaz. Jins Nikriz ist das erste Jins in <a href="../maqam/nikriz.php">Maqam Nikriz</a> und <a href="../maqam/nawa_athar.php">Maqam Nawa Athar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nikriz/bayna_qasiyun_wa_rabwa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nikriz/bayna_qasiyun_wa_rabwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bayna Qasiyun Wa Rabwa</b>
                                    <span>Syrisches Nationalorchester</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Awwidti ‘Eini (1957)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/hawwil_ya_ghannam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hawwil Ya Ghannam</b>
                                    <span>Najah Salam</span>
                                    <span>Musik von Eliya al-Matni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/ba3id_annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fi Youm We Leila (1978)</b>
                                    <span>Warda</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/lamma_anakhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Lamma Anakhu</b>
                                    <span>Sabah Fakhri</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>