<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Nawakht Hindi";
$page_description = "Iqa‘ Nawakht Hindi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, nawakht, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/nawakht_hindi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Nawakht Hindi 16/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nawakht_hindi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Nawakht Hindi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/nawakht_hindi.png" class="img-fluid">
                    </div>
                    
                    <p>L'Iqa‘ Nawakht Hindi è un iqa‘ molto popolare nel repertorio del <a href="../form/vocal_comp.php#muwashah">Muwashah</a>, e tende a essere suonato ad una velocità dolce.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawakht_hindi/ya_3uyunan_ramiyat.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya ‘Uyunan Ramiyat</b>
                                    <span>Sabri al-Mudallal (Siria)</span>
                                    <span>Musica di Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_hamam_al_ayk.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Hamam al-Ayk</b>
                                    <span>Ensemble al-Bahaa, Aleppo</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_mukhjil_al_aqmar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Mukhjil al-Aqmar</b>
                                    <span>Orchestra e Coro della Radio Tunisina</span>
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