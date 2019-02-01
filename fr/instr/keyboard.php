<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Synthétiseur Oriental";
$page_description = "Le Synthétiseur Oriental";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
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
                        <h3>A Synthesizer/Sampler with full quartertone capability</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="Le Synthétiseur Oriental">
                        <span>The Ketron Vega Oriental Keyboard.</span>
                    </div>

                    <p> Le Synthétiseur Oriental is the successor of the <a href="org.php">org</a>, and it came to the market toward the end of the 20<sup>th</sup> century. Its strength was that it could imitate sounds from various traditional Arabic instruments by sampling them, and as such the player could summon a <em>Mijwiz</em>, a <a href="qanun.php">Qanun</a>, or even a <a href="saxophone.php">Saxophone</a> at the touch of a button.
                    </p>
                    <p>
                    Most synthesizer companies (like Roland, Yamaha, GEM, Kawai, Korg and Ketron) manufacture Oriental Keyboard models, and include a built-in electronic rhythm generator where the player can supplement their melody/chords with <a href="../iqaa.php">iqa‘at</a> pre-recorded from sampled Arabic Percussion Instruments. This makes the Oriental Keyboard a very powerful and versatile instrument, and an essential one in Arabic pop and dance music.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="Le Synthétiseur Oriental's Quartertone Buttons">
                        <span>12 switches to lower each note on the keyboard by a quartertone</span>
                    </div>

                    <p> The oriental keyboard is able to play a quartertone on any of the 12 notes of the
                    keyboard simply by pressing a switch.
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
                                    <span>The National Arab Orchestra (U.S.A.) performing Su‘ad Mouhammad's song <strong>Aw‘idak</strong> in an arrangement that includes the Oriental Keyboard and the Electric Guitar alongside traditional Arabic instruments.</span>
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
                                    <b>Shamstep by 47Soul</b>
                                <span>Pan-Palestinian group 47Soul added an interesting twist to the normal usage of the Oriental Keyboard by using sound effects to create a new genre of techno-<em>dabke</em>, as in their hit song <strong>Shamstep</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon</a></li>
						<li><a href="guitar.php">La Guitare Électrique</a></li>
						<li><a href="org.php">L'Orgue Électrique</a></li>
                    	<!--
						<li><a href="keyboard.php">Le Synthétiseur oriental</a></li>
						-->
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
