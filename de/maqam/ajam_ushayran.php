<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Ajam ‘Ushayran";
$page_description = "Maqam ‘Ajam ‘Ushayran";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam ushayran, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/ajam_ushayran.php";
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
                        <h1>Maqam ‘Ajam ‘Ushayran</h1>
                        <h3>Ein Mitglied der <a href="f_ajam.php">Maqam-‘Ajam-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam_ushayran.mp3"><i class="fa fa-fw fa-volume-up"></i>Aussprache von ‘Ajam ‘Ushayran</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/ajam_ushayran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="66,85,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="144,93,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
		  <area shape="circle" coords="221,101,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="298,109,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="376,118,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="453,126,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="530,134,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
		  <area shape="circle" coords="608,142,13" href="#" alt="B3♭" class="playNote" data-frequency="231.77" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="60,7,232,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="470,6,595,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,155,390,184" href="../jins/kurd.php" class="mapLink" data-parent="#notation1"
		</ map>

                    <p>Maqam ‘Ajam ‘Ushayran ist eine archaische Version von <a href="ajam.php">Maqam ‘Ajam</a> mit einem anderen Sayr. Er hat auch einen völlig anderen tonalen Schwerpunkt. Er macht nicht seine fünfte Stufe zur nächsten Tonika, sondern stattdessen die dritte und sechste Stufe.</p>

                    <p>Die Leiter von Maqam ‘Ajam ‘Ushayran beginnt mit Wurzel-<a href="../jins/ajam.php">Jins ‘Ajam</a> auf der Tonika. Danach folgen <a href="../jins/kurd.php">Jins Kurd</a> auf der dritten Stufe und <a href="../jins/nahawand.php">Jins Nahawand</a> auf der sechsten Stufe.</p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_ajam.php">Maqam-‘Ajam-Familie</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ayqadha al-Hubbu Fu'adi</b>
                                    <span>Hassan al-Haffar</span>
                                    <span><img src="/img/cd.png"> The Aleppo Suites Vol.2</span>
                                    <span>Musik von Bahjat Hassan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/da3i_al_hawa_qad_sah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Da‘i al-Hawa Qad Sah</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/il_hubbi_fi_albi_amana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobbi Fi Albi Amana</b>
                                    <span>Fathiyya Ahmad</span>
                                    <span>Musik von Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/ma_li_3ayni_absarat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma Li ‘Ayni Absarat</b>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
