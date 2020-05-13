<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ ‘Awis";
$page_description = "Iqa‘ ‘Awis";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘, Iqa‘ ‘Awis";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/awis.php";
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
                        <h1>Iqa‘ ‘Awis 11/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awis.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de ‘Awis</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/awis.png" class="img-fluid">
                    </div>

                    <p>
                        Iqa‘ ‘Awis se usa principalmente con el género <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Algunas piezas de ‘Awis comienzan desde el tercer tiempo (el primer <em>tak</em>), como por ejemplo "Muwashah Munyati Man Rumtu Qurbuhu". Mientras tanto, "Muwashah Hibbi Da‘ani Lil-Wisal" comienza la melodía en el undécimo ritmo (el último <em>tak</em>).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.2 - Bayati Shuri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/hibbi_da3ani2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Coro de la Universidad Kaslik (Líbano)</span>
                                    <span>Conductor Aïda Shalhoub Ziadé</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati Man Rumtu Qurbuh</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Omar al-Batsh</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.9 - Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_sidul_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati Sidu-l-Milah</b>
                                    <span>(performed in 11/4)</span>
                                    <span>The munshid Mahmud Fares</span>
                                    <span>Música de Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/awis.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ ‘Awis 11/8</b>
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