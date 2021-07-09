<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Tabl Baladi";
$page_description = "The Tabl Baladi";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/tabl_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>The Tabl Baladi</h1>
                        <h3>Large Drum with Skin on Both Sides</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>Tabl Baladi with goat skin. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Tabl baladi</a>
                    </div>

                    <p> The Tabl Baladi is a large drum with wood frame and heavy skin on both sides. It is hung by a belt around the player's shoulder is and played with two sticks: the thick one is for the <em>dum</em> sound played with the dominant hand, and the thin stick is for the <em>tak</em> sound played with the other hand.
                    </p>

                    <p> The <em>Tabl Baladi</em> is ideal for outdoor music in a village setting ("baladi" means "from the village") and can provide the beat for line dances such as the "Dabke" alongside equally loud instruments like the <em>Mizmar</em>. The <em>Tabl Baladi</em> does not play very complex or ornamented rhythms and is ideal for heavy 4/4 <a href="../iqaa.php">iqa‘at</a> like <a href="../iqaa/baladi.php">Baladi</a>, <a href="../iqaa/saidi.php">Sa‘idi</a> and especially <a href="../iqaa/nawari.php">Nawari</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tabl Baladi with Mizmar</b>
                                    <span>Armenian-Lebanese tabl_baladi player Setrak Sarkissian starts the rhythm for singer Samira Tawfiq in her song <strong>‘al-‘Ein Mulayyitein</strong>, accompanied by a Riqq and Table Baladi. Recorded on Lebanese Television with violinist Rafik Hobeika leading the orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other percussion instruments:</p>
                    <ul>
                        <li><a href="riqq.php">The Riqq</a></li>
                        <li><a href="tabla.php">The Tabla</a></li>
                        <!--
                        <li><a href="tabl_baladi.php">The Tabl Baladi</a></li>
                        -->
                        <li><a href="daff.php">The Daff</a></li>
                        <li><a href="mazhar.php">The Mazhar</a></li>
                        <li><a href="katim.php">The Katim</a></li>
                        <li><a href="sagat.php">The Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
