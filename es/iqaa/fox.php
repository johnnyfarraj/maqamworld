<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fox";
$page_description = "Iqa‘ Fox";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/fox.php";
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
                        <h1>Iqa‘ Fox 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fox.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Fox</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/fox.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Fox (probably derived from "Foxtrot") is a simple 2/4 <em>iqa‘</em> that is usually played without too much ornamentation over instrumental sections. This, and the fact it is often played at very fast tempos, gives it a swift and urgent feel. It is the main <em>iqa‘</em> used in the Turkish/Eastern European <a href="../form/ottoman.php#longa">Longa</a> Ottoman instrumental form. Fox can readily modulate to <a href="malfuf.php">Malfuf</a> and back. A very slow version of Fox (see the last 2 examples) could be notated as 4/4.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fox/longa_farahfaza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/fox/longa_farahfaza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Longa Farahfaza (Instrumental)</b>
                                    <span>Salim Sahhab Orchestra</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/ghulubt_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghulubt Asalih Fi Ruhi (1946)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/al_fann.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Al-Fann 1945</b>
                                    <span>Voz y música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tuta</b>
                                    <span>Instrumental Composition</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

					<!-- divider -->
					<br>
					<div class="heading jins text-center">
						<h3>TODO Examples of the slower form of Iqa‘ Fox that can be notated in 4/4</h3>
					</div>
					<div class="clearfix"></div>
					<br>

                    <div class="track" data-song="/audio/iqaa/fox/ya_duniya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dunya Ya Gharami (1938)</b>
                                    <span>Voz y música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Kulli Da Kan Leh (1954)</b>
                                    <span>Voz y música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/fox.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Fox 2/4</b>
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