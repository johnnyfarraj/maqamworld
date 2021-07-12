<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع دور هندي ٧/٨";
$page_description = "إيقاع دور هندي ٧/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/dawr_hindi.php";
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
                        <h1>إيقاع دَور هِندي ٧/٨</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/dawr_hindi.png" class="img-fluid">
                    </div>

                    <h5>إيقاع دور هندي شائع كثيراً في
                        <a href="../form/vocal_comp.php#muwashah">قالب الموشح</a>.</h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّخ صحت وجداً</b>
                                    <span>فرقة الغناء الشرقي - جامعة الروح القدس في الكسليك</span>
                                    <span>بقيادة عايدة شلهوب زيادة</span>
                                    <span>الحان سيّد درويش (مصر)</span>
                                    <span><img src="/img/cd.png"> سلسلة اسطوانات اوريانتاليا: موشّح وأغنية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jadaka_al_ghaythu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح جادك الغيث</b>
                                    <span>المطرب الحلبي صباح فخري</span>
                                    <span>الحان مجدي العقيلي (سوريا)</span>
                                    <span><img src="/img/cd.png"> تسجيل حي من مهرجان بيت الدين - الجزء الاول</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jalla_man.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح جل من قد صورك</b>
                                    <span>إنشاد الشيخ حمزة شكّور (سوريا)</span>
                                    <span>فرقة الكندي (سوريا-فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dawr_hindi/arji3i-ya-alfa-leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح ارجعي يا الف ليلة (١٩٦٦)</b>
                                    <span>فيروز</span>
                                    <span>كلمات رفيق خوري</span>
                                    <span>ألحان الأخوين رحباني</span>
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