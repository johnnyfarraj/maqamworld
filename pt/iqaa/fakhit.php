<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fakhit";
$page_description = "Iqa‘ Fakhit";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, fakhit, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/fakhit.php";
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
                        <h1>O Iqa‘ Fakhit 20/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/fakhit.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Fakhit</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fakhit.png" class="img-fluid">
                    </div>
                    
                    <p>O Iqa‘ Fakhit é um <em>iqa‘</em> relativamente longo que engloba 5 compassos de 4/4, resultando em uma fórmula de compasso de 20/4. Este iqa‘ é raro fora do gênero <a href="../form/vocal_comp.php#muwashah">Muwashah</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fakhit/bi_sifatin_ja3alatni.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/fakhit/bi_sifatin_ja3alatni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bi Sifatin Ja‘alatni</b>
                                    <span>Conjunto Al-Kindi</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room II - Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fakhit/idha_da3ana_as_siba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Idha Da‘ana al-Siba</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Música de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fakhit/zarani_tahtal_ghayahib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Zarani Taht al-Ghayahib</b>
                                    <span>Firqat Usama Bin Zayd</span>
                                    <span>Música de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/fakhit.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Fakhit 20/4</b>
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