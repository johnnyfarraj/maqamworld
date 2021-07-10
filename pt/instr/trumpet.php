<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Arabic Trumpet";
$page_description = "The Arabic Trumpet";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/trumpet.php";
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
                        <h1>The Arabic Trumpet</h1>
                        <h3>A Trumpet used to play Arabic <a href="../maqam.php">Maqam</a> scales</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/trumpet.jpg" alt="The Arabic Trumpet">
                        <span>Arabic Trumpet pioneer Sami al-Babli</span>
                    </div>

                    <p> The Arabic Trumpet is a trumpet that is used to play the Arabic <a href="../maqam.php">maqam</a> scales. Some musicians achieve that by using a trumpet fitted with a fourth valve (that can produce quartertones), others achieve it by using the slides on the first and third valves (available on all professional trumpets).
                    </p>
                    <p>
                    The trumpet never became a mainstream instrument in Arabic music, and is the only Arabized instrument that was never featured in the Umm Kulthum orchestra. The most well-known Arabic trumpet player and pioneer is the Egyptian Sami al-Babli who performed regularly with <em>Sha'bi</em> singer Ahmed Adaweyya.
                    </p>
                    <p> Today two young musicans of Arab descent carry the Arabic Trumpet forward, and both do it within a Jazz setting that combines Western harmony with Arabic <a href="../maqam.php">maqam</a> melodies:
                    <a href="http://www.amirelsaffar.com/" target="_blank">Amir Elsaffar</a> (Iraq/U.S.A) and <a href="http://www.ibrahimmaalouf.com/" target="_blank">Ibrahim Maalouf</a> (Lebanon/France).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RqII6j4Hj_k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RqII6j4Hj_k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>A rare video recording of Arabic trumpet pioneer Sami al-Babli (Egito) doing a Taqsim in <a href="../maqam/nahawand.php">Maqam Nahawand</a> with Abdo Dagher.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=XVX7LaYvmnw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/XVX7LaYvmnw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Another rare video recording of Sami al-Babli doing a Taqsim in <a href="../maqam/saba.php">Maqam Saba</a> during the introduction to a song by <em>Sha‘bi</em> singer Ahmed Adaweyya. Al-Babli was regularly featured in Adaweyya's ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OqV03upmhu0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OqV03upmhu0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Amir Elsaffar</b>
                                    <span>Iraqi-American Trumpet and <em>Santur</em> player Amir Elsaffar in an NPR Music Field Recording playing one of his compositions which blend elements from the Arabic Maqam system and Jazz.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DUa_srT-uL8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DUa_srT-uL8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ibrahim Maalouf</b>
                                <span>Lebanese-French trumpet player Ibrahim Maalouf playing a cover of Umm Kukthum's song <strong>Alf Leila w Leila</strong> (1969, music by Baligh Hamdi) in a Jazz arrangement that nevertheless allows room for Arabic Maqam scales.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other Arabized instruments:</p>
                    <ul>
                       <li><a href="accordion.php">The Arabic Accordion</a></li>
                       <li><a href="guitar.php">The Electric Guitar</a></li>
                       <li><a href="org.php">The Arabic Org</a></li>
                       <li><a href="keyboard.php">The Oriental Keyboard</a></li>
                       <li><a href="piano.php">The Arabic Piano</a></li>
                       <li><a href="saxophone.php">The Saxophone</a></li>
                        <!--
                       <li><a href="trumpet.php">The Trumpet</a></li>
                        -->
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
