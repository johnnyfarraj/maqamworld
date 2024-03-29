<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Huzam/Rahat al-Arwah";
$page_description = "Maqam Huzam/Rahat al-Arwah";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, huzam, rahat al-arwah, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/huzam.php";
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
                        <h1>Maqam Huzam</h1>
                        <h1>Maqam Rahat al-Arwah</h1>
                        <h3>Ein Mitglied der <a href="f_sikah.php">Maqam-Sikah-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/huzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Huzam</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/rahat_al_arwah`.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Rahat al-Arwah</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/huzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
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

                    <p>Maqam Huzam ist mit Abstand der gebräuchlichste Maqam der Sikah-Familie und fängt entsprechend mit einem um einem um einen Viertelton erniedrigten E (also einem Sikah) an. Transponiert man ihn zu dem Viertelton zwischen H und B, so hat er einen eigenen Namen: <strong>Maqam Rahat al-Arwah</strong>. Beide Maqamat haben exakt das gleiche Sayr. Seine Leiter beginnt mit dem Wurzel-<a href="../jins/sikah.php">Jins Sikah</a> auf der Tonika. Es folgen <a href="../jins/hijaz.php">Jins Hijaz</a> auf der dritte Stufe sowie <a href="../jins/rast.php">Jins Rast</a> auf der sechsten Stufe.</p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_sikah.php">Maqam-Sikah-Familie</a>.</p>

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
                                    <b>Muwashah Ya Ghusna Naqa</b>
                                    <span>(Maqam Huzam)</span>
                                    <span>Firqat al-Musiqa al-Arabiyya (Ägypten)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/ayyuha_as_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ayyuha al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von Majdi al-‘Aqili</span>
                                    <span>Nagham Al Ams Vol. 13 - Huzam</span>
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
                                    <span>Musik von Zakariya Ahmad</span>
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
                                    <span>(traditionelle Melodie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Start Rahat al-Arwah section -->
                    <div class="heading jins text-center">
                        <h3>Beispiele für Maqam Rahat al-Arwah</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/el_wardi_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1947)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/ya_wahid_al_ghid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Wahid al-Ghid</b>
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
                                    <b>Dawr Inta Fahim</b>
                                    <span>(Maqam Rahat al-Arwah)</span>
                                    <span>Musik mit Gesang von Zakariya Ahmad</span>
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
                                    <span><img src="/img/cd.png"> Egypt</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
