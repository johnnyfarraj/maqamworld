<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Athar Kurd";
$page_description = "Jins Athar Kurd";
$page_keywords = "arabic, music, arab, world, maqam, jins, athar kurd, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/athar_kurd.php";
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
                        <h1>Jins Athar Kurd</h1>
                        <h3>A combination of <a href="kurd.php">Jins Kurd</a> and <a href="nikriz.php">Jins Nikriz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/athar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Athar Kurd</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="59,118,12" href="#" alt="A3♭" class="playNote" data-frequency="211" data-parent="#notation1"><!-- octave below A4b -->
					  <area shape="circle" coords="136,110,12" href="#" alt="B3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="218,102,14" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="293,94,13" href="#" alt="D4♭" class="playNote" data-frequency="274" data-parent="#notation1"> <!-- fine tune minor 2nd (see Kurd)-->
					  <area shape="circle" coords="370,86,13" href="#" alt="E4♭" class="playNote" data-frequency="309" data-parent="#notation1"><!-- minor 3rd -->
					  <area shape="circle" coords="447,77,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="526,69,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- hijazkar tonic -->
					  <area shape="circle" coords="599,61,12" href="#" alt="A4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
					</map>

                    <p>Jins Athar Kurd is a 5-note <em>jins</em>. It is notated here with its tonic on C and its <em>ghammaz</em> on G. Jins Athar Kurd is the first <em>jins</em> in <a href="../maqam/athar_kurd.php">Maqam Athar Kurd</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/athar_kurd/habibaha.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/athar_kurd/habibaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Habibaha (1965)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Música de Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Raydak (1950)</b>
                                    <span>Leila Murad</span>
                                    <span>Música de Ahmad Sidqi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Fagr Nurak Halli We Ban (c.1952)</b>
                                    <span>Baligh Hamdi</span>
                                    <span>Música de Yussef Shawqi</span>
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