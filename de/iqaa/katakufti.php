<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Katakufti";
$page_description = "Iqa‘ Katakufti";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, katakufti, nawari, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/katakufti.php";
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
                        <h1>Iqa‘ Katakufti 8/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Katakufti</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>

                    <p>Iqa‘at Katakufti ist ein seltener Iqa‘ und wird vor allem im vokalen <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Genre verwendet. 
                    </p>
                    <p>
                    Eine Variante des Katakufti ersetzt die Pause auf dem fünfte Schlag durch ein weiteres Dum. Dadurch kommen zwei Dums hinter einander, wodurch der <a href="aqsaq.php">Iqa‘ Aqsaq</a> entsteht.
                    </p>
                    <p>
                    The name <strong>Katakufti</strong> is sometimes used as an alternate name for <a href="nawari.php">Iqa‘ Nawari</a> because they sound alike when <strong>Iqa‘ Katakufti</strong> is played in 4/4 and started from the last beat (the last <em>Tak</em>).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/khadduka_al_naddi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/khadduka_al_naddi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Khadduka al-Naddi</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Musik von Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ah Min Nari Jafahum</b>
                                    <span>Ensemble Nour al-Charq</span>
                                    <span>Musik von Sheikh Ali al-Darwish</span>
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