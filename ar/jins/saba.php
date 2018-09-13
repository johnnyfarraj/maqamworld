<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس صَبا";
$page_description = "جنس صَبا";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/saba.php";
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
                        <h1>جنس صَبا</h1>
                        <h3>الجنس الاول في
                            <a href="../maqam/saba.php">مقام الصَبا</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,102,12" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="144,94,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="226,86,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="301,78,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="379,70,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="456,62,13" href="#" alt="صول♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="532,53,13" href="#" alt="لا♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="609,45,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <h5>جنس صَبا هو الجنس الاول في
                    <a href="../maqam/saba.php">مقام الصَبا</a>.
					يقع قراره في هذا السلّم النموذجي على علامة الري.
					اما غمّازه، وهو نقطة انطلاق الجنس التالي، فله احتمالان: الدرجة الثالثة (على الفا) او الدرجة السادسة (على السي بيمول)، ولذلك فحجم هذا الجنس غير محدد.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba/huwwa_sahih.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية هو صحيح الهوى غلاب (١٩٦٠)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/aghadan_alqak.mp3">
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

                    <div class="track" data-song="/audio/jins/saba/ansak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انساك ده كلام (١٩٦١)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات مأمون الشناوى (مصر)</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/dulab_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب في مقال الصَبا</b>
                                    <span>المنشد الحلبي صبري المدلل</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/layali_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ليالي في مقام الصَبا</b>
                                    <span>المنشد الحلبي صبري المدلل</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/lissa_fakir.mp3">
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

                    <div class="track" data-song="/audio/jins/saba/tiri_ya_tiyyara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طيري يا طيارة (١٩٦٨)</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>كلمات الأخوين رحباني </span>
                                    <span>تلحين فيلمون وهبي (لبنان)</span>
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