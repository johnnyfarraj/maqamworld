<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sikah";
$page_description = "Jins Sikah";
$page_keywords = "musique arabe, maqam, instruments, jins sikah, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/sikah.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Sikah</h1>
                        <h3>Root jins of the <a href="../maqam/f_sikah.php">Famille du Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sikah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="96,89,12" href="#" alt="D4♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="134,89,12" href="#" alt="D4♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- leading tone -->
					  <area shape="circle" coords="198,81,14" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="273,72,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="351,65,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="425,56,12" href="#" alt="A4♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- fine tuned up from 411-->


					</map>
                    <p>Jins Sikah is a 3-note jins. It is notated here with its tonic on E<i class='icon-halfflat'></i> and its <em>ghammaz</em> on G. Jins Sikah is the first jins in <a href="../maqam/sikah.php">Maqam Sikah</a>, <a href="../maqam/huzam.php">Maqam Houzam</a>, <a href="../maqam/iraq.php">Maqam ‘Iraq</a>, and <a href="../maqam/bastanikar.php">Maqam Bastanikar</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah/el_ward_gamil.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/sikah/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>il-Ward Gamil (1946)</b>
                                    <span>Oum Koulthoum</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah/abuz_zulof.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayhat Yabu al-Zoulouf</b>
                                    <span>Sabah</span>
                                    <span>(Folklore Libanais)</span>
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