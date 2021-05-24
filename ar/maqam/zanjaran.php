<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام زَنجَران";
$page_description = "مقام زَنجَران";
$page_keywords = "عود,مقام زَنجَران ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/zanjaran.php";
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
                        <h1>مقام زَنجَران</h1>
                        <h3>من <a href="f_hijaz.php">عائلة مقام الحجاز</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/zanjaran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="49,81,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="126,89,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="202,97,13" href="#" alt="لا♮" class="playNote" data-frequency="440" data-parent="#notation1"><!-- Ajam 3rd, tune down from 440 -->
	  <area shape="circle" coords="280,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="358,114,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="434,122,13" href="#" alt="مي♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
	  <area shape="circle" coords="512,130,13" href="#" alt="ري♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
	  <area shape="circle" coords="590,139,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
	  <!-- Links -->
                      <area shape="rect" coords="135,9,263,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="415,9,538,40" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

                    <h5>مقام زَنجَران هو فرع من <a href="hijaz.php">مقام الحجاز</a>
		 حيث يبدأ <a href="../jins/hijaz.php">بجنس الحجاز</a> على الدرجة الاولى 
		ثم <a href="../jins/ajam.php">جنس العجم</a> على الغماز (الدرجة الرابعة).
		</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_hijaz.php">عائلة مقام الحجاز</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يا حلاوة الدنيا (١٩٥٠)</b>
                                    <span>غناء سيد مكاوي (مصر)</span>
                                    <span>الحان زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/aya_daraha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ايا دارها بالحزن</b>
                                    <span>غناء المنشد حسن الحفار (حلب)</span>
                                    <span>الحان مجدي العقيلي (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/mawwal_amana_ya_leil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال امانة يا ليل (١٩٣١)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات سعيد عبده (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/huwwa-dah-yikhallas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور هو ده يخلّص من الله (١٩٣١)</b>
                                    <span>أم كلثوم</span>
                                    <span>كلمات بديع خيري (مصر)</span>
                                    <span>الحان زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/fi-shar3i-min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>في شرع مين</b>
                                    <span>كلمات محمد يونس القاضي (مصر)</span>
                                    <span>غناء والحان سيد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/maqam/zanjaran/layali_zanjaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ليالي مقام زنجران</b>
                                    <span>احمد خبّاري (سوريا)</span>
                                    <span>فرقة التراث بقيادة محمد حمادية (سوريا)</span>
                                    <span><img src="/img/cd.png"> موسيقى الاندلس الاسباني - <a href="hijaz.php">مقام حجاز</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سميراميس (تقاسيم عود حجاز)</b>
                                    <span>عامر عمّوري (سوريا)</span>
                                    <span><img src="/img/cd.png"> اسطوانة تقاسيم عود</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقاسيم قانون زنجران</b>
                                    <span>ابراهام سلمان (العراق)</span>
                                    <span><img src="/img/cd.png"> اسطوانة سلطنة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_buzuq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم بُزق زنجران</b>
                                    <span>محمد عبد الكريم (سوريا)</span>
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
