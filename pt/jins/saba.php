<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Saba";
$page_description = "Jins Saba";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/saba.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Saba</h1>
                        <h3>(ambiguous size)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/saba.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Saba</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,102,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="144,94,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="226,86,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="301,78,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="379,70,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="456,62,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="532,53,13" href="#" alt="Lá♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="609,45,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>
                    <p>Jins Saba has an ambiguous size. It is notated here with its tonic on D and two <em>ghammaz</em> possibilities: the 3<sup>rd</sup> degree (notated on F) or the 6<sup>th</sup> degree (notated on B&#x266d;). Jins Saba is the first jins in <a href="../maqam/saba.php">Maqam Saba</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba/huwwa_sahih.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Huwwa Sahih el-Hawa Ghallab (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aghadan Alqaka (1971)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/ansak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ansak Da Kalam (1961)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Baligh Hamdi (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/dulab_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab in Maqam Saba</b>
                                    <span>Sabri al-Mudallal</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/layali_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Saba</b>
                                    <span>Sabri al-Mudallal</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Fakir (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba/tiri_ya_tiyyara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tiri Ya Tiyyara</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>