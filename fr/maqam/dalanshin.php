<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Dalanshin";
$page_description = "Maqam Dalanshin";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/dalanshin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Dalanshin</h1>
                        <h3>A member of the <a href="f_rast.php">Maqam Rast Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Dalanshin</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="84,58,13" href="#" alt="E5♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="161,66,13" href="#" alt="D5♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="240,74,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="317,83,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="393,90,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="471,99,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="548,107,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="626,115,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                       <area shape="circle" coords="704,123,13" href="#" alt="D4♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="780,133,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="132,5,362,34" href="../jins/saba_dalanshin.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="260,142,443,171" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="573,4,682,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
					</map>
                    <p>
                    Maqam Dalanshin starts with <a href="../jins/saba_dalanshin.php">Jins Saba Dalanshin</a> on the octave of <a href="rast.php">Maqam Rast</a> then transitions back to the Maqam Rast scale with <a href="../jins/upper_rast.php">Jins Upper Rast</a> on the 5<sup>th</sup> degree (with its tonic up on the 8<sup>th</sup> degree), and <a href="../jins/rast.php">Jins Rast</a> on the <em>tonic</em>. </p>
                    </p>
			<p>
                    There are not too many songs in this maqam, instead it is more frequently used as a modulation from <a href="rast.php">Maqam Rast</a>.</p>

                    <p>Explore other maqamat in the <a href="f_rast.php">Maqam Rast Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/dalanshin/ya_mal_il_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/dalanshin/ya_mal_il_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qadd Ya Mal il-Sham</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Ahmad Abu Khalil al-Qabbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala el-Kasat</b>
                                    <span>Muhammad Khayri</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/kull_illi_habb_itnasaf.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Kull Illi Habb Itnasaf (1931)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr ‘Ishna w Shufna</b>
                                    <span>Saleh Abdel Hayy</span>
                                    <span>Music by Muhammad ‘Uthman</span>
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
