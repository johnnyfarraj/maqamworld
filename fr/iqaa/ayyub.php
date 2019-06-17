<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Ayyoub";
$page_description = "Iqa‘ Ayyoub";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, aqsaq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/ayyub.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Ayyoub 2/4</h1>
                        <h3>(aussi appelé <strong>Zar</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ayyub.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Ayyoub</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ayyub.png" class="img-fluid">
                    </div>
                    <p>Le Iqa‘ Ayyoub (aussi écrit 'Ayoub') est surtout utilisé en musique soufie, dans certaines musiques folkloriques et dans le <em>Raqs Sharqi</em> (la danse du ventre). Le Iqa‘ Ayyoub est des fois appelé <strong>Zar</strong> en Égypte, du nom d'une cérémonie folklorique de guérison dirigée par des femmes qui jouent des instruments de percussion à main. L'ethos de Ayyoub est rapide, court et cyclique.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/ayyub/atani_zamani.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/ayyub/atani_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Atani Zamani</b>
                                    <span>Noureddine Khourchid et Les Derviches De Damas</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/ya_man_nasha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Man Nasha</b>
                                    <span>Rima Khcheich et l'Orchestre Salim Sahhab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/tajallat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tajallat Wa-njalat Laylan</b>
                                    <span>Cheikh Hamza Chakkour et l'Ensemble Al-Kindi</span>
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