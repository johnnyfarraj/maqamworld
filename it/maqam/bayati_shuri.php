<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Bayati Shuri";
$page_description = "Maqam Bayati Shuri";
$page_keywords = "arabic, music, arab, world, maqam, jins, bayati shuri, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/bayati_shuri.php";
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
                        <h1>Maqam Bayati Shuri</h1>
                        <h3>Appartenente alla <a href="f_bayati.php">Famiglia Maqam Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati_shuri.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Bayati Shuri</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/bayati_shuri.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="45,129,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="123,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="199,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="278,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="354,96,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="431,88,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="510,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="588,72,13" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="96,11,226,40" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="336,11,455,40" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">

					</map>

                    <p>Il Maqam Bayati Shuri è una variazione del <a href="bayati.php">Maqam Bayati</a> con il quinto grado abbassato. Inizia con il <a href="../jins/bayati.php">Jins Bayati</a> (radice) sulla tonica seguito dal <a href="../jins/hijaz.php">Jins Hijaz</a> sul quarto grado.
                    </p>
                    
                    <p>È un maqam molto popolare, specialmente nelle <a href="../form/vocal_comp.php">composizioni vocali</a> Muwashahat e Adwar.
                    </p>
                    
                    <p>Scopri altri maqamat della <a href="f_bayati.php">Famiglia Maqam Bayati</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati_shuri/samai_bayati_shuri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati_shuri/samai_bayati_shuri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Sama‘i Bayati Shuri</b>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 2 (Bayati Shuri)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/taqsim_violin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim di violino sul Maqam Bayati Shuri</b>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 2 (Bayati Shuri)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/hibbi_da3ani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 2 (Bayati Shuri)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/talaffata_al_dhabyu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Talaffata al-Dhabiyu</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 2 (Bayati Shuri)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/dayya3ti_mustaqbal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Dayya‘ti Mustaqbal Hayati</b>
                                    <span>Voce e musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/qadd_ah_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Ah Ya Hilu</b>
                                    <span>Nay Barghuti</span>
                                    <span>(chanson traditionelle)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/qadd_habibi_ghab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Habibi Ghab</b>
                                    <span>Muhammad Khayri (Siria)</span>
                                    <span>(chanson traditionelle)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim di Qanun sul Maqam Bayati Shuri</b>
                                    <span>Marie Joubran</span>
                                    <span>Wasla en Bayati Shuri</span>
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
