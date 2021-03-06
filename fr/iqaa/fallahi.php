<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fallahi";
$page_description = "Iqa‘ Fallahi";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, fallahi, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/fallahi.php";
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
                        <h1>Iqa‘ Fallahi 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fallahi.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Fallahi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/fallahi.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Fallahi est un <em>iqa‘</em> égyptien rapide qui fonctionne bien pour la musique folklorique. Même s'il ressemble à un <a href="maqsum.php">Maqsoum</a> joué deux fois plus vite, il a un ethos très différent du fait qu'il n'y a pas de contraste très grand entre les accents des <em>doums</em> et des <em>taks</em>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fallahi/el_binti_beida.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/fallahi/el_binti_beida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Il-Benti Beida</b>
                                    <span>Interprétation et Musique de Metqal Qannawi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fallahi/ahom_ahom.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hizz Ya Hobb</b>
                                    <span>Interprétation de Ahmad Adaweya</span>
                                    <span>Musique de Hassan Abou el-Sou‘oud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fallahi/salametha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Salametha Oummou Hassan</b>
                                    <span>Interprétation de Ahmad Adaweya</span>
                                    <span>Musique de Farouq Salamah</span>
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