<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Saxophone";
$page_description = "Le Saxophone";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/saxophone.php";
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
                        <h1>Le Saxophone</h1>
                        <h3>A Saxophone used to play Arabic <a href="../maqam.php">Maqam</a> scales</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="The Saxophone">
                        <span>Arabic Saxophone pioneer Samir Surour (Égypte)</span>
                    </div>

                    <p> The Saxophone is a rare instrument in Arabic music, despite the fact that it can produce good <a href="../maqam.php">maqam</a> scale intonation. It never went mainstream the way the <a href="accordion.php">Arabic Accordion</a> did and was mostly used to add an innovative sound to Arabic orchestral arrangements.
                    </p>
                    <p> The principal pioneer of the Arabic saxophone is Samir Surour (Égypte) whose background was in military brass band music. Surour played on quite a few Oum Koulthoum songs then went to record a series of solo instrumental albums under the name <em>â€˜Ashiq el-Sax</em> (The Sax Lover).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Hawil Tiftikirni (1973)</b>
                                <span>Abdel Halim Hafez's song <strong>Hawil Tiftikirni</strong> (1973, music by Baligh Hamdi) opens with the Arabic Org, the Electric Guitar, then a Saxophone solo by Samir Surour.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=tNskrvpodqA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/tNskrvpodqA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fat el-Ma'ad (1967)</b>
                                <span>Oum Koulthoum's song <strong>Fat el-Ma'ad</strong> (1967, music by Baligh Hamdi) includes in its arrangement Faruq Salama on the Arabic Accordion, Abdel Fattah Khayri on the Electric Guitar and Samir Surour on the Saxophone.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon</a></li>
						<li><a href="guitar.php">La Guitare Électrique</a></li>
						<li><a href="org.php">L'Orgue Électrique</a></li>
						<li><a href="keyboard.php">Le Synthétiseur oriental</a></li>
						<li><a href="piano.php">Le Piano</a></li>
                    	<!--
						<li><a href="saxophone.php">Le Saxophone</a></li>
						-->
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
