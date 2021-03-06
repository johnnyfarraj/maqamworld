<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام كِردان/مقام سازكار";
$page_description = "مقام كِردان/مقام سازكار";
$page_keywords = "عود ,مقام كِردان,مقام سازكار,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/kirdan.php";
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
                        <h1>مقام كِردان</h1>
                        <h1>مقام سازكار</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/kirdan.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="75,81,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
                      <area shape="circle" coords="148,89,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="225,97,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="304,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="381,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="458,123,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                      <area shape="circle" coords="537,131,13" href="#" alt="ري♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
                      <area shape="circle" coords="589,131,13" href="#" alt="ري♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="640,139,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="95,6,274,38" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="420,9,525,38" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,173,528,202" href="../jins/sazkar.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>
		<strong>مقام كِردان</strong> هو فرع من <a href="rast.php">مقام الراسْت</a> يبدأ سيره نزولاً من جواب السلّم (الدرجة الثامنة) وينتهي على القرار (الدرجة الاولى).
 		يبدأ سلّم مقام كردان <a href="../jins/rast.php">بجنس الراست</a> (وهو جنس الأصل) على الدرجةا الاولى (القرار)،
		يليه <a href="../jins/upper_rast.php">جنس الراست الاعلى</a> على الغمّاز اي الدرجة الخامسة
		(وقرار جنس الراست الاعلى يقع على درجته الاخيرة اي جواب السلّم).
		</h5>
                    <h5>
		 اما <strong>مقام سازكار</strong> فهو مشابه لمقام كِردان،
		لكن درجة السلّم الثانية تُرفع في بعض المقاطع النغمية بحيث يتحوّل الجنس الاول الى <a href="../jins/sazkar.php">جنس سازكار</a> على القرار.
		</h5>
		<br><h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kirdan/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kirdan/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح صحتُ وجداً</b>
                                    <span>فرقة الغناء الشرقي - جامعة الروح القدس في الكسليك</span>
                                    <span>بقيادة عايدة شلهوب زيادة</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                    <span><img src="/img/cd.png"> سلسلة اسطوانات اوريانتاليا: موشّح وأغنية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/ya_shadil_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا شادي الالحان</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان الشيخ سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حيرانة ليه (١٩٣٠)</b>
                                    <span>غناء ليلى مُراد (مصر)</span>
                                    <span>الحان داوود حسني (مصر)</span>
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
