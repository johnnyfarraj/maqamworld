<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fallahi";
$page_description = "Iqa‘ Fallahi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, fallahi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "en/iqaa/fallahi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Fallahi 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fallahi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Fallahi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fallahi.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Fallahi is a fast-paced Egyptian iqa‘ suitable for folk music. Although it might resemble <a href="maqsum.php">Maqsum</a> played at double speed, it has a very different feel as Fallahi flows very smoothly without a big contrast (in accents) between <em>dum</em> and <em>tak</em> beats.</p>
                    
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
                                    <b>il-Benti Beida</b>
                                    <span>Vocals and Music by Metqal Qannawi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/ahom_ahom.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahom Ahom</b>
                                    <span>Vocals and Music by Ahmad Adaweya</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/salametha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Salametha Ummu Hasan</b>
                                    <span>Vocals and Music by Ahmad Adaweya</span>
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
    
    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>