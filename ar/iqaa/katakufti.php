<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع قتاقوفتي ٨/٨";
$page_description = "إيقاع قتاقوفتي ٨/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/katakufti.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>إيقاع قتاقوفتي ٨/٨</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/katakufti.png" class="img-fluid">
                    </div>

                    <h5>
		إيقاع قتاقوفتي هو إيقاع نادر، غالباً ما يُستعمل في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>.
		</h5>
                    <h5>
		يأتي إيقاع قتاقوفتي على شكلٍ ثانِ حيث تُستبدل علامة الإسّ على الضربة الخامسة بعلامة دُمّ.
                    وبذلك يحصل هذا الشكل على دمّين متتاليتين تجعله شبيهاً بإيقاع <a href="aqsaq.php">الاقصاق</a>.
		</h5>
		<h5>
		  يُستعمل اسم <strong>القتاقوفتي</strong> ايضاً للدلالة على <a href="nawari.php">إيقاع النَوَري</a>
		لأن الايقاعين يتشابهان عندما يبدأ عدّ ايقاع القتاقوفتي من الضربة الثامنة (اي التك الأخيرة).
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/khadduka_al_naddi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/katakufti/khadduka_al_naddi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح خدّك الندّي</b>
                                    <span>خالد الحافظ (سوريا)</span>
                                    <span>الحان عمر البطش (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح آه من نار جفاهم</b>
                                    <span>فرقة نور الشرق للطرب الاصيل</span>
                                    <span>الحان الشيخ علي الدرويش (سوريا)</span>
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