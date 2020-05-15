<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Nawari";
$page_description = "Iqa‘ Nawari";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/nawari.php";
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
                        <h1>Iqa‘ Nawari 4/4</h1>
                        <h3>(también llamado <strong>Katakufti</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nawari.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Nawari</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Nawari es una variación de <a href="saidi.php">Iqa‘ Sa‘idi</a> y <a href="baladi.php">Iqa‘ Baladi</a> que se usa principalmente en la música folklórica levantina y en las danzas de línea <strong>Dabke</strong>.
                    </p>
                    <p>
                        Iqa‘ Nawari a menudo es llamado <strong>Katakufti</strong> por los percusionistas, aunque el <a href="katakufti.php">Iqa‘ Katakufti</a> original está en un tiempo diferente. La razón detrás de este nombre alternativo es porque <a href="katakufti.php">Iqa‘ Katakufti</a> suena exactamente como Nawari cuando se inicia desde el último <strong>tak</strong>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya ‘Ein Mulayitein</b>
                                    <span>Samira Tawfiq</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawari/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dal‘ona (traditional)</b>
                                    <span>(artista desconocido)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawari/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Initiation Of Ecstasy</b>
                                    <span>Conjunto al-Funoun</span>
                                    <span><img src="/img/cd.png"> Zaghareed: Music From The Palestinian Holy Land</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/nawari.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Nawari 4/4</b>
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