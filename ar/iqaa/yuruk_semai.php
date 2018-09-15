<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع يورك سماعي ٦/٨";
$page_description = "إيقاع يورك سماعي ٦/٨";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, yuruk semai, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/yuruk_semai.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>إيقاع يُورُك سَماعي ٦/٨</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/yuruk_semai.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Yuruk Semai is originally a Turkish usul. It is very popular in the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> genre, and is alternatively called <strong>Yugrug</strong>. When it speeds up, it may modulate to <a href="samai_saraband.php">Iqa' Sama‘i Saraband in 3/8</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/yuruk_semai/ahwa_al_ghazal.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/yuruk_semai/ahwa_al_ghazal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ahwa al-Ghazal al-Rabrabi</b>
                                    <span>Al-Kindi Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/3unq_al_malih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah ‘Unq al-Malih al-Ghali</b>
                                    <span>Sabri al-Mudallal</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Bil-Ladhi Askara</b>
                                    <span>Louis Hage and Aida Chalhoub</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/ila_kam_dha_al_tamadi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ila Kam Dha al-Tamadi</b>
                                    <span>Ensemble Morkos</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/qad_hala_shurb_al_mudam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Qad Hala Shurb al-Mudam</b>
                                    <span>Al-Turath Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/qum_ya_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Qum Ya Nadim</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/ya_bahjit_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Bahjet el-Rouh</b>
                                    <span>Sabah Fakhri</span>
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
    
    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>