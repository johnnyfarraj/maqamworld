<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Synthétiseur Oriental";
$page_description = "Le Synthétiseur Oriental";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/keyboard.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Le Synthétiseur Oriental</h1>
                        <h3>Un Synthétiseur/Echantillonneur avec la capacité de jouer tous les quarts de ton</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="Le Synthétiseur Oriental">
                        <span>Le Synthétiseur Oriental Ketron Vega</span>
                    </div>

                    <p> Le Synthétiseur Oriental est le successeur de <a href="org.php">l'orgue</a> et est apparu sur le marché vers la fin du 20<sup>ième</sup> siècle. Sa force était de pouvoir imiter les sons de plusieurs instruments arabes en les échantillonnant et en permettant au musicien d'imiter et d'alterner entre le <em>Mijwiz</em>, le <a href="qanun.php">Qanoun</a> ou même le <a href="saxophone.php">Saxophone</a> en appuyant sur un bouton.
                    </p>
                    <p>La plupart des compagnies de synthétiseurs (comme Roland, Yamaha, GEM, Kawai et Ketron) fabriquent des synthétiseurs orientaux et y incluent un générateur de rythmes permettant au musicien d'ajouter à ses mélodies/accords des <a href="../iqaa.php">iqa‘at</a> préenregistrés à partir d'échantillons d'instruments de percussions arabes. Ceci fait du clavier oriental un instrument très puissant et versatile et un instrument essentiel pour la musique pop et de dance arabe.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="Le Synthétiseur Oriental's Quartertone Buttons">
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
                                    <span>L'Orchestre Arabe National (États-Unis) jouant la chanson <strong>Aw‘idak</strong> de Souad Mouhammad dans un arrangement incluant le Clavier Oriental et la Guitare Électrique à côté d'instruments traditionnels arabes.</span>
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
                                <span>Le groupe pan-palestinien <strong>47Soul</strong> a ajouté des effets sonores au clavier oriental et a ainsi créé un nouveau genre de techno-<em>dabké</em> avec leur chanson <strong>Shamstep</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon Arabe</a></li>
						<li><a href="guitar.php">La Guitare Électrique Arabe</a></li>
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
                    	<!--
						<li><a href="keyboard.php">Le Synthétiseur Oriental</a></li>
						-->
						<li><a href="piano.php">Le Piano Arabe</a></li>
						<li><a href="saxophone.php">Le Saxophone</a></li>
						<li><a href="trumpet.php">La Trompette</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
