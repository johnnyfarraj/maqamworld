<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس صَبا زَمزَم";
$page_description = "جنس صَبا زَمزَم";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/saba_zamzam.php";
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
                        <h1>جنس صَبا زَمزَم</h1>
                        <h3>الجنس الاول في
                            <a href="../maqam/saba_zamzam.php">مقام صَبا زمزم</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_zamzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="39,100,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="120,92,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="196,84,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="274,76,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="349,68,13" href="#" alt="صول♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="427,60,13" href="#" alt="لا♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="504,52,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <h5>جنس جنس صَبا زَمزَم هو الجنس الاول في
					<a href="../maqam/saba_zamzam.php">مقام صَبا زَمزَم</a>.
                    يقع قراره في هذا السلّم النموذجي على علامة الري، اما غمّازه فيمكن ان يقع على الدرجة الثالثة (علامة الفا) او السادسة (علامة السي بيمول)، لذلك فحجم هذا الجنس غير واضح.
                    </h5>
					<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_zamzam/3ala_hesb_widad.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_zamzam/3ala_hesb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية على حسب وداد قلبي (١٩٥٣)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات صلاح ابو سالم</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/gana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية جانا الهوى (١٩٦٩)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات الشاعر محمد حمزة (مصر)</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية زيّ الهوى (١٩٧٠)</b>
                                    <span>عبد الحليم حافظ</span>
                                    <span>كلمات الشاعر محمد حمزة (مصر)</span>
                                    <span>تلحين بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_zamzam/nibtidi.mp3">
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

                    <div class="track" data-song="/audio/jins/saba_zamzam/ya_bint_el_sultan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا بنت السلطان (؟)</b>
                                    <span>غناء احمد عدوية (مصر)</span>
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