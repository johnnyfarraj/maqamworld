<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Musta‘ar";
$page_description = "Maqam Musta‘ar";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, mustaar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/mustaar.php";
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
                        <h1>Maqam Musta‘ar</h1>
                        <h3>A member of the <a href="f_sikah.php">Maqam Sikah Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Musta‘ar</a>
                    </div>

                   
                    
                     <div class="notation" id="notation1">
                        <img src="/note/maqam/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="78,125,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="155,117,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="233,108,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="309,100,13" href="#" alt="A4♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="388,92,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="465,84,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="543,76,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="619,67,13" href="#" alt="E5<i class='icon-halfflat'></i>" class="playNote" data-frequency="640" data-parent="#notation1"><!-- var -->
                        <!-- Links -->
                      <area shape="rect" coords="73,13,226,41" href="../jins/mustaar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,13,433,41" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="488,5,597,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      
					</map>
                    <p>Maqam Musta‘ar is extremely rare as an independent maqam, but more common as a jins, or as a partial sayr within <a href="huzam.php">Maqam Huzam</a> and <a href="sikah.php">Maqam Sikah</a>. Its scale starts with <a href="../jins/mustaar.php">Jins Musta‘ar</a> on the <em>tonic</em>, followed by <a href="../jins/nahawand.php">Jins Nahawand</a> on the 3<sup>rd</sup> degree, and <a href="../jins/rast.php">Jins Rast</a> on the 6<sup>th</sup> degree.
                    </p>

                    <p>Explore other maqamat in the <a href="f_sikah.php">Maqam Sikah Family</a>.</p>

                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B-4xCFQlknL" target="_blank">Violin Taqsim in Maqam Musta‘ar</a> by Sami Abu Shumays.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/mustaar/aktiblak_gawabat.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/mustaar/aktiblak_gawabat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Aktiblak Gawabat</b>
                                    <span>Leila Mourad</span>
                                    <span>Music by Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/haramuha_minni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Haramuha Minni</b>
                                    <span>Fathiyya Ahmad</span>
                                    <span>Music by Muhammad al-Qasabgi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/raqq_el_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Raqq el-Habib (1944)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad al-Qasabgi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/ya_3adhili_la_talumni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ya ‘Adhili La Talumni (1924)</b>
                                    <span>Sheikh Abu el-‘Ila Muhammad</span>
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
    
    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
