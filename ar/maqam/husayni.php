<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام حُسيني";
$page_description = "مقام حُسيني";
$page_keywords = "عود ,مقام حُسيني,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/husayni.php";
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
                        <h1>مقام حُسيني</h1>
                        <h3>من <a href="f_bayati.php">عائلة مقام البياتي</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/husayni.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="55,95,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="131,87,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!--Bayati LA 2nd, variable -->
	  <area shape="circle" coords="183,87,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="233,79,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="313,71,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
	  <area shape="circle" coords="391,103,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="470,111,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="551,121,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati RE 2nd, variable -->
	  <area shape="circle" coords="630,129,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
                       <!-- Links -->
		<!-- Husayni is not a Jins, it's a special case (documented in IAM)
                      <area shape="rect" coords="116,8,304,39" href="../jins/husayni.php" class="mapLink" data-parent="#notation1">
		-->
                      <area shape="rect" coords="450,8,580,39" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

                    <h5>
		مقام حُسيني هو مقام نادر الاستعمال في الموسيقى العربية  كمقام مستقلّ.
		وسلّم مقام الحسيني مبني على سلّم <a href="bayati.php">مقام البياتي</a>،
		 فهو يبدأ <a href="../jins/bayati.php">بجنس البياتي</a> على القرار
		ويليه شبه جنس الحسيني الذي ينتقل بين <a href="../jins/rast.php">جنس الراست</a> و<a href="../jins/nahawand.php">جنس النهاوند</a> على الدرجة الرابعة.
		الا أن سيره يشدّد على الدرجة الخامسة كدرجة توتّر ثم يعود ويستقرّ على الدرجة الرابعة،
		وهو جزء معتاد وشائع كثيراً في سير <a href="bayati.php">مقام البياتي</a>.
                    </h5>
                    <h5>
		في الواقع، مقام الحسيني هو الفرع الاكثر شيوعاً في <a href="f_bayati.php">عائلة مقام البياتي</a> في موسيقى شرقي آسيا (مما يشمل الشرق العربي).
                    </h5>

		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_bayati.php">عائلة مقام البياتي</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/husayni/billadhi_askara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/husayni/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح بالذي اسكر</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>سلسلة نغم الامس - الجزء الثاني عشر (<a href="bayati.php">مقام بياتي</a>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح هل على الاستار</b>
                                    <span>غناء غادة شبير (لبنان)</span>
                                    <span><img src="/img/cd.png"> أسطوانة الموشحات</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/khala_al_3idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح خلا العِذار</b>
                                    <span>غناء خالد الحافظ (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية نورا نورا (١٩٥٣)</b>
                                    <span>غناء والحان فريد الأطرش (سوريا/مصر)</span>
                                    <span>كلمات محمود فهمى ابراهيم</span>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/samai_bayati_khana2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي بياتي (خانة ٢)</b>
                                    <span>فرقة صلاح عرّام (مصر)</span>
                                    <span>الحان إبراهيم العريان (مصر)</span>
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
