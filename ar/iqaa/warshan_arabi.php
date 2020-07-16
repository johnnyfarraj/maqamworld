<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع ورشان عربي ٣٢/٤";
$page_description = "إيقاع ورشان عربي ٣٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/warshan_arabi.php";
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
                        <h1>إيقاع ورشان عربي ٣٢/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/warshan_arabi.png" class="img-fluid">
                    </div>

                    <h5>إيقاع ورشان عربي هو إيقاع نادر، غالباً ما يستعمل في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a> الغنائي.
                    </h5>
                    <h5>طول دورة واحدة من هذا الايقاع تساوي ثمان دورات من ايقاعات من وزن الـ ٤/٤ مثل <a href="maqsum.php">المقسوم</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح قاتلي بغنج الكحل</b>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>مع عادل شمس الدين على الرقّ</span>
                                    <span><img src="/img/cd.png"> أسطوانة الحروب الصليبية من منظار الشرق (مقام البياتي)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/ah_min_jour_el_ghawani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح آه من جور الغواني</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان احمد أبو خليل القباني (سوريا)</span>
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
