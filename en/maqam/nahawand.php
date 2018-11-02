<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nahawand";
$page_description = "Maqam Nahawand";
$page_keywords = "arabic, music, arab, world, maqam, jins, nahawand, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/nahawand.php";
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
                        <h1>Maqam Nahawand</h1>
                        <h3>The principal maqam in the <a href="f_nahawand.php">Maqam Nahawand Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Nahawand</a>
                    </div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/farahfaza.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Farahfaza</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="67,137,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="144,129,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="221,121,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="298,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="376,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="453,97,13" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="530,89,13" href="#" alt="B4♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="608,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="685,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="761,96,13" href="#" alt="A4♭" class="playNote" data-frequency="420" data-parent="#notation1"><!-- unchanged -->
                      <area shape="circle" coords="839,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="135,11,308,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="440,7,558,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="670,11,786,39" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Maqam Nahawand is the main maqam in the Nahawand Family. Its scale starts with the root <a href="../jins/nahawand.php">Jins Nahawand</a> on the <em>tonic</em>, followed by either <a href="../jins/hijaz.php">Jins Hijaz</a> or <a href="../jins/kurd.php">Jins Kurd</a> on the 4<sup>th</sup> degree.</p>
                    </p>
                    <p><strong>Maqam Farahfaza</strong> is Maqam Nahawand transposed to a tonic of G. </p>

                    <p>Explore other maqamat in the <a href="f_nahawand.php">Maqam Nahawand Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nahawand/balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Balad el-Mahbub (1951)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/alf_leila_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w-Leila (1969)</b>
                                    <span>Umm Kuthum</span>
                                    <span>Music by Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dhikrayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dhikrayati (1944)</b>
                                    <span>Music by Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/hati_isqiniha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hat Isqiniha</b>
                                    <span>Hassan al-Haffar</span>
                                    <span>Music by Yehya al-Sa‘udi</span>
                                    <span><img src="/img/cd.png"> The Aleppo Suites</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/ramani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ramani Bi Sahmi Hawahu</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Music by Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_masud_jamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nahawand</b>
                                    <span>Simon Shaheen Ensemble</span>
                                    <span>Music by Mesut Cemil (Turkey)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_safar_ali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nahawand</b>
                                    <span>Abdel Halim Noueirah Ensemble</span>
                                    <span>Music by Safar ‘Ali</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_farahfaza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Farahfaza</b>
                                    <span>Simon Shaheen Ensemble</span>
                                    <span>Music by Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_jamilbey.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Nahawand</b>
                                    <span>Anouar Brahem</span>
                                    <span>Music by Tanburi Cemil Bey</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_yorgo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa Nahawand</b>
                                    <span>Abdel Halim Nuwayra Ensemble</span>
                                    <span>Music by Yorgo Baganos</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dulab_aboul_ela.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Nahawand</b>
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
