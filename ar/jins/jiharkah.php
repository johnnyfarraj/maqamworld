<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس جهاركاه";
$page_description = "جنس جهاركاه";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/jiharkah.php";
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
                        <h1>جنس جهاركاه</h1>
                        <h3>الجنس الاول في
                            <a href="../maqam/jiharkah.php">مقام الجهاركاه</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/jiharkah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="27,91,12" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="106,82,12" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="321.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="187,74,14" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="262,66,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="340,58,13" href="#" alt="لا♮↓" class="playNote" data-frequency="433" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="417,50,13" href="#" alt="سي♭↓" class="playNote" data-frequency="454" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="496,42,14" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
					</map>

                    <h5>جنس الجهاركاه هو الجنس الاول في
		<a href="../maqam/jiharkah.php">مقام الجهاركاه</a>
		 ، حجمه ٥ درجات. يقع قراره في هذا السلّم النموذجي على علامة الفا وغمّازه على علامة الدو. وعادةً ما تُعزف الدرجتين الثالثة والرابعة ادنى قليلاً مما هي في 
        <a href="ajam.php">جنس العجم</a>.  
                    </h5>
		          <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/jiharkah/sultan_al_milah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/jiharkah/sultan_al_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح انت سلطان الملاح</b>
                                    <span>صباح فخري</span>
                                    <span>(الشعر واللحن قديم)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية عوّدت عيني (١٩٥٧)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات أحمد رامي (مصر)</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/shams_il_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية شمس الاصيل (١٩٥٨)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات محمود بيرم التونسي</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/taqsim_oud_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على العود من مقام الراست</b>
                                    <span>(من وصلة في مقام الراست)</span>
                                    <span>إبراهيم الحجّار (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا مال الشام</b>
                                    <span>صباح فخري</span>
                                    <span>تلحين احمد أبو خليل القبّاني (سوريا)</span>
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