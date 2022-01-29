<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Bayati";
$page_description = "Jins Bayati";
$page_keywords = "arabic, music, arab, world, maqam, jins, bayati, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/bayati.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Bayati</h1>
                        <h3>jins inicial da <a href="../maqam/f_bayati.php">Família de Maqam Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Bayati</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap">
					  <area shape="circle" coords="71,105,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="151,96,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="235,88,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="311,79,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="392,71,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="472,63,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="547,53,12" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="626,45,12" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <p>
                        Jins Bayati é um <em>jins</em> de 4 notas. Está representado aqui com sua tônica em Ré e seu <em>ghammaz</em> em Sol. É o primeiro jins no <a href="../maqam/bayati.php">Maqam Bayati</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/bayati/3alalla_t3ud.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/bayati/3alalla_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Allah T‘ud (1970)</b>
                                    <span>Wadih al-Safi</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ataba - Malaffat (1995)</b>
                                    <span>Joseph Saqr</span>
                                    <span>Música de Ziad Rahbani</span>
                                    <span><img src="/img/cd.png"> Bema Enno</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Awwidti ‘Eini (1957)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1946)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="track" data-song="/audio/jins/bayati/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Baligh Hamdi (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/lamma_3al_bab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lamma ‘al-Bab</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>