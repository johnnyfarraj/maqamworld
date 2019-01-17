<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Katim";
$page_description = "The Katim";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katim, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/katim.php";
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
                        <h1>The Katim</h1>
                        <h3>A Blunt Supporting Frame Drum</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katim">
                        <span>A tunable Katim with a plastic head. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Katim</a>
                    </div>

                    <p> The Katim (from the verb "katama", to mute or to muffle) is a heavy frame drum with a dull sound. The <em>Katim</em> is usually squeezed between the player's knees and is meant to be played with the hands as opposed to the fingers. Most <em>Katim</em>-s today have a plastic head and are tunable. The <em>Katim</em>'s main role is to support other instruments in the rhythm section by accenting the <em>dum</em> and <em>tak</em> basic sounds with much ornamentation.</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (Wedding Party)</b>
                                    <span>An Egyptian Zaffa (wedding party) with a large group of percussionists using a combination of Katim-s, <a href="mazhar.php">Mazhar</a>-s and <a href="tabla.php">Tabla</a>-s, all with with synthetic heads.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <li><a href="riqq.php">Le Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Le Tabl Baladi</a></li>
                        <li><a href="daff.php">Le Daff</a></li>
                        <li><a href="mazhar.php">Le Mazhar</a></li>
                        <!-- <li><a href="katim.php">Le Katème</a></li> -->
                        <li><a href="sagat.php">Les Sagat</a></li>
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
