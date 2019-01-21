<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sama‘i Thaqil";
$page_description = "Iqa‘ Sama‘i Thaqil";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, sama‘i, samai thaqil, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/samai_thaqil.php";
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
                        <h1>Iqa‘ Sama‘i Thaqil 10/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai_thaqil.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Sama‘i Thaqil</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/samai_thaqil.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Sama‘i Thaqil (also called Sama‘i, for short) is a very popular <em>iqa‘</em> in the <a href="../form/vocal_comp.php#muwashah">Mouachah</a> vocal genre, as well as the principal iqa‘ used in the <a href="../form/ottoman.php#samai">Sama‘i</a> Turkish/Ottoman instrumental form. </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan</b>
                                    <span>The Takht Ensemble of Cairo</span>
                                    <span><img src="/img/cd.png"> Music Of Islam Vol. 1: AL-Qahirah</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/3atini_bikra_al_dinan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah ‘Atini Bikra al-Dinan</b>
                                    <span>Salim Sahhab Orchestra</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/imlali_al_aqdah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Imlali al-Aqdaha Sirfan</b>
                                    <span>Sheikh Hamza Shakkur and Ensemble Al Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/laha_badru_ttim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Laha Badru al-Timm</b>
                                    <span>Abdel Halim Noueirah Ensemble</span>
                                    <span>Music by Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/mala_al_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Mala al-Kasat</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/rashiq_al_qadd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Rashiq al-Qadd</b>
                                    <span>Ensemble Morkos</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/talaffata_al_dhabiyu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Talaffata al-Dhabiyu</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span>Music by Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/tarraza_al_rayhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Tarraza al-Rayhan</b>
                                    <span>Ensemble Morkos</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
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
    
    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>