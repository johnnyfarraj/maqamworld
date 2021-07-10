<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Baladi";
$page_description = "Iqa‘ Baladi (Masmudi Saghir)";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, baladi, masmudi saghir, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Iqa‘ Baladi 4/4</h1>
                        <h3>(também chamado de <strong>Masmudi Saghir</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Baladi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/baladi.png" class="img-fluid">
                    </div>

                    <p>O Iqa‘ Baladi é um <em>iqa‘</em> muito comum no repertório vocal árabe do Oriente Próximo. Ele também é chamado de <strong>Masmudi Saghir</strong>, sendo que "saghir" significa “pequeno” em árabe, diferenciando-se do <a href="masmudi_kabir.php">Masmudi Kabir</a>, que se estende por dois compassos 4/4 no lugar de um. O Baladi se modula frequentemente com o <a href="maqsum.php">Maqsum</a> e também com o <a href="malfuf.php">Malfuf</a> (usando dois compassos de <a href="malfuf.php">Malfuf</a> para um compasso de Baladi).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/baladi/aziza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/baladi/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>Composição Instrumental</span>
                                    <span>Música de Muhammad Abdel Wahab (do filme ‘Aziza, 1955)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/halummu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Halummu Li</b>
                                    <span>Hassan al-Haffar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Malik Ya Hilwa</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/baladi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Baladi 4/4</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>