<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام بياتي";
$page_description = "مقام بياتي";
$page_keywords = ",مقام بياتي,عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/bayati.php";
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
                        <h1>مقام بياتي</h1>
                        <h3>المقام الاساسي في <a href="f_bayati.php">عائلة مقام البياتي</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="68,128,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="145,120,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
		  <area shape="circle" coords="222,112,13" href="#" alt="فا" class="playNote" data-frequency="345" data-parent="#notation1"><!-- fine tune down from 347.65 -->
		  <area shape="circle" coords="300,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="377,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
		  <area shape="circle" coords="454,88,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="531,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="609,72,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
	      <area shape="circle" coords="684,104,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="762,96,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="841,88,13" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="917,80,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="995,72,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="111,7,242,36" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="370,8,549,37" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="783,8,890,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
	     </map>
		<br>

      		  <h5>
      		  مقام البياتي هو المقام الاساسي في عائلة البياتي ومن اهم المقامات استعمالاً في الموسيقى العربية.
		</h5>
      		  <h5>يبدأ سلّم هذا المقام <a href="../jins/bayati.php">بجنس البياتي</a> على القرار
      		  ثمّ يليه <a href="../jins/rast.php">جنس الراست</a> او
			 <a href="../jins/nahawand.php">جنس النهاوند</a> على الغمّاز (الدرجة الرابعة).
		</h5>
		<br>
        		<h5>انظر الى مقامات اخرى في <a href="f_bayati.php">عائلة مقام البياتي</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية على بلد المحبوب ودّيني (١٩٣٥)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/akun_sa3id.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية أكون سعيد (١٩٣٢)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان الشيخ زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/lamma_enta_nawi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية لما انت ناوي (١٩٢٩)</b>
                                    <span>غناء والحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/mijana_wa_3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ميجانا وعتابا</b>
                                    <span>غناء وديع الصافي (لبنان)</span>
                                    <span>(من التراث الشعبي اللبناني)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/imlali_al_aqdaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح املا لي الاقداح صرفاً</b>
                                    <span>اللحن قديم</span>
                                    <span>المطرب صباح فخري (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية نورا نورا (١٩٥٣)</b>
                                    <span>غناء والحان فريد الاطرش (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا ريت مِنُن (تقسيم قانون)</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا ريت مِنُن</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_3aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي بياتي إبراهيم العريان</b>
                                    <span>أداء فرحان صبّاغ (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_shalfun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سماعي بياتي إسكندر شلفون</b>
                                    <span>فرقة مُرقس (لبنان)</span>
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
