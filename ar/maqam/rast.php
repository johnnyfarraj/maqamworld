<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام راسْت";
$page_description = "مقام راسْت";
$page_keywords = "عود,مقام راسْت ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/rast.php";
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
                        <h1>مقام راسْت</h1>
                        <h3>المقام الاساسي في <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="65,137,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="141,129,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="218,121,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="295,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="373,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="449,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="528,88,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
	  <area shape="circle" coords="605,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
	      <area shape="circle" coords="682,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="758,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="836,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="160,6,273,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,6,586,37" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="637,11,820,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام راست هو المقام الاساسي في <a href="f_rast.php">عائلة مقام الراست</a>.
		يبدأ سلّم هذا المقام <a href="../jins/rast.php">بجنس الراست</a> (وهو جنس الجذر) على الدرجةا الاولى (القرار)،
		يليه اي من <a href="../jins/nahawand.php">جنس النهاوند</a> او <a href="../jins/upper_rast.php">جنس الراست الاعلى</a> على الغمّاز اي الدرجة الخامسة
		(وقرار جنس الراست الاعلى يقع على درجته الاخيرة اي جواب الساّم)
                    </h5>
                    </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/rast/ya_shadi_al_alhan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/rast/ya_shadi_al_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح يا شادي الالحان</b>
                                    <span>غناء صباح فخري (سوريا)</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ملا الكاسات وسقاني</b>
                                    <span>فرقة الكندي</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/ya_3udhaib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا عُذيب المرشف</b>
                                    <span>اوريانتاليا</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/waraqu_el_asfar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ورقو الاصفر شهر ايلول</b>
                                    <span>فيروز</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/qasidat_salabat_su3adu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة سلبَت سعادً</b>
                                    <span>غناء المطرب محمد خيري (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/layali_rast_abbas_bleidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ليالي راست</b>
                                    <span>غناء عباس البليدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_leih_tilaw3ini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية ليه تلوعيني (١٩٣٨)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان محمد القصبجي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_rast_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب راست</b>
                                    <span>صباح فخري</span>
                                    <span><img src="/img/cd.png"> من تسجيل حي في قصر المؤتمرات - باريس</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/samai_rast_george_michel.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي راست</b>
                                    <span>فرقة الكندي</span>
                                    <span>الحان جورج ميشيل (مصر)</span>
                                    <span><img src="/img/cd.png">حجرة الموسيقى الحلبية - الجزء الثاني (مقام راست)</span>
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
