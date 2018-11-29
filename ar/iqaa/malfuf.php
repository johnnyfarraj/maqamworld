<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع ملفوف ٢/٤";
$page_description = "إيقاع ملفوف ٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/malfuf.php";
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
                        <h1>إيقاع مَلفوف ٢/٤</h1>
                        <h3>يُسمّى ايضاً "لَفّ"</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/malfuf.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع مَلفوف (ويسمى ايضاً <strong>لفّ</strong>) هو إيقاع شائع جداً في الموسيقى الشعبية والغنائية. إحساسه قصير ودائريّ، وهو ينتقل في كثير من الاحيان الى ايقاعات اخرى في الوزن نفسه (٢/٤) مثل <a href="karachi.php">كاراتشي</a> و<a href="fox.php">فوكس</a>. ويمكن ايضا ان تستبدل دورتي ملفوف بدورة <a href="maqsum.php">مقسوم</a> او <a href="maqsum.php">بلدي</a>، وكلاهما على وزن (٤/٤).
					</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/malfuf/ya_dara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/malfuf/ya_dara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يا دارة دوري فينا</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية دارت الايام (١٩٧٠)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوي (مصر)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_haffar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح يا صاحِ الصبر وهى مني</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح يا صاحِ الصبر وهى مني</b>
                                    <span>الشيخ حمزة شكّور (دمشق)</span>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/tulba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة الطلبة</b>
                                    <span>فرقة الفنون للتراث الشعبي الفلسطيني</span>
                                    <span><img src="/img/cd.png"> اسطوانة زغاريد</span>
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