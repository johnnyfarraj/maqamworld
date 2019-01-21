<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Awj ‘Iraq";
$page_description = "Maqam Awj ‘Iraq";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, awj iraq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/awj_iraq.php";
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
                        <h1>Maqam Awj ‘Iraq</h1>
                        <h3>A member of the <a href="f_sikah.php">Maqam Sikah Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Awj ‘Iraq</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="54,69,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="123,77,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="212,85,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="289,93,13" href="#" alt="A4♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
					  <area shape="circle" coords="367,102,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="444,110,13" href="#" alt="F4♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
					  <area shape="circle" coords="521,117,13" href="#" alt="E4♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
					  <area shape="circle" coords="599,126,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="676,134,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="752,142,13" href="#" alt="B3<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,7,540,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,745,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Maqam Awj ‘Iraq is a version of <a href="huzam.php">Maqam Rahat al-Arwah/Maqam Huzam</a> and <a href="iraq.php">Maqam ‘Iraq</a> whose sayr starts at the octave tonic and descends to the tonic – though it shares most of the same ajnas as <a href="huzam.php">Maqam Huzam</a>.</p>
                    <p>The Maqam Awj ‘Iraq scale starts with the root <a href="../jins/sikah.php">Jins Sikah</a> on the <em>tonic</em>, then <a href="../jins/hijaz.php">Jins Hijaz</a> on the 3<sup>rd</sup> degree followed by another <a href="../jins/sikah.php">Jins Sikah</a> on the 8<sup>th</sup> degree.
                    </p>

                    <p>Explore other maqamat in the <a href="f_sikah.php">Maqam Sikah Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Samiri Da‘a Sabri</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hayya Wa Nadim</b>
                                    <span>Samer Nashar</span>
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
