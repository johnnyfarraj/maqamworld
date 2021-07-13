<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fakhet";
$page_description = "Iqa‘ Fakhet";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, fakhet, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/fakhit.php";
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
                        <h1>Iqa‘ Fakhet 20/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/fakhit.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Fakhet</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fakhit.png" class="img-fluid">
                    </div>
                    
                    <p>L'Iqa‘ Fakhet è un iqa‘ relativamente lungo che occupa 5 misure di 4/4, risultando in un tempo di 20/4. Questo iqa‘ è raro al di fuori del genere <a href="../form/vocal_comp.php#muwashah">Muwashah</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fakhit/bi_sifatin_ja3alatni.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/fakhit/bi_sifatin_ja3alatni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bi Sifatin Ja‘alatni</b>
                                    <span>Al-Kindi Ensemble</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room II - Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fakhit/idha_da3ana_as_siba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Idha Da‘ana al-Siba</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Musica di Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fakhit/zarani_tahtal_ghayahib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Zarani Taht al-Ghayahib</b>
                                    <span>Firqat Usama Bin Zayd</span>
                                    <span>Musica di Omar al-Batsh</span>
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