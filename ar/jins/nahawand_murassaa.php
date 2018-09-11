<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس نهاوند Murassa";
$page_description = "جنس نهاوند Murassa";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/nahawand_murassaa.php";
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
                        <h1>جنس نهاوند مُرصّع</h1>
                        <h3>صنف من
                            <a href="nahawand.php">جنس النهاوند </a>
                            تُخفّض درجته الخامسة
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="55,110,12" href="#" alt="سي♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="126,102,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="202,94,13" href="#" alt="ري" class="playNote" data-frequency="293.33"  data-parent="#notation1">
					  <area shape="circle" coords="280,86,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="357,78,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-Hijaz 1st-->
					  <area shape="circle" coords="434,70,13" href="#" alt="صول♭" class="playNote" data-frequency="373.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="509,62,12" href="#" alt="لا♮" class="playNote" data-frequency="444" data-parent="#notation1"><!--var-->
					</map>

                    <h5>جنس نهاوند مرصّع هو الجنس الاول في
		              <a href="../maqam/nahawand_murassaa.php">مقام نهاوند مرصّع</a>.
                        وهو صنف من
                        <a href="nahawand.php">جنس النهاوند </a>
                        تُخفّض درجته الخامسة بنصف صوت.
                        </h5><h5>
		              يقع قراره في هذا السلّم النموذجي على علامة الدو، اما غمّازه فهو غير محدد (لذلك فحجمه ايضاً غير محدد).
                    </h5>
					<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>دولاب مقام النهاوند</b>
                                    <span>(من اغنية سيبوني يا ناس)</span>
                                    <span>صباح فخري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/habbeit_gamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>اغنية حبّيت جمالك</b>
                                    <span>ليلى مُراد (مصر)</span>
                                    <span>تلحين محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>اغنية خسارة (١٩٥٧)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>عزف منفرد على الاكورديون</b>
                                    <span>من اغنية تحت الشبّاك</span>
                                    <span>غناء فاطمة سرحان (مصر</span>
                                    <span>تلحين عزيز عثمان</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>اغنية من حبي فيك يا جاري (١٩٥٨)</b>
                                    <span>غناء حورية حسن (مصر)</span>
                                    <span>تلحين محمد الموجي (مصر)</span>
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