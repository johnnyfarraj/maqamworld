<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Maqam Nahawand Murassa‘";
$page_description = "Maqam Maqam Nahawand Murassa‘";
$page_keywords = "arabic, music, arab, world, maqam, jins, nahawand murassaa, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/nahawand_murassaa.php";
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
                        <h1>Maqam Nahawand Murassa‘</h1>
                        <h3>Ein Mitglied der <a href="f_nahawand.php">Maqam-Nahawand-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Nahawand Murassa‘</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="44,137,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
	  <area shape="circle" coords="120,128,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
	  <area shape="circle" coords="197,121,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
	  <area shape="circle" coords="275,112,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic-->
	  <area shape="circle" coords="352,104,13" href="#" alt="G4♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
	  <area shape="circle" coords="429,96,13" href="#" alt="A4♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
	  <area shape="circle" coords="506,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
	  <area shape="circle" coords="585,79,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="53,7,331,36" href="../jins/nahawand_murassaa.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="337,141,454,174" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Maqam Nahawand Murassa‘ ist im Wesentlichen <a href="nahawand.php">Maqam Nahawand</a> mit einer erniedrigten fünften Stufe. Seine Leiter fängt mit <a href="../jins/nahawand_murassaa.php">Jins Nahawand Murassa‘</a> auf der Tonika an, überlappt von <a href="../jins/hijaz.php">Jins Hijaz</a> auf der vierten Stufe.</p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_nahawand.php">Maqam-Nahawand-Familie</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nahawand_murassaa/ya_gari.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Gari (1958)</b>
                                    <span>Horeyya Hasan</span>
                                    <span>Musik von Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Khusara (1957)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taht il-Shibbak</b>
                                    <span>‘Aziz ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/samai_mesut_cemil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Nahawand</b>
                                    <span>Simon Shaheen</span>
                                    <span>Musik von Mesut Cemil</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/dulab_redouane.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Nahawand</b>
                                    <span>Aicha Redouane</span>
                                    <span><img src="/img/cd.png"> Egypt</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/dulab_nahawand_murassa3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Nahawand Murassa‘</b>
                                    <span>Zikrayat Ensemble</span>
                                    <span>Musik von Sami Abu Shumays</span>
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
