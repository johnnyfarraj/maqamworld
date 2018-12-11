<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع مخمّس ١٦/٤";
$page_description = "إيقاع مخمّس ١٦/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/mukhammas.php";
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
                        <h1>إيقاع مُخَمّس ١٦/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/mukhammas.png" class="img-fluid">
                    </div>

                    <h5>إيقاع مُخَمّس غالباً ما يستعمل في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mukhammas/badri_adir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mukhammas/badri_adir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح بدري ادِر كاس الطلا</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mukhammas/wajhak_mushriq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح وجهك مُشرق</b>
                                    <span>فرقة الغناء الشرقي - جامعة الروح القدس في الكسليك</span>
                                    <span>بقيادة عايدة شلهوب زيادة</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                    <span><img src="/img/cd.png"> سلسلة اسطوانات اوريانتاليا: موشّح وأغنية</span>
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