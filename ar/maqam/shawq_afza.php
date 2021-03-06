<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام شوق أفزا";
$page_description = "مقام شوق أفزا";
$page_keywords = "عود,مقام شوق أفزا ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/shawq_afza.php";
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
                        <h1>مقام شوق افزا</h1>
                        <h3>من <a href="f_ajam.php">عائلة مقام العجم</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/shawq_afza.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="57,134,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
	  <area shape="circle" coords="133,126,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="210,118,13" href="#" alt="مي" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330-->
	  <area shape="circle" coords="289,110,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="366,102,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- Hijaz tonic -->
	  <area shape="circle" coords="442,93,13" href="#" alt="لا♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="519,85,13" href="#" alt="سي♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="597,77,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="137,5,263,36" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,5,544,36" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام شوق افزا هو المقام الفرعي الاكثر استعمالاً في <a href="f_ajam.php">عائلة مقام العجم</a>.
			يبدأ سلّم هذا المقام <a href="../jins/ajam.php">بجنس العجم</a> (وهو جنس الأصل) على القرار
			يليه <a href="../jins/hijaz.php">جنس الحجاز</a> على الغمّاز (الدرجة الخامسة).
 		</h5>
 		<h5>
			امّا ميزة هذا المقام فهي انتقال معتاد الى <a href="../jins/saba_dalanshin.php">جنس صبا دلنشين</a>
			 يقع قراره ومحوره النغمي على الدرجة الخامسة (ويبدأ سلمه على الدرجة الثالثة).
 		</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_ajam.php">عائلة مقام العجم</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/shawq_afza/lissa_fakir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/shawq_afza/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية لسّه فاكر (١٩٦٠)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                    <span>كلمات عبد الفتاح مصطفى (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/3alallah_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>على الله تعود (١٩٧٠)</b>
                                    <span>وديع الصافي (لبنان)</span>
                                    <span>الحان فريد الاطرش (سوريا / مصر)</span>
                                    <span>كلمات ميشيل طعمة (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/longa_ajam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>لونجا عجم</b>
                                    <span>الحان عبده داغر (مصر)</span>
                                    <span><img src="/img/cd.png"> اسطوانة ملك التقاسيم</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اسوارة العروس (١٩٨٩) - انتقال دلنشين</b>
                                    <span>فيروز</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                    <span>كلمات جوزيف حرب (لبنان)</span>
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
