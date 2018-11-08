<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام لامي";
$page_description = "مقام لامي";
$page_keywords = "عود,مقام لامي ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/lami.php";
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
                        <h1>مقام لامي</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>
                     <map name="notemap">
		  <area shape="circle" coords="53,130,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="130,122,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="208,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="286,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="364,97,13" href="#" alt="لا♭" class="playNote" data-frequency="420" data-parent="#notation1">
		  <area shape="circle" coords="440,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="517,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="594,72,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="100,9,220,37" href="../jins/lami.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="340,140,460,167" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
	     </map>
		<br>

                    <h5>مقام لامي هو مقام نادر في تراث المشرق العربي (شرقي المتوسط) وهو مقام شائع في العراق.
		يبدأ سلم هذا المقام <a href="../jins/lami.php">بجنس اللامي</a> على القرار (الدرجة الاولى)
		 ويليه <a href="../jins/kurd.php">جنس الكُرد</a> على الغمّاز (الدرجة الرابعة).
		</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية البرتقال (١٩٣٨)</b>
                                    <span>غناء رئيسة عفيفي ومحمد عبد الوهاب</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/tislam_idein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية تسلم ايدين اللي اشترى (حوالي ١٩٦٠)</b>
                                    <span>غناء محمد عبد المطّلب (مصر)</span>
                                    <span>الحان محمود كامل (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/albi_bi_ulli_kalam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قلبي بيقول لي كلام (حوالي ١٩٥٤)</b>
                                    <span>غناء والحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>انشودة احمد يا حبيبي</b>
                                    <span>غناء والحان صبري المدلل (حلب)</span>
                                    <span><img src="/img/cd.png"> أسطوانة أغاني من حلب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/al_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية النجمات صاروا يسألوا (١٩٦٤)</b>
                                    <span>غناء وديع الصافي (لبنان)</span>
                                    <span>الحان محمد محسن</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قل لي يا حلو</b>
                                    <span>غناء ناظم الغزالي (عراق)</span>
                                    <span>(من التراث الشعبي العراقي)</span>
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
