<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijazkar Kurd";
$page_description = "Maqam Hijazkar Kurd";
$page_keywords = "musique arabe, mode arabe, maqam, jins, ajam, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/hijazkar_kurd.php";
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
                        <h1>Maqam Hijazkar Kurd</h1>
                        <h3>Membre de la <a href="f_kurd.php">Famille du Maqam Kurd</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Hijazkar Kurd</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/hijazkar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="79,67,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
		  <area shape="circle" coords="158,75,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
		  <area shape="circle" coords="234,85,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
		  <area shape="circle" coords="313,93,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
		  <area shape="circle" coords="365,93,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="417,101,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
		  <area shape="circle" coords="494,109,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
		<area shape="circle" coords="570,118,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                       <area shape="circle" coords="649,126,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="728,134,13" href="#" alt="Ré♭" class="playNote" data-frequency="274" data-parent="#notation1">
                      <area shape="circle" coords="803,142,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="170,8,322,38" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="634,11,746,40" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="323,146,495,172" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Maqam Hijazkar Kurd est une version archaïque du <a href="kurd.php">Maqam Kurd</a> composé du <a href="../jins/hijazkar.php">Jins Hijazkar</a> à l'octave supérieure. Sa gamme commence avec le <a href="../jins/kurd.php">Jins Kurd</a> comme jins de base sur la tonique, suivi du <a href="../jins/nahawand.php">Jins Nahawand</a> sur le 4<sup>ième</sup> degré.</p>

                    <p>Explorez d'autres maqams dans la <a href="f_kurd.php">Famille du Maqam Kurd</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Tif Ya Dourri</b>
                                    <span>Chorale de la faculté de musique - Université Saint-Esprit de Kaslik (Liban)</span>
                                    <span>Chef d'orchestre: Aïda Chalhoub Ziadé</span>
                                    <span>Musique de Sayyed Darwich/Omar al-Batch</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/hibbi_zurni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hibbi Zourni Ma Tayassar</b>
                                    <span>Chorale de la faculté de musique - Université Saint-Esprit de Kaslik (Liban)</span>
                                    <span>Chef d'orchestre: Aïda Chalhoub Ziadé</span>
                                    <span>Musique de Darwich al-Hariri</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/ya_dhal_qawam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Dhal-Qawam al-Samhari</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/izzay_tibi3ni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Izzay Tibi‘ni w-Ana Ashterik</b>
                                    <span>Saleh Abdel Hayy (Égypte)</span>
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
