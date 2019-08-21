<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Tastiera Orientale";
$page_description = "La Tastiera Orientale";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Oud, Qanun, Nay, Violino, Buzuq, Fisarmonica Arabe, Chitarra Elettrica Arabe, Organo Elettrico Arabe, Tastiera Orientale, Piano Arabo, Sassofono, Tromba, Riqq, Tabla, Tabl Baladi, Daff, Mazhar, Katem, Sagat";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/keyboard.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>La Tastiera Orientale</h1>
                        <h3>Un Synthétiseur/Echantillonneur avec la capacité de jouer tous les quarts de ton</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="La Tastiera Orientale">
                        <span>La Tastiera Orientale Ketron Vega</span>
                    </div>

                    <p> La Tastiera Orientale est le successeur de <a href="org.php">l'orgue</a> et est apparu sur le marché vers la fin du 20<sup>ième</sup> siècle. Sa force était de pouvoir imiter les sons de plusieurs instruments arabes en les échantillonnant et en permettant au musicien d'imiter et d'alterner entre le <em>Mijwiz</em>, le <a href="qanun.php">Qanun</a> ou même le <a href="saxophone.php">Saxophone</a> en appuyant sur un bouton.
                    </p>
                    <p>La plupart des compagnies de synthétiseurs (comme Roland, Yamaha, GEM, Kawai et Ketron) fabriquent des synthétiseurs orientaux et y incluent un générateur de rythmes permettant au musicien d'ajouter à ses mélodies/accords des <a href="../iqaa.php">iqa‘at</a> préenregistrés à partir d'échantillons d'instruments de percussions arabes. Ceci fait du clavier oriental un instrument très puissant et versatile et un instrument essentiel pour la musique pop et de dance arabe.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="La Tastiera Orientale's Quartertone Buttons">
                        <span>12 boutons pour abaisser chaque note du clavier d'un quart de ton</span>
                    </div>

                    <p> Le clavier oriental est capable de produire un quart de ton à partir de toutes les 12 notes du clavier en appuyant sur chaque bouton.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Aw‘idak</b>
                                    <span>L'Orchestra Arabe National (États-Unis) jouant la chanson <strong>Aw‘idak</strong> de Souad Muhammad dans un arrangement incluant le Clavier Oriental et la Guitare Électrique à côté d'instruments traditionnels arabes.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Shamstep</b>
                                <span>Le groupe pan-palestinien<strong>47Soul</strong> a ajouté des effets sonores au clavier oriental et a ainsi créé un nouveau genre de techno-<em>dabké</em> avec leur chanson <strong>Shamstep</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Arabe</a></li>
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
                    	<!--
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
						-->
						<li><a href="piano.php">Il Piano Arabo</a></li>
						<li><a href="saxophone.php">Il Sassofono</a></li>
						<li><a href="trumpet.php">La Tromba</a></li>
                   </ul>

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
