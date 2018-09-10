<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس حجاز Murassa";
$page_description = "جنس حجاز Murassa";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/hijaz_murassaa.php";
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
                        <h1>جنس حجاز مُرصّع <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من
                            <a href="hijaz.php">جنس الحجاز</a>
                            تُخفّض درجته الخامسة
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على النوطة بالفأرة وامسك الزرّ حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="43,106,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="88,106,12" href="#" alt="دو♯" class="playNote" data-frequency="281.24" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="143,98,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="217,89,13" href="#" alt="مي♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="294,81,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="373,73,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="450,65,12" href="#" alt="لا♭" class="playNote" data-frequency="422" data-parent="#notation1">
                    </map>

                    <h5>جنس حجاز مرصّع هو صنف من
                            <a href="hijaz.php">جنس الحجاز</a>
                            تُخفّض درجته الخامسة بنصف صوت ،وحجمه ٤ درجات.
 يقع قراره في هذا السلّم النموذجي على علامة الري وغمّازه على علامة الصول.
هذا الجنس ليس جزءاَ من سلّم اي مقام, بل يأتي عادةَ كأنتقال نغميّ من 
<a href="hijaz.php">جنس الحجاز</a>
في سياق سير 
<a href="../maqam/hijazkar.php">مقام الحجاز كار</a>.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية انا في انتظارك (١٩٤٣)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات محمود بيرم التونسي</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على العود</b>
                                    <span>(من موشح بدر تِمّ حاز حسناً)</span>
                                    <span>غناء غادة شبير (لبنان)</span>
                                    <span><img src="/img/cd.png">أسطوانة الموشحات</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح بدر تِمّ حاز حسناً</b>
                                    <span>غناء غادة شبير (لبنان)</span>
                                    <span>تلحين مرسي الحريري</span>
                                    <span><img src="/img/cd.png">أسطوانة الموشحات</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/laha_badrut_timm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح لاح بدرُ التِمّ</b>
                                    <span>تلحين وغناء الشيخ محمود صُبح</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/mala_el_kasat_khana.mp3">
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

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قدّك الميّاس</b>
                                    <span>غناء محمد خَيري (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zarani_al_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح زارني المحبوب</b>
                                    <span>غناء سلاطين الطرب (سوريا)</span>
                                    <span>(الشعر واللحن قديم)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية زهر الليمون (١٩٩٧)</b>
                                    <span>غناء سنية مبارك (تونس)</span>
                                    <span><img src="/img/cd.png">أسطوانة توشيح</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/maqam_isba3ain.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال في مقام الاصبعين</b>
                                    <span>غناء سنية مبارك (تونس)</span>
                                    <span><img src="/img/cd.png">أسطوانة توشيح</span>
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