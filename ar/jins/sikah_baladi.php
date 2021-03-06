<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس سيكاه بلدي";
$page_description = "جنس سيكاه بلدي";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/sikah_baladi.php";
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
                        <h1>جنس سِيكاه بلدي <span class="badge badge-custom">جديد</span></h1>
                        <h3>جنس من دون غمّاز يتمحور سيره حول القرار</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,93,13" href="#" alt="مي<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="315" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="163,85,13" href="#" alt="فا<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="364" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="243,77,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="318,67,13" href="#" alt="لا<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="425" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="395,60,13" href="#" alt="سي<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="485" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="473,51,13" href="#" alt="دو↓" class="playNote" data-frequency="515" data-parent="#notation1"><!-- variable -->
					</map>

                    <h5>
                    جنس سيكاه بلدي لا غمّاز له، لذلك فحجمه غير محدد. يتمحور سيره حول درجة القرار التي تقع في هذا السلّم النموذجي على علامة الصول.
                    </h5><h5>
                    يقع جنس سيكاه بلدي على جواب <a href="../maqam/sikah_baladi.php">مقام السيكاه بلدي</a> (الدرجة الثامنة).
                    ويُستعمل ايضاً في انتقال نغمي معهود على جواب
                    <a href="../maqam/rast.php">مقام الراست</a> (الدرجة الثامنة).
                    </h5><h5>
                  يصعب تدوين هذا الجنس بدقّة حتى مع استعمال إشاراتي السهم الصاعد والهابط ، لذلك يُستحسن ان يتعلمه العازف سمعياً.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>قصيدة من مثلكم لرسول الله ينتسب</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                    <span>من شعر الامام الشافعى</span>
                                    <span><img src="/img/cd.png">أسطوانة مؤذّني حلب – الاناشيد الدينية الاسلامية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah_baladi/hakam_3aleina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حكم علينا الهوى (١٩٧٣)</b>
                                    <span>ام كلثوم</span>
                                    <span>كلمات عبد الوهاب محمد (مصر)</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah_baladi/tal_intizari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طال انتظاري (١٩٣٧)</b>
                                    <span>غناء محمد عبد الوهاب وليلى مراد</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                    <span>من فيلم يحيا الحب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah_baladi/fantasy_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة فانتازي نهاوند</b>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                    <span><img src="/img/cd.png">أسطوانة قمر ١٤</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah_baladi/tqasim_oud_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم عود على مقام الراست</b>
                                    <span>(من وصلة في مقام الراست)</span>
                                    <span>إبراهيم الحجّار (مصر)</span>
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