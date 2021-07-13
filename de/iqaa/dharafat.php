<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Dharafat";
$page_description = "Iqa‘ Dharafat";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, dharafat, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/dharafat.php";
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
                        <h1>Iqa‘ Dharafat 13/8</h1>
                        <h3>(auch Zarafat geschrieben)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dharafat.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Dharafat</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/dharafat.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Dharafat (auch Zarafat geschrieben) wird vor allem bei <a href="../form/vocal_comp.php#muwashah">Muwashahat</a> benutzt. Kommt er doch einmal außerhalb des Muwashah-Genres zum Einsatz, so wirkt er wie ein Extra-Farbtupfer, der etwas klassisches Flair in die Musik bringt.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Tif Ya Durri Bil Qanani</b>
                                    <span>Al-Kindi Ensemble</span>
                                    <span>Musik von ‘Umar al-Batsh</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 1 - Maqam Hijazkar Kurd</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/dharafat/walladhi_wallaka_qalbi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Wal-ladhi Wallaka Qalbi</b>
                                    <span>Ensemble Morkos</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track" data-song="/audio/iqaa/dharafat/il_hobb_kullo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>il-Hubbi Kullo (1971)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track" data-song="/audio/iqaa/dharafat/mistanniyak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mistanniyak</b>
                                    <span>‘Aziza Galal</span>
                                    <span>Musik von Baligh Hamdi</span>
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