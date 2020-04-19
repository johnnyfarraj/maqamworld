<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Murabba‘";
$page_description = "Iqa‘ Murabba‘";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/murabbaa.php";
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
                        <h1>Iqa‘ Murabba‘ 13/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/murabbaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Murabba‘</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/murabbaa.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Murabba‘ is mostly confined to the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> repertoire. Unrelated to its time signature, the word <em>murabba‘</em> in Arabic means squared or based on the number 4.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/murabbaa/hayyara_al_afkar.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/murabbaa/hayyara_al_afkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Hayyar al-Afkar</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/hibbi_malik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Malik al-Milah</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/isqini_al_rah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Isqini al-Rah</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/jalla_man_qad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jalla Man Qad Ansha Jamalak</b>
                                    <span>Umar Sarmini and al-Kindi Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/qum_bina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Qum Bina Ya Nur ‘Ayni</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ramani Bi Sahmi Hawahu</b>
                                    <span>Hasan al-Haffar</span>
                                    <span>Music by Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/murabbaa/ya_3udhayb.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya ‘Udhayb al-Marshaf</b>
                                    <span>Choir of the faculty of Music - Kaslik University (Lebanon)</span>
                                    <span>Conductor: Aïda Shalhoub Ziadé</span>
                                    <span>Music by Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/murabbaa.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Murabba‘ 13/4</b>
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