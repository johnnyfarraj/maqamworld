<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Malfuf";
$page_description = "Iqa‘ Malfuf";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, malfuf, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/malfuf.php";
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
                        <h1>Iqa‘ Malfuf 2/4</h1>
                        <h3>(auch Laff genannt)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/malfuf.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Malfuf</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/malfuf.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Malfuf wird vor allem in der Volksmusik und in der arabischen Popmusik gebraucht. Er fühlt sich kurz und zyklisch an und wechselt oft zu einem anderen Zweiviertel-Iqa‘ wie dem <a href="karachi.php">Karachi</a>. Alternativ können zwei aufeinander folgende Malfuf-Takte zu einem Viervierteltakt-Iqa‘ werden, etwa <a href="baladi.php">Baladi</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/malfuf/ya_dara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/malfuf/ya_dara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Dara Duri Fina</b>
                                    <span>Fairouz</span>
                                    <span>Musik von Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Amal Hayati (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_haffar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Sahi al-Sabru Waha Minni</b>
                                    <span>Hasan al-Haffar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Sahi al-Sabru Waha Minni</b>
                                    <span>Sheikh Hamza Shakkur</span>
                                    <span>Ensemble Al-Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/tulba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tulbah (Proposition)</b>
                                    <span>El-Funoun Ensemble</span>
                                    <span><img src="/img/cd.png"> Zaghareed: Music From The Palestinian Holy Land</span>
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