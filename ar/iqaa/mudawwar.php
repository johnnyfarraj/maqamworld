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
                        <h1>إيقاع مدوّر مصري ١٢/٤</h1>
                        <h1>إيقاع مدوّر شامي ١٠/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <h5>إيقاع مدوّر غالباً ما يستعمل في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>.
                    </h5>
                    <h5> ويأتي إيقاع المدوّر على اشكال عديدة منها المدوّر المصري (١٢/٤) والمدوّر الشامي (١٠/٤).
                    </h5>
                    
                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>إيقاع المدوّر المصري ١٢/٤</h3>
                    </div>
                    <br>
                    
                    <div class="notation">
                        <img src="../note/iqaa/mudawwar_masri.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3">
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

                    <div class="track" data-song="/audio/iqaa/mudawwar_12_4/fika_kullu_bayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح فيك كل ما أرى حسن</b>
                                    <span>على <a href="../maqam/bayati.php">مقام البياتي</a></span>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>إيقاع المدوّر الشامي ١٠/٤</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar_shami.png" class="img-fluid">
                    </div>
                    <br>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sarmini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح فيك كل ما أرى حسن</b>
                                    <span>على <a href="../maqam/hijaz.php">مقام الحجاز</a></span>
                                    <span>عمر السرميني (حلب)</span>
                                    <span>فرقة الكندي (سوريا-فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح فيك كل ما أرى حسن</b>
                                    <span>على <a href="../maqam/hijaz.php">مقام الحجاز</a></span>
                                    <span>صباح فخري (حلب)</span>
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