<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Mukhammas";
$page_description = "Iqa‘ Mukhammas";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, mukhammas, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/mukhammas.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Mukhammas 16/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mukhammas.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mukhammas</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/mukhammas.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ Mukhammas è principalmente confinato al repertorio del <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Al contrario della sua indicazione di tempo la parola "mukhammas" in arabo significa "basato sul numero 5".</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mukhammas/badri_adir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mukhammas/badri_adir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badri Adir Kas al-Tila</b>
                                    <span>Coro della Facoltà di Musica - Università di Kaslik (Libano)</span>
                                    <span>Musica di by Muhammad ‘Uthman</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah e Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mukhammas/wajhak_mushriq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Wajhak Mushriq</b>
                                    <span>L'orchestra Abdel Halim Nouera</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>