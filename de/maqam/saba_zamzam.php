<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Saba Zamzam";
$page_description = "Maqam Saba Zamzam";
$page_keywords = "arabic, music, arab, world, maqam, jins, saba zamzam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/saba_zamzam.php";
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
                        <h1>Maqam Saba Zamzam</h1>
                        <h3>(nicht Teil einer Maqam-Familie)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/saba_zamzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Saba Zamzam</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/saba_zamzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="59,131,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
		  <area shape="circle" coords="132,123,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="209,114,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
		  <area shape="circle" coords="288,107,13" href="#" alt="G4♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
		  <area shape="circle" coords="367,98,13" href="#" alt="A4♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
		  <area shape="circle" coords="447,90,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="523,82,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="602,74,13" href="#" alt="D5♭" class="playNote" data-frequency="548" data-parent="#notation1">
	      <area shape="circle" coords="653,74,13" href="#" alt="D5♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
		  <area shape="circle" coords="705,65,13" href="#" alt="E5♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
		  <area shape="circle" coords="781,57,13" href="#" alt="F5" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="103,9,325,38" href="../jins/saba_zamzam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="476,6,610,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="264,145,387,176" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="548,145,680,174" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Maqam Saba Zamzam ist ein häufiger und beliebter Maqam im arabischen Repertoire. Er beginnt mit <a href="../jins/saba_zamzam.php">Jins Saba Zamzam</a> auf der Tonika, überlappt von <a href="../jins/hijaz.php">Jins Hijaz</a> auf der dritten Stufe, gefolgt von entweder <a href="../jins/ajam.php">Jins ‘Ajam</a> oder <a href="../jins/nikriz.php">Jins Nikriz</a> auf der sechsten Stufe.
                    </p>
                    
                    <p>Maqam Saba Zamzam ist nicht Teil einer Maqam-Familie.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba_zamzam/sawwah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba_zamzam/sawwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sawwah (1966)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Amal Hayati (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/3ala_hesb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ala Hisb Widad Galbi (1963)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/ya_bint_el_sultan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Bint el-Sultan</b>
                                    <span>Ahmad ‘Adaweyah</span>
                                    <span>Musik von Hassan Abu al-Su‘ud</span>
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
