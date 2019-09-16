<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Sassofono";
$page_description = "Il Sassofono";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab,Sassofono";
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
                        <h1>Il Sassofono Arabo</h1>
                        <h3>Un sassfono utilizzato per suonare le scale dei <a href="../maqam.php">maqam</a> arabi.</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="Il Sassofono">
                        <span>Il pioniere del sassofono arabo, Samir Surur (Egitto)</span>
                    </div>

                    <p> 
                        Il sassofono è uno strumento raro nella musica araba, nonostante possa produrre una buona intonazione nelle scale dei <a href="../maqam.php">maqam</a>. Non diventò mai popolare come fece la <a href="accordion.php">fisarmonica</a> e fu usato per aggiungere un suono innovativo agli arrangiamenti delle orchestre arabe.
                    </p>
                    <p>
                        Il principale pioniere del sassofono arabo fu l'egiziano Samir Surur la cui esperienza fu nella musica per bande militari. Surour suonò in alcune canzoni di Umm Kulthum e successivamente registrò degli album strumentali sotto il nome di <strong>Ashek el-Sax</strong> (l'amante del sax).
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
                                <span><strong>Hawel Tiftikirni</strong>, canzone di Abdel Halim Hafez (1973, musica di Baligh Hamdi) inizia con l'organo, la chitarra elettrica e poi con il solo di sax di Samir Surur.</span>
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
                                    <span><strong>Fat el-Ma‘ad</strong>, canzone di Umm Kulthum (1967, musica di Baligh Hamdi) include nell'arrangiamento Farq Salama con la fisarmonica, Abdel Fattah Khayri alla chitarra elettrica e Samir Surur al sax.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Araba</a></li>
						<li><a href="org.php">L'Organo Elettrico Arabo</a></li>
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
