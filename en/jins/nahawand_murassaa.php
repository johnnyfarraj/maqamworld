<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Nahawand Murassa‘";
$page_description = "Jins Nahawand Murassa‘";
$page_keywords = "arabic, music, arab, world, maqam, jins, nahawand murassa‘, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/nahawand_murassaa.php";
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
                        <h1>Jins Nahawand Murassa‘</h1>
                        <h3>A variation of <a href="nahawand.php">Jins Nahawand</a> with a lowered 5<sup>th</sup></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Nahawand Murassa‘</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="55,110,12" href="#" alt="B3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="126,102,14" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="202,94,13" href="#" alt="D4" class="playNote" data-frequency="293.33"  data-parent="#notation1">
					  <area shape="circle" coords="280,86,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="357,78,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-Hijaz 1st-->
					  <area shape="circle" coords="434,70,13" href="#" alt="G4♭" class="playNote" data-frequency="373.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="509,62,12" href="#" alt="A4♮" class="playNote" data-frequency="444" data-parent="#notation1"><!--var-->

					</map>
                    <p>Jins Nahawand Murassa‘ has no <em>ghammaz</em>, and therefore no defined size. It is notated here with its tonic on C. Jins Nahawand Murassa‘ is the first <em>jins</em> in <a href="../maqam/nahawand_murassaa.php">Maqam Nahawand Murassa‘</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dulab Nahawand (from Sibuni Ya Nas)</b>
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/habbeit_gamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Habbeit Gamalak</b>
                                    <span>Leila Murad</span>
                                    <span>Music by Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Khusara (1957)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Taht el-Shibbak (Accordion Solo)</b>
                                    <span>Fatima Serhan</span>
                                    <span>Music by ‘Aziz ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Min Hobbi Fik Ya Gari (1958)</b>
                                    <span>Horeyya Hasan</span>
                                    <span>Music by Muhammad al-Mugi</span>
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