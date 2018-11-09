<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام صَبا زَمزَم";
$page_description = "مقام صَبا زَمزَم";
$page_keywords = "عود,مقام صَبا زَمزَم ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/saba_zamzam.php";
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
                        <h1>مقام صَبا زَمزَم</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/saba_zamzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="59,131,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="132,123,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
	  <area shape="circle" coords="209,114,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
	  <area shape="circle" coords="288,107,13" href="#" alt="صول♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
	  <area shape="circle" coords="367,98,13" href="#" alt="لا♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
	  <area shape="circle" coords="447,90,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="523,82,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="602,74,13" href="#" alt="ري♭" class="playNote" data-frequency="548" data-parent="#notation1">
	  <area shape="circle" coords="653,74,13" href="#" alt="ري♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
	  <area shape="circle" coords="705,65,13" href="#" alt="مي♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
	  <area shape="circle" coords="781,57,13" href="#" alt="فا" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="103,9,325,38" href="../jins/saba_zamzam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="476,6,610,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="264,145,387,176" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="548,145,680,174" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام صَبا زَمزَم 
is a rare maqam in the Arabic repertory. 
			Its scale starts with <a href="../jins/saba_zamzam.php">Jins Saba Zamzam</a> on the <em>tonic</em>, 
			overlapped by <a href="../jins/hijaz.php">Jins Hijaz</a> on the 3<sup>rd</sup> degree, 
			followed by either <a href="../jins/ajam.php">Jins ‘Ajam</a> 
			or <a href="../jins/nikriz.php">Jins Nikriz</a> on the 6<sup>th</sup> degree. 
		لا ينتمي مقام جهاركاه لأي عائلة مقامية.
		</h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba_zamzam/sawwah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba_zamzam/sawwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية سوّاح (١٩٦٦)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية امل حياتي (١٩٦٥)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/3ala_hesb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية على حسب وداد قلبي (١٩٦٣)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/ya_bint_el_sultan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا بنت السلطان</b>
                                    <span>غناء احمدى عدوية</span>
                                    <span>الحان حسن ابو السعود</span>
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
