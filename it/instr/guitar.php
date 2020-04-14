<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Chitarra Elettrica Araba";
$page_description = "La Chitarra Elettrica Araba";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Chitarra Elettrica Arabe";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/guitar.php";
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
                        <h1>La Chitarra Elettrica Araba</h1>
                        <h3>Suona melodie e accordi semplici</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitare Électriqu">
                        <span>Omar Khorshid, il pioniere della chitarra elettrica in Egitto</span>
                    </div>

                    <p>La chitarra elettrica fu usata per la prima volta nella musica araba verso la fine del 1960 in Egitto, il suo pioniere fu Omar Khorshid. Ad alcune chitarre elettriche usate nella musica araba venivano aggiunti dei tasti (come per il <a href="buzuq.php">Buzuq</a>) in modo da suonare alcune scale dei <a href="../maqam.php">maqamat</a> arabi con i quarti di tono.
                    </p>
                    
                    <p>Ma la maggior parte delle chitarre elettriche venivano usate senza nessuna alterazione o effetti e acquisirono la loro caratteristica araba dall'abbellimento . La chitarra elettrica viene usata per suonare una combinazione di linee melodiche e accordi semplici (e.g. maggiori e minori).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=b9s1GvFSa68">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/b9s1GvFSa68/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid</b>
                                    <span>Il pioniere della chitarra elettrica nella musica araba Omar Khorshid mentre suona <strong>Agadan Alqaka</strong> di Umm Kukthum (1971, musica di Muhammad Abdel Wahab).</span>
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
                                    <b>Intervista con Omar Khorshid</b>
                                    <span>Invervista con Omar Khorshid sulla sua esperienza come chitarrista elettrico nell'Orchestra di Umm Kulthum.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
                    	<!--
						<li><a href="guitar.php">La Chitarra Elettrica Araba</a></li>
						-->
						<li><a href="org.php">L'Organo Elettrico Arabo</a></li>
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
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
