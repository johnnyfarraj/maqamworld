<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Rast";
$page_description = "Maqam Rast";
$page_keywords = "Maqam Rast, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/rast.php";
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
                        <h1>Maqam Rast</h1>
                        <h3>Il maqam principale nella <a href="f_rast.php">Famiglia Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/rast.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Rast</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="65,137,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="141,129,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="218,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="295,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="373,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="449,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="528,88,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="605,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
				      <area shape="circle" coords="682,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="758,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="836,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="160,6,273,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,6,586,37" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="637,11,820,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Il Maqam Rast è il maqam principale della <a href="f_rast.php">Famiglia Rast</a>, e di gran lunga uno dei maqam più popolari e usati nel repertorio arabo. La sua scala inizia con il <a href="../jins/rast.php">Rast</a> (la radice) sulla tonica, seguito sul quinto grado dal <a href="../jins/upper_rast.php">Jins Rast Alto</a> (con la sua tonica sopra sull'ottavo grado) o dal <a href="../jins/nahawand.php">Jins Nahawand</a>.
                    </p>

                    <p>Scopri altri maqamat della <a href="f_rast.php">Famiglia Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/rast/ya_shadi_al_alhan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/rast/ya_shadi_al_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Shadi al-Alhan</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala al-Kasat</b>
                                    <span>Ensemble Al-Kindi (Syrie/Francia)</span>
                                    <span>Musica di Muhammad Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/ya_3udhaib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya ‘Udhayb al-Marshaf</b>
                                    <span>Coro della Facoltà di Musica - Università di Kaslik (Lebano)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/waraqu_el_asfar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Waraqu el-Asfar Shaher Ayloul</b>
                                    <span>Fairouz (Lebano)</span>
                                    <span>Musica di Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/qasidat_salabat_su3adu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Salabat Suad</b>
                                    <span>Muhammad Khayri (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/layali_rast_abbas_bleidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Rast</b>
                                    <span>Abbas al-Bleidi (Egitto)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_leih_tilaw3ini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lah Tilaw‘ini (1938)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Muhammad al-Qassabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_rast_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Rast</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congres</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/samai_rast_george_michel.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Rast George Michel (Egitto)</b>
                                    <span>Ensemble Al-Kindi (Syrie/Francia)</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 2 (Rast)</span>
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
