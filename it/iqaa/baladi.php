<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Baladi";
$page_description = "Iqa‘ Baladi (Masmudi Saghir)";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, baladi, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/baladi.php";
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
                        <h1>Iqa‘ Baladi 4/4</h1>
                        <h3>(anche chiamato <strong>Masmudi Saghir</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Baladi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/baladi.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ Baladi è un iqa‘ molto popolare nella repertorio vocale del vicino oriente arabo. È anche chiamato <strong>Masmudi Saghir</strong>, "saghir" che significa "piccolo" in arabo, per distinguerlo dal <a href="masmudi_kabir.php">Masmudi Kabir</a>, che è lungo due misure di 4/4 invece che una. Il Baladi modula frequentemente al <a href="maqsum.php">Maqsum</a> per tornare indietro, come anche al <a href="malfuf.php">Malfuf</a> (usando 2 misure di Malfuf e 1 misura di Baladi).
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
                                    <span>Composizione strumentale</span>
                                    <span>Musica di Muhammad Abdel Wahab (dal film ‘Aziza, 1955)</span>
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