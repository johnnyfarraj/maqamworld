<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام دَلَنشين";
$page_description = "مقام دَلَنشين";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع,مقام دَلَنشين";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/dalanshin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>مقام دَلَنشين</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="84,64,13" href="#" alt="مي♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
                      <area shape="circle" coords="161,72,13" href="#" alt="ري♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
                      <area shape="circle" coords="240,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
                      <area shape="circle" coords="317,88,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!-- var -->
                      <area shape="circle" coords="393,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="471,105,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="548,113,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="626,121,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                       <area shape="circle" coords="704,129,13" href="#" alt="ري♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="780,137,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="140,5,340,37" href="../jins/saba_dalanshin.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="260,142,446,174" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="573,5,694,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>
		<br>

                    <h5>
                        يبدأ سير مقام دَلَنشين  <a href="../jins/saba_dalanshin.php">بجنس صبا دَلَنشين</a> على جواب <a href="rast.php">مقام الراسْت</a> (الدرجة الثامنة)
                        ثم ينتقل الى سلّم مقام الراست نزولاً ابتداءً من <a href="../jins/upper_rast.php">جنس الراست الاعلى</a> بين الدرجتين الثامنة والخامسة،
                        ويستقرّ  على <a href="../jins/rast.php">جنس الراست</a> على القرار.
                    </h5>
                    <h5>لا توجد مؤلفات كثيرة من هذا المقام، فهو غالباً ما يأتي على اثر انتقال من <a href="rast.php">مقام الراسْت</a>.
		  </h5>
		  <br>
                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>
		  <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/dalanshin/ya_mal_il_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/dalanshin/ya_mal_il_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>قدّ يا مال الشام</b>
                                    <span>المطرب صباح فخري (سوريا)</span>
                                    <span>الحان احمد أبو خليل القباني (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ملا الكاسات</b>
                                    <span>المطرب محمد خيري (حلب)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/kull_illi_habb_itnasaf.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية كل اللي حبّ اتنصف (١٩٣١)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                    <span>كلمات ابراهيم عبدالله</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور عشنا وشفنا </b>
                                    <span>غناء صالح عبد الحيّ (مصر)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
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
