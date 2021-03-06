<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام مُستعار";
$page_description = "مقام مُستعار";
$page_keywords = "عود ,مقام مُستعار,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/mustaar.php";
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
                        <h1>مقام مُستعار</h1>
                        <h3>من <a href="f_sikah.php">عائلة مقام السيكاه</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>
                    
                     <div class="notation" id="notation1">
                        <img src="../note/maqam/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="78,125,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
	  <area shape="circle" coords="155,117,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1">
	  <area shape="circle" coords="233,108,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="309,100,13" href="#" alt="لا♮" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="388,92,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="465,84,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="543,76,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
	  <area shape="circle" coords="619,67,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="640" data-parent="#notation1"><!-- var -->
                        <!-- Links -->
                      <area shape="rect" coords="73,13,226,41" href="../jins/mustaar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,13,433,41" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="488,5,597,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

                    <h5>
		مقام مُستعار هو مقام نادر في الموسيقى العربية كمقام مستقل، لكنه غالباً ما يأتي كمجرد <a href="../jins/mustaar.php">جنس مستعار</a>
		 ضمن سير <a href="huzam.php">مقام الهُزام</a> او <a href="sikah.php">مقام السيكاه</a>.
                    </h5>
                    <h5>
		يبدأ سلّم هذا المقام <a href="../jins/mustaar.php">بجنس المُستعار</a> على القرار،
		 يليه <a href="../jins/nahawand.php">جنس النهاوند</a> على الغمّاز (الدرجة الثالثة)،
		ثم <a href="../jins/rast.php">جنس الراست</a> على الدرجة السادسة (وهي غمّاز ثانوي).
                     </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_sikah.php">عائلة مقام السيكاه</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/mustaar/aktiblak_gawabat.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/mustaar/aktiblak_gawabat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية اكتب لك جوابات</b>
                                    <span>غناء ليلى مراد (مصر)</span>
                                    <span>ألحان محمد الموجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/haramuha_minni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حرموها مني</b>
                                    <span>غناء فتحية احمد (مصر)</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/raqq_el_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة رَقّ الحبيب (١٩٤٤)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/ya_3adhili_la_talumni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة يا عاذلي لا تلمني (١٩٢٤)</b>
                                    <span>غناء الشيخ ابو العِلا محمد (مصر)</span>
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
