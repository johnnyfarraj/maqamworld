<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام أثر كُرد";
$page_description = "مقام أثر كُرد";
$page_keywords = "arabic, music, arab, world, maqam, jins, athar_kurd, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/ajam_kurd.php";
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
                        <h1>مقام أثر كُرد</h1>
                        <h3>من <a href="f_nikriz.php">مقام نِكريز Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="63,131,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
	  <area shape="circle" coords="141,123,13" href="#" alt="D4♭" class="playNote" data-frequency="274" data-parent="#notation1">
	  <area shape="circle" coords="218,115,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
	  <area shape="circle" coords="296,107,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1">
	  <area shape="circle" coords="373,99,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="450,91,13" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="528,83,13" href="#" alt="B4♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="605,75,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="115,5,294,34" href="../jins/athar_kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="337,144,483,175" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>Maqam Athar Kurd is a very rare maqam that seems to be a 20<sup>th</sup> century development. Its scale starts with <a href="../jins/athar_kurd.php">Athar Kurd</a> on the <em>tonic</em> followed by <a href="../jins/hijazkar.php">Jins Hijazkar</a> centered around the 5<sup>th</sup> degree.</h5>
                    <h5>The Maqam Athar Kurd scale is a hybrid between <a href="nawa_athar.php">مقام نَو أثر</a>
                    (with the raised 4<sup>th</sup> and 7<sup>th</sup> degrees) and <a href="kurd.php">مقام كُرد</a>
                    (with the lowered 2<sup>nd</sup> degree), hence the name. </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_nikriz.php">مقام نِكريز Family</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/athar_kurd/raydak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Msafir w Albi Ma‘ak (1950)</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>الحان احمد صدقي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/el_hana_wel_widd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hana wel-Widd (1975)</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>Music by Abdel Mun‘im al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا فجر نورك طلّ وبان</b>
                                    <span>غناء بليغ حمدي (مصر)</span>
                                    <span>الحان يوسف شوقي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/samai_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي حجازكار كرد</b>
                                    <span>فرقة الكندي (سوريا\فرنسا)</span>
                                    <span><img src="/img/cd.png"> The Whirling Dervishes of Damascus Vol. 2</span>
                                    <span>الحان صالح المهدي (تونس)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud</b>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                    <span><img src="/img/cd.png"> Taqaseem Oud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud Athar Kurd</b>
                                    <span>د. محمد قدري دلال  (حلب)</span>
                                    <span><img src="/img/cd.png"> أسطوانة المقامات الغريبة</span>
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
