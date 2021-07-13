<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijaz Murassa‘";
$page_description = "Jins Hijaz Murassa‘";
$page_keywords = "Jins Hijaz Murassa‘, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/hijaz_murassaa.php";
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
                        <h1>Jins Hijaz Murassa‘ <span class="badge badge-custom">Nuovo</span></h1>
                        <h3>Una variazione del <a href="hijaz.php">Jins Hijaz</a> con la quinta abbassata.</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijaz_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Hijaz Murassa‘</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="43,106,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="88,106,12" href="#" alt="Do♯" class="playNote" data-frequency="281.24" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="143,98,14" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="217,89,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="294,81,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="373,73,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="450,65,12" href="#" alt="La♭" class="playNote" data-frequency="422" data-parent="#notation1">

					</map>
                    <p>Il jins hijaz murassa‘ è un <em>jins</em> di 4 note. È scritto qui considerando il Re come sua tonica e il Sol come suo <em>ghammaz</em>. Il Jins Hijaz Murassa‘ non fa parte di alcun <a href="../maqam.php">maqam</a> e solitamente viene usato come modulazione dal <a href="hijaz.php">Jins Hijaz</a>, soprattutto nel <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/el-hobb-mahush-bis-sahl.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr el-Hobb Ma Huch Bis-Sahl</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badru Timmin (Taqsim con l'Oud)</b>
                                    <span>Ghada Chbeir (Libano)</span>
                                    <span>Musica di Sheikh Mursi al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badru Timmin Haza Husnan</b>
                                    <span>Voce e musica di Sheikh Mursi al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/laha_badrut_timm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Laha Badru-t-Tim</b>
                                    <span>Interpretazione di Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala al-Kasat (khana)</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Muhammad Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadduka al-Mayyass</b>
                                    <span>Muhammad Khayri (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zarani_al_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Zarani al-Mahbub</b>
                                    <span>Salatin al-Tarab (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zahr el-Laymun (1997)</b>
                                    <span>Sonia M'Barek (Tunisie)</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/maqam_isba3ain.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal sul Maqam Isba‘ayn</b>
                                    <span>Sonia M'Barek (Tunisie)</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
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