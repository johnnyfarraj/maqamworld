<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijazkar";
$page_description = "Maqam Hijazkar";
$page_keywords = "arabic, music, arab, world, maqam, jins, hijaz kar, hijazkar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/hijazkar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Hijazkar</h1>
                        <h1>Maqam Shadd ‘Araban</h1>
                        <h1>Maqam Suzidil</h1>
                        <h1>Maqam Shahnaz</h1>
                        <h3>Ein Mitglied der <a href="f_hijaz.php">Maqam-Hijaz-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Hijazkar</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/shadd_araban.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Shadd ‘Araban</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/shahnaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Shahnaz</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/suzidil.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Suzidil</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="78,63,13" href="#" alt="E5♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="155,71,13" href="#" alt="D5♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="233,79,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="309,87,13" href="#" alt="B4♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="386,95,13" href="#" alt="A4♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="465,103,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="542,111,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="618,120,13" href="#" alt="E4♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="696,128,13" href="#" alt="D4♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="774,136,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="165,3,320,30" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="321,139,455,166" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="604,7,720,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Maqam Hijazkar ist die Hauptvariante von <a href="hijaz.php">Maqam Hijaz</a>. Aus historischen Gründen haben drei Transpositionen dieses Maqams unterschiedliche Namen (und hatten früher auch ein unterschiedliches Sayr): <strong>Maqam Shade ‘Araban</strong> (tiefes G), <strong>Maqam Suzidil</strong> (tiefes A) und <strong>Maqam Shahnaz</strong> (D).
                    </p>
                    <p>Seine Leiter beginnt mit Wurzel-<a href="../jins/hijaz.php">Jins Hijaz</a> auf der Tonika, gefolgt von <a href="../jins/nikriz.php">Jins Nikriz</a> auf der vierten Stufe. Dann kommt <a href="../jins/hijazkar.php">Jins Hijazkar</a> in der Oktave.
                    </p>
                    
                    <p>Erkunden Sie andere Maqamat der <a href="f_hijaz.php">Maqam-Hijaz-Familie</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/yama_inta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Yama-nta Wahishni</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Musik von Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Nas Ana Mutti Fi Hubbi</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/afdihi_dhabyan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Afdihi Dhabiyan Ibtasam</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Au Theatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya ‘Uyunan Ramiyat</b>
                                    <span>Sabri al-Mudallal</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_maria.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Maria</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Kanun-Taqsim im Maqam Hijaz</b>
                                    <span>Sabri al-Mudallal Ensemble</span>
                                    <span><img src="/img/cd.png"> Songs from Aleppo</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/dulab_hijazkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Hijazkar</b>
                                    <span>Sabah Fakhri Ensemble</span>
                                    <span>Nagham Al-Ams Vol. 4 (Hijazkar)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suzidil/laha_badrut_tim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Laha Badru-t-Timm</b>
                                    <span>(Maqam Suzidil)</span>
                                    <span>Firqat al-Musiqa al-Arabiyya</span>
                                    <span>Musik von Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/ba3attilak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘attilak Ya Habib el-Rouh</b>
                                    <span>(Maqam Shadd ‘Araban)</span>
                                    <span>Fairouz</span>
                                    <span>Musik von Ziad Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/samai_shadd_araban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Shadd ‘Araban</b>
                                    <span>‘Umar Sarmini Ensemble</span>
                                    <span>Musik von Tanburi Cemil Bey</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
