<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fox";
$page_description = "Iqa‘ Fox";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, fox, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/fox.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Fox 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fox.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Fox</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/fox.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Fox (probablement dérivé du 'Foxtrot') est un <em>iqa‘</em> simple en 2/4 qui est généralement joué sans trop d'ornements sur des sections instrumentales. Ceci, plus le fait d'être souvent joué très vite, donnent un ethos de rapidité et d'urgence. 
                    </p>
                    <p>Le Iqa‘ Fox est le <em>iqa‘</em> principal pour la <a href="../form/ottoman.php#longa">forme ottomane Longa</a> turque/européenne de l'Est. Le Fox peut alterner avec le <a href="malfuf.php">Malfuf</a>. Une version très lente du Fox (voir les 2 derniers exemples) pourrait être notée en 4/4.
                    </p>

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
                                    <b>Longa Farahfaza</b>
                                    <span>Salim Sahhab Orchestra</span>
                                    <span>Musique de Riyad al-Soumbati (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/ghulubt_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghouloubt Assaleh Fi Rouhi (1946)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
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
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/fox/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Touta</b>
                                    <span>Composition Instrumentale</span>
                                    <span>Musique de Farid al-Atrache</span>
                                </div>
                            </label>
                        </div>
                    </div>

					<!-- divider -->
					<br>
					<div class="heading jins text-center">
						<h3>Examples de la forme lente du Iqa‘ Fox notée en 4/4</h3>
					</div>
					<div class="clearfix"></div>
					<br>

                    <div class="track" data-song="/audio/iqaa/fox/ya_duniya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dounia Ya Gharami (1938)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
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
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
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