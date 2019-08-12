<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Katakufti";
$page_description = "Iqa‘ Katakufti";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, katakufti, nawari, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/katakufti.php";
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
                        <h1>Iqa‘ Katakufti 8/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Katakufti</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Katakufti est un <em>iqa‘</em> rare et est surtout trouvé dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>.
                    </p>

                    <p>Une forme alternative de Iqa‘ Katakufti est possible, ou le soupir sur le 5<sup>ième</sup> temps est remplacé par un autre <em>doum</em>, créant ainsi une séquence de deux <em>doums</em> consécutifs qui évoquent le <a href="aqsaq.php">Iqa‘ Aqsaq</a>.
                    
                    </p>
                    <p>Le nom <strong>Katakufti</strong> est parfois utilisé pour dénommer le <a href="nawari.php">Iqa‘ Nawari</a> parce qu'ils se ressemblent beaucoup lors que le <strong>Iqa‘ Katakufti</strong> est joué en 4/4 et commence par le dernier coup (le dernier <em>tak</em>).
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
                                    <b>Mouachah Khadduka al-Naddi</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Musique de Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ah Min Nari Jafahum</b>
                                    <span>Ensemble Nour al-Charq</span>
                                    <span>Musique de Sheikh Ali al-Darwish</span>
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