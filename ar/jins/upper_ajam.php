<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس عجم اعلى";
$page_description = "جنس عجم اعلى";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/upper_ajam.php";
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
                        <h1>جنس عجم اعلى <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من
                            <a href="ajam.php">جنس العجم </a>
                            (ذو اربع درجات) يقع قراره في الأعلى
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,81,12" href="#" alt="فا♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="149,73,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="225,65,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="304,56,13" href="#" alt="سي" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="383,49,14" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="455,40,12" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>

                    <h5>جنس العجم الاعلى هو صنف من
                    <a href="ajam.php">جنس العجم</a>
                    ذو اربع درجات، يقع قراره في الأعلى (اي على الدرجة الرابعة بدلاً من الدرجة الاولى).
                    وهذه ميزة مشتركة مع
                    <a href="rast.php">جنس الراست الاعلى</a>.
                   </h5><h5>
                 	 جنس العجم الاعلى هو الجنس الثاني في
                 	 <a href="../maqam/ajam.php">مقام العجم</a>،
                 	 ويقع ايضاً على الدرجة الثالثة من <a href="../maqam/bayati.php">مقام البياتي</a>.
					يقع قراره في هذا السلّم النموذجي على علامة الدو في الاعلى وغمّازه على علامة الصول في الاسفل.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/upper_ajam/zayy_el_hawa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/upper_ajam/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية زيّ الهوى (١٩٧٠)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات الشاعر محمد حمزة (مصر)</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/lissa_fakir.mp3">
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

                    <div class="track" data-song="/audio/jins/upper_ajam/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية هو صحيح الهوى غلّاب (١٩٦٠)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال من يوم فرقاك</b>
                                    <span>صباح فخري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/nixon.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية شرّفت يا نيكسون بابا (١٩٧٤)</b>
                                    <span>كلمات احمد فؤاد نجم (مصر)</span>
                                    <span>غناء وتلحين الشيخ امام (مصر)</span>
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