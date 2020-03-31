<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Μπαστανικάρ";
$page_description = "Μακάμ Μπαστανικάρ";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah, bastanikar, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/bastanikar.php";
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
                        <h1>Μακάμ Μπαστανικάρ</h1>
                        <h3>Membre de la <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bastanikar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Bastanikar</a>
                    </div>


                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bastanikar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,147,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="162,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="239,131,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="316,123,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="394,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="470,106,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2- tuned up from 365.32 -->
					  <area shape="circle" coords="548,98,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- hijaz 3 tuned down from 440-->
					  <area shape="circle" coords="625,90,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="702,82,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="781,74,13" href="#" alt="Ré♭" class="playNote" data-frequency="548" data-parent="#notation1">
					  <area shape="circle" coords="857,65,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1">
					  <area shape="circle" coords="934,57,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="95,11,213,40" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="333,12,446,40" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="445,149,565,175" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="710,6,835,31" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

				      </map>

                    <p>Le Μακάμ Μπαστανικάρ est en fait le <a href="../jins/sikah.php">Τζινς Σίκα</a> suivi du <a href="saba.php">Μακάμ Σάμπα</a>. Il commence avec le <a href="../jins/sikah.php">Τζινς Σίκα</a> comme jins de base sur la tonique, suivi du <a href="../jins/saba.php">Jins Saba</a> sur le 3<sup>ième</sup> degré, un <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> *overlapping* sur le 5<sup>ième</sup> degré et finalement, un <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> à l'octave supérieure.</p>

                    <p>Explorez d'autres maqams dans la <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bastanikar/zalamu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bastanikar/zalamu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Zalamu (1957)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/ahl_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahl el-Hawa (1958)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/inti_fakrani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Inti Fakrani (1938)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/anshidi_ya_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Anshidi Ya Saba</b>
                                    <span>Orchestre Palestinien National Arabe</span>
                                    <span>Director Ramzi Abou Radwan (Palestine)</span>
                                    <span>Musique de Yehiya al-Saoudi</span>‘
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/aqbal_al_subhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Aqbala al-Soubhou Youghanni</b>
                                    <span>Ensemble Ornina (Syrie)</span>
                                    <span>Chef d'orchestre Dr. Mouhammad Qadri Dalal</span>
                                    <span>Musique de Bakri al-Kurdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/nuzhatul_arwahi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Nouzhatou al-Arwahi Badri</b>
                                    <span>(interprète inconnu)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_dalal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud en Μακάμ Μπαστανικάρ</b>
                                    <span>Mouhammad Qadri Dalal (Syrie)</span>
                                    <span><img src="/img/cd.png"> Maqams Insolites</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud en <a href="../maqam/sikah.php">Μακάμ Σίκα</a></b>
                                    <span>Riyad al-Soumbati (Égypte)</span>
                                    <span><img src="/img/cd.png"> Taqaseem Oud</span>
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
