<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس عجم";
$page_description = "جنس عجم";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/ajam.php";
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
                        <h1>جنس عجم</h1>
                        <h3>جنس الجذر في
                            <a href="../maqam/f_ajam.php">عائلة مقام العجم</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <!-- Copy this too, just change the image SRC -->
                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap">
					  <area shape="circle" coords="49,119,12" href="#" alt="لا" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="126,111,12" href="#" alt="سي" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="209,103,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="283,95,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="362,86,13" href="#" alt="مي" class="playNote" data-frequency="328" data-parent="#notation1"><!--variable, tuned down from 330-->
					  <area shape="circle" coords="439,78,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="518,70,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="590,62,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <h5>جنس العجم هو جنس الجذر في 
		<a href="../maqam/f_ajam.php">عائلة مقام العجم</a>
، حجمه ٥ درجات. يقع قراره في هذا السلّم النموذجي على علامة الدو وغمّازه على علامة الصول.
 وجنس العجم هو الجنس الاول في مقامات
		<a href="../maqam/ajam.php">العجم</a> و
		<a href="../maqam/shawq_afza.php">شوق افزا</a>.
                    </h5>
		          <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اغداً القاك (١٩٧١)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات الهادي آدم</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/el_bwab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية البواب (١٩٩٤)</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>تلحين فيلمون وهبي (لبنان)</span>
                                    <p><img src="/img/cd.png"> Album Name Here</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية في يوم وليلة (١٩٧٨)</b>
                                    <span>وردة الجزائرية</span>
                                    <span>كلمات حسين السيد</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية لِسّه فاكر (١٩٦٣)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات عبد الفتاح مصطفى</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال من يوم فرقاك</b>
                                    <span>غناء محمد خَيري (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/til3it_ya_mahla_nurha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طلعت يا ماحلا نورها</b>
                                    <span>غناء محمد عبد الكريم</span>
                                    <span>تلحين سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <a href="http://maqamlessons.com" class="btn btn-primary read-more" target="_blank"><b>Read More</b>Read more about جنس عجم on MaqamLessons.com</a>

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