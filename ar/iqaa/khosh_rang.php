<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع خوش رانك ١٧/٨";
$page_description = "إيقاع خوش رانك ١٧/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/khosh_rang.php";
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
                        <h1>إيقاع خُوش رانْك ١٧/٨</h1>
                        <h3>(من عبارة فارسية تعني "لون جميل")</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/khosh_rang.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع خُوش رانْك هو إيقاع نادر وقد استُعمل في  <a href="../form/vocal_comp.php#muwashah">موشّح</a> واحد فقط (سلّ فينا اللحظ هنديا) وبضعة مقطوعات حديثة.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح سلّ فينا اللحظ هنديا</b>
                                    <span>فرقة الكندي</span>
                                    <span></span>
                                    <span><img src="/img/cd.png"> أسطوانة الحروب الصليبية من منظار الشرق (مقام حجاز)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/khosh_rang/salla_fina_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح سلّ فينا اللحظ هنديا</b>
                                    <span>صباح فخري (حلب)</span>
                                    <span><img src="/img/cd.png">نغم الامس - الجزء الثامن (مقام حجاز)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/khosh_rang/tareq_abdallah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة خوش رانك</b>
                                    <span>طارق عبد الله على العود (مصر)</span>
                                    <span>عادل شمس الدين على الرقّ (مصر)</span>
                                    <span><img src="/img/cd.png"> أسطوانة وصلة (وصلات مصرية)</span>
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