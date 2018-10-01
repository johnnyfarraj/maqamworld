<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام عُشّاق مصري";
$page_description = "مقام عُشّاق مصري";
$page_keywords = "arabic, music, arab, world, maqam, jins, nahawand murassaa, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/ushaq_masri.php";
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
                        <h1>مقام عُشّاق مصري</h1>
                        <h3>من <a href="f_nahawand.php">عائلة مقام النهاوند</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/ushaq_masri.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="55,131,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="131,123,13" href="#" alt="E4" class="playNote" data-frequency="330" data-parent="#notation1">
	  <area shape="circle" coords="209,115,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="287,106,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="365,98,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="441,90,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!-- Bayati 2nd var-->
	  <area shape="circle" coords="518,82,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="595,73,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="114,10,292,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="414,9,548,40" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام عُشّاق مصري is a variation of <a href="nahawand.php">مقام نهاوند</a> with <a href="../jins/bayati.php">Jins Bayati</a> on the 5<sup>th</sup> degree, above the root <a href="../jins/nahawand.php">Jins Nahawand</a> on the 1<sup>st</sup> degree.
		</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_nahawand.php">عائلة مقام النهاوند</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ushaq_masri/dawr_ahibb_ashufak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ushaq_masri/dawr_ahibb_ashufak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dawr Ahibb Ashufak (1930)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ushaq_masri/ba3d_el_khisam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘d el-Khisam</b>
                                    <span>Sheikh Abu el-‘Ila Muhammad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ushaq_masri/layali_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Nahawand</b>
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

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
