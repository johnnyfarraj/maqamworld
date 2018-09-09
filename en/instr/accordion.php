<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Arabic Accordion";
$page_description = "The Arabic Accordion";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "en";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/accordion.php";
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
                        <h1>The Arabic Accordion</h1>
                        <h3>An Accordion altered to include quartertone notes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="The Arabic Accordion">
                        <span>Faruq Salama playing accordion on Umm Kulthum's "Ya Msahharni", Cairo, 1971</span>
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
                                    <span>Interview about Faruq Salam about his experience playing the Arabic Accordion with Umm Kuthum's orchestra</span>
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
                                    <span>The National Arab Orchestra (USA) performing Farid al-Atrash's instrumental composition Kahramana in an arrangement that features the Arabic Accordion alongside traditional Arabic instruments.</span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <p>Explore other Arabized instruments:</p>
                    <ul>
                        <!--
                       <li><a href="accordion.php">The Arabic Accordion</a></li>
                        -->
                       <li><a href="guitar.php">The Electric Guitar</a></li>
                       <li><a href="org.php">The Arabic Org</a></li>
                       <li><a href="keyboard.php">The Oriental Keyboard</a></li>
                       <li><a href="piano.php">The Arabic Piano</a></li>
                       <li><a href="saxophone.php">The Saxophone</a></li>
                       <li><a href="trumpet.php">The Trumpet</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
