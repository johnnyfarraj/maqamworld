<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع فوكس ٢/٤";
$page_description = "إيقاع فوكس ٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/fox.php";
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
                        <h1>إيقاع فُوكْس ٢/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/fox.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع فوكس هو إيقاع بسيط جداَ على وزن ٢/٤ يستعمل غالباَ في المقاطع الآلية. ويعزف عادةً بسرعة وخفّة دون كثرة الزخارف، مما يعطيه طابعاَ مستعجلاَ.
                    </h5>
                    <h5>
                    إيقاع فوكس هو الإيقاع الاساسي في <a href="../form/ottoman.php#longa">قالب اللونجا</a> (الآلي العثماني). وينتقل هذا الإيقاع كيثراَ من والى <a href="malfuf.php">إيقاع ملفوف</a>.
                    </h5>
                    <h5>
                    ويمكن ايضا ان يعزف إيقاع فوكس بشكل بطيء جداَ بحيث يدوّن على وزن ٤/٤ (كما في المثلين الاخيرين).
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fox/longa_farahfaza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/fox/longa_farahfaza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>لونجا فرَحفَزا</b>
                                    <span>فرقة سليم سحّاب</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/ghulubt_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية غلُبت اصالح في روحي (١٩٤٦)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات احمد رامى (مصر)</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/al_fann.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الفنّ (١٩٤٥)</b>
                                    <span>كلمات صالح جودت</span>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة توتة</b>
                                    <span>الحان فريد الاطرش (سوريا-مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- divider -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل البطيء لإيقاع فوكس المدوّن على وزن ٤/٤</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/iqaa/fox/ya_duniya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا دنيا يا غرامي (١٩٣٨)</b>
                                    <span>كلمات احمد رامى</span>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية كلّ ده كان ليه (١٩٥٤)</b>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
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