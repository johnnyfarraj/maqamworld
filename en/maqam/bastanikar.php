<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Bastanikar";
$page_description = "Maqam Bastanikar";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, bastanikar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/bastanikar.php";
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
                        <h1>Maqam Bastanikar</h1>
                        <h3>A member of the <a href="f_sikah.php">Maqam Sikah Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bastanikar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Bastanikar</a>
                    </div>


                      <div class="notation" id="notation1">
                        <img src="/note/maqam/bastanikar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,147,13" href="#" alt="B3<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="162,139,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="239,131,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="316,123,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="394,114,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="470,106,13" href="#" alt="G4♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2- tuned up from 365.32 -->
					  <area shape="circle" coords="548,98,13" href="#" alt="A4♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- hijaz 3 tuned down from 440-->
					  <area shape="circle" coords="625,90,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="702,82,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="781,74,13" href="#" alt="D5♭" class="playNote" data-frequency="548" data-parent="#notation1">
					  <area shape="circle" coords="857,65,13" href="#" alt="E5♮" class="playNote" data-frequency="660" data-parent="#notation1">
					  <area shape="circle" coords="934,57,13" href="#" alt="F5" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="95,11,213,40" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="333,12,446,40" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="445,149,565,175" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="710,6,835,31" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

				      </map>

                    <p>Maqam Bastanikar is effectively <a href="../jins/sikah.php">Jins Sikah</a> followed by <a href="saba.php">Maqam Saba</a>. Its scale starts with the root <a href="../jins/sikah.php">Jins Sikah</a> on the <em>tonic</em>, then <a href="../jins/saba.php">Jins Saba</a> on the 3<sup>rd</sup> degree, an overlapping <a href="../jins/hijaz.php">Jins Hijaz</a> on the 5<sup>th</sup> degree, and finally <a href="../jins/nikriz.php">Jins Nikriz</a> on the octave.</p>

                    <p>Explore other maqamat in the <a href="f_sikah.php">Maqam Sikah Family</a>.</p>
                    
                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B-zzc0JFZpL" target="_blank">Violin Taqsim in Maqam Bastanikar</a> by Sami Abu Shumays.</p>

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
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Muhammad Abdel Wahab (Egypt)</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariya Ahmad (Egypt)</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad al-Qasabgi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/anshidi_ya_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Anshidi Ya Saba</b>
                                    <span>Palestininan National Arabic Orchestra</span>
                                    <span>Director Ramzi Abu Radwan</span>
                                    <span>Music by Yehiya al-Sa‘udi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/aqbal_al_subhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Aqbala al-Subhu Yughanni</b>
                                    <span>Ensemble Ornina (Syria)</span>
                                    <span>Conductor Dr. Muhammad Qadri Dalal</span>
                                    <span>Music by Bakri al-Kurdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/nara_al_3iqda.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Nara al-‘Iqda</b>
                                    <span>Ensemble Ornina (Syria)</span>
                                    <span>Conductor Dr. Muhammad Qadri Dalal</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/maqam/bastanikar/nuzhatul_arwahi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Nuzhatu al-Arwahi Badri</b>
                                    <span>(performer unknown)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_dalal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud in Maqam Bastanikar</b>
                                    <span>Muhammad Qadri Dalal</span>
                                    <span><img src="/img/cd.png"> Maqamat Insolites</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud in Maqam Sikah</b>
                                    <span>Riyad al-Sunbati</span>
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
