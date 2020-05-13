<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fallahi";
$page_description = "Iqa‘ Fallahi";
$page_keywords = "Iqa‘ Fallahi, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/fallahi.php";
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
                        <h1>Iqa‘ Fallahi 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fallahi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Fallahi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fallahi.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Fallahi es un <em>iqa‘</em> egipcio de movimiento rápido adecuado para la música folclórica. Aunque puede parecerse a <a href="maqsum.php">Maqsum</a> tocado a doble velocidad, tiene una sensación muy diferente ya que Fallahi fluye muy suavemente sin un gran contraste (en acentos) entre golpes <em>dum</em> y <em>tak</em>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fallahi/el_binti_beida.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/fallahi/el_binti_beida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>il-Benti Beida</b>
                                    <span>Voz y música por Metqal Qannawi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/ahom_ahom.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hizz Ya Hubb</b>
                                    <span>Voz por Ahmad Adaweya</span>
                                    <span>Música de Hassan Abu el-Su‘ud</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/salametha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Salametha Ummu Hasan</b>
                                    <span>Voz por Ahmad Adaweya</span>
                                    <span>Música de Faruq Salamah</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/fallahi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Fallahi 2/4</b>
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