<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Thurayya (Aqsaq Turki)";
$page_description = "Iqa‘ Thurayya (Aqsaq Turki)";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, thurayya, aqsaq turki, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/thurayya.php";
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
                        <h1>Iqa‘ Thurayya 5/8</h1>
                        <h3>(auch Aqsaq Turki genannt)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/thurayya.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Thurayya</a>
                    </div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/aqsaq_turki.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Aqsaq Turki</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/thurayya.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Thurayya ("Himmel" auf Arabisch) ist auch als <strong>Aqsaq Turki</strong>, türkischer Aqsaq bekannt. Er ist ein seltener Iqa‘ und wird vor allem im vokalen <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Genre verwendet. </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/thurayya/fil_roud_ana.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/thurayya/fil_roud_ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Fil-Roud Ana Shuft il-Gamil</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/iqaa/thurayya/qalat_3alamal_rida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Qalat ‘Alama al-Rida</b>
                                    <span>Sahar</span>
                                    <span>Musik von Sheikh Ali al-Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/thurayya/fattakatul-lahdhi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Fattakatu al-Lahdhi</b>
                                    <span>Kareem Azab (Palästina)</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
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