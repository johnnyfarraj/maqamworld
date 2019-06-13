<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Guitare �lectrique Arabe";
$page_description = "La Guitare �lectrique Arabe";
$page_keywords = "arabe, musique, instruments, accord�on, bouzouk, daff, mazhar, guitare �lectrique, kat�m, nay, synth�tiseur oriental, orgue �lectrique, oud, �ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa�, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
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
                        <h1>La Guitare �lectrique Arabe</h1>
                        <h3>Joue des m�lodies et des accords simples</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitare �lectriqu">
                        <span>Omar Khorchid, le pionnier de la Guitare �lectrique en �gypte</span>
                    </div>

                    <p>La guitare �lectrique a �t� utilis�e pour la premi�re fois dans la musique arabe vers la fin des ann�es 1960 en �gypte. Le pionnier a �t� Omar Khorchid. Certaines guitares �lectriques ont �t� modifi�es par l'ajout de frettes suppl�mentaires (� la mani�re du <a href="buzuq.php">Bouzouk</a>) de mani�re � �tre en mesure de jouer les <a href="../maqam.php">Maqams</a> arabes et leurs quarts de ton. La plupart du temps, la guitare �lectrique a �t� utilis�e sans �tre modifi�e et sans effet, et a acquis son 'arabit�' gr�ce au style ornemental. La guitare �lectrique a �t� utilis�e pour jouer une combinaison de lignes m�lodiques et d'accords simples (par exemple, majeurs et mineurs).
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
                                    <span>Le pionnier de la Guitare �lectrique Omar Khorchid joue la chanson <strong>Daret el-Ayyam</strong> de Oum Koulsoum (1970, musique de Mouhammad Abdel Wahab).</span>
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
                                    <span>Interview avec Omar Khorchid � propos de son exp�rience en tant que guitariste �lectrique dans l'orchestre de Oum Koulsoum.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabis�s:</p>
                    <ul>
						<li><a href="accordion.php">L'Accord�on Arabe</a></li>
                    	<!--
						<li><a href="guitar.php">La Guitare �lectrique Arabe</a></li>
						-->
						<li><a href="org.php">L'Orgue �lectrique Arabe</a></li>
						<li><a href="keyboard.php">Le Synth�tiseur Oriental</a></li>
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
