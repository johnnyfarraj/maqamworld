<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Oriental Keyboard";
$page_description = "The Oriental Keyboard";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin, org, guitar, accordion, trumpet, saxophone";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/keyboard.php";
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
                        <h1>The Oriental Keyboard</h1>
                        <h3>A Synthesizer/Sampler with full quartertone capability</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="The Oriental Keyboard">
                        <span>The Ketron Vega Oriental Keyboard.</span>
                    </div>

                    <p> The Oriental Keyboard is the successor of the <a href="org.php">org</a>, and it came to the market toward the end of the 20<sup>th</sup> century. Its strength was that it could imitate sounds from various traditional Arabic instruments by sampling them, and as such the player could summon a <em>Mijwiz</em>, a <a href="qanun.php">Qanun</a>, or even a <a href="saxophone.php">Saxophone</a> at the touch of a button.
                    </p>
                    <p>
                    Most synthesizer companies (like Roland, Yamaha, GEM, Kawai, Korg and Ketron) manufacture Oriental Keyboard models, and include a built-in electronic rhythm generator where the player can supplement their melody/chords with <a href="../iqaa.php">iqa‘at</a> pre-recorded from sampled Arabic Percussion Instruments. This makes the Oriental Keyboard a very powerful and versatile instrument, and an essential one in Arabic pop and dance music.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="The Oriental Keyboard's Quartertone Buttons">
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
                                    <span>The National Arab Orchestra (U.S.A.) performing Su‘ad Muhammad's song <strong>Aw‘idak</strong> in an arrangement that includes the Oriental Keyboard and the Electric Guitar alongside traditional Arabic instruments.</span>
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

                    <p>Explore other Arabized instruments:</p>
                    <ul>
                       <li><a href="accordion.php">The Arabic Accordion</a></li>
                       <li><a href="guitar.php">The Electric Guitar</a></li>
                       <li><a href="org.php">The Arabic Org</a></li>
                        <!-- 
                       <li><a href="keyboard.php">The Oriental Keyboard</a></li>
                        -->
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
