<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sudasi";
$page_description = "Iqa‘ Sudasi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, sudasi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/sudasi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa’at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Sudasi 6/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa’at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sudasi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sudasi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sudasi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Sudasi (whose name means based on the number "six") is a very popular <em>iqa‘</em> to accompany folk line dances from Lebanon and Palestine, like the Dabke. It can modulate to 3 back-to-back measures of <a href="malfuf.php">Iqa‘ Malfuf</a>.</p>

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
                                    <span>(traditional Lebanese folk song)</span>
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
                                    <span>Music and lyrics by the Rahbani Brothers</span>
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
                                    <span>Music and lyrics by the Rahbani Brothers</span>
                                    <span>From the movie <strong>Bayya‘ el-Khawatim</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/sudasi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Sudasi 6/4</b>
                                    <span>Tabla demonstration by Faisal Zedan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>The second form of Iqa‘ Sudasi</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/sudasi-f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>An alternative form of Iqa‘ Sudasi starts with 3 consecutive <em>dum</em>-s, and is commonly used in Lebanese <em>dabke</em> songs.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_trab_3ayntura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Trab ‘Ayntura</b>
                                    <span>Fairouz, Wadih al-Safi and Nasri Shamseddine</span>
                                    <span>Music and lyrics by the Rahbani Brothers</span>
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
                                    <span>Music and lyrics by Tania Saleh</span>
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