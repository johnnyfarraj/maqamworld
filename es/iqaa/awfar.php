<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Awfar Masri";
$page_description = "Iqa‘ Awfar Masri";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘, Iqa‘ Awfar Masri 19/4";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/awfar.php";
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
                        <h1>Iqa‘ Awfar Masri 19/4</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awfar_masri.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Awfar Masri</a>
                    </div>

                    <p>Iqa‘ Awfar Masri se usa principalmente con el género vocal <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Sus dos formas principales se describen aquí.
                    </p>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Forma I</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="/note/iqaa/awfar_f1.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Man Kunta Anta Habibahu</b>
                                    <span>Al-Kindi Ensemble</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room II - Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Forma II</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="/note/iqaa/awfar_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ghuddi_jufunaki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ghuddi Jufunaki</b>
                                    <span>(in <a href="../maqam/saba.php">Maqam Saba</a>)</span>
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_man_ramani_bil_siham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Man Ramani Bil-Siham</b>
                                    <span>(in <a href="../maqam/nikriz.php">Maqam Nikriz</a>)</span>
                                    <span>Ensemble Dugah</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_na3isa_al_ajfan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Na‘isa al-Ajfan</b>
                                    <span>(in <a href="../maqam/nahawand.php">Maqam Nahawand</a>)</span>
                                    <span>Khaled al-Hafez</span>
                                    <span>Music by ‘Umar al-Batsh</span>
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