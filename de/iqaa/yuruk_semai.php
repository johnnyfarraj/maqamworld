<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Yuruk Semai";
$page_description = "Iqa‘ Yuruk Semai";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, yuruk semai, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/yuruk_semai.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Yuruk Semai 6/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/yuruk_semai.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Yuruk Semai</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/yuruk_semai.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Yuruk Semai ist ein ursprünglich türkisches Usul, das durch den Komponisten Tanburi Cemil Bey sehr bekannt geworden ist. "Yürük" bedeutet spöttisch auf Türkisch. Der Rhythmus ist im <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Genre sehr beliebt und wird gelegentlich auch Yugrug genannt. Spielt man ihn schneller, moduliert er häufig zu <a href="samai_saraband.php">Iqa' Sama‘i Saraband</a> im Dreiachteltakt.</p>
                    
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
                                    <span>Musik von ‘Umar al-Batsh</span>
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
                                    <span>Musik von Sayyed Darwish</span>
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
    
    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>