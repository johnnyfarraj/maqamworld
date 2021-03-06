<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Orgue Électrique Arabe";
$page_description = "L'Orgue Électrique Arabe";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/org.php";
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
                        <h1>L'Orgue Électrique Arabe</h1>
                        <h3>L'Orgue Électrique des années 1970 avec quelques quarts de ton</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="l'Orgue Électrique">
                        <span>Le pionnier de l'Orgue Électrique Magdi el-Husseini (Égypte)</span>
                    </div>

                    <p>L'Orgue Électrique (généralement appelé <em>org</em> en arabe, du français 'orgue') est devenu très populaire dans la musique arabe, de la fin des années 1960 aux années 1970. Son pionnier a été le claviériste superstar égyptien Magdi el-Husseini. L'orgue a été modifié de manière à être en mesure de jouer des quarts de tons satisfaisants (comme ceux de l'accordéon), lui permettant de jouer la plupart des <a href="../maqam.php">maqams</a>. L'orgue a été utilisée pour jouer une combinaison de lignes mélodiques et d'accords simples.  Avec <a href="guitar.php">la guitare électrique</a>, l'accordéon a permis de créer un son distinctif qui a marqué la musique arabe de cette décennie.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                <span>La chanson <strong>Qari'at al-Fingan</strong> de Abdel Halim Hafez (1976, musique de Mouhammad al-Mougi) avec les égyptiens Magdi el-Husseini et Hani Mehanna à l'orgue électrique (les deux membres de l'Orchestre Diamant).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Interview avec Magdi el-Husseini</b>
                                    <span>Interview avec Magdi el-Husseini à propos de sa rencontre avec Abdel Halim Hafez et de son expérience en tant que membre de son orchestre.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Interview avec Hani Mehanna</b>
                                    <span>Interview avec Hani Mehanna à propos de sa rencontre avec Mouhammad Abdel Wahab et la chanteuse Oum Koulthoum et de son expérience en tant que membre de l'orchestre de cette dernière pour la chanson <strong>Leilet Hobb</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon Arabe</a></li>
						<li><a href="guitar.php">La Guitare Électrique Arabe</a></li>
                    	<!--
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
						-->
						<li><a href="keyboard.php">Le Synthétiseur Oriental</a></li>
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
