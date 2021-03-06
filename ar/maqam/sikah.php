<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام سيكاه";
$page_description = "مقام سيكاه";
$page_keywords = "عود,مقام سيكاه ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/sikah.php";
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
                        <h1>مقام سيكاه</h1>
                        <h3>المقام الاساسي في <a href="f_sikah.php">عائلة مقام السيكاه</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="83,127,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
	  <area shape="circle" coords="159,118,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="237,110,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="314,102,13" href="#" alt="لا♮" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="391,94,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
	  <area shape="circle" coords="470,85,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
	  <area shape="circle" coords="546,77,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
	  <area shape="circle" coords="623,69,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--octave, variable -->
                      <!-- Links -->
                      <area shape="rect" coords="95,14,218,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="260,10,444,43" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="494,7,600,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>مقام سيكاه (من الفارسي سه كاه اي الموقع الثالث لليد) هو المقام الاساسي في <a href="f_sikah.php">عائلة مقام السيكاه</a> لكنه نادر الاستعمال كمقام مستقل.
			يبدأ مقام سيكاه بجنس الأصل وهو جنس السيكاه على القرار،
 			يليه <a href="../jins/upper_rast.php">جنس الراست الاعلى</a> على الغمّاز (الدرجة الثالثة)
			ثم <a href="../jins/rast.php">جنس الراست</a> على الدرجة السادسة (وهي غمّاز ثانوي).
                    </h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_sikah.php">عائلة مقام السيكاه</a>.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/sikah/jadakal_ghaithu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/sikah/jadakal_ghaithu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح جادكَ الغيث</b>
                                    <span>غناء والحان مجدي العقيلي (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah/inti_fakrani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انتِ فاكراني (١٩٣٨)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان محمد القصبجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah/il_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الورد جميل (١٩٤٧)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان زكريا احمد (مصر)</span>
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
