<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Khosh Rang";
$page_description = "Iqa‘ Khosh Rang";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/khosh_rang.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Khosh Rang 17/8</h1>
                        <h3>(también deletreado Khush Rank)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/khosh_rang.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Khosh Rang</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/khosh_rang.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Khosh Rang (también deletreado <strong>Khush Rank</strong>) es un <em>iqa‘</em> muy poco común que solo se usa en una <a href="../form/vocal_comp.php#muwashah">Muwashah</a> conocida y en algunas raras composiciones modernas.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Salla Fina al-Lahdha Hindiya</b>
                                    <span>Conjunto Al-Kindi</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/salla_fina_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Salla Fina al-Lahdha Hindiya</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Nagham Al Ams Vol 08 - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/tareq_abdallah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Khush-Rank (Oud y Riqq)</b>
                                    <span>Tarek Abdallah, Adel Shams El-Din</span>
                                    <span><img src="/img/cd.png"> Wasla (Suites musicales égyptiennes)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/khosh_rang.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Khosh Rang 17/8</b>
                                    <span>Demostración en el Tabla por Faisal Zedan</span>
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
    
    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>