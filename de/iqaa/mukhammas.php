<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Mukhammas";
$page_description = "Iqa‘ Mukhammas";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, mukhammas, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/mukhammas.php";
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
                        <h1>Iqa‘ Mukhammas 16/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mukhammas.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Mukhammas</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/mukhammas.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Mukhammas kommt nahezu nur im <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Reperoire vor. Auch wenn es mit dem konkreten Taktmuster nichts zu tun hat: Das Wort "mukhammas" bedeutet im Arabischen auf der Zahl fünf basierend.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mukhammas/badri_adir.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/mukhammas/badri_adir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badri Adir Kas al-Tila</b>
                                    <span>Orientalia</span>
                                    <span>Musik von by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/mukhammas/wajhak_mushriq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Wajhak Mushriq</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
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