<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sama‘i Thaqil";
$page_description = "Iqa‘ Sama‘i Thaqil";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, sama‘i thaqil, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/samai_thaqil.php";
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
                        <h1>Iqa‘ Sama‘i Thaqil 10/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai_thaqil.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sama‘i Thaqil</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/samai_thaqil.png" class="img-fluid">
                    </div>
                    
                    <p>L'Iqa‘ Sama‘i Thaqil (anche abbreviato in <strong>Sama‘i</strong>) è un iqa‘ molto popolare nel genere vocale <a href="../form/vocal_comp.php#muwashah">Muwashah</a>, e come principale  iqa‘ usato nel <a href="../form/ottoman.php#samai">Sama‘i</a> forma strumentale Turca/Ottomana.
                    </p>
                    
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
                                    <b>Muwashah ‘Atini Bikra al-Dinan</b>
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
                                    <b>Muwashah Imlali al-Aqdaha Sirfan</b>
                                    <span>Sheikh Hamza Shakkur e Ensemble Al-Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/laha_badru_ttim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Laha Badru al-Timm</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Musica di Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/mala_al_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala al-Kasat</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span>Musica di Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/rashiq_al_qadd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Rashiq al-Qadd</b>
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
                                    <b>Muwashah Talaffata al-Dhabiyu</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span>Musica di Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/tarraza_al_rayhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Tarraza al-Rayhan</b>
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
    
    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>