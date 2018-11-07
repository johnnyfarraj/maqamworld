<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام سوزدلارا";
$page_description = "مقام سوزدلارا";
$page_keywords = "عود,مقام سوزدلارا ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/suzdalara.php";
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
                        <h1>مقام سوزدلارا</h1>
                        <h3>من <a href="f_rast.php">عائلة مقام الراست</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/suzdalara.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="57,75,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
	  <area shape="circle" coords="134,83,13" href="#" alt="سي♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="211,91,13" href="#" alt="لا" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="289,99,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="366,107,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
	  <area shape="circle" coords="444,116,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
	  <area shape="circle" coords="521,123,13" href="#" alt="ري" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="598,133,13" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="79,7,257,35" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="392,7,504,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                    </map>

                    <h5>
		مقام سوزدلارا قديم ونادراً ما يستعمل كمقام مستقل،
		الا انه شائع كثيراً كأنتقال مقامي ضمن سير كافة فروع <a href="f_rast.php">عائلة مقام الراست</a>.
		عندما يأتي <a href="../jins/nahawand.php">جنس النهاوند</a> على الغماز (الدرجة الخامسة) 
		  يكون ذلك بمثابة انهاء للانتقالات الاخرى
		 مما يمهّد للعودة الى جنس الجذر (<a href="../jins/rast.php">جنس الراست</a>) في العائلة ومنه العودة الى القرار (الدرجة الاولى).
		</h5>
		<br>
                    <h5>انظر الى مقامات اخرى في <a href="f_rast.php">عائلة مقام الراست</a>.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/suzdalara/yana_yana.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/suzdalara/yana_yana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يانا يانا (١٩٦٩)</b>
                                    <span>صباح (لبنان)</span>
                                    <span>الحان بليغ حمدي</span>
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
