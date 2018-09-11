<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس حجاز";
$page_description = "جنس حجاز";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/hijaz.php";
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
                        <h1>جنس حجاز</h1>
                        <h3>جنس الجذر في
                            <a href="../maqam/f_hijaz.php">عائلة مقام الحجاز</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="95,104,12" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!- variable ->
					  <area shape="circle" coords="173,96,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="255,89,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="330,80,13" href="#" alt="مي♭" class="playNote" data-frequency="315" data-parent="#notation1"><!- variable Hijaz 2nd x1.0738->
					  <area shape="circle" coords="408,71,13" href="#" alt="فا♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="486,64,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="559,55,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="636,46,12" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <h5>جنس الحجاز هو جنس الجذر في
					<a href="../maqam/f_hijaz.php">عائلة مقام الحجاز</a>
					، حجمه ٤ درجات. يقع قراره في هذا السلّم النموذجي على علامة الري وغمّازه على علامة الصول.
					</h5><h5>
					وعادةً ما تُرفع الدرجة الثالثة وتُخفّض الدرجة الثالثة قليلاً بالنسبة لما هو منوّط بحيث يصبح البعد بين تلك الدرجتين اقلّ من الصوت ونصف الصوت (في السّلم المعدّل).
 					وجنس الحجاز هو الجنس الاول في مقامات
					<a href="../maqam/hijaz.php">حجاز</a> ،
					<a href="../maqam/hijazkar.php">حجاز كار</a> و
					<a href="../maqam/zanjaran.php">زنجران</a>.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz/ana_fintizarak.mp3">
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

                    <div class="track" data-song="/audio/jins/hijaz/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اغداً القاك (١٩٧١)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات الهادي آدم</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/bi_karm_el_lulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية بكرم اللولو</b>
                                    <span>فيروز  (لبنان)</span>
                                    <span>كلمات الأخوين رحباني</span>
                                    <span>تلحين فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_awwila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الاولة في الغرام (١٩٤٤)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات بيرم التونسي </span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الورد جميل (١٩٤٦)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
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