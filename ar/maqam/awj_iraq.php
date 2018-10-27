<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام أوج عراق";
$page_description = "مقام أوج عراق";
$page_keywords = "عود ,موسيقى عربية,مقام أوج عراق ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/awj_iraq.php";
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
                        <h1>مقام أوج عراق</h1>
                        <h3>من <a href="f_sikah.php">عائلة مقام السيكاه</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
                  <area shape="circle" coords="54,69,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
                  <area shape="circle" coords="123,77,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
                  <area shape="circle" coords="212,85,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                  <area shape="circle" coords="289,93,13" href="#" alt="لا♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
                  <area shape="circle" coords="367,102,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                  <area shape="circle" coords="444,110,13" href="#" alt="فا♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
                  <area shape="circle" coords="521,117,13" href="#" alt="مي♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
                  <area shape="circle" coords="599,126,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
                  <area shape="circle" coords="676,134,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
                  <area shape="circle" coords="752,142,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,7,540,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,745,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
	           </map>
		      <br>

                    <h5>
                        مقام أوج عراق هو صنف من <a href="huzam.php">مقام راحة الارواح/مقام هُزام</a> او <a href="iraq.php">مقام عراق</a>
                        يبدأ سيره من الجواب (الدرجة الثامنة) ثم يتابع نزولاً الى القرار،
                        وهو يشارك <a href="huzam.php">مقام هُزام</a> بكل اجناسه.
                    </h5>
                    <h5>
                        يبدأ سلّم مقام أوج عراق <a href="../jins/sikah.php">بجنس السيكاه</a> (وهو جنس الجذر) على القرار (الدرجة الاولى)،
                        يليه <a href="../jins/hijaz.php">جنس الحجاز</a> على الدرجة الثالثة (الغماز)، 
                        ثم <a href="../jins/sikah.php">جنس سيكاه</a> مرة ثانية على الجواب (الدرجة الثامنة).
                    </h5>
                    <br>
                    <h5>انظر الى مقامات اخرى في <a href="f_sikah.php">عائلة مقام السيكاه</a>.</h5>
                    <br>
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح يا سميري ضاع صبري</b>
                                    <span>المطرب محمد خيري (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح هيّا وا نديمِ</b>
                                    <span>فرقة سامر نشّار (سوريا)</span>
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
