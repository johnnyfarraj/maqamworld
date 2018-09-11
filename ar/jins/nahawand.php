<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس نهاوند";
$page_description = "جنس نهاوند";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/nahawand.php";
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
                        <h1>جنس نهاوند</h1>
                        <h3>جنس الجذر في
                            <a href="../maqam/f_nahawand.php">عائلة مقام النهاوند</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="62,118,12" href="#" alt="لا♭" class="playNote" data-frequency="209" data-parent="#notation1"><!-- fine tune up from 205.5-->
					  <area shape="circle" coords="113,118,12" href="#" alt="لا♮" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="162,110,12" href="#" alt="سي♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="230,102,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="306,94,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="383,86,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="460,78,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="539,69,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
				      <area shape="circle" coords="611,60,12" href="#" alt="لا♭" class="playNote" data-frequency="411" data-parent="#notation1">
					</map>

                    <h5>جنس النهاوند هو جنس الجذر في
					<a href="../maqam/f_nahawand.php">عائلة مقام النهاوند</a>
					، حجمه ٥ درجات.
					يقع قراره في هذا السلّم النموذجي على علامة الدو وغمّازه على علامة الصول.
					</h5><h5>
					جنس النهاوند هو الجنس الاول في مقامات
					<a href="../maqam/nahawand.php">نهاوند</a>،
					<a href="../maqam/nahawand_murassaa.php">نهاوند مُرصّع</a> و
					<a href="../maqam/ushaq_masri.php">عُشّاق مصري</a>.
                    </h5>
		          <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand/alf_leila_w_leila.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand/alf_leila_w_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية الف ليلة وليلة (١٩٦٩)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات مرسي جميل عزيز</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة بلد المحبوب</b>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/darit_el_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية ودارت الايام (١٩٧٠)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات مأمون الشناوى</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/dawr_ahibb_ashufak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور احبّ اشوفك كل يوم (١٩٣٠)</b>
                                    <span>كلمات حسن أنور</span>
                                    <span>غناء وتلحين محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/gaddidti_hubbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية جددت حبّك ليه (١٩٥٢)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات احمد رامى</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_dunya_ya_gharami.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا دنيا يا غرامي (١٩٣٨)</b>
                                    <span>كلمات احمد رامي</span>
                                    <span>غناء وتلحين محمد عبد الوهاب (مصر)</span>
                                    <span>من فيلم يحيا الحب </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_habibi_kullama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا حبيبي كلما هبّ الهوى</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>كلمات والحان الأخوين رحباني</span>
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