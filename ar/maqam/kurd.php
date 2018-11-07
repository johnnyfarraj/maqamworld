<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام كُرد";
$page_description = "مقام كُرد";
$page_keywords = "عود,مقام كُرد ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/kurd.php";
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
                        <h1>مقام كُرد</h1>
                        <h3>المقام الاساسي في <a href="f_kurd.php">عائلة مقام الكُرد</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>
                     <map name="notemap">
	  <area shape="circle" coords="63,129,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="141,121,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
	  <area shape="circle" coords="218,112,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="296,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="373,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="450,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="528,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="605,72,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="112,8,230,35" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="364,7,545,35" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
	     </map>

                    <h5>مقام الكُرد هو المقام الاساسي في <a href="f_nikriz.php">عائلة مقام الكُرد</a>.
			يبدأ سلم هذا المقام <a href="../jins/kurd.php">بجنس الكُرد</a> على القرار (الدرجة الاولى)
		 ثم يليه <a href="../jins/nahawand.php">جنس النهاوند</a> على الغمّاز (الدرجة الرابعة).
                    </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_kurd.php">عائلة مقام الكُرد</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kurd/3awwedti_3eni.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kurd/3awwedti_3eni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية عوّدت عيني (١٩٥٨)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/ya_zalimni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا ظالمني (١٩٥١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/dulab_kurd_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب كرد</b>
                                    <span>فرقة صباح فخري (سوريا)</span>
                                    <span>من حفلة قصر المؤتمرات – باريس (١٩٩٥)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/yamurru_3ujuban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يمرّ عُجباً</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/ya_bahjet_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا بهجة الرّوح</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان سيّد درويش (مصر)</span>
                                    <span>من حفلة قصر المؤتمرات – باريس (١٩٩٥)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/mashghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مشغول عليك</b>
                                    <span>غناء كارم محمود (مصر)</span>
                                    <span>الحان احمد صدقي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/sanatein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية سنتين وانا احايل فيه</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>الحان رؤوف الذهني (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/samai_kurd_daghir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي كرد</b>
                                    <span>الحان عبده داغر (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/samai_kurd_salman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي كرد</b>
                                    <span>ابراهام سلمان (عراق)</span>
                                    <span><img src="/img/cd.png"> اسطوانة سلطنة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/3ichiqti_ruhak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور عشقت روحك (١٩٣٠)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
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
