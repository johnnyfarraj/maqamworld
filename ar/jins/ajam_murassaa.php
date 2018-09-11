<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس عجم مرصّع";
$page_description = "جنس عجم مرصّع";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/ajam_murassaa.php";
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
                        <h1>جنس عجم مُرصّع <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من
                           <a href="ajam.php">جنس العجم</a>
                            تُرفع درجته الرابعة
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="53,86,12" href="#" alt="مي" class="playNote" data-frequency="330" data-parent="#notation1">
					  <area shape="circle" coords="136,78,14" href="#" alt="فا" class="playNote" data-frequency="347.65"  data-parent="#notation1">
					  <area shape="circle" coords="211,69,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="289,61,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1"><!-- TODO should that be lowered a bit to match 'Ajam's 3rd? -->
					  <area shape="circle" coords="365,53,13" href="#" alt="سي♮" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="444,45,14" href="#" alt="دو" class="playNote" data-frequency="521.5" data-parent="#notation1">
					  <area shape="circle" coords="518,37,12" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>

                    <h5>جنس عجم مُرصّع هو صنف من
                     <a href="ajam.php">جنس العجم</a>
                     تُرفع درجته الرابعة بنصف صوت ،وحجمه ٥ درجات.
					 يقع قراره في هذا السلّم النموذجي على علامة الفا وغمّازه على علامة الدو.
  					 </h5><h5>
					هذا الجنس ليس جزءاَ من سلّم اي مقام، بل يأتي عادةَ كأنتقال نغميّ من
					<a href="hijaz.php">جنس العجم</a>
					في سياق سير
					<a href="../maqam/ajam.php">مقام العجم</a>.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam_murassaa/kallili.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/ajam_murassaa/kallili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح كلّلي يا سُحبُ</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/3umri_fi_hubbihi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة عمري في حبّهِ انقضى</b>
                                    <span>غناء محمد خَيري (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/abdu_daghir_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على القانون في مقام العجم</b>
                                    <span>عبده داغِر</span>
                                    <span><img src="/img/cd.png">الجبالي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/nibtidi_mnein_el_hikaya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية نبتدي منين الحكاية (١٩٧٥)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات الشاعر محمد حمزة (مصر)</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قارئة الفنجان (١٩٧٦)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات الشاعر نزار قبّاني (سوريا)</span>
                                    <span>تلحين محمد الموجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/sabbahti_min_3ishqak_abki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور صبّحتِ من عِشقي ابكي</b>
                                    <span>غناء عبد الحيّ حِلمي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/m_qadri_dalal_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على العود</b>
                                    <span>محمد قدري دلال (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/layali_zaman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة ليالي زمان</b>
                                    <span>تلحين عبده داغِر (مصر)</span>
                                    <span>تسجيل حيّ من دار الاوبرا في القاهرة</span>
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