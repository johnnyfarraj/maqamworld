<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Saba Dalanshin";
$page_description = "Jins Saba Dalanshin";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/saba_dalanshin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Saba Dalanshin <span class="badge badge-custom">New</span></h1>
                        <h3>A special version of <a href="saba.php">Jins Saba</a> with its tonic on the 3<sup>rd</sup> degree</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/saba_dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Saba Dalanshin</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="35,70,12" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="86,70,12" href="#" alt="G4♯" class="playNote" data-frequency="415" data-parent="#notation1"><!--ET???-->
					  <area shape="circle" coords="133,62,14" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="208,55,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="477" data-parent="#notation1"><!--Bayati 2-->
					  <area shape="circle" coords="281,46,14" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="355,38,13" href="#" alt="D5♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="432,29,13" href="#" alt="E5♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="509,21,13" href="#" alt="F5" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>Jins Saba Dalanshin is a special case of <a href="saba.php">Jins Saba</a> which has no <em>ghammaz</em>, and therefore no defined size. Its melody is centered around its tonic, notated here on C. The intervals above the tonic are more or less identical to <a href="hijaz.php">Jins Hijaz</a>. The note that is 2 degrees below the tonic (in this case A) is a secondary tonic.</p>

                    <p>Jins Saba Dalanshin occurs on the octave of <a href="../maqam/rast.php">Maqam Rast</a>, which in this case becomes known as <a href="../maqam/dalanshin.php">Maqam Dalanshin</a>. It also occurs on the 5<sup>th</sup> degree of <a href="../maqam/shawq_afza.php">Maqam Shawq Afza</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Mal el-Sham</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Ahmad Abu Khalil al-Qabbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ja_jirat_al_sha3b_al_yamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ya Jirat al-Sha‘b al-Yamani</b>
                                    <span>Hasan al-Haffar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala al-Kasat (khana)</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/qanun_tqasim_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qanun Taqsim (from Layali Rast)</b>
                                    <span>‘Abbas al-Bleidi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Halawit el-Dunya</b>
                                    <span>Sayyed Makkawi</span>
                                    <span>Music by Zakariyya Ahmad (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iswaret el-‘Arus (1989)</b>
                                    <span>Fairouz</span>
                                    <span>Music by Philemon Wehbe</span>
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