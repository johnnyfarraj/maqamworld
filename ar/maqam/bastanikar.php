<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام بَسته نِكار";
$page_description = "مقام بَسته نِكار";
$page_keywords = "عود,مقام بَسته نِكار ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/bastanikar.php";
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
                        <h1>مقام بَسته نِكار</h1>
                        <h3>من <a href="f_sikah.php">عائلة مقام السيكاه</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bastanikar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="85,147,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
	  <area shape="circle" coords="162,139,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
	  <area shape="circle" coords="239,131,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="316,123,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
	  <area shape="circle" coords="394,114,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="470,106,13" href="#" alt="صول♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2- tuned up from 365.32 -->
	  <area shape="circle" coords="548,98,13" href="#" alt="لا♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- hijaz 3 tuned down from 440-->
	  <area shape="circle" coords="625,90,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="702,82,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="781,74,13" href="#" alt="ري♭" class="playNote" data-frequency="548" data-parent="#notation1">
	  <area shape="circle" coords="857,65,13" href="#" alt="مي♮" class="playNote" data-frequency="660" data-parent="#notation1">
	  <area shape="circle" coords="934,57,13" href="#" alt="فا" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="95,11,213,40" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="333,12,446,40" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="445,149,570,180" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="710,6,835,31" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
	</map>
	<br>

                    <h5>مقام بَسته نِكار عبارة عن
                        <a href="../jins/sikah.php">جنس سيكاه</a>
                        يتبعه سلّم <a href="saba.php">مقام الصَبا</a>.
                    </h5>
                    <h5>
                        يبدأ سلّم هذا المقام <a href="../jins/sikah.php">بجنس السيكاه</a> على القرار
                        ثم يليه <a href="../jins/saba.php">جنس الصَبا</a> على الغماز (الدرجة الثالثة)،
                        ويتداخل الصبا مع <a href="../jins/hijaz.php">جنس الحجاز</a> على الدرجة الخامسة،
                        واخيراَ <a href="../jins/nikriz.php">جنس النكريز</a> على الجواب (الدرجة الثامنة).
                    </h5>
                    <br>
                    <h5>انظر الى مقامات اخرى في <a href="f_sikah.php">عائلة مقام السيكاه</a>.</h5>
                    <br>
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bastanikar/zalamu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bastanikar/zalamu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية ظلموه (١٩٥٧)</b>
                                    <span>غناء عبد الحليم حافظ (مصر)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/ahl_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اهل الهوى (١٩٥٨)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان الشيخ زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/inti_fakrani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انتِ فاكراني (١٩٣٨)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/anshidi_ya_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح انشدي يا صَبا</b>
                                    <span>الفرقة الوطنية للموسيقى العربية</span>
                                    <span>بقيادة رمزي أبو رضوان (فلسطين)</span>
                                    <span>الحان يحيى السعودي (فلسطين)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/aqbal_al_subhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح اقبل الصبح يغنّي</b>
                                    <span>فرقة اورنينا (سوريا)</span>
                                    <span>بقيادة د. محمد قدري دلال (حلب)</span>
                                    <span>الحان بكري الكردي (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/nuzhatul_arwahi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح نزهة الأرواح بدري</b>
                                    <span>فرقة المالوف والموشحات والألحان العربية (ليبيا)</span>
                                    <span>بقيادة حسن عريبي (ليبيا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_dalal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقاسيم عود مقام بَسته نِكار</b>
                                    <span>د. محمد قدري دلال (حلب)</span>
                                    <span><img src="/img/cd.png"> أسطوانة المقامات الغريبة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقاسيم عود مقام سيكاه</b>
                                    <span>رياض السنباطي (مصر)</span>
                                    <span><img src="/img/cd.png"> أسطوانة تقاسيم عود</span>
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
