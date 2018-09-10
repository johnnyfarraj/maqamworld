<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "جنس سيكاه";
$page_description = "جنس سيكاه";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins/sikah.php";
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
                        <h1>جنس سيكاه</h1>
                        <h3>جنس الجذر في
                            <a href="../maqam/f_sikah.php">عائلة مقام السيكاه</a>
                        </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="دو" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="96,89,12" href="#" alt="ري♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="134,89,12" href="#" alt="ري♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- leading tone -->
					  <area shape="circle" coords="198,81,14" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="273,72,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="351,65,14" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="425,56,12" href="#" alt="لا♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- fine tuned up from 411-->
					</map>

                    <h5>جنس سيكاه is a 3-note jins. It is notated here with its tonic on E<i class='icon-halfflat'></i> and its <em>ghammaz</em> on G. جنس سيكاه is the first jins in <a href="../maqam/sikah.php">Maqam Sikah</a>, <a href="../maqam/huzam.php">Maqam Huzam</a>, <a href="../maqam/iraq.php">Maqam ‘Iraq</a>, and <a href="../maqam/bastanikar.php">Maqam Bastanikar</a>.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah/el_ward_gamil.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/sikah/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية الورد جميل (١٩٤٦)</b>
                                    <span>ام كلثوم (مصر)</span>
                                    <span>كلمات بيرم التونسي (مصر)</span>
                                    <span>تلحين زكريّا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah/abuz_zulof.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موال هيهات يابو الزّلف</b>
                                    <span>صباح (لبنان)</span>
                                    <span>(من التراث الشعبي اللبناني)</span>
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