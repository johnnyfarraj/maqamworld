<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Yuruk Semai";
$page_description = "Iqa‘ Yuruk Semai";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, yuruk semai, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/yuruk_semai.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>O Iqa‘ Yuruk Semai 6/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/yuruk_semai.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Yuruk Semai</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/yuruk_semai.png" class="img-fluid">
                    </div>
                    
                    <p>O Iqa‘ Yuruk Semai é originalmente um ritmo (usul) turco. Ele é muito popular no gênero <a href="../form/vocal_comp.php#muwashah">Muwashah</a>, e alternativamente também é chamado de <strong>Yugrug</strong>. Quando acelerado, ele pode ser modulado com o <a href="samai_darij.php">Iqa‘ Sama‘i Darij</a> em 3/4 e com o <a href="samai_saraband.php">Iqa‘ Sama‘i Saraband</a> em 3/8.
                    </p>
                    
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
                                    <span>Conjunto Al-Kindi</span>
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
                                    <span>Louis Hage e Aida Chalhoub</span>
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
                                    <span>Conjunto Morkos (Líbano)</span>
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
                                    <span>Conjunto Al-Turath</span>
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
                                    <span>Música de Omar al-Batch</span>
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
                                    <span>Música de Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/yuruk_semai.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Yuruk Semai 6/8</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
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
    
    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>