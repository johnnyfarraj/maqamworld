<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس كُرد";
$page_description = "جنس كُرد";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/kurd.php";
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
                        <h1>جنس كُرد</h1>
                        <h3>جنس الجذر في
                            <a href="../maqam/f_kurd.php">عائلة مقام الكرد</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على النوطة بالفأرة وامسك الزرّ حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="109,89,14" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="183,81,13" href="#" alt="مي♭" class="playNote" data-frequency="308.25" data-parent="#notation1"><!--minor 2nd-->
					  <area shape="circle" coords="261,73,13" href="#" alt="فا♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="339,65,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="411,57,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="488,49,12" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <h5>جنس كُرد is a 4-note <em>jins</em>. It is notated here with its tonic on D and its <em>ghammaz</em> on G. جنس كُرد is the first <em>jins</em> in <a href="../maqam/kurd.php">Maqam Kurd</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/kurd/3awwidti_3eini.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/kurd/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية عوّدت عيني (١٩٥٧)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات أحمد رامي (مصر)</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hayyarti_albi_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حيّرت قلبي معاك (١٩٦١)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>تاليف أحمد رامي (مصر)</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hibbi_zurni.mp3">
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

                    <div class="track" data-song="/audio/jins/kurd/inta_omri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انت عمري (١٩٧٦)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>تأليف الشاعر أحمد شفيق كامل</span>
                                    <span>تلحين محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/mshghoul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مشغول عليك</b>
                                    <span>غناء كارم محمود (مصر)</span>
                                    <span>كلمات فتحي قورة</span>
                                    <span>تلحين احمد صدقي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_bahjet_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح يا بهجة الروح</b>
                                    <span>صباح فخري</span>
                                    <span>(الشعر واللحن قديم)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_zalimni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا ظالمني (١٩٥١)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات احمد رامى</span>
                                    <span>تلحين رياض السنباطي (مصر)</span>
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