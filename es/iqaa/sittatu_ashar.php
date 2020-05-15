<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sittatu ‘Ashar Masri";
$page_description = "Iqa‘ Sittatu ‘Ashar Masri";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/sittatu_ashar.php";
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
                        <h1>Iqa‘ Sittatu ‘Ashar Masri 32/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sittatu_ashar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sittatu ‘Ashar Masri</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sittatu_ashar.png" class="img-fluid">
                    </div>

                    <p>
                        Iqa‘ Sittatu ‘Ashar Masri ("sittatu ‘ashar" significa dieciséis, "masri" significa egipcio) es un <em>iqa‘</em> raro utilizado principalmente en el género vocal <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Abarca 8 compases de 4/4 y lleva la cifra de 32/4 al principio del compás.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sittatu_ashar/badat_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sittatu_ashar/badat_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri (khana)</b>
                                    <span>Conjunto Al-Kindi</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient Part I - Maqam Bayati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sittatu_ashar/badat_ghada.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri (khana)</b>
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sittatu_ashar/badat_kaslik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri (khana)</b>
                                    <span>Louis Hage y Aida Chalhoub</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/sittatu_ashar_masari.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Sittatu ‘Ashar Masri 32/4</b>
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