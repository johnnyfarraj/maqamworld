<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fox";
$page_description = "Iqa‘ Fox";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, fox, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
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
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Fox 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/fox.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Fox</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/fox.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ Fox (derivato probabilmente da "Foxtrot") è un iqa‘ semplice in 2/4 iqa‘ solitamente suonato senza molti arricchimenti sopra una sezione strumentale. Questo, e il fatto che sia spesso suonato in un tempo molto veloce, gli danno un senso di rapidità e urgenza. È il principale iqa‘ usato nella forma strumentale Turca e dell'Europa orientale <a href="../form/ottoman.php#longa">Longa</a>. Il Fox può facilmente modulare al <a href="malfuf.php">Malfuf</a> e ritornare. Una versione molto lenta del Fox (vedi gli ultimi due esempi) può essere scritta in 4/4.</p>

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
                                    <span>Musica di Riyad al-Sunbati</span>
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
                                    <span>Musica di Riyad al-Sunbati</span>
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
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
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
                                    <span>Composizione strumentale</span>
                                    <span>Musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

					<!-- divider -->
					<br>
					<div class="heading jins text-center">
						<h3>Esempi di forme di Iqa‘ Fox più lente che possono essere scritte in 4/4</h3>
					</div>
					<div class="clearfix"></div>
					<br>

                    <div class="track" data-song="/audio/iqaa/fox/ya_duniya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dunya Ya Gharami (1938)</b>
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
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
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
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