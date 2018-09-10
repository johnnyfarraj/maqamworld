<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس لامي";
$page_description = "جنس لامي";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/lami.php";
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
                        <h1>جنس لامي</h1>
                        <h3>الجنس الاول في
                            <a href="../maqam/lami.php">مقام اللامي</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على النوطة بالفأرة وامسك الزرّ حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="51,93,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="126,85,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="202,77,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="281,69,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="356,61,13" href="#" alt="لا♭" class="playNote" data-frequency="411" data-parent="#notation1">
					  <area shape="circle" coords="433,53,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <h5>جنس لامي هو الجنس الاول في
		<a href="../maqam/lami.php">مقام اللامي</a>
		 ، حجمه ٤ درجات. يقع قراره في هذا السلّم النموذجي على علامة الري وغمّازه على علامة الصول.  
                    </h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية البرتقال (١٩٣٨)</b>
                                    <span>غناء وتلحين محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>إنشودة أحمد يا حبيبي</b>
                                    <span>غناء وتلحين صبري المدلل (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/el_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية النجمات (١٩٦٤)</b>
                                    <span>غناء وديع الصافي (لبنان)</span>
                                    <span>تلحين محمد محسن</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية كل لي يا حلو</b>
                                    <span>غناء كاظم الساهر (عراق)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/qasidat_aqulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة أقول وقد ناحت بقربي حمامة</b>
                                    <span>غناء ناظم الغزالي (عراق)</span>
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