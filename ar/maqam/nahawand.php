<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام نهاوند";
$page_description = "مقام نهاوند";
$page_keywords = "arabic, music, arab, world, maqam, jins, nahawand, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/nahawand.php";
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
                        <h1>مقام نهاوند</h1>
                        <h3>المقام الاساسي في <a href="f_nahawand.php">عائلة مقام النهاوند</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="67,137,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
	  <area shape="circle" coords="144,129,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="221,121,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
	  <area shape="circle" coords="298,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="376,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="453,97,13" href="#" alt="لا♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
	  <area shape="circle" coords="530,89,13" href="#" alt="سي♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
	  <area shape="circle" coords="608,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="685,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="761,96,13" href="#" alt="لا♭" class="playNote" data-frequency="420" data-parent="#notation1"><!-- unchanged -->
                      <area shape="circle" coords="839,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="135,11,308,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="440,7,558,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="670,11,786,39" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام نهاوند is the main maqam in the Nahawand Family. Its scale starts with the root <a href="../jins/nahawand.php">Jins Nahawand</a> on the <em>tonic</em>, followed by either <a href="../jins/hijaz.php">Jins Hijaz</a> or <a href="../jins/kurd.php">Jins Kurd</a> on the 4<sup>th</sup> degree.</p>
                    </h5>
                    <h5><strong>Maqam Farahfaza</strong> is مقام نهاوند transposed to a tonic of G. </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_nahawand.php">عائلة مقام النهاوند</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nahawand/balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>مقطوعة بلد المحبوب (١٩٥١)</b>
                                    <span>الحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/alf_leila_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الف ليلة وليلة (١٩٦٩)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dhikrayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة ذكرياتي (١٩٤٤)</b>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/hati_isqiniha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح هاتِ اسقنيها</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                    <span>Music by Yehya al-Sa‘udi</span>
                                    <span><img src="/img/cd.png"> أسطوانة وصلات حلب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/ramani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح رماني بسهم هواه</b>
                                    <span>غناء خالد الحافظ (سوريا)</span>
                                    <span>الحان داوود حسني (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_masud_jamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي نهاوند</b>
                                    <span>سيمون شاهين (فلسطين)</span>
                                    <span>الحان مسعود جميل (تركيا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/samai_safar_ali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي نهاوند</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة</span>
                                    <span>الحان صَفَر علي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_farahfaza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>لونجا فرحفزا</b>
                                    <span>سيمون شاهين (فلسطين)</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_jamilbey.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>لونجا نهاوند</b>
                                    <span>عزف أنور ابراهم (تونس)</span>
                                    <span>الحان طنبوري جميل بك (تركيا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/longa_yorgo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>لونجا نهاوند</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة</span>
                                    <span>الحان يورغو باغانوس</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand/dulab_aboul_ela.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب نهاوند</b>
                                    <span>الشيخ أبو العلا محمد (مصر)</span>
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
