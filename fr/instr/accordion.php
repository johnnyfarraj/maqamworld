<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Accordéon";
$page_description = "L'Accordéon";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/accordion.php";
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
                        <h1>L'Accordéon</h1>
                        <h3>An Accordion altered to include quartertone notes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="L'Accordéon Arabe">
                        <span>Faruq Salama playing accordion on Oum Koulthoum's "Ya Msahharni", Cairo, 1971</span>
                    </div>

                    <p>
                        The Accordion came to the Arabic music scene in Egypt in the early 20<em>th</em> century, and was originally used without any alteration to add a foreign flavor to the music (e.g. on "<em>Sahirtu</em>" by Muhammad Abdel Wahab in 1935). Later it was altered to add new notes (the "quartertones") that allowed it to play many more Arabic <a href="../maqam.php">maqam</a> scales with good-enough intonation. </p>
                    <p>
                        The accordion is extremely popular in the <em>Raqs Sharqi</em> (belly dance) and <em>Sha‘bi</em> genres.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_0JgmVgSa94&t=376s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_0JgmVgSa94/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Msahharni</b>
                                    <span>Egyptian Arabic Accordion pioneer Faruq Salama plays the introduction of Umm Kukthum's song <strong>Ya Msahharni</strong> (1972, music by Sayyed Makkawi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=qhFLg5RQjQk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/qhFLg5RQjQk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Faruq Salama Interview</b>
                                    <span>Interview about Faruq Salama about his experience playing the Arabic Accordion with Umm Kuthum's orchestra</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=1nUqK5wLiME">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/1nUqK5wLiME/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fifi ‘Abdou</b>
                                    <span>A dance clip by Egyptian belly dancer Fifi ‘Abdou that opens with an Arabic accordion</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BcOGIHYnl_g">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BcOGIHYnl_g/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Ahmed ‘Adaweya</b>
                                <span>Ahmed ‘Adaweya's song <strong>Yi Hilu il-Malamih</strong> (in the Egyptian <em>Sha‘bi</em> genre) accompanied by a belly dancer.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://youtu.be/7f5a9BhGios?t=650s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7f5a9BhGios/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Elias Lammam</b>
                                <span>The National Arab Orchestra (USA) performing Farid al-Atrash's instrumental composition <strong>Kahramana</strong> in an arrangement that features the Arabic Accordion alongside traditional Arabic instruments.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
                    	<!--
						<li><a href="accordion.php">L'Accordéon</a></li>
						-->
						<li><a href="guitar.php">La Guitare Électrique</a></li>
						<li><a href="org.php">L'Orgue Électrique</a></li>
						<li><a href="keyboard.php">Le Synthétiseur oriental</a></li>
						<li><a href="piano.php">Le Piano</a></li>
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
