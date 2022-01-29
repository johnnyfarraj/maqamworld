<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Rast";
$page_description = "Jins Rast";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/rast.php";
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
                        <h1>Jins Rast</h1>
                        <h3>Root jins of the <a href="../maqam/f_rast.php">Maqam Rast Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/rast.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Rast</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="41,110,12" href="#" alt="Lá" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="121,102,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="203,94,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="280,85,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="359,77,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="436,69,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="514,61,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="593,52,12" href="#" alt="Lá♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
				      <area shape="circle" coords="630,52,12" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <p>Jins Rast is a widely popular 5-note <em>jins</em>. It is notated here with its tonic on C and its <em>ghammaz</em> on G. Jins Rast is the first <em>jins</em> in <a href="../maqam/rast.php">Maqam Rast</a>, <a href="../maqam/suznak.php">Maqam Suznak</a>, and other <em>maqamat</em> in the <a href="../maqam/f_rast.php">Maqam Rast Family</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/rast/ghannili.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/rast/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ghannili Shwayy Shwayy (1945)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/3alalla_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ala Allah T‘ud (1970)</b>
                                    <span>Wadih al-Safi</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/min_3azzibak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Min ‘Azzibak</b>
                                    <span>Voz e música por Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/min_3izz_el_nawm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Min ‘Izz el-Nawm</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/ya_nas_el_dinye_dulab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Nas el-Dinye Dulab</b>
                                    <span>Sabah</span>
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