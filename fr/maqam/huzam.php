<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Houzam/Rahat al-Arwah";
$page_description = "Maqam Houzam/Rahat al-Arwah";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, huzam, rahat al-arwah, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/huzam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Houzam</h1>
                        <h1>Maqam Rahat al-Arwah</h1>
                        <h3>A member of the <a href="f_sikah.php">Famille du Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/huzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Houzam</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/rahat_al_arwah`.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Rahat al-Arwah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/huzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="70,125,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
		  <area shape="circle" coords="148,117,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="225,108,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="301,100,13" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
		  <area shape="circle" coords="378,92,13" href="#" alt="B4♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
		  <area shape="circle" coords="455,84,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="533,76,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
		  <area shape="circle" coords="610,68,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--variable-->
          <!-- Links -->
                      <area shape="rect" coords="78,13,200,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="277,13,395,43" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="484,7,591,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Maqam Houzam is by far the most common maqam in the Sikah family, and starts on E<i class="icon-halfflat"></i>. Its scale starts with the root <a href="../jins/sikah.php">Jins Sikah</a> on the <em>tonic</em>, followed by <a href="../jins/hijaz.php">Jins Hijaz</a> on the 4<sup>th</sup> degree then <a href="../jins/rast.php">Jins Rast</a> on the 6<sup>th</sup> degree.</p>

                    <p>The transposition of Maqam Houzam to B<i class="icon-halfflat"></i> has its own name: <strong>Maqam Rahat al-Arwah</strong>. Both maqamat have exactly the same sayr.</p>

                    <p>Explore other maqamat in the <a href="f_sikah.php">Famille du Maqam Sikah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/huzam/ya_ghusna_naqa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/huzam/ya_ghusna_naqa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Ghusna Naqa</b>
                                    <span>(Maqam Houzam)</span>
                                    <span>Firqat al-Musiqa al-Arabiyya, Egypt</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/ayyuha_as_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ayyuha al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musique de Majdi al-‘Aqili</span>
                                    <span>Nagham Al Ams Vol. 13 Houzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/dawr_emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Emta el-Hawa (1936)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/marmar_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Marmar Zamani</b>
                                    <span>Fairouz</span>
                                    <span>(Traditional melody)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Start Rahat al-Arwah section -->
                    <div class="heading jins text-center">
                        <h3>Maqam Rahat al-Arwah examples</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/el_wardi_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1947)</b>
                                    <span>Umm Kuthum</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/ya_wahid_al_ghid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Wahid al-Ghid</b>
                                    <span>Fairouz</span>
                                    <span><img src="/img/cd.png"> Andalousiyyat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dawr_inta_fahim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Inta Fahim (19??)</b>
                                    <span>(Maqam Rahat al-Arwah)</span>
                                    <span>Music and Vocals by Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_rahat_al_arwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Rahat al-Arwah</b>
                                    <span>Aicha Redouane</span>
                                    <span><img src="/img/cd.png"> Egypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_ayyuhal_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Rahat al-Arwah</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Live at Beiteddine</span>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
