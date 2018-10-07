<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام لامي";
$page_description = "مقام لامي";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/lami.php";
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
                        <h1>مقام لامي</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>
                     <map name="notemap">
		  <area shape="circle" coords="53,130,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="130,122,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="208,113,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="286,105,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="364,97,13" href="#" alt="A4♭" class="playNote" data-frequency="420" data-parent="#notation1">
		  <area shape="circle" coords="440,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="517,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="594,72,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="100,9,220,37" href="../jins/lami.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="340,140,460,167" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
	     </map>

                    <h5>مقام لامي is a rare maqam in the Middle East and was borrowed from the Iraqi repertoire. Its scale starts with <a href="../jins/lami.php">Jins Lami</a> on the <em>tonic</em>, followed by <a href="../jins/kurd.php">Jins Kurd</a> on the 4<sup>th</sup> degree.</h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>el-Bortoqal (1938)</b>
                                    <span>Vocals by Ra'isa ‘Afifi and Muhammad Abdel Wahab</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/tislam_idein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tislam Idein Elli-shtara (c. 1960)</b>
                                    <span>Vocals by Muhammad Abdel Muttalib</span>
                                    <span>Music by Mahmud Kamel (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/albi_bi_ulli_kalam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Albi Bi Ulli Kalam (c.1954)</b>
                                    <span>غناء والحان محمد عبد الوهاب</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahmad Ya Habibi</b>
                                    <span>Vocals and Music by Sabri al-Mudallal</span>
                                    <span><img src="/img/cd.png"> Songs from Aleppo</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/al_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Najmat Saru Yis'alu (1964)</b>
                                    <span>Wadih al-Safi</span>
                                    <span>Music by Muhammad Muhsin</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gulli Ya Hilu</b>
                                    <span>Nazem al-Ghazali</span>
                                    <span>(من التراث الشعبي العراقي)</span>
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
