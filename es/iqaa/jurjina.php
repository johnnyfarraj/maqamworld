<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Jurjina";
$page_description = "Iqa‘ Jurjina";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/jurjina.php";
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
                        <h1>Iqa‘ Jurjina 10/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jurjina.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Jurjina</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/jurjina.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Jurjina es un <em>iqa‘</em> utilizado ampliamente en Irak e Irán, así como en el repertorio turco y kurdo, tanto en los géneros folklóricos como clásicos. Aunque se usa con poca frecuencia en el repertorio del Cercano Oriente, a veces se usa en composiciones tunecinas de Malouf.               
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/jurjina/yammul_3uyun.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/jurjina/yammul_3uyun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Umm el-‘Uyun el-Sud</b>
                                    <span>Nazem al-Ghazali</span>
                                    <spand>Musica de Nazem Na‘im</spand>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/ya_hulu_al_lama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Hulu al-Lama</b>
                                    <span>Lutfi Bushnaq</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/maluf_adir_rahati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Adir Rahati</b>
                                    <span>Tunisian Malouf</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/maluf_ma_kuntu_adri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma Kuntu Adri</b>
                                    <span>Tunisian Malouf</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/jurjina.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Jurjina 10/8</b>
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