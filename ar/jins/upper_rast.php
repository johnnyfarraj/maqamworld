<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس راست اعلى";
$page_description = "جنس راست اعلى";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/upper_rast.php";
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
                        <h1>جنس راست اعلى <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من
                            <a href="rast.php">جنس الراست</a>
                            (ذو اربع درجات) يقع قراره في الأعلى
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="61,84,12" href="#" alt="فا♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="144,75,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="219,67,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="297,58,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="378,50,14" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="448,42,12" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  </map>

                    <h5>جنس الراست الاعلى هو صنف من
                    <a href="rast.php">جنس الراست</a>
                    ذو اربع درجات، يقع قراره في الأعلى (اي على الدرجة الرابعة بدلاً من الدرجة الاولى).
                    وهذه ميزة مشتركة مع
                    <a href="ajam.php">جنس العجم الاعلى</a>.
                   </h5><h5>
					جنس الراست الاعلى هو الجنس الثاني في مقامي
					<a href="../maqam/rast.php">راست</a> و <a href="../maqam/jiharkah.php">جهاركاه</a>.
					يقع قراره في هذا السلّم النموذجي على علامة الدو في الاعلى وغمّازه على علامة الصول في الاسفل.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/upper_rast/ya_shadi_al_alhan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/upper_rast/ya_shadi_al_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح يا شادي الالحان</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/hann_el_hadid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حنّ الحديد (١٩٧٤)</b>
                                    <span>غناء جوزيف صقر (لبنان)</span>
                                    <span>تلحين زياد الرحباني (لبنان)</span>
                                    <span>من مسرحية "نزل السرور" الغنائية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اروح لمين (١٩٥٨)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات الشاعر عبد المنعم السباعي </span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اسامينا</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>كلمات جوزيف حرب (لبنان)</span>
                                    <span>تلحين فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/atani_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح اتاني زماني</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حيرانة ليه (١٩٣٠)</b>
                                    <span>ليلى مُراد (مصر)</span>
                                    <span>تلحين داوود حسني (مصر)/span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/min_3azzibak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مين عذّبك (١٩٣١)</b>
                                    <span>كلمات امين عزت الهجين</span>
                                    <span>غناء وتلحين محمد عبد الوهاب (مصر)</span>
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
