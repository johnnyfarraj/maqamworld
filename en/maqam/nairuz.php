<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nairuz/ Maqam Yakah";
$page_description = "Maqam Nairuz/ Maqam Yakah";
$page_keywords = "arabic, music, arab, world, maqam, jins, nairuz, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/nairuz.php";
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
                        <h1>Maqam Nairuz</h1>
                        <h1>Maqam Yakah</h1>
                        <h3>A member of the <a href="f_rast.php">Maqam Rast Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nairuz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Nairuz</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/yakah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Yakah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/nairuz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="74,135,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="150,126,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="228,118,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="305,110,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="383,102,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="459,93,13" href="#" alt="A4<i class='icon-halfflat'></i>" class="playNote" data-frequency="426.67" data-parent="#notation1"><!-- Bayat 2nd, tuned up from A4♭=420 -->
					  <area shape="circle" coords="537,85,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="615,77,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="164,5,275,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="438,5,570,34" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Maqam Nairuz starts with the root <a href="../jins/rast.php">Jins Rast</a> on the <em>tonic</em>, followed by <a href="../jins/bayati.php">Jins Bayati</a> on the 5<sup>th</sup> degree. </p>
                    <p>Maqam Nairuz is quite rare by itself, but it is prominent as a sayr within <a href="suznak.php">Maqam Suznak</a>/<a href="rast.php">Maqam Rast</a> – because of the affinity between <a href="../jins/bayati.php">Jins Bayati</a> and <a href="../jins/hijaz.php">Jins Hijaz</a> on the 5<sup>th</sup> scale degree.
                    </p>
                    
                    <p><strong>Maqam Yakah</strong> is an archaic version of Maqam Nairuz, based on note G3 in the Arabic archaic 24-tone scale (named “Yakah”) rather than note C4.</p>

                    <p>Explore other maqamat in the <a href="f_rast.php">Maqam Rast Family</a>.</p>

                    <p>Watch a 1-minute sample <a href="https://www.instagram.com/p/B99Z0F2lS-T" target="_blank">Violin Taqsim in Maqam Nairuz</a> by Sami Abu Shumays.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nairuz/ya_hilalan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nairuz/ya_hilalan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Hilalan</b>
                                    <span>Firqat al-Musiqa al-Arabiyya (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/mubarqa3ul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mubarqa'u al-Jamal</b>
                                    <span>Hasan al-Haffar</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/asl_il_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Asl il-Gharam (1945)</b>
                                    <span>Nour el-Hoda</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Shwayy Shwayy (1945)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariya Ahmad (Egypt)</span>
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
