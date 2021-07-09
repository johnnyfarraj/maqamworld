<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Oud";
$page_description = "The Oud";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, arabic violin";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/oud.php";
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
                        <h1>The Oud (‘Ud)</h1>
                        <h3>A Fretless Lute</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="The Oud">
                        <span>Syrian oud made by Nahat Brothers (right) and Iraqi oud made by Muhammad Fadil (left). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Oud</a>
                    </div>

                    <p>The Oud (also spelled ‘Ud) is one of the most popular instruments in Arabic music. Its name means "a thin strip of wood" in Arabic, and this refers to the strips of wood used in making its pear-shaped body. The neck of the oud is short in comparison to its body and has no frets. This allows the oud to achieve excellent intonation and makes it ideal for performing the Arabic <a href="../maqam.php">maqamat</a>.
                    </p>
                    <p>The oud usually has 5 pairs of strings tuned in unison and a single bass string, although some ouds have one extra pair. The most common tuning (low to high) is C, F, A, D, G, C, which makes all intervals (except F to A) perfect fourths. Strings were historically made of animal gut, and were plucked with a plectrum known as <em>risha</em> (Arabic for feather). Modern strings are made of steel wound over nylon, and modern <em>risha</em>-s are made of plastic, tortoise shell, animal horn or even bamboo.
                    </p>
                    <p>
                    The oud has a warm timbre and a wide tonal range (about 3 octaves), and can convey the melody and rhythm equally well because it is percussive. This makes is perfectly suited to accompany a singer. It is also the composers' favorite instrument for writing a new melody. Oud <a href="../form/improv.php#taqsim">taqasim</a> are also very popular in live concerts as well as recordings.
                    </p>
                    <p>The Arabic oud is broadly the same instrument that exists in many other countries in the region (e.g. Turkey, Greece, Iran) with minor differences in dimensions, style and timbre. The European "lute" is a descendant of the oud, from which it takes its name (al-oud).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dDrVYyoMi-4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dDrVYyoMi-4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad al-Qasabgi</b>
                                    <span>Egyptian oud virtuoso and composer Muhammad al-Qasabgi playing some Taqasim in <a href="../maqam/rast.php">Maqam Rast</a>.
                                    (Recorded at the Arabic Music Conservatory, Cairo, 1955)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zGoY5QYLnYs&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zGoY5QYLnYs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Farid al-Atrash</b>
                                    <span>Syrian oud virtuoso Farid al-Atrash (also known as the "King of Oud") playing a very famous Oud Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a> preceding his composition "al-Rabi‘" (1949)</span>
                                </div>
                            </label>
                        </div>
                    </div>

			         <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OCmheJ929fo&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OCmheJ929fo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Palestinian oud player Simon Shaheen plays an in <a href="../maqam/hijaz.php">Maqam Hijaz</a>, recorded at the Metropolitan Museum in New York, 1987</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Jf3WeItCpXA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Jf3WeItCpXA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>George Michel</b>
                                    <span>Egyptian oud player George Michel playing an Oud Taqsim in <a href="../maqam/nahawand.php">Maqam Nahawand</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg&t=0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammouri</b>
                                    <span>Syrian oud player ‘Amer ‘Ammouri playing an Oud Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a>, as part of Sabah Fakhri's orchestra (recorded at the Cairo Opera House)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other traditional instruments:</p>
                    <ul>
                        <li><a href="nay.php">The Nay</a></li>
                        <li><a href="qanun.php">The Qanun</a></li>
                        <li><a href="violin.php">The Arabic Violin</a></li>
                        <li><a href="buzuq.php">The Buzuq</a></li>
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
