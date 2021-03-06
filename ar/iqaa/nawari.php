<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع قتاقوفتي ٤/٤";
$page_description = "إيقاع نَوَري ٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/nawari.php";
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
                        <h1>إيقاع نَوَري ٤/٤</h1>
                        <h3>يُسمّى ايضاً <strong>قتاقوفتي</strong></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/nawari.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع نَوَري هو إيقاع فولكلوري يستعمل غالباً في الدبكات والرقص الشعبي.
		 يشبه هذا الإيقاع إيقاعيّ <a href="saidi.php">الصعيدي</a> <a href="baladi.php">والبلدي</a> الّا انه يبدأ بضربة التَكّ بدلاً من الدُمّ.
		</h5>
		<h5>
		يسمّى ايقاع النَوري بعض الاحيان 
		<strong>قتاقوفتي</strong>
		الّا ان <a href="katakufti.php">إيقاع القتاقوفتي</a> الاصلي يختلف تدوينه.
		ويرجح ان سبب هذه التسمية الخاطئة تعود الى ان <a href="katakufti.php">إيقاع القتاقوفتي</a> يشبه تماماً ايقاع النَوَري عندما يبدأ عدّه من الضربة الثامنة (اي التك الأخيرة).  
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>ياعين موليتين</b>
                                    <span>غناء سميرة توفيق (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawari/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دلعونا</b>
                                    <span>(من التراث الشعبي)</span>
                                    <span>غناء فارس كرم (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawari/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة موسيقية</b>
                                    <span>فرقة الفنون للتراث الشعبي الفلسطيني</span>
                                    <span><img src="/img/cd.png"> زغاريد</span>
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