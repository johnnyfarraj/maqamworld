<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Lami";
$page_description = "Maqam Lami";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/lami.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Lami</h1>
                        <h3>(not part of a maqam family)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/lami.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Lami</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
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

                    <p>Maqam Lami is a rare maqam in the Middle East and was borrowed from the Iraqi repertoire. Its scale starts with <a href="../jins/lami.php">Jins Lami</a> on the <em>tonic</em>, followed by <a href="../jins/kurd.php">Jins Kurd</a> on the 4<sup>th</sup> degree.</p>
                    <p>Maqam Lami is not part of a maqam family.</p>

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
                                    <span>Music by Muhammad Abdel Wahab (Egypt)</span>
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
                                    <span>Vocals and Music by Muhammad Abdel Wahab (Egypt)</span>
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
                                    <span>(Iraqi Traditional)</span>
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
