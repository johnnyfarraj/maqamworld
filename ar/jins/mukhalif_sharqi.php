<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس مخالف شرقي";
$page_description = "جنس مخالف شرقي";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/mukhalif_sharqi.php";
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
                        <h1>جنس مُخالِف شرقي <span class="badge badge-custom">جديد</span></h1>
                        <h3>صنف من أصناف 
                           <a href="sikah.php">جنس السيكاه</a>
                            تُخفّض درجته الثالثة
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/mukhalif_sharqi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="80,87,14" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="155,79,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="233,70,13" href="#" alt="صول♭" class="playNote" data-frequency="365.32" data-parent="#notation1">
					</map>

                    <h5>
                   جنس مخالف شرقي لا غمّاز له، لذلك فحجمه غير محدد.
                    يقع قراره في هذا السلّم النموذجي على علامة المي نصف بيمول.
                    </h5><h5>
					هذا الجنس ليس جزءاَ من سلّم اي مقام، بل يأتي عادةَ كأنتقال نغميّ من
					<a href="sikah.php">جنس السيكاه</a>
					في سياق سير
					<a href="../maqam/f_sikah.php">مقامات عائلة السيكاه</a>.
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mukhalif_sharqi/emta_el_hawa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mukhalif_sharqi/emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>دور امتى الهوى (١٩٣٦)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية غنّيلي شوية شوية (١٩٤٥)</b>
                                    <span>ام كلثوم</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>الحان زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/raqsat_al_sus.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة رقصة السوس (١٩٧٤)</b>
                                    <span>الحان الأخوين رحباني (لبنان)</span>
                                    <span>(من المسرحية الغنائية لولو)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/lisan_el_dam3i.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور لسان الدمع</b>
                                    <span>غناء الشيخ يوسف المنيلاوي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/mahtiyali_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح ما احتيالي (خانة)</b>
                                    <span>غناء عائشة رضوان (المغرب)</span>
                                    <span>الحان احمد ابو خليل القبّاني (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/muwashah_ya_samiri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح يا سميري ضاع صبري</b>
                                    <span>غناء محمد خَيري (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/tahmila_suznak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تحميلة راست (سوزناك)</b>
                                    <span>الفرقة المرافقة لعائشة رضوان (المغرب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ya_sahib_el_gamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا عمّي يا صاحب الجمال</b>
                                    <span>غناء احمد عدوية (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/abdu_daghir_violin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على الكمان</b>
                                    <span>عبده داغِر (مصر)</span>
                                    <span><img src="/img/cd.png">أسطوانة الجبالي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/el_layli_mish_bukra.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الليلة ما برضى بكرا</b>
                                    <span>غناء والحان وديع الصافي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ib3id_3anni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية ابعد عنّي عيونك</b>
                                    <span>غناء ياسمين الخيّام (مصر)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ib3id_3anni_nay.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>عزف منفرد على الناي </b>
                                    <span>اغنية ابعد عنّي عيونك</span>
                                    <span>غناء ياسمين الخيّام (مصر)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
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