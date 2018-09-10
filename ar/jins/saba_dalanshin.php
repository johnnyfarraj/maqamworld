<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس صَبا دَلَنشين";
$page_description = "جنس صَبا دَلَنشين";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/saba_dalanshin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>جنس صَبا دَلَنشين <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من
                            <a href="saba.php">جنس الصَبا</a>
                            يقع قراره على الدرجته الثالثة
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على النوطة بالفأرة وامسك الزرّ حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="35,70,12" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="86,70,12" href="#" alt="صول♯" class="playNote" data-frequency="415" data-parent="#notation1"><!--ET???-->
					  <area shape="circle" coords="133,62,14" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="208,55,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="477" data-parent="#notation1"><!--Bayati 2-->
					  <area shape="circle" coords="281,46,14" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="355,38,13" href="#" alt="ري♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="432,29,13" href="#" alt="مي♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="509,21,13" href="#" alt="فا" class="playNote" data-frequency="695.3" data-parent="#notation1">
					</map>

                    <h5>جنس صَبا دَلَنشين is a special case of <a href="saba.php">جنس صَبا</a> which has no <em>ghammaz</em>, and therefore no defined size. Its melody is centered around its tonic, notated here on C. The intervals above the tonic are more or less identical to <a href="hijaz.php">جنس حجاز</a>. The note that is 2 degrees below the tonic (in this case A) is a secondary tonic.</h5>

                    <p>جنس صَبا دَلَنشين occurs on the octave of <a href="../maqam/rast.php">Maqam Rast</a>, which in this case becomes known as <a href="../maqam/dalanshin.php">Maqam Dalanshin</a>. It also occurs on the 5<sup>th</sup> degree of <a href="../maqam/shawq_afza.php">Maqam Shawq Afza</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يا مال الشام</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين احمد أبو خليل القبّاني (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ja_jirat_al_sha3b_al_yamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة يا جيرة الشعب اليماني</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح ملا الكاسات (خانة)</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/qanun_tqasim_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على العود</b>
                                    <span>(من ليالي راست)</span>
                                    <span>غناء عبّاس البليدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا حلاوة الدنيا</b>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>غناء سيّد مكاوي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اسوارة العروس (١٩٨٩)</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>كلمات جوزيف حرب (لبنان)</span>
                                    <span>تلحين فيلمون وهبي (لبنان)</span>
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