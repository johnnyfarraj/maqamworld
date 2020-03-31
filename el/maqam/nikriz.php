<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Νικρίζ";
$page_description = "Μακάμ Νικρίζ";
$page_keywords = "musique arabe, mode arabe, maqam, jins, nikriz, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/nikriz.php";
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
                        <h1>Μακάμ Νικρίζ</h1>
                        <h3>Le maqam principal dans la <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nikriz.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nikriz</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="../note/maqam/nikriz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="53,68,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="130,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="209,84,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="285,93,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="364,101,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="440,110,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="517,118,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="594,125,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="672,134,13" href="#" alt="Do" class="playNote" data-frequency=" 260.74" data-parent="#notation1"><!-- tonic -->
                      <!-- Links -->
                      <area shape="rect" coords="130,6,305,34" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="454,6,584,34" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Μακάμ Νικρίζ est le maqam principal de la <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a>. Sa gamme commence à la base avec le <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> sur la tonique, suivi du <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a> sur le 5<sup>ième</sup> degré.
                    </p>
                    <p>Explorez d'autres maqams dans la <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nikriz/ya_msahharni.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track active" data-song="/audio/maqam/nikriz/ya_msahharni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Ya Msahharni (1972)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Sayyed Makkawi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/il_albi_yama_intazar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr el-Alb Yama Intazar (1931)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/saga_al_laylu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Saga al-Laylou (1939)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/bayna_qasiyun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Bayna Qasiyoun Wa Rabwa</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                    <span>Musique de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/zarani_taht_al_ghayahib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Zarani Taht al-Ghayahib</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                    <span>Musique de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/yalli_awamak_yi3gibni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Yalli Qawamak Ya‘gibni</b>
                                    <span>Karem Mahmoud (Égypte)</span>
                                    <span>Musique de Sayyed Darwich</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
