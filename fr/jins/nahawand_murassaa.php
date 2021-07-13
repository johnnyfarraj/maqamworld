<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Nahawand Mourassa‘";
$page_description = "Jins Nahawand Mourassa‘";
$page_keywords = "musique arabe, maqam, instruments, jins nahawand mourassa‘, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/nahawand_murassaa.php";
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
                        <h1>Jins Nahawand Mourassa‘ (ou Mourassaa)</h1>
                        <h3>Une variation du <a href="nahawand.php">Jins Nahawand</a> avec quinte abaissée</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nahawand Mourassa‘</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="55,110,12" href="#" alt="Si♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="126,102,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="202,94,13" href="#" alt="Ré" class="playNote" data-frequency="293.33"  data-parent="#notation1">
					  <area shape="circle" coords="280,86,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="357,78,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-Hijaz 1st-->
					  <area shape="circle" coords="434,70,13" href="#" alt="Sol♭" class="playNote" data-frequency="373.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="509,62,12" href="#" alt="La♮" class="playNote" data-frequency="444" data-parent="#notation1"><!--var-->

					</map>
                    <p>Le Jins Nahawand Mourassa‘ n'a pas de <em>ghammaz</em> et donc pas de taille définie. Il est noté ici avec sa tonique sur Do. Le Jins Nahawand Mourassa‘ est le premier <em>jins</em> du <a href="../maqam/nahawand_murassaa.php">Maqam Nahawand Mourassa‘</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Doulab Nahawand (de Sibouni Ya Nas)</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/habbeit_gamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Habbeit Gamalak</b>
                                    <span>Leila Mourad (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Khousara (1957)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Taht el-Chibbak (Accordion Solo)</b>
                                    <span>Fatima Serhan</span>
                                    <span>Musique de ‘Aziz Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Min Hobbi Fik Ya Gari (1958)</b>
                                    <span>Horeyya Hassan</span>
                                    <span>Musique de Mouhammad al-Mougi</span>
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