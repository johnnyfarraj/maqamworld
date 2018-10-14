<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام كِردان/مقام سازكار";
$page_description = "مقام كِردان/مقام سازكار";
$page_keywords = "arabic, music, arab, world, مقام كِردان, مقام سازكار, jins, kirdan, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/kirdan.php";
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
                        <h1>مقام كِردان</h1>
                        <h1>مقام سازكار</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/kirdan.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="75,81,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="148,89,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
	  <area shape="circle" coords="225,97,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="304,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="381,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="458,123,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="537,131,13" href="#" alt="D4♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
	  <area shape="circle" coords="589,131,13" href="#" alt="D4♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="640,139,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="95,6,274,38" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="420,9,525,38" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,173,528,202" href="../jins/sazkar.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام كِردان is really a version of <a href="rast.php">مقام راسْت</a> whose sayr starts on the octave tonic and eventually descends to the root tonic. Its scale starts with either the root <a href="../jins/rast.php">Jins Rast</a> or <a href="../jins/sazkar.php">Jins Sazkar</a> on the <em>tonic</em>, followed by <a href="../jins/upper_rast.php">Jins Upper Rast</a> on the 5<sup>th</sup> degree (with its tonic up on the 8<sup>th</sup> degree). As such, مقام سازكار is nearly identical to <a href="rast.php">مقام راسْت</a>, except for the prominence of the raised 2<sup>nd</sup> degree that occurs in some melodic passages.</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kirdan/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kirdan/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Sihtu Wajdan</b>
                                    <span>اوريانتاليا</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/ya_shadil_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Shadi al-Alhan</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayrana Leh (1930)</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>Music by Dawud Husni</span>
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
