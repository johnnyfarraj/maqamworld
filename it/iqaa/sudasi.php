<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sudasi";
$page_description = "Iqa‘ Sudasi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, sudasi, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/sudasi.php";
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
                        <h1>Iqa‘ Sudasi 6/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sudasi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sudasi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sudasi.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ Sudasi (il cui nome significa basato sul numero 6) è un iqa‘ molto popolare per accompagnare canzoni folk di danze del Libano e della Palestina, come il <em>Dabke</em>.  Può modulare a 3 battute consecutive di <a href="malfuf.php">Iqa‘ Malfuf</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sudasi_f1/dal3ona.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sudasi_f1/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dal‘ona</b>
                                    <span>Fairouz</span>
                                    <span>(una canzone popolare libanese tradizionale)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_mahla_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Mahla Layali el-Hawa (1963)</b>
                                    <span>Fairouz</span>
                                    <span>Musica e parole di Fratelli Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_7ajal_sannin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Hajal Sannin (1965)</b>
                                    <span>Fairouz</span>
                                    <span>Musica e parole di Fratelli Rahbani</span>
                                    <span>Da film <strong>Bayya‘ el-Khawatim</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>La seconda forma dell' Iqa‘ Sudasi</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/sudasi-f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>Una forma alternativa di Iqa‘ Sudasi inizia con 3 <em>dum</em>-s consecutivi ed è comunemente usata nelle canzoni <em>dabke</em> libanesi.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_trab_3ayntura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Trab ‘Ayntura</b>
                                    <span>Fairouz, Wadih al-Safi e Nasri Shamseddine</span>
                                    <span>Musica e parole di Fratelli Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_b3albak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Ba‘albak</b>
                                    <span>Musica e parole di Tania Saleh</span>
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