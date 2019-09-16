<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nawa Athar";
$page_description = "Maqam Nawa Athar";
$page_keywords = "Maqam Nawa Athar, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/nawa_athar.php";
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
                        <h1>Maqam Nawa Athar</h1>
                        <h3>Appartenente alla <a href="f_nikriz.php">Famiglia Maqam Nikriz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nawa_athar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Nawa Athar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/nawa_athar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,136,13" href="#" alt="Do" class="playNote" data-frequency=" 260.74" data-parent="#notation1"><!-- tonic -->
					  <area shape="circle" coords="136,128,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="213,120,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="291,112,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="368,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="445,94,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="522,86,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="599,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- octave -->
                      <!-- Links -->
                      <area shape="rect" coords="129,6,260,36" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="327,147,480,180" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>Il Maqam Nawa Atharè un altro buon esempio popolare di maqam della <a href="f_nikriz.php">Famiglia Nikriz</a>. La sua scala inizia con il <a href="../jins/nikriz.php">Jins Nikriz</a> (la radice) sulla tonica, seguito dal <a href="../jins/hijazkar.php">Jins Hijazkar</a> al centro sul quinto grado.
                    </p>

                    <p>Scopri altri maqamat della <a href="f_nikriz.php">Famiglia Maqam Nikriz</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nawa_athar/gamil_gamal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/ghulubti_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghulubti Asaleh Fi Rouhi (1948)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track active" data-song="/audio/maqam/nawa_athar/gamil_gamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Gamil Gamal (1952)</b>
                                    <span>Voce e musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/fakkaruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fakkaruni (1966)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Adhkuru al-Hubba</b>
                                    <span>Ensemble Abdel Halim Nuera (Egitto)</span>
                                    <span>Musica di Daud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/samai_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nawa Athar</b>
                                    <span>Ensemble siriano di Homs</span>
                                    <span>Musica di Jamil ‘Ouways (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/dulab_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Nawa Athar</b>
                                    <span>George Abiad (Libano)</span>
                                    <span><img src="/img/cd.png"> Impovisations Orientales</span>
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
