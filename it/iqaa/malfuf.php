<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Malfuf";
$page_description = "Iqa‘ Malfuf";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, malfuf, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/malfuf.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Malfuf 2/4</h1>
                        <h3>(aussi appelé <strong>Laff</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/malfuf.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Malfuf</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/malfuf.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Malfuf (aussi appelé <strong>Laff</strong>) est un <em>iqa‘</em> utilisé surtout dans le folklore et la musique populaire arabe. Son ethos est court et cyclique et alterne souvent avec d'autres <em>iqa‘at</em> en 2/4 tels que le <a href="karachi.php">Karatchi</a> ou le <a href="fox.php">Fox</a>.  Il est aussi possible d'alterner deux mesures de Malfuf avec une mesure d'un <em>iqa‘</em> en 4/4 tels que le <a href="baladi.php">Baladi</a> et le <a href="maqsum.php">Maqsum</a>.
                    </p>

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
                                    <b>Ya Dara Douri Fina</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musique de Philémon Wéhbé</span>
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
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_haffar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Sahi al-Sabrou Waha Minni</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/ya_sahis_sabru_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Sahi al-Sabrou Waha Minni</b>
                                    <span>Cheikh Hamza Chakkour</span>
                                    <span>Ensemble Al-Kindi (Syrie/France)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/malfuf/tulba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Toulbah (Proposition)</b>
                                    <span>Ensemble El-Founoun (Palestine)</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>