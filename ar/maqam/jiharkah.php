<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام جهاركاه";
$page_description = "مقام جهاركاه";
$page_keywords = "عود, مقام جهاركاه,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/jiharkah.php";
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
                        <h1>مقام جهاركاه</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/jiharkah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="79,128,12" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="321.33" data-parent="#notation1"><!--variable-->
                      <area shape="circle" coords="145,120,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="225,112,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="301,102,13" href="#" alt="لا♮↓" class="playNote" data-frequency="433" data-parent="#notation1"><!--variable down from 440 -->
                      <area shape="circle" coords="378,94,13" href="#" alt="سي♭↓" class="playNote" data-frequency="454" data-parent="#notation1"><!--variable down from 463.53 -->
                      <area shape="circle" coords="456,86,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Jins Upper Rast -->
                      <area shape="circle" coords="533,78,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="610,69,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="642.66" data-parent="#notation1"><!-- identical yo Jins Upper Rast 3rd -->
                      <area shape="circle" coords="688,61,13" href="#" alt="فا" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="180,14,330,43" href="../jins/jiharkah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="490,149,672,182" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام جهاركاه هو مقام قليل الاستعمال في الموسيقى العربية.
		يبدأ سلّمه <a href="../jins/jiharkah.php">بجنس الجهاركاه</a> (شبيه بجنس العجم) على القرار،
 		يليه <a href="../jins/upper_rast.php">جنس الراست الاعلى</a> على الغمّاز (الدرجة الخامسة)،
		(وقرار جنس الراست الاعلى يقع على درجته الاخيرة اي جواب السلّم).
		</h5><h5>
		لا ينتمي مقام جهاركاه لأي عائلة مقامية.
		</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/jiharkah/kallili_ya_suhbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/jiharkah/kallili_ya_suhbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح كللي يا سحب</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/maqam/jiharkah/ya_malik_qalbi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>دور يا ما انت واحشني</b>
                                    <span>غناء صباح فخري (سوريا)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                   <div class="track " data-song="/audio/maqam/jiharkah/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>دور عِشنا وشفنا</b>
                                    <span>غناء صالح عبد الحيّ (مصر)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/samai_jiharkah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي جهاركاه</b>
                                    <span>فرقة صباح فخري (سوريا)</span>
                                    <span><img src="/img/cd.png">من حفلة مسرح الاماندييه (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/dulab_jiharkah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب جهاركاه</b>
                                    <span>فرقة صباح فخري (سوريا)</span>
                                    <span><img src="/img/cd.png">من حفلة مسرح الاماندييه (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/jiharkah/3ar_rozana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية عالروزانا</b>
                                    <span>اللحن قديم</span>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span><img src="/img/cd.png">من حفلة مسرح الاماندييه (فرنسا)</span>
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
