<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Awj ‘Iraq";
$page_description = "Maqam Awj ‘Iraq";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, awj iraq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/awj_iraq.php";
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
                        <h1>Maqam Awj ‘Iraq</h1>
                        <h3>Ein Mitglied der <a href="f_sikah.php">Maqam-Sikah-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Awj ‘Iraq</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="54,69,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
		  <area shape="circle" coords="123,77,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="212,85,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
		  <area shape="circle" coords="289,93,13" href="#" alt="A4♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
		  <area shape="circle" coords="367,102,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="444,110,13" href="#" alt="F4♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
		  <area shape="circle" coords="521,117,13" href="#" alt="E4♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
		  <area shape="circle" coords="599,126,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="676,134,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
		  <area shape="circle" coords="752,142,13" href="#" alt="B3<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,7,540,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,745,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Maqam Awj 'Iraq ist eine Version von <a href="huzam.php">Maqam Rahat al-Arwah</a> beziehungsweise <a href="huzam.php">Maqam Huzam</a> oder <a href="iraq.php">Maqam ‘Iraq</a>, dessen Sayr auf der oktavierten Tonika beginnt und zur Tonika heruntergeht, wenngleich es im Wesentlichen die Ajnas von <a href="huzam.php">Maqam Huzam</a> benutzt./p>
                        
                    <p>Maqam Awj 'Iraq beginnt mit dem Wurzel-<a href="../jins/sikah.php">Jins Sikah</a> auf der Tonika. Danach kommen <a href="../jins/hijaz.php">Jins Hijaz</a> auf der dritten Stufe und noch ein <a href="../jins/sikah.php">Jins Sikah</a> auf der achten Stufe.
                    </p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_sikah.php">Maqam-Sikah-Familie</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Samiri Da‘a Sabri</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hayya Wa Nadim</b>
                                    <span>Samer Nashar</span>
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
