<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام سوزناك";
$page_description = "مقام سوزناك";
$page_keywords = "arabic, music, arab, world, maqam, jins, suznak, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/suznak.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>مقام سوزناك</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/suznak.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="65,137,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="141,129,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="219,121,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="296,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="374,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="450,97,13" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="528,89,13" href="#" alt="B4♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="606,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="154,9,265,36" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="422,8,546,35" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام سوزناك is the most popular modulation of <a href="rast.php">مقام راسْت</a>, where the modulation to <a href="../jins/hjaz.php">Jins Hijaz</a> on the 5<sup>th</sup> scale degree is practically obligatory in any taqsim or mawwal starting on the root <a href="jns/rast.php">Jins Rast</a>.
		</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/suznak/qadd_malik_ya_hilwa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/suznak/qadd_malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qadd Malik Ya Hilwa</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/dawr_asl_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Asl il-Gharam</b>
                                    <span>Nour el-Hoda</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/ghannili_verse3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Shwayy Shwayy (1945)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariyya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/tahmila_suznak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tahmila Suznak</b>
                                    <span>Simon Shaheen</span>
                                    <span><img src="/img/cd.png"> Turath - Masterworks of the Middle East</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suznak/taqsim_qanun_salman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Qanun in مقام سوزناك</b>
                                    <span>Abraham Salman</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
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

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
