<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Thurayya (Aqsaq Turki)";
$page_description = "Iqa‘ Thurayya (Aqsaq Turki)";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, thurayya, aqsaq turki, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/thurayya.php";
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
                        <h1>Iqa‘ Thurayya 5/8</h1>
                        <h1>(Aqsaq Turki)</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/thurayya.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Thurayya</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/aqsaq_turki.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Aqsaq Turki</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/thurayya.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Thurayya ("the heavens" in Arabic) is alternatively known as <strong>Aqsaq Turki</strong> (Turkish Aqsaq). It is a very rare iqa‘ mostly used in the Muwashah vocal genre.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/thurayya/fil_roud_ana.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/thurayya/fil_roud_ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Fil-Roud Ana Shuft il-Gamil</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by ‘Umar al-Batsh</span>
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