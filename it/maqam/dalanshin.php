<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Dalancin";
$page_description = "Maqam Dalancin";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/dalanshin.php";
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
                        <h1>Maqam Dalancin</h1>
                        <h3>Appartenente alla <a href="f_rast.php">Famiglia Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Dalancin</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="84,58,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="161,66,13" href="#" alt="Ré♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="240,74,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="317,83,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="393,90,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="471,99,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="548,107,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="626,115,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                       <area shape="circle" coords="704,123,13" href="#" alt="Ré♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="780,133,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="132,5,362,34" href="../jins/saba_dalanshin.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="260,142,443,171" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="573,4,682,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
					</map>
                    <p>Le Maqam Dalancin commence avec le <a href="../jins/saba_dalanshin.php">Jins Saba Dalancin</a> à l'octave du <a href="rast.php">Maqam Rast</a>, puis retourne à la gamme du Maqam Rast avec le <a href="../jins/upper_rast.php">Jins Rast Alto</a> sur le 5<sup>ième</sup> degré (avec sa tonique sur le 8<sup>ième</sup> degré), puis termine avec le <a href="../jins/rast.php">Jins Rast</a> sur la tonique.
                    </p>
                    <p>
                    Il n'y a pas beaucoup de chansons dans ce maqam. Il est plutôt utilisé comme une modulation à partir du <a href="rast.php">Maqam Rast</a>.
                    </p>

                    <p>Scopri altri maqamat della <a href="f_rast.php">Famiglia Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/dalanshin/ya_mal_il_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/dalanshin/ya_mal_il_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qadd Ya Mal el-Sham</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Ahmad Abou Khalil al-Qabbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Mala el-Kasat</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/kull_illi_habb_itnasaf.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Koull Illi Habb Itnasaf (1931)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr ‘Ishna wi Shoufna</b>
                                    <span>Saleh Abdel Hayy (Égypte)</span>
                                    <span>Musique de Mouhammad Outhman</span>
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
