<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Muhajjar";
$page_description = "Iqa‘ Muhajjar";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, muhajjar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/muhajjar.php";
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
                        <h1>Iqa‘ Muhajjar 14/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muhajjar.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Muhajjar</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/muhajjar.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Muhajjar ist ein im <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Repertoire sehr beliebter Iqa‘. Er ist leicht zu identifizieren durch die drei aufeinander folgenden Dums, die den Rhythmus einleiten. Das Wort "muhajjar" bedeutet im Arabischen aus Stein gemacht beziehungsweise zu Stein geworden.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri</b>
                                    <span>Ensemble Al-Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/hajarni_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hajarni Habibi</b>
                                    <span>Al-Turath Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hal ‘Ala al-Astar</b>
                                    <span>Ensemble Morkos</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/munyati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati ‘Azza Istibari</b>
                                    <span>Orientalia</span>
                                    <span>Musik von Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/ya_tura_ba3da.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Tura Ba‘da al-Bi‘adi</b>
                                    <span>Ensemble Al-Kindi</span>
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