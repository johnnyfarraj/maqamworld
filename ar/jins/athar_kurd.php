<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس أثر كُرد";
$page_description = "جنس أثر كُرد";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/athar_kurd.php";
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
                        <h1>جنس أثر كُرد</h1>
                        <h3>مزيج بين
                            <a href="kurd.php">جنس الكُرد</a>
                            و
                            <a href="nikriz.php">جنس النكريز</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="59,118,12" href="#" alt="لا♭" class="playNote" data-frequency="211" data-parent="#notation1"><!-- octave below A4b -->
		  <area shape="circle" coords="136,110,12" href="#" alt="سي♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
		  <area shape="circle" coords="218,102,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
		  <area shape="circle" coords="293,94,13" href="#" alt="ري♭" class="playNote" data-frequency="274" data-parent="#notation1"> <!-- fine tune minor 2nd (see Kurd)-->
		  <area shape="circle" coords="370,86,13" href="#" alt="مي♭" class="playNote" data-frequency="309" data-parent="#notation1"><!-- minor 3rd -->
		  <area shape="circle" coords="447,77,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1">
		  <area shape="circle" coords="526,69,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- hijazkar tonic -->
		  <area shape="circle" coords="599,61,12" href="#" alt="لا♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
		</map>

                    <h5>جنس أثر كُرد هو الجنس الاول في
					<a href="../maqam/athar_kurd.php">مقام أثر كُرد</a>
					 ، حجمه ٥ درجات. يقع قراره في هذا السلّم النموذجي على علامة الدو وغمّازه على علامة الصول.
                    </h5>
					<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/athar_kurd/habibaha.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/athar_kurd/habibaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Habibaha (1965)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>تلحين محمد الموجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية رايداك (١٩٥٠)</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>تلحين احمد صدقي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا فجر نورك هلّ وبان (١٩٥٢)</b>
                                    <span>غناء بليغ حمدي (مصر)</span>
                                    <span>تلحين يوسف شوقي</span>
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