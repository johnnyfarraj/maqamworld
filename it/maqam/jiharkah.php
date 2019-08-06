<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Jiharkah";
$page_description = "Maqam Jiharkah";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/jiharkah.php";
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
                        <h1>Maqam Jiharkah</h1>
                        <h3>(n'apartient pas à une famille de maqams)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jiharkah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Jiharkah</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/maqam/jiharkah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="79,128,12" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="321.33" data-parent="#notation1"><!--variable-->
                      <area shape="circle" coords="145,120,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="225,112,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="301,102,13" href="#" alt="La♮↓" class="playNote" data-frequency="433" data-parent="#notation1"><!--variable down from 440 -->
                      <area shape="circle" coords="378,94,13" href="#" alt="Si♭↓" class="playNote" data-frequency="454" data-parent="#notation1"><!--variable down from 463.53 -->
                      <area shape="circle" coords="456,86,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Jins Haut Rast -->
                      <area shape="circle" coords="533,78,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="610,69,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="642.66" data-parent="#notation1"><!-- identical yo Jins Haut Rast 3rd -->
                      <area shape="circle" coords="688,61,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="180,14,330,43" href="../jins/jiharkah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="490,149,672,182" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Le Maqam Jiharkah est un maqam très rare qui commence avec le <a href="../jins/jiharkah.php">Jins Jiharkah</a> sur la tonique, suivi du <a href="../jins/upper_rast.php">Jins Haut Rast</a> sur le 5<sup>ième</sup> degré (avec sa tonique sur le 8<sup>ième</sup> degré).
                    </p>
                    <p>Le Maqam Jiharkah ne fait pas partie d'une famille de maqams.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/jiharkah/kallili_ya_suhbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/jiharkah/kallili_ya_suhbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Kallili ya Souhbou</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/maqam/jiharkah/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dawr ‘Ishna wi Shoufna</b>
                                    <span>Saleh Abdel Hayy (Égypte)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/samai_jiharkah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Jiharkah</b>
                                    <span>Orchestre Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Au Théatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/dulab_jiharkah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Doulab Jiharkah</b>
                                    <span>Orchestre Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Au Théatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/3ar_rozana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘al-Rozana</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span><img src="/img/cd.png"> Au Théatre Des Amandiers</span>
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
