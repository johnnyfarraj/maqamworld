<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Karachi";
$page_description = "Iqa‘ Karachi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, karachi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/karachi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Karachi 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/karachi.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Karachi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/karachi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Karachi gehört auch zur Zweivierteltaktfamilie und wechselt sich häufig mit dem <a href="malfuf.php">Malfuf</a> ab. Obwohl kurz und zyklisch, hat der Karachi nicht die fast atemlose Prägnanz des <a href="malfuf.php">Malfuf</a> und <a href="ayyub.php">Ayyub</a>. Im Gegenteil, er klingt eher ein wenig verschlafen und wird meist viel langsamer gespielt.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/karachi/dhatul_jamal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/karachi/dhatul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qadd Dhatul-Jamal Ukhtul-Hilal</b>
                                    <span>Al-Turath Ensemble</span>
                                    <span><img src="/img/cd.png"> Hermana de la Luna - Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/karachi/siret_il_hub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Siret il-Hubb (1964)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/karachi/darit_il_ayyam_1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Darit il-Ayyam (1970) - Erstes Beispiel</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/karachi/darit_il_ayyam_2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Darit il-Ayyam (1970) - Zweites Beispiel</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
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