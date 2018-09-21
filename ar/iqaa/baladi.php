<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع بلدي ٤/٤";
$page_description = "إيقاع بلدي ٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/baladi.php";
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
                        <h1>إيقاع بَلدي ٤/٤</h1>
                        <h3>يُسمّى ايضاً "<em>مَصمودي صغير</em>"</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/baladi.png" class="img-fluid">
                    </div>

                    <h5>إيقاع بلدي هو إيقاع شائع جداَ في الموسيقى الغنائية في المشرق العربي.
                    ويسمّى البلدي ايضاً <strong>مصمودي صغير</strong> نسبةً الى <a href="masmudi_kabir.php">إيقاع المصمودي الكبير</a> الذي تمتد كل دورة منه على مدى مازورتي ٤/٤ بدلاً من مازورة واحدة.
                    </h5>
                    <h5>
					ينتقل إيقاع البلدي في كثير من الاحيان الى <a href="maqsum.php">إيقاع المقسوم</a>،
					وايضاً الى <a href="malfuf.php">إيقاع الملفوف</a> بحيث تستبدل دورة من إيقاع البلدي بدورتين من إيقاع الملفوف.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/baladi/aziza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/baladi/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>مقطوعة عزيزة (١٩٥٥)</b>
                                    <span>الحان محمد عبد الوهاب</span>
                                    <span>من فيلم عزيزة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/halummu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>انشودة هلمّوا لي</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قدّ مالك يا حلوة</b>
                                    <span>المطرب الحلبي محمد خيري</span>
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