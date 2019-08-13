<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Sassofono";
$page_description = "Il Sassofono";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, tromba, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/saxophone.php";
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
                        <h1>Il Sassofono</h1>
                        <h3>Un Saxophone utilisé pour jouer les <a href="../maqam.php">Maqams</a> Arabes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="Il Sassofono">
                        <span>Le pionnier du Saxophone Arabe Samir Sourour (Égypte)</span>
                    </div>

                    <p> Il Sassofono est un instrument rare dans la musique arabe malgré le fait qu'il soit en mesure de produire une bonne intonation pour les <a href="../maqam.php">maqam</a>. Il n'a jamais gagné la popularité de <a href="accordion.php">l'accordéon</a>, et n'a été utilisé que pour ajouter un nouveau son aux arrangements orchestraux arabes.
                    </p>
                    <p> Le pionnier principal du saxophone arabe est Samir Sourour (Égypte) qui avait une expérience de musicien de fanfare militaire. Surour a joué sur quelques chansons de Oum Koulthoum et a ensuite enregistré une série d'albums solo sous le nom de <strong>Achek el-Sax</strong> (L'amoureux du Saxophone).
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
                                <b>Hawel Tiftikirni (1973)</b>
                                <span>La chanson de Abdel Halim Hafez <strong>Hawel Tiftikirni</strong> (1973, musique de Baligh Hamdi) commence avec l'Orgue Arabe, la Guitare Électrique, puis un solo de Samir Sourour.</span>
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
                                    <b>Fat el-Ma‘ad (1967)</b>
                                <span>La chanson de Oum Koulthoum <strong>Fat el-Ma‘ad</strong> (1967, musique de Baligh Hamdi), avec Farouq Salama à l'Accordéon arabe, Abdel Fattah Khayri à la Guitare Électrique et Samir Sourour au Saxophone.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Arabe</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Arabe</a></li>
						<li><a href="org.php">L'Orgue Électrique Arabe</a></li>
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
						<li><a href="piano.php">Il Piano Arabo</a></li>
                    	<!--
						<li><a href="saxophone.php">Il Sassofono</a></li>
						-->
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
