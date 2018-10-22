<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام صَبا";
$page_description = "مقام صَبا";
$page_keywords = "عود ,مقام صَبا,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/saba.php";
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
                        <h1>مقام صَبا</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/saba.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="60,129,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
		  <area shape="circle" coords="132,121,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
		  <area shape="circle" coords="209,112,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
		  <area shape="circle" coords="288,104,13" href="#" alt="صول♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
		  <area shape="circle" coords="367,96,13" href="#" alt="لا♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
		  <area shape="circle" coords="446,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="522,78,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="602,71,13" href="#" alt="ري♭" class="playNote" data-frequency="548" data-parent="#notation1">
		  <area shape="circle" coords="653,71,13" href="#" alt="ري♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
		  <area shape="circle" coords="705,62,13" href="#" alt="مي♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
		  <area shape="circle" coords="781,53,13" href="#" alt="فا" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="149,6,265,35" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="485,4,615,33" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="265,143,382,173" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="548,143,680,173" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام صَبا is a very popular and common maqam in the Arabic repertory. Its scale starts with <a href="../jins/saba.php">Jins Saba</a> on the <em>tonic</em>, overlapped by <a href="../jins/hijaz.php">Jins Hijaz</a> on the 3<sup>rd</sup> degree, followed by either <a href="../jins/ajam.php">Jins ‘Ajam</a> or <a href="../jins/nikriz.php">Jins Nikriz</a> on the 6<sup>th</sup> degree. 
		</h5>
		<h5>مقام صَبا  لا ينتمي لأي عائلة.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب، تقسيم على الناي وليالي مقام صبا</b>
                                    <span>غناء صبري المدلل (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/al_atlal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية الاطلال (١٩٦٦)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية هو صحيح الهوى غلّاب (١٩٦٠(</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان زكريا احمد</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ahwa_qamaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح اهوى قمراً</b>
                                    <span>غناء غادة شبير (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ghuddi_jufunik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح غضّي جفونك</b>
                                    <span>غناء خالد الحافظ (سوريًا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ya_mas3adek_sabahiyya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قد يا ماسعدك صباحية</b>
                                    <span>غناء صباح فخري (سوريا)</span>
                                    <span>(اللحن قديم)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/dulab_teshuf_omuri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية تشوف اموري (١٩٣٠)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/samai_saba_youssef_kassab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي صَبا</b>
                                    <span>الحان يوسف كسّاب (سوريا)</span>
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
