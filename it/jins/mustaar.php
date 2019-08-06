<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Musta‘ar";
$page_description = "Jins Musta‘ar";
$page_keywords = "musique arabe, maqam, instruments, jins moustaar, jins mousta‘ar, iqa‘, iqaa, rythme, oud, qanun, nay, quart de ton, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/mustaar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Musta‘ar (ou Moustaar)</h1>
                        <h3>Une variation du <a href="sikah.php">Jins Sikah</a> avec seconde augmentée</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Musta‘ar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,91,12" href="#" alt="Ré♯" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="147,84,14" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="233,76,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="307,68,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="383,59,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="449,52,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Le Jins Mousta'ar est un <em>jins</em> de 3 notes. Il est noté ici avec sa tonique sur Mi<i class="icon-halfflat"></i> et son <em>ghammaz</em> sur Sol. Le Jins Mousta'ar est le premier jins du <a href="../maqam/mustaar.php">Maqam Musta‘ar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mustaar/raqq_il_habib.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mustaar/raqq_il_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Raqq el-Habib (1944)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Arouh Li Min (1958)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/habbeit_wala_banshi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habbeit Wala Banshi ‘Alayya (1930)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/huwwa_el_hobb_le3ba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Houwa el-Hobb Li‘ba</b>
                                    <span>Aziza Galal</span>
                                    <span>Musique de Mouhammad al-Mougi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/mawwal_qadi_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Qadi al-Gharam</b>
                                    <span>Abdel Hayy Hilmi (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/oud_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b><a href="../form/improv.php#taqsim">Taqsim</a> sur le <a href = "../instr/oud.php">Oud</a> en <a href="../maqam/sikah.php">Maqam Sikah</a></b>
                                    <span>Riyad al-Soumbati (Égypte)</span>
                                    <span><img src="/img/cd.png"> Taqaseem</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qanun_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b><a href="../form/improv.php#taqsim">Taqsim</a> sur le <a href = "../instr/qanun.php">Qanoun</a> en <a href="../maqam/sikah.php">Maqam Sikah</a></b>
                                    <span>‘Imad Moulki</span>
                                    <span>Ensemble Al-Tourath (Syrie)</span>
                                    <span><img src="/img/cd.png"> Gardens of Jasmin - Maqam Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qasida_qul_lil_maliha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Qul Lil-Maliha</b>
                                    <span>Sabah Fakhri (Syrie)</span>
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