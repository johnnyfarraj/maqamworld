<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sama‘i Darij";
$page_description = "Iqa‘ Sama‘i Darij";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, sama‘i, samai darij, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/samai_darij.php";
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
                        <h1>O Iqa‘ Sama‘i Darij 3/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai_darij.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sama‘i Darij</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/samai_darij.png" class="img-fluid">
                    </div>
                    
                    <p>O Iqa‘ Sama‘i Darij (também chamado de Darij) é um iqa‘ 3/4 comum usado tanto em gêneros vocais como instrumentais. O Iqa‘ Sama‘i Darij também é o principal <em>iqa‘</em> usado na forma musical composta instrumental <a href="../form/instr_comp.php#darij">Darij</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/samai_darij/kallili_ya_suhbu.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/samai_darij/kallili_ya_suhbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Kallili Ya Suhbu</b>
                                    <span>Orquesta Abdel Halim Noueira</span>
                                    <span>Música de Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_darij/ya_ghusna_naqa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Muwashah Ya Ghusna Naqa</b>
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_darij/ya_man_la3ibat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Muwashah Ya Man La`ibat Bihi Shamulu</b>
                                    <span>Conjunto Al-Turath</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/samai_darij.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Sama‘i Darij 3/4</b>
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