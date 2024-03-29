<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام نَو أثر";
$page_description = "مقام نَو أثر";
$page_keywords = "عود,مقام نَو أثر ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/nawa_athar.php";
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
                        <h1>مقام نَو أثَر</h1>
                        <h3>من <a href="f_nikriz.php">عائلة مقام النِكريز</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/nawa_athar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="60,136,13" href="#" alt="دو" class="playNote" data-frequency=" 260.74" data-parent="#notation1"><!-- tonic -->
	  <area shape="circle" coords="136,128,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="213,120,13" href="#" alt="مي♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Nikriz 3rd -->
	  <area shape="circle" coords="291,112,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Nikriz 4th -->
	  <area shape="circle" coords="368,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="445,94,13" href="#" alt="لا♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="522,86,13" href="#" alt="سي♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="599,78,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- octave -->
                      <!-- Links -->
                      <area shape="rect" coords="129,6,260,36" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="327,147,480,180" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>
		مقام نَو أثَر هو مقام فرعي شائع من <a href="f_nikriz.php">عائلة مقام النِكريز</a>.
		يبدأ سلّم هذا المقام <a href="../jins/nikriz.php">بجنس النكريز</a> على القرار
		يليه <a href="../jins/hijazkar.php">جنس الحجاز كار</a> متمركزاَ على الغمّاز (الدرجة الخامسة).
		</h5>
		<br>

                    <h5>انظر الى مقامات اخرى في <a href="f_nikriz.php">عائلة مقام النِكريز</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nawa_athar/gamil_gamal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/ghulubti_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية غُلُبت اصالح في روحي (١٩٤٨)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                    <span>كلمات احمد رامى (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track active" data-song="/audio/maqam/nawa_athar/gamil_gamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>اغنية جميل جمال (١٩٥٢)</b>
                                    <span>غناء والحان فريد الاطرش (سوريا)</span>
                                    <span>كلمات مأمون الشناوي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/fakkaruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية فكّروني (١٩٦٦)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات عبد الوهاب محمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/ruba3iyyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية رباعيات الخيام (١٩٥٠) </b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات أحمد رامي (مصر)</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح اذكُر الحبَّ</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان داوود حسني (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/samai_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي نو اثر</b>
                                    <span>فرقة الموسيقى السورية من حمص</span>
                                    <span>الحان جميل عويس (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/dulab_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب نو اثر</b>
                                    <span>فرقة جورج ابيض (لبنان)</span>
                                    <span><img src="/img/cd.png"> اسطوانة تقاسيم شرقية</span>
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
