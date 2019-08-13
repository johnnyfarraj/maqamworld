<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Kurd";
$page_description = "Jins Kurd";
$page_keywords = "musique arabe, maqam, instruments, jins kurd, iqa‘, iqaa, rythme, oud, qanun, nay, quart de ton, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/kurd.php";
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
                        <h1>Jins Kurd</h1>
                        <h3>Jins de base de la <a href="../maqam/f_kurd.php">Famiglia Maqam Kurd</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Kurd</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="109,89,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="183,81,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1"><!--minor 2nd-->
					  <area shape="circle" coords="261,73,13" href="#" alt="Fa♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="339,65,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="411,57,12" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="488,49,12" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Il Jins Kurd est un <em>jins</em> de 4 notes. Il est noté ici avec sa tonique sur Ré et son <em>ghammaz</em> sur Sol. Il Jins Kurd est le premier jins du <a href="../maqam/kurd.php">Maqam Kurd</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/kurd/3awwidti_3eini.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/kurd/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Awwidti Eini (1957)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musica di Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hayyarti_albi_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayyarti Albi Ma‘ak (1961)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musica di Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hibbi_zurni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hibbi Zurni Ma Tayassar</b>
                                    <span>Karem Mahmoud (Égypte)</span>
                                    <span>Musica di Darwich al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/inta_omri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Inta ‘Omri (1964)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/mshghoul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mashghoul ‘Aleik</b>
                                    <span>Interprétation et Musica di Karem Mahmoud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_bahjet_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Bahjet el-Rouh</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_zalimni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Zalimni (1951)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musica di Riyad al-Soumbati (Égypte)</span>
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