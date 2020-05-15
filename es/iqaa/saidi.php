<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sa‘idi";
$page_description = "Iqa‘ Sa‘idi";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/saidi.php";
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
                        <h1>Iqa‘ Sa‘idi 4/4</h1>
                        <h3>(también escrito Saidi)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saidi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sa‘idi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/saidi.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Sa‘idi es un <em>iqa‘</em> animado y el <em>iqa‘</em> por excelencia egipcio de la región de <strong>Sa‘id</strong>. Se modula entre otros <em>iqa‘at</em> animados en 4/4 como <a href="maqsum.php">Maqsum</a> y <a href="baladi.php">Baladi</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/saidi/sawwah.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/saidi/sawwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Sawwah (1966)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Música de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/saidi/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zay el-Hawa (1970)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Música de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/saidi/3ala_hisb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ala Hisb Widad Galbi (1953)</b>
                                    <span>Hossam Ramzi</span>
                                    <span>Música de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/saidi/bahibbak_saddaqni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bahibbak Saddaqni</b>
                                    <span>Warda</span>
                                    <span>Música de Sayed Makkawi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/saidi/habba_fouq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habba Fouq We Habba Taht</b>
                                    <span>Voz y música por Ahmad Adaweya</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/saidi/ma_khadtesh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Adik Ti'ul Makhadtesh</b>
                                    <span>Voz y música por Ahmad Adaweya</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/saidi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Sa‘idi 4/4</b>
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