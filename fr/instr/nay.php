<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Nay";
$page_description = "Le Nay";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katème, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/nay.php";
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
                        <h1>Le Nay</h1>
                        <h3>An end-blown Flute</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/nay.jpg" alt="The Nay">
                        <span>A set of 7 Lebanese nayat made by Atif Wehbi. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nay.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Nay</a>
                    </div>

                    <p>
                    The Nay (Farsi for "reed") is an open-ended, obliquely end blown flute made of cane. They nay was known in the Near East since antiquity. It is nine-jointed, and usually has 6 holes in the front for the fingers to play and 1 hole underneath for the thumb. It is played with the pads of the fingers. Nays come in different lengths, each one being tuned to a specific pitch and named after the note produced with the 1st fingerhole open (D4 for the most commonly used nay; Lowest note: C4).
                    </p>
                    <p>Although very simple, the nay is one of the most difficult Arabic instruments to play. A fine player can produce a large variety of liquid sounds and ornaments; it is an extremely soulful instrument. Its poetical timbre makes it especially suitable for melancholy effects expressing both joy and yearning. It is the only wind instrument used in Arab art music, widely appreciated for its warm, breathy sound and its subtle tonal and dynamic inflections.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JhOs_1SodTA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JhOs_1SodTA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sayyed Salem</b>
                                    <span>Sayyed Salem (Egypt), a longtime member of the Umm Kulthum Orchestra (Egypt) in a Nay solo during her song <strong>Ba‘id ‘Annak</strong> (1965, music by Baligh Hamdi)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D2oBZADKIS4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D2oBZADKIS4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mahmud ‘Effat</b>
                                    <span>Veteran nay player and teacher, Mahmud ‘Effat (Egypt), a longtime member of the Diamond Orchestra in a Taqsim on the Nay in <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5OflJML1yF8&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5OflJML1yF8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Reda Bdeir</b>
                                    <span>Reda Bdeir (Egypt) playing the song Kulli Da Kan Leh (1954, music by Muhammad Abdel Wahab)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=CozVcLFpOeM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/CozVcLFpOeM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Michael Ibrahim</b>
                                    <span> Michael Ibrahim (Syria), director of the National Arab Orchestra (USA) in a Taqsim on the Nay in <a href="../maqam/saba.php">Maqam Saba</a> during a live performance by the NAO</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments traditionnels:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <li><a href="qanun.php">Le Qanoun</a></li>
                    	<!--
                        <li><a href="nay.php">Le Nay</a></li>
                        -->
                        <li><a href="violin.php">Le Violon</a></li>
                        <li><a href="buzuq.php">Le Bouzouk</a></li>
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
