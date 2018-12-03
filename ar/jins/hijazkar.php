<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس حجاز كار";
$page_description = "جنس حجاز كار";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/hijazkar.php";
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
                        <h1>جنس حِجاز كار <span class="badge badge-custom">جديد</span></h1>
                        <h3>جنس دون غمّاز يتمحور سيره حول درجة القرار</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="70,68,13" href="#" alt="لا♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="149,60,13" href="#" alt="سي♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
					  <area shape="circle" coords="227,51,14" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="303,42,13" href="#" alt="ري♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
					  <area shape="circle" coords="380,35,13" href="#" alt="مي♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tuned down from 660 -->
					  <area shape="circle" coords="457,26,13" href="#" alt="فا" class="playNote" data-frequency="695.3" data-parent="#notation1">
					</map>

                    <h5>
                    جنس الحجاز كار  لا غمّاز له، لذلك فحجمه غير محدد.
					يتمحور سيره حول درجة القرار التي تقع في هذا السلّم النموذجي على علامة الدو.
					</h5><h5>
					يقع جنس الحجاز كار في معظم الاحيان على جواب
					<a href="../maqam/hijazkar.php">مقام الحجاز كار</a> (الدرجة الثامنة)
					او على غمّاز
					<a href="../maqam/nawa_athar.php">مقام نو اثر</a> (الدرجة الخامسة).
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يا حلاوة الدنيا</b>
                                    <span>غناء سيّد مكاوي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/badru_timmin.mp3">
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

                    <div class="track" data-song="/audio/jins/hijazkar/hibbi_zurni_ma_tayassar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح حبّي زرني ما تيسّر</b>
                                    <span>غناء كارم محمود (مصر)</span>
                                    <span>تلحين درويش الحريري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح رماني بسهم هواه</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين داوود حسني (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_manta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور ياما انت واحشني</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور يا ناس انا متّ في حبّي</b>
                                    <span>غناء غادة شبير (لبنان)</span>
                                    <span>تلحين سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/zahr_el_laymun.mp3">
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