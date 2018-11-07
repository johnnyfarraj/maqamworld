<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام نِكريز";
$page_description = "مقام نِكريز";
$page_keywords = "عود,مقام نِكريز ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/nikriz.php";
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
                        <h1>مقام نِكريز</h1>
                        <h3>المقام الاساسي في <a href="f_nikriz.php">عائلة مقام النِكريز</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/nikriz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="53,68,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
	  <area shape="circle" coords="130,77,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="209,84,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="285,93,13" href="#" alt="لا♮" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="364,101,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="440,110,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Nikriz 4th -->
	  <area shape="circle" coords="517,118,13" href="#" alt="مي♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Nikriz 3rd -->
	  <area shape="circle" coords="594,125,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="672,134,13" href="#" alt="دو" class="playNote" data-frequency=" 260.74" data-parent="#notation1"><!-- tonic -->
                      <!-- Links -->
                      <area shape="rect" coords="130,6,305,34" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="454,6,584,34" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام نِكريز هو المقام الاساسي في <a href="f_nikriz.php">عائلة مقام النِكريز</a>.
			يبدأ سلم هذا المقام <a href="../jins/nikriz.php">بجنس النكريز</a> على القرار (الدرجة الاولى)
		 ثم يليه <a href="../jins/nahawand.php">جنس النهاوند</a> على الغمّاز (الدرجة الخامسة).
                    </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_nikriz.php">عائلة مقام النِكريز</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nikriz/ya_msahharni.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track active" data-song="/audio/maqam/nikriz/ya_msahharni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>اغنية يا مسهّرني (١٩٧٢)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان سيّد مكّاوي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية بعيد عنّك (١٩٦٥)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/il_albi_yama_intazar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور القلب ياما انتظر (١٩٣١)</b>
                                    <span>غناء والحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/saga_al_laylu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية سجى الليل (١٩٣٩)</b>
                                    <span>غناء والحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/bayna_qasiyun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح بين قاسيون وربوة</b>
                                    <span>غناء المنشد حسن الحفار (حلب)</span>
                                    <span>الحان عمر البطش (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/zarani_taht_al_ghayahib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح زارني تحت الغياهب</b>
                                    <span>غناء محمد خيري (حلب)</span>
                                    <span>الحان عمر البطش (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nikriz/yalli_awamak_yi3gibni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور ياللي قوامك يعجبني</b>
                                    <span>غناء كارم محمود (مصر)</span>
                                    <span>الحان الشيخ سيد درويش (مصر)</span>
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
