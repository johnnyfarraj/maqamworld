<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Piano Arabe";
$page_description = "Le Piano Arabe";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/piano.php";
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
                        <h1>Le Piano Arabe</h1>
                        <h3>Un piano qui joue les <a href="../maqam.php">Maqams</a> sans harmonie</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="The Arabic Piano">
                        <span>Le pianiste libanais Ziad Rahbani (d'un poster pour un concert des années 1980)</span>
                    </div>

                    <p> Bien que le piano ait été intégré à la musique arabe au début du 20ième siècle, il a été utilisé en tant qu'instrument européen pour ajouter une couleur classique à des compositions arabes (par exemple dans al-Siba wal-Gamal de Mouhammad Abdel Wahab, en 1939). Par 'Piano Arabe', par contre, nous référons à un piano joué mélodiquement (sans harmonie) dans un cadre de musique utilisant le <a href="../maqam.php">maqam</a> arabe.
                    </p>
                    <p>Le premier pionnier du piano arabe a été le libanais Wadih Sabri qui a ajouté des notes au piano (quarts de ton) pendant le Congrès de la Musique Arabe du Caire en 1932. Plus tard, le libanais Abdallah Chahine a aussi modifié le piano pour être en mesure de jouer les quarts de ton et a enregistré un album appelé 'al-Nagham al-Khalid' avec des <a href="../form/improv.php#taqsim">taqsims</a> dans les <a href="../maqam.php">maqams</a> les plus communs.
                    </p>
                    <p>Vers la fin du 20<sup>ième</sup> siècle, le musicien et écrivain de théâtre Ziad Rahbani a enregistré de nombreuses chansons et compositions instrumentales avec un piano ou piano électrique (un Fender Rhodes) pour jouer soit des lignes mélodiques de <a href="../maqam.php">maqam</a>, soit des harmonies dans le genre jazz-fusion.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdallah Chahine</b>
                                <span>Le pianiste libanais Abdallah Chahine jouant un <a href="../form/improv.php#taqsim">taqsim</a> au piano dans le <a href="../maqam/saba.php">Maqam Saba</a> suivi de la chanson <strong>Batét Ouyouni</strong> de son album <strong>Angham Min al-Charq</strong> (melodies de l'orient).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>Le pianiste libanais Ziad Rahbani jouant du piano dans sa chanson <strong>Chou Hal-Iyyam</strong>, de son album <strong>Ana Mouch Kafer</strong> (1985).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>W'Qamh</b>
                                <span>La composition instrumentale <strong>W'Qamh</strong> de Ziad Rahbani dans le <a href="../maqam/hijaz.php">Maqam Hijaz</a> utilise le piano arabe dans un arrangement jazz-fusion. De l'album de Fairouz <strong>Mich Kayin Hayk Tkoun</strong> (1987).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon Arabe</a></li>
						<li><a href="guitar.php">La Guitare Électrique Arabe</a></li>
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
						<li><a href="keyboard.php">Le Synthétiseur Oriental</a></li>
                    	<!--
						<li><a href="piano.php">Le Piano Arabe</a></li>
						-->
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
