<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام عجم عُشَيران";
$page_description = "مقام عجم عُشَيران";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع,مقام عجم عُشَيران";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/ajam_ushayran.php";
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
                        <h1>مقام عجم عُشَيران</h1>
                        <h3>من <a href="f_ajam.php">عائلة مقام العجم</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/ajam_ushayran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
                  <area shape="circle" coords="66,85,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                  <area shape="circle" coords="144,93,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
                  <area shape="circle" coords="221,101,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                  <area shape="circle" coords="298,109,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
                  <area shape="circle" coords="376,118,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                  <area shape="circle" coords="453,126,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
                  <area shape="circle" coords="530,134,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
                  <area shape="circle" coords="608,142,13" href="#" alt="سي♭" class="playNote" data-frequency="231.77" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="60,7,232,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="470,6,595,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,155,390,184" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                    </map>

                    <br>
		<h5>
            مقام عجم عُشَيران هو صنف قديم من <a href="ajam.php">مقام العجم</a> يختلف سيره
            ويحصل فيه التشديد النغميّ على درجات مختلفة.
            فبدلاً من اعتماد الغمّاز غلى الدرجة الخامسة (كما في مقام العجم) 
             يعتمد هذا المقام غمازاً على الدرجة الثالثة وغمازاً آخر على الدرجة السادسة.
 		</h5>
        <h5>
            يبدأ سلّم هذا المقام <a href="../jins/ajam.php">بجنس العجم</a> على القرار (الدرجة الاولى)
            ويليه <a href="../jins/kurd.php">جنس الكرد</a> على الدرجة الثالثة
            ثمّ <a href="../jins/nahawand.php">جنس النهاوند</a> على الدرجة السادسة.
        </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_ajam.php">عائلة مقام العجم</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح ايقظَ الحبّ فؤادي</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                    <span>الحان بهجت حسن</span>
                                    <span><img src="/img/cd.png"> أسطوانة وصلات حلبية – الجزء الثاني</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/da3i_al_hawa_qad_sah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح داعي الهوى قد صاح</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/il_hubbi_fi_albi_amana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الحب في قلبي امانة</b>
                                    <span>غناء فتحية احمد (مصر)</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/ma_li_3ayni_absarat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ما لعيني ابصرَت</b>
                                    <span>المطرب صباح فخري (حلب)</span>
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
