<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sikah Baladi";
$page_description = "Jins Sikah Baladi";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Jins Sikah Baladi <span class="badge badge-custom">New</span></h1>
                        <h3>(undefined size)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Sikah Baladi</a>
                    </div>
                    
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,93,13" href="#" alt="E4<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="315" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="163,85,13" href="#" alt="F4<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="364" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="243,77,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="318,67,13" href="#" alt="A4<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="425" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="395,60,13" href="#" alt="B4<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="485" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="473,51,13" href="#" alt="C5↓" class="playNote" data-frequency="515" data-parent="#notation1"><!-- variable -->
					 
					  
				     
					</map>
                    <p>Jins Sikah Baladi has no <em>ghammaz</em>, and therefore no defined size. Its melody is centered around its tonic, notated here on G. Jins Sikah Baladi is very difficult to accurately notate; instead its intervals and intonation are best learned by ear. Jins Sikah Baladi occurs on the octave of <a href="../maqam/sikah_baladi.php">Maqam Sikah Baladi</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qasida Man Mithlukum</b>
                                    <span>Hasan al-Haffar</span>
                                    <span><img src="/img/cd.png"> Muezzins D'Alep - Chants Religieux De L'Islam</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/hakam_3aleina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hakam ‘Aleina el-Hawa (1973)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Baligh Hamdi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/tal_intizari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tal Intizari (1937)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/fantasy_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fantasy Nahawand</b>
                                    <span>Instrumental Composition</span>
                                    <span>Music by Muhammad Abdel Wahab (Egypt)</span>
                                    <span><img src="/img/cd.png"> Qamar 14</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/tqasim_oud_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Oud (from Wasla in Rast)</b>
                                    <span>Ibrahim al-Haggar</span>
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