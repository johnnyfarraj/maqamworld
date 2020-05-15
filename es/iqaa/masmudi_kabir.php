<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Masmudi Kabir";
$page_description = "Iqa‘ Masmudi Kabir";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/masmudi_kabir.php";
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
                        <h1>Iqa‘ Masmudi Kabir 8/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/masmudi_kabir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Masmudi Kabir</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/masmudi_kabir.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Iqa‘ Masmudi Kabir (o simplemente <strong>Masmudi</strong>) es uno de los ritmos más populares en el repertorio <em>Tarab</em> del siglo XX. La palabra "kabir" significa grande en árabe, se usa para distinguirlo de <a href="baladi.php">Masmudi Saghir</a> (pequeño Masmudi, más comúnmente llamado <strong>Baladi</strong>).
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/masmudi_kabir/bint_il_balad.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/masmudi_kabir/bint_il_balad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Bint el-Balad (1951)</b>
                                    <span>Composición Instrumental</span>
                                    <span>Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/masmudi_kabir/khayyi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Khayi Khayi (1958)</b>
                                    <span>Voz y música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/masmudi_kabir/ruba3iyyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ruba‘iyat al-Khayam (1950)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/masmudi_kabir/ya_fatin_al_ghuzlan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Fatin al-Ghuzlan</b>
                                    <span>Conjunto Al-Turath</span>
                                    <span>Música de Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/masmudi_kabir/ya_shadil_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Shadi al-Alhan</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Sayed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/masmudi_kabir/zarani_al_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Zarani al-Mahbub</b>
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/masmudi_kabir.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Masmudi Kabir 8/4</b>
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