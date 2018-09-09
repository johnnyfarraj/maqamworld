<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس سازكار";
$page_description = "جنس سازكار";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/sazkar.php";
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
                        <h1>جنس سازكار</h1>
                        <h3>صنف من 
                            <a href="rast.php">جنس الراست</a>
                            تُرفع درجته الثانية
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/sazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على النوطة بالفأرة وامسك الزرّ حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,106,12" href="#" alt="سي<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="139,98,14" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="213,89,13" href="#" alt="ري♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
					  <area shape="circle" coords="290,82,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320"  data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="368,73,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="447,65,14" href="#" alt="صول " class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="519,57,12" href="#" alt="لا♮" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <h5>جنس سازكار is a 5-note jins. It is notated here with its tonic on C and its <em>ghammaz</em> on G. جنس سازكار is the first jins in <a href="../maqam/kirdan.php">Maqam Sazkar</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sazkar/ya_dala3_sabah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/jins/sazkar/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة مضناك جفاهُ مرقدُه (١٩٣٨)</b>
                                    <span>كلمات الشاعر احمد شوقي (مصر)</span>
                                    <span>غناء وتلحين محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/jins/sazkar/ya_dala3_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية يا دَلع دلّع (١٩٧٤)</b>
                                    <span>صباح (لبنان)</span>
                                    <span>كلمات توفيق بركات</span>
                                    <span>تلحين فريد الاطرش (سوريا / مصر)</span>
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