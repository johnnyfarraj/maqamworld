<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Guitare Électrique Arabe";
$page_description = "La Guitare Électrique Arabe";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/guitar.php";
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
                        <h1>La Guitare Électrique Arabe</h1>
                        <h3>Joue des mélodies et des accords simples</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitare Électriqu">
                        <span>Omar Khorchid, le pionnier de la Guitare Électrique en Égypte</span>
                    </div>

                    <p>La guitare électrique a été utilisée pour la première fois dans la musique arabe vers la fin des années 1960 en Égypte. Le pionnier a été Omar Khorchid. Certaines guitares électriques ont été modifiées par l'ajout de frettes supplémentaires (à la manière du <a href="buzuq.php">Bouzouk</a>) de manière à être en mesure de jouer les <a href="../maqam.php">Maqams</a> arabes et leurs quarts de ton. La plupart du temps, la guitare électrique a été utilisée sans être modifiée et sans effet, et a acquis son 'arabité' grâce au style ornemental. La guitare électrique a été utilisée pour jouer une combinaison de lignes mélodiques et d'accords simples (par exemple, majeurs et mineurs).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3uBB1pxeirw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3uBB1pxeirw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorchid</b>
                                    <span>Le pionnier de la Guitare Électrique Omar Khorchid joue la chanson <strong>Daret el-Ayyam</strong> de Oum Koulthoum (1970, musique de Mouhammad Abdel Wahab).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Interview avec Omar Khorchid</b>
                                    <span>Interview avec Omar Khorchid à propos de son expérience en tant que guitariste électrique dans l'orchestre de Oum Koulthoum.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon Arabe</a></li>
                    	<!--
						<li><a href="guitar.php">La Guitare Électrique Arabe</a></li>
						-->
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
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
