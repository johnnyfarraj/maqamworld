<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع مدوّر ١٢/٤";
$page_description = "إيقاع مدوّر ١٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/mudawwar.php";
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
                        <h1>إيقاع مدوّر ١٢/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/mudawwar.png" class="img-fluid">
                    </div>

                    <h5>إيقاع مدوّر غالباً ما يستعمل في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mudawwar/adhkuru_al_hubba.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mudawwar/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح اذكر الحبّ</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان داوود حسني (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar/fika_kullu_ma_ara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح فيك كل ما أرى حسن</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar/nabbih_al_nudman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح نبّه الندمان صاحِ</b>
                                    <span>غناء صباح فخري (حلب)</span>
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