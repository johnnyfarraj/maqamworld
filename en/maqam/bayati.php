<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Bayati";
$page_description = "Maqam Bayati";
$page_keywords = "arabic, music, arab, world, maqam, jins, bayati, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/bayati.php";
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
                        <h1>Maqam Bayati</h1>
                        <h3>The principal maqam in the <a href="f_bayati.php">Maqam Bayati Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Bayati</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,128,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="145,120,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="222,112,13" href="#" alt="F4" class="playNote" data-frequency="345" data-parent="#notation1"><!-- fine tune down from 347.65 -->
					  <area shape="circle" coords="300,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="377,96,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="454,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="531,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="609,72,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
				      <area shape="circle" coords="684,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="762,96,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="841,88,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="917,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="995,72,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="111,7,242,36" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="370,8,549,37" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="783,8,890,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
				     </map>

                    <p>Maqam Bayati is by far one of the most popular and common maqamat in the Arabic repertory. It is also the main maqam in the Bayati Family. Its scale starts with <a href="../jins/bayati.php">Jins Bayati</a> on the <em>tonic</em> followed by either <a href="../jins/nahawand.php">Jins Nahawand</a> or <a href="../jins/rast.php">Jins Rast</a> on the 4<sup>th</sup> degree.
                    </p>
                    
                    <p><strong>Maqam Muhayyar</strong> is a version of Maqam Bayati whose <em>sayr</em> starts at the octave note (called <em>Muhayyar</em> in the old Arabic scale). Maqam Muhayyar often uses <a href="../jins/rast.php">Jins Rast</a> on the 4<sup>th</sup> degree to ascend then emphasizes <a href="../jins/bayati.php">Jins Bayati</a> on the octave before descending through the other ajnas common to Maqam Bayati.
                    </p>

                    <p>Explore other maqamat in the <a href="f_bayati.php">Maqam Bayati Family</a>.</p>
                    
                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B_FX2vUFKmX/" target="_blank">Violin Taqsim in Maqam Bayati</a> by Sami Abu Shumays.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Balad el-Mahbub Waddini (1935)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/akun_sa3id.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Akun Sa‘id (1932)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariya Ahmad (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/lamma_enta_nawi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lamma-nta Nawi (1929)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/mijana_wa_3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mijana and ‘Ataba</b>
                                    <span>Wadih Al-Safi</span>
                                    <span>Music from Lebanese Folklore</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/imlali_al_aqdaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Imlali al-Aqdaha Sirfan</b>
                                    <span>Sabah Fakhri (Traditional)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/nura_nura.mp3">
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

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Rayt Minnun (Qanun Taqsim)</b>
                                    <span>Fairouz</span>
                                    <span>Music by Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Rayt Minnun</b>
                                    <span>Fairouz</span>
                                    <span>Music by Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_3aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan</b>
                                    <span>Farhan Sabbagh (Oud solo)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_shalfun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Iskandar Shalfun</b>
                                    <span>Ensemble Morkos</span>
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
