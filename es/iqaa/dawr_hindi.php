<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Dawr Hindi";
$page_description = "Iqa‘ Dawr Hindi";
$page_keywords = "Iqa‘ Dawr Hindi, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/dawr_hindi.php";
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
                        <h1>Iqa‘ Dawr Hindi 7/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dawr_hindi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Dawr Hindi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/dawr_hindi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Dawr Hindi es un <em>iqa‘</em> muy popular para composiciones en el género vocal <a href="../form/vocal_comp.php#muwashah">Muwashah</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/dawr_hindi/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Sihtu Wajdan</b>
                                    <span>Coro de la Universidad Kaslik (Líbano)</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jadaka_al_ghaythu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jadaka al-Ghaythu</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Majdi al-‘Aqili</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol I</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dawr_hindi/jalla_man.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jalla Man Qad Sawwarak</b>
                                    <span>Sheikh Hamza Shakkur</span>
                                    <span>Conjunto Al-Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/dawr_hindi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Dawr Hindi 7/8</b>
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