<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Dawr Hindi";
$page_description = "Iqa‘ Dawr Hindi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, dawr hindi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/dawr_hindi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include($ROOT . 'inc/sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Dawr Hindi 7/8</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dawr_hindi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Dawr Hindi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/dawr_hindi.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Dawr Hindi is a very popular iqa‘ for the Muwashah genre.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Sihtu Wajdan</b>
                                    <span>Orientalia</span>
                                    <span>Music by Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jadaka_al_ghaythu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jadaka al-Gaythu</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Majdi al-‘Aqili</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol I</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jalla_man.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jalla Man Qad Sawwarak</b>
                                    <span>Sheikh Hamza Shakkur</span>
                                    <span>Ensemble Al Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                 </div>
                <div class="col-sm-12 order-sm-3">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>