<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sazkar";
$page_description = "Jins Sazkar";
$page_keywords = "musique arabe, maqam, instruments, jins sazkar, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/sazkar.php";
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
                        <h1>Jins Sazkar</h1>
                        <h3>Une variation du <a href="rast.php">Jins Rast</a> avec seconde augmentée</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sazkar</a>
                    </div>
                     <div class="notation" id="notation1">
                        <img src="/note/jins/sazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,106,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="139,98,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="213,89,13" href="#" alt="Ré♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
					  <area shape="circle" coords="290,82,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320"  data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="368,73,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="447,65,14" href="#" alt="Sol " class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="519,57,12" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">

					</map>

                    <p>Le Jins Sazkar est un jins de 5 notes. Il est noté ici avec sa tonique sur Do et son <em>ghammaz</em> sur Sol. Le Jins Sazkar est le premier jins du <a href="../maqam/kirdan.php">Maqam Sazkar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sazkar/ya_dala3_sabah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/jins/sazkar/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qassida Moudnaka Gafahu Marqadouhou (1938)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/jins/sazkar/ya_dala3_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Dala‘ Dalla‘ (1974)</b>
                                    <span>Sabah (Liban)</span>
                                    <span>Musique de Farid al-Atrache</span>
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