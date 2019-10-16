<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع الأوفر المصري ١٩/٤";
$page_description = "إيقاع الأوفر المصري ١٩/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/awfar.php";
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
                        <h1>إيقاع الأوفر المصري ١٩/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <h5>إيقاع الأوفر المصري يستعمل غالباً في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>.
                    ويأتي إيقاع الأوفر المصري على شكلين.</h5>

                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الاول</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="../note/iqaa/awfar_f1.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح من كنتَ أنتَ حبيبه</b>
                                    <span>اللحن والكلمات قديمان</span>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span><img src="/img/cd.png"> حجرة الموسيقى االحلبية – الجزء الثاني (<a href="../maqam/rast.php">مقام راست</a>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الثاني</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="../note/iqaa/awfar_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ghuddi_jufunaki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح غُضّي جفونك</b>
                                    <span>غناء غادة شبير (لبنان)</span>
                                    <span>اللحن والكلمات قديمان</span>
                                    <span>من مقام الصبا</span>
                                    <span><img src="/img/cd.png"> أسطوانة الموشحات</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_man_ramani_bil_siham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا من رماني بالسهام </b>
                                    <span>غناء فرقة دوكاه</span>
                                    <span>من مقام النكريز</span>
                                    <span>الحان الشيخ عمر البطش (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_na3isa_al_ajfan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا ناعِس الأجفان  </b>
                                    <span>غناء خالد الحافظ (سوريا)</span>
                                    <span>من مقام النهاوند</span>
                                    <span>الحان الشيخ عمر البطش (سوريا)</span>
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