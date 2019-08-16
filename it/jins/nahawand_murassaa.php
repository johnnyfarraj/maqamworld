<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Nahawand Murassa‘";
$page_description = "Jins Nahawand Murassa‘";
$page_keywords = "Jins Nahawand Murassa‘, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/nahawand_murassaa.php";
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
                        <h1>Jins Nahawand Murassa‘</h1>
                        <h3>Una variazione del <a href="nahawand.php">Jins Nahawand</a> con la quinta abbassata.</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Nahawand Murassa‘</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="55,110,12" href="#" alt="Si♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="126,102,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="202,94,13" href="#" alt="Re" class="playNote" data-frequency="293.33"  data-parent="#notation1">
					  <area shape="circle" coords="280,86,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="357,78,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-Hijaz 1st-->
					  <area shape="circle" coords="434,70,13" href="#" alt="Sol♭" class="playNote" data-frequency="373.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="509,62,12" href="#" alt="La♮" class="playNote" data-frequency="444" data-parent="#notation1"><!--var-->

					</map>
                    
                    <p>Il Jins Nahawand Murassa‘ non ha un <em>ghammaz</em>, per questo non ha una dimensione definita. E' scritto qui considerando il Do come sua tonica. Il Jins Nahawand Murassa‘ è il primo <em>jins</em> del <a href="../maqam/nahawand_murassaa.php">Maqam Nahawand Murassa‘</a>.
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
                                    <b>Dulab Nahawand (de Sibuni Ya Nas)</b>
                                    <span>Sabah Fakhri (Siria)</span>
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
                                    <span>Leila Murad (Egitto)</span>
                                    <span>Musica di Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Khusara (1957)</b>
                                    <span>Abdel Halim Hafez (Egitto)</span>
                                    <span>Musica di Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Taht el-Shibbak (Assolo di fisarmonica)</b>
                                    <span>Fatima Serhan</span>
                                    <span>Musica di ‘Aziz Uthman</span>
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
                                    <span>Musica di Muhammad al-Mugi</span>
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