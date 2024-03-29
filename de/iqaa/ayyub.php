<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Ayyub";
$page_description = "Iqa‘ Ayyub";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, aqsaq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/ayyub.php";
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
                        <h1>Iqa‘ Ayyub 2/4</h1>
                        <h3>(auch Zar genannt)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ayyub.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Ayyub</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ayyub.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Ayyub (manchmal auch Ayoub geschrieben) findet vor allem in der Sufimusik, in der Volksmusik und im <em>Raqs Sharqi</em>, also dem Bauchtanz, Verwendung. In Ägypten wird der Ayyub auch als Zar bezeichnet, nach einer Heilungszeremonie der Volksmedizin, die von Frauen geleitet wird, die in der Hand Perkussionsinstrumente halten. Das Feeling beim Ayyub ist schnell, kurz und zyklisch.</p>

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
                                    <b>Muwashah Atani Zamani</b>
                                    <span>Noureddine Khourshid Et Les Derviches De Damas</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/ya_man_nasha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Man Nasha</b>
                                    <span>Rima Khcheich and Salim Sahhab Orchestra</span>
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
                                    <span>Sheikh Hamza Shakkur &amp; Ensemble Al-Kindi</span>
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