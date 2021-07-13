<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Nawari";
$page_description = "Iqa‘ Nawari";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, katakufti, nawari, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/nawari.php";
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
                        <h1>Iqa‘ Nawari 4/4</h1>
                        <h3>(aussi appelé <strong>Katakoufti</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nawari.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nawari</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Nawari est une variation du <a href="saidi.php">Iqa‘ Sa‘idi</a> et <a href="baladi.php">Iqa‘ Baladi</a> qui est joué surtout dans la musique folklorique du Levant et dans les danses en ligne <em>Dabké</em>.
                    </p>
                    <p>
                    Le Iqa‘ Nawari est aussi appelé <strong>Katakoufti</strong>, malgré le fait que le <a href="katakufti.php">Iqa‘ Katakoufti</a> original a une signature differente. La raison pour cette appelation alternative est le fait que le <a href="katakufti.php">Iqa‘ Katakoufti</a> sonne exactement comme <strong>Nawari</strong> lorse qu'il commence par le dernier <em>tak</em>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya ‘Ein Moulayyitein</b>
                                    <span>Samira Tawfiq</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawari/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dal‘ona</b>
                                    <span>chanson folklorique</span>
                                    <span>(interprète inconnu)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/nawari/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Initiation Of Ecstasy</b>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>