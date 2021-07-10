<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Wahda w-Nuss";
$page_description = "Iqa‘ Wahda w-Nuss";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, wahda w-nuss, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/wahda_w_nuss.php";
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
                        <h1>O Iqa‘ Wahda w-Nuss 4/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_w_nuss.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Wahda w-Nuss</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/wahda_w_nuss.png" class="img-fluid">
                    </div>
                    
                    <p>O Iqa‘ Wahda w-Nuss ("um e meio" em árabe) é uma versão sincopada do <a href="maqsum.php">Iqa‘ Maqsum</a>, com o primeiro <em>tak</em> atrasado em metade de uma colcheia. Ele é muito popular no gênero Tarab desde meados do século XX.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_w_nuss/nura_nura.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/wahda_w_nuss/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Voz e música por Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_w_nuss/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Amal Hayati (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_w_nuss/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Baligh Hamdi (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_w_nuss/ya_kawini_ya_ali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Kawini Ya ‘Ali (1953)</b>
                                    <span>Sabah</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/wahda_w_nuss.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Wahda w-Nuss 4/4</b>
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