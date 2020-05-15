<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Katakufti";
$page_description = "Iqa‘ Katakufti";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/katakufti.php";
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
                        <h1>Iqa‘ Katakufti 8/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Katakufti</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/katakufti.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa ‘Katakufti es un <em>iqa‘</em> poco común utilizado en el género vocal <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Una forma alternativa de este <em>iqa‘</em> reemplaza el silencio del quinto tiempo con un <strong>dum</strong>, creando 2 golpes de <strong>dum</strong> consecutivos (de manera similar a la segunda forma de <a href="aqsaq.php">Iqa‘ Aqsaq</a>).
                    </p>
                    <p>
                        El nombre <strong>Katakufti</strong> a veces se usa como un nombre alternativo para <a href="nawari.php">Iqa‘ Nawari</a> porque suenan igual cuando Iqa‘ Katakufti se toca en 4/4 y comienza desde el último tiempo (el último <strong>tak</strong>).
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/khadduka_al_naddi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/khadduka_al_naddi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Khadduka al-Naddi</b>
                                    <span>Khaled al-Hafez</span>
                                    <span>Música de Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ah Min Nari Jafahum</b>
                                    <span>Conjunto Nur al-Sharq</span>
                                    <span>Música de Sheikh Ali al-Darwish</span>
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