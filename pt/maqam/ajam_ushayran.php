<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Ajam ‘Ushayran";
$page_description = "Maqam ‘Ajam ‘Ushayran";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam ushayran, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/ajam_ushayran.php";
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
                        <h1>Maqam ‘Ajam ‘Ushayran</h1>
                        <h3>A member of the <a href="f_ajam.php">Maqam ‘Ajam Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam_ushayran.mp3"><i class="fa fa-fw fa-volume-up"></i>Pronunciation of ‘Ajam ‘Ushayran</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/ajam_ushayran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="66,85,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="144,93,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="221,101,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="298,109,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="376,118,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                      <area shape="circle" coords="453,126,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="530,134,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="608,142,13" href="#" alt="B3♭" class="playNote" data-frequency="231.77" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="60,7,232,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="470,6,595,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,155,390,184" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
		          </ map>

                    <p>Maqam ‘Ajam ‘Ushayran is an archaic version of <a href="ajam.php">Maqam ‘Ajam</a> with a different sayr, and has a completely different tonal emphasis as well. Rather than tonicizing its 5<sup>th</sup> scale degree (for starting the next jins), it tonicizes its 3<sup>rd</sup> and 6<sup>th</sup> scale degrees instead.</p>
                    <p>The Maqam ‘Ajam ‘Ushayran scale starts with the root <a href="../jins/ajam.php">Jins ‘Ajam</a> on the <em>tonic</em>, followed by <a href="../jins/kurd.php">Jins Kurd</a> on the 3<sup>rd</sup> degree then <a href="../jins/nahawand.php">Jins Nahawand</a> starting on the 6<sup>th</sup> degree.</p>
                    
                    <p>Explore other maqamat in the <a href="f_ajam.php">Maqam ‘Ajam Family</a>.</p>

                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B9xSSW8lUss" target="_blank">Violin Taqsim in Maqam ‘Ajam ‘Ushayran</a> by Sami Abu Shumays.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ayqadha al-Hubbu Fu'adi</b>
                                    <span>Hassan al-Haffar</span>
                                    <span><img src="/img/cd.png"> The Aleppo Suites Vol.2</span>
                                    <span>Music by Bahjat Hassan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/da3i_al_hawa_qad_sah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Da‘i al-Hawa Qad Sah</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/il_hubbi_fi_albi_amana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobbi Fi Albi Amana</b>
                                    <span>Fathiyya Ahmad</span>
                                    <span>Music by Muhammad al-Qasabgi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/ma_li_3ayni_absarat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma Li ‘Ayni Absarat</b>
                                    <span>Sabah Fakhri</span>
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
