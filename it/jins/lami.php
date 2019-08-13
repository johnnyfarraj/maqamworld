<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Lami";
$page_description = "Jins Lami";
$page_keywords = "musique arabe, maqam, instruments, jins lami, iqa‘, iqaa, rythme, oud, qanun, nay, quart de ton, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/lami.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Lami</h1>
                        <h3>Un Jins de 4 notes</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/lami.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Lami</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="51,93,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="126,85,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="202,77,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="281,69,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="356,61,13" href="#" alt="La♭" class="playNote" data-frequency="411" data-parent="#notation1">
					  <area shape="circle" coords="433,53,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Il Jins Lami est un <em>jins</em> de 4 notes. Il est noté ici avec sa tonique sur Ré et son <em>ghammaz</em> sur Sol. Il Jins Lami est le premier jins du <a href="../maqam/lami.php">Maqam Lami</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>el-Bortoqal (1938)</b>
                                    <span>Interprétation et Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahmad Ya Habibi</b>
                                    <span>Interprétation et Musica di Sabri al-Moudallal (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/el_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Najmat (1964)</b>
                                    <span>Interprétation et Musica di Wadih al-Safi (Liban)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Goulli Ya Hilou</b>
                                    <span>Kazem el-Saher (Irak)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/qasidat_aqulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Aqoulou Wa Qad Nahat Bi Qourbi Hamamatoun</b>
                                    <span>Nazem al-Ghazali (Irak)</span>
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