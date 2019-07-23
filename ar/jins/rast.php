<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس راست";
$page_description = "جنس راست";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/rast.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>جنس راست</h1>
                        <h3>جنس الأصل في
                            <a href="../maqam/f_rast.php">عائلة مقام الراست</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="41,110,12" href="#" alt="لا" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="121,102,12" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="203,94,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="280,85,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="359,77,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="436,69,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="514,61,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="593,52,12" href="#" alt="لا♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
				      <area shape="circle" coords="630,52,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <h5>جنس الراست هو جنس الأصل في
					<a href="../maqam/f_rast.php">عائلة مقام الراست</a>،
                        حجمه ٥ درجات.
					 يقع قراره في هذا السلّم النموذجي على علامة الدو وغمّازه على علامة الصول.
					</h5><h5>
					جنس الراست من اهمّ الاجناس في الموسيقى العربية، وهو الجنس الاول في مقامات
					<a href="../maqam/sikah.php">راست</a>،
					<a href="../maqam/huzam.php">سوزناك</a>
					ومقامات اخرى في
					<a href="../maqam/f_rast.php">عائلة مقام الراست</a>.
                    </h5>
		          <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/rast/ghannili.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/rast/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية غنّيلي شوي شوي (١٩٤٥)</b>
                                    <span>ام كلثوم</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>الحان زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/3alalla_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية على الله تعود (١٩٧٠)</b>
                                    <span>غناء وديع الصافي (لبنان)</span>
                                    <span>كلمات ميشال طعمة (لبنان)</span>
                                    <span>الحان فريد الاطرش (سوريا / مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/min_3azzibak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مين عذّبك (١٩٣١)</b>
                                    <span>كلمات امين عزت الهجين</span>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/min_3izz_el_nawm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية من عزّ النوم</b>
                                    <span>فيروز (لبنان)</span>
                                    <span>كلمات الأخوين رحباني (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/rast/ya_nas_el_dinye_dulab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا ناس الدنيا دولاب</b>
                                    <span>صباح (لبنان)</span>
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