<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Husayni";
$page_description = "Maqam Husayni";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/husayni.php";
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
                        <h1>Maqam Husayni</h1>
                        <h3>A member of the <a href="f_bayati.php">Maqam Bayati Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/husayni.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Husayni</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/husayni.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="55,95,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="131,87,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!--Bayati LA 2nd, variable -->
                      <area shape="circle" coords="183,87,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="233,79,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="313,71,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="391,103,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="470,111,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="551,121,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati RE 2nd, variable -->
                      <area shape="circle" coords="630,129,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
                       <!-- Links -->
		<!-- Husayni is not a Jins, it's a special case (documented in IAM)
                      <area shape="rect" coords="116,8,304,39" href="../jins/husayni.php" class="mapLink" data-parent="#notation1">
		-->
                      <area shape="rect" coords="450,8,580,39" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Maqam Husayni is not very common as an independent maqam in the Arabic tradition, though its sayr (emphasizing the 5<sup>th</sup> scale degree as a note of tension resolving down to the 4<sup>th</sup> degree) is obligatory within <a href="bayati.php">Maqam Bayati</a>. In the folk music of the wider region, this is actually the most common variant of Bayati, with its scale starting with the root <a href="../jins/bayati.php">Jins Bayati</a> on the <em>tonic</em>.
                    </p>
                    
                    <p>Explore other maqamat in the <a href="f_bayati.php">Maqam Bayati Family</a>.</p>

                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B_AyMxglo4a/" target="_blank">Violin Taqsim in Maqam Husayni</a> by Sami Abu Shumays.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/husayni/billadhi_askara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/husayni/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bil-ladhi Askara</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Nagham al-Ams Vol. 12 (Bayati)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hal ‘Ala al-Astar</b>
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Al Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/khala_al_3idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Khala al-‘Idhar</b>
                                    <span>Khaled al-Hafez</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Music and Vocals by Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/samai_bayati_khana2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan (Khana 2)</b>
                                    <span>Salah ‘Arram Ensemble (Egypt)</span>
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
