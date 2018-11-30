<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام عجم";
$page_description = "مقام عجم";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع,مقام عجم";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/ajam.php";
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
                        <h1>مقام عجم</h1>
                        <h3>المقام الاساسي في <a href="f_ajam.php">عائلة مقام العجم</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="68,140,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
		  <area shape="circle" coords="144,131,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="221,125,13" href="#" alt="مي" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330 -->
		  <area shape="circle" coords="298,116,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="377,108,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="453,100,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
		  <area shape="circle" coords="530,92,13" href="#" alt="سي" class="playNote" data-frequency="495" data-parent="#notation1">
		  <area shape="circle" coords="608,84,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="686,92,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="762,100,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
		  <area shape="circle" coords="840,108,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="150,11,270,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="390,10,590,40" href="../jins/upper_ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="639,14,806,40" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

		<h5>مقام العَجَم (ويعرف ايضاً بالعجم المصريّ) هو المقام الاساسي في <a href="f_ajam.php">عائلة مقام العجم</a>.
		جنسه الاول (جنس الجذر) هو <a href="../jins/ajam.php">جنس العجم</a> على القرار،
		يتبعه <a href="../jins/upper_ajam.php">جنس العجم الاعلى</a> على الدرجة الخامسة (وقرار هذا الجنس على الدرجة الثامنة اي جواب السلّم)
		او <a href="../jins/nahawand.php">جنس النهاوند</a> على الدرجة الخامسة ايضاّ.
		</h5>
		<br>
        		<h5>انظر الى مقامات اخرى في <a href="f_ajam.php">عائلة مقام العجم</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية اغداً القاك (١٩٧١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات الهادي آدم (السودان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/el_bahri_biyidhak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية البحر بيضحك</b>
                                    <span>غناء والحان الشيخ امام (مصر)</span>
                                    <span>كلمات نجيب سرور</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/fi_youm_wi_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية في يوم وليلة (١٩٧٨)</b>
                                    <span>وردة الجزائرية</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات حسين السيد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/tal3a_min_beit_abuha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طالعة من بيت ابوها</b>
                                    <span>ناظم الغزالي (العراق)</span>
                                    <span>(من التراث الشعبي العراقي)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/zuruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية زوروني كل سنة مرّة</b>
                                    <span>كارم محمود (مصر)</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
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
