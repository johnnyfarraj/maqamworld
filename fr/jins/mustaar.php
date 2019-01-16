<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Musta‘ar";
$page_description = "Jins Musta‘ar";
$page_keywords = "arabic, music, arab, world, maqam, jins, mukhalif sharqi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/mustaar.php";
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
                        <h1>Jins Musta‘ar</h1>
                        <h3>A variation of <a href="sikah.php">Jins Sikah</a> with a raised 2<sup>nd</sup></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Musta‘ar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,91,12" href="#" alt="D4♯" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="147,84,14" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="233,76,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="307,68,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="383,59,13" href="#" alt="A4♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="449,52,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>Jins Musta‘ar is a 3-note <em>jins</em>. It is notated here with its tonic on E<i class="icon-halfflat"></i> and its <em>ghammaz</em> on G. Jins Musta‘ar is the first <em>jins</em> in <a href="../maqam/mustaar.php">Maqam Musta‘ar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mustaar/raqq_il_habib.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mustaar/raqq_il_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Raqq il-Habib (1944)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aruh Li Min (1958)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/habbeit_wala_banshi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habbeit Wala Banshi ‘Alayya (1930)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/huwwa_el_hobb_le3ba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Huwwa el-Hobb Li‘ba (10??)</b>
                                    <span>Aziza Galal</span>
                                    <span>Music by Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/mawwal_qadi_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Qadi al-Gharam</b>
                                    <span>Abdel Hayy Hilmi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/oud_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud in Maqam Sikah</b>
                                    <span>Riyad al-Sunbati</span>
                                    <span><img src="/img/cd.png"> Taqaseem</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qanun_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Qanun in Maqam Sikah</b>
                                    <span>‘Imad Mulki</span>
                                    <span>Al-Turath Ensemble</span>
                                    <span><img src="/img/cd.png"> Gardens of Jasmin - Maqam Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qasida_qul_lil_maliha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Qul Lil-Maliha</b>
                                    <span>Sabah Fakhri</span>
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