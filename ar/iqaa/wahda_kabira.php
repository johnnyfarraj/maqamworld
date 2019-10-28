<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع واحدة كبيرة ٨/٤";
$page_description = "إيقاع واحدة طويلة ٨/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/wahda_kabira.php";
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
                        <h1>إيقاع واحْدة كبيرة ٨/٤</h1>
                        <h3>يُسمّى ايضاً <strong>واحْدة سنباطي</strong></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/wahda_kabira.png" class="img-fluid">
                    </div>

                    <h5>
                        إيقاع واحْدة كبيرة (و يُسمّى ايضاً "واحْدة سنباطي") هو إيقاع مبني على مدّ <a href="wahda.php">إيقاع الواحْدة</a> من وزن ٤/٤ الى وزن ٤/٨.
                    </h5>
                    <h5>
                        يستعمل هذا الايقاع كثيراً في الموسيقى الغنائية والآلية من منتصف القرن العشرين.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>مقطوعة خطوة حبيبي  (١٩٥٣)</b>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/habibi_yis3ed.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حبيبي يسعد اوقاته (١٩٤٣)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>الحان الشيخ زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية القلب يعشق كلّ جميل (١٩٦١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة توتة</b>
                                    <span>الحان فريد الاطرش (سوريا/مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/ya_bid3_el_ward.mp3 ">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا بدع الورد (١٩٤٤)</b>
                                    <span>غناء اسمهان (سوريا/مصر)</span>
                                    <span>كلمات حلمي الحكيم (مصر)</span>
                                    <span>الحان فريد الاطرش (سوريا/مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/sawa_rbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية سوا ربينا (١٩٦١)</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>كلمات وألحان الأخوين رحباني</span>
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