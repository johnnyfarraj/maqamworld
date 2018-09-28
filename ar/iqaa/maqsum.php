<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع مقسوم ٤/٤";
$page_description = "إيقاع مقسوم ٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/maqsum.php";
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
                        <h1>إيقاع مَقسوم ٤/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/maqsum.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع مَقسوم هو الإيقاع الاكثر شيوعاً على الاطلاق في موسيقى الشرق الاوسط.
                    </h5>
                    <h5>
                    ينتقل هذا الإيقاع كثيراً الى إيقاعات اخرى على ميزان ٤/٤ مثل <a href="baladi.php">بلدي</a> و <a href="wahda.php">واحدة</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/maqsum/il_albi_yi3shaq.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/maqsum/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية القلب يعشق كلّ جميل (١٩٦١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات بيرم التونسي</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/maqsum/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية دارت الايام (١٩٧٠)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/maqsum/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قارئة الفنجان (١٩٧٦)</b>
                                    <span>غناء عبد الحليم حافظ (مصر)</span>
                                    <span>كلمات نزار قبّاني (سوريا)</span>
                                    <span>الحان محمد الموجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/maqsum/waraqu_al_asfar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية ورقو الأصفر شهر ايلول</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/maqsum/ya_libnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا لبنان دخل ترابك</b>
                                    <span>غناء صباح (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/maqsum/bahibb_el_gedid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انا بحبّ الجديد</b>
                                    <span>غناء احمد عدوية (مصر) </span>
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