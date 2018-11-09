<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام ماهور";
$page_description = "مقام ماهور";
$page_keywords = "عود,مقام ماهور ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/mahur.php";
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
                        <h1>مقام ماهور</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/mahur.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="60,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="136,89,13" href="#" alt="سي♮" class="playNote" data-frequency="495" data-parent="#notation1">
	  <area shape="circle" coords="213,97,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="290,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="368,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="445,122,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="522,130,13" href="#" alt="ري♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="599,138,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="75,5,277,35" href="../jins/upper_ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="394,5,500,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

                    <h5>
		مقام ماهور فرع من <a href="f_rast.php">عائلة مقام الراست</a>.
		يبدأ سلّم هذا المقام <a href="../jins/rast.php">بجنس الراست</a> (وهو جنس الجذر) على القرار
		ويليه <a href="../jins/upper_ajam.php">جنس العجم الاعلى</a>
		(ويبدأ سلم هذا الجنس على الغماز اي الدرجة الخامسة، ويقع قراره على الدرجة الثامنة من سلم المقام).
		</h5>
		<br>

                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/mahur/hayyara_al_afkar.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/mahur/hayyara_al_afkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح حيّر الأفكار بدري</b>
                                    <span>غناء الشيخ سيد الصفتي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mahur/bi_sifatin_ja3alatni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح بصفاتٍ جعلتني</b>
                                    <span>فرقة شربل روحانا (لبنان)</span>
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
