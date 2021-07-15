<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس عجم";
$page_description = "جنس عجم";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/ajam.php";
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
                        <h1>جنس عَجَم</h1>
                        <h3>جنس الأصل في
                            <a href="../maqam/f_ajam.php">عائلة مقام العجم</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                    <h5>يأتي جنس العجم على شكلين:</h5>
                    
                    <h5>الشكل الاول (<strong>ذو الدرجات الخمس</strong>) هو الشكل الاكثر استعمالاً، وهو الجنس الاول (جنس الاصل) في <a href="../maqam/ajam.php">مقام العجم</a> و<a href="../maqam/shawq_afza.php">مقام شوق افزا</a>.
                        <br>
                        يقع قرار جنس العجم الخماسي في هذا السلّم النموذجي على علامة الدو وغمّازه على علامة الصول.
                    </h5>
                    <br>
                    
                    <!-- Copy this too, just change the image SRC -->
                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap">
					  <area shape="circle" coords="49,119,12" href="#" alt="لا" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="126,111,12" href="#" alt="سي" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="209,103,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="283,95,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="362,86,13" href="#" alt="مي" class="playNote" data-frequency="328" data-parent="#notation1"><!--variable, tuned down from 330-->
					  <area shape="circle" coords="439,78,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="518,70,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="590,62,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <br>
                    <h5>اما الشكل الثاني من جنس العجم فهو <strong>ذو ثلاث درجات</strong> وغالباً ما يستعمل في منزلة الجنس الثانوي، مثلا على الدرجة السادسة من سلم <a href="../maqam/Bayati.php">مقام البياتي</a>، <a href="../maqam/Saba.php">مقام الصبا</a> او <a href="../maqam/Kurd.php">مقام الكرد</a>.
                        وهذا الشكل الثلاثي لجنس العجم موروث من <a href="../maqam/ajam_ushayran.php">مقام عجم عشيران</a> وسلمه النموذجي مدون ادناه على درجة السي بيمول.
                    </h5>
                    <br>
                    
                    <div class="notation" id="notation2">
                        <img src="/note/jins/ajam-3-note.png" class="img-fluid" usemap="#notemap2">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap2">
					  <area shape="circle" coords="37,69,12"  href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation2">
					  <area shape="circle" coords="114,60,12" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation2">
					  <area shape="circle" coords="196,53,14" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation2">
					  <area shape="circle" coords="270,45,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation2">
					  <area shape="circle" coords="347,37,14" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation2">
					  <area shape="circle" coords="420,29,12" href="#" alt="مي♭" class="playNote" data-frequency="616.50" data-parent="#notation2">
					  <area shape="circle" coords="496,21,12" href="#" alt="فا" class="playNote" data-frequency="695.31" data-parent="#notation2">
					</map>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>امثلة على الشكل الخماسي لجنس العجم</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اغداً القاك (١٩٧١)</b>
                                    <span>ام كلثوم</span>
                                    <span>كلمات الهادي آدم (السودان)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/el_bwab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية البواب (١٩٩٤)</b>
                                    <span>فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
		                            <span>كلمات جوزيف حرب (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية في يوم وليلة (١٩٧٨)</b>
                                    <span>وردة الجزائرية</span>
                                    <span>كلمات حسين السيد (مصر)</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية لِسّه فاكر (١٩٦٠)</b>
                                    <span>ام كلثوم</span>
                                    <span>كلمات عبد الفتاح مصطفى (مصر)</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال من يوم فرقاك</b>
                                    <span>غناء محمد خَيري (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/til3it_ya_mahla_nurha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طلعت يا ماحلا نورها</b>
                                    <span>غناء والحان سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>امثلة على الشكل الثلاثي لجنس العجم</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam-3note/ba3id-3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية بعيد عنّك (١٩٦٥)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                    <span>كلمات مأمون الشناوي (مصر)</span>
                                    <span>جنس العجم الثلاثي هنا يقع على الدرجة الثالثة من سلم <a href="../maqam/kurd.php">مقام البياتي</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/habba-fou2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية حبة فوق وحبة تحت</b>
                                    <span>غناء احمد عدوية (مصر)</span>
                                    <span>الحان : محمد المسيري</span>
                                    <span>جنس العجم الثلاثي هنا يقع على الدرجة الثالثة من سلم <a href="../maqam/saba.php">مقام الصبا</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/ahu-dalli-sar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اهو ده اللي صار</b>
                                    <span>ناي برغوثي (فلسطين)</span>
                                    <span>الحان الشيخ سيد درويش (مصر)</span>
                                    <span>جنس العجم الثلاثي هنا يقع على الدرجة الثالثة من سلم <a href="../maqam/kurd.php">مقام الكرد</a></span>
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