<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ ‘Awis";
$page_description = "Iqa‘ ‘Awis";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, aqsaq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/awis.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ ‘Awis 11/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awis.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of ‘Awis</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/awis.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ ‘Awis is mostly used with the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> genre. Some ‘Awis pieces start from the 3<sup>rd</sup> beat (the first <em>tak</em>), like for example "Muwashah Munyati Man Rumtu Qurbuhu". Meanwhile "Muwashah Hibbi Da‘ani Lil-Wisal" starts the melody on the 11<sup>th</sup> beat (the last <em>tak</em>).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.2 - Bayati Shuri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/hibbi_da3ani2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Choir of the faculty of Music - Kaslik University (Lebanon)</span>
                                    <span>Conductor: Aïda Shalhoub Ziadé</span>
                                    <span>Music by Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati Man Rumtu Qurbuh</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.9 - Rast</span>
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