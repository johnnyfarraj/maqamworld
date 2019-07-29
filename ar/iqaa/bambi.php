<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع بمبي ٨/٤";
$page_description = "إيقاع بمبي ٨/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/bambi.php";
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
                        <h1>إيقاع بَمبي ٨/٤</h1>
                        <h3>يُسمّى ايضاً <strong>بَمب</strong></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/bambi_f1.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع بمبي هو إيقاع مصري على وزن ٨/٤ الطويل، يستعمل كثيراً لمرافقة مقاطع الارتجالات الآلية والغنائية. (وكلمة "بمبي" تعني زهري اللون بالعامية المصرية).
                    </h5>
                    <h5>
		عادةَ ما يبدأ عزف هذا الإيقاع من الضربة السابعة (اي الدمّ ما قبل الاخيرة) بحيث تبدأ كل دورة بالتركيز على ثلاث دمّات متتالية. ويأتي إيقاع بمبي ايضاَ على شكل ثان يبدأ تدوين دورته بالدمات الثلاث.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>تقسيم موزون على العود</b>
                                    <span>سيمون شاهين (فلسطين)</span>
                                    <span><img src="/img/cd.png"> إسطوانة تراث</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form1/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال يا مَن بنودك حرير</b>
                                    <span>المطرب الحلبي محمد خيري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form1/gafnuhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة جفنُهُ علّم الغزل (١٩٣٣)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات بشاره الخورى (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الثاني لإيقاع بمبي</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="notation">
                        <img src="../note/iqaa/bambi_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/andah_3aleik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انده عليك (١٩٨٢)</b>
                                    <span>وردة الجزائرية</span>
                                    <span>الحان محمد عبد الوهاب</span>
                                    <span>كلمات محمد حمزة (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الف ليلة وليلة (١٩٦٩)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                    <span>كلمات مرسي جميل عزيز (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اسامينا</b>
                                    <span>فيروز</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/layali_lubnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة ليالي لبنان (١٩٥٤)</b>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
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