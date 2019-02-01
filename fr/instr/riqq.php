<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Riqq";
$page_description = "The Riqq";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katim, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/riqq.php";
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
                        <h1>The Riqq</h1>
                        <h3>A Small Hand-Held Frame Drum with Cymbals</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/riqq.jpg" alt="The Riqq">
                        <span>Two traditional fish-skin riqq-s. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/riqq.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Riqq</a>
                    </div>

                    <p>
                        The Riqq is a small hand-held frame drum with cymbals. The frame is usually made of wood (a few aluminum models exist), and is 9 to 10 inches in diameter. It is traditionally fitted with fish skin, although modern <em>riqq</em>-s use plastic (Mylar) instead. The cymbals give the <em>riqq</em> its distinctive sound. They are made of brass (around 0.8mm to 0.9mm thick) and come in 5 (sometimes 6) groups of four. </p>
                    <p>
                        The <em>riqq</em> can be used to play very complex <a href="../iqaa.php">rhythmic cycles</a> and ornamentations using intricate fingering technique, and can produce a wide variety of sounds by utilizing the skin, the wood frame and the cymbals.</p>
                    <p>
                        The <em>riqq</em> is usually the only percussion instrument in a <em>takht</em> (traditional Arabic chamber group) and its player is called <em>dabet al-iqa‘</em> (controller/manager of rhythm).</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2100s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hassan Anwar</b>
                                <span>Riqq player Hassan Anwar (the official <em>dabet al-iqa‘</em> for the Diamond Orchestra in Egypt) exchanges solos with the org player in Abdel Halim Hafez's song <strong>Qari'at al-Fingan</strong> (1976, music by Mouhammad al-Mougi).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BdNS93A3Itg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BdNS93A3Itg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mouhammad al-‘Arabi</b>
                                    <span>Egyptian riqq player Mouhammad al-‘Arabi performs a Riqq Solo (on a riqq with a plastic head) where he explores many iqa‘at.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=on7vkhzPXPM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/on7vkhzPXPM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Adel Shams el-Din</b>
                                    <span>Egyptian percussionist Adel Shams el-Din performs a Riqq Solo on a fishskin riqq, where he explores many iqa‘at (recorded in 2005 at the Institut du Monde Arabe, Paris).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                  <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ga3CAHh2JmM?&t=110s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ga3CAHh2JmM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mustafa Bayyumi</b>
                                    <span>Egyptian percussionist Mustafa Bayyumi performs a Riqq Solo (on a riqq with a plastic head) where he explores many iqa‘at.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <!-- <li><a href="riqq.php">Le Riqq</a></li> -->
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Le Tabl Baladi</a></li>
                        <li><a href="daff.php">Le Daff</a></li>
                        <li><a href="mazhar.php">Le Mazhar</a></li>
                        <li><a href="katim.php">Le Katem</a></li>
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
