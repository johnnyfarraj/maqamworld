<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Arabic Org";
$page_description = "The Arabic Org";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin, org, guitar, accordion, trumpet, saxophone";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/org.php";
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
                        <h1>The Arabic Org</h1>
                        <h3>1970s Electric Organ fitted with some quartertones</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="The Electric Organ">
                        <span>Org pioneer Magdi el-Husseini (Egypt).</span>-->
                    </div>

                    <p> The Electric Organ (commonly called <em>org</em> in Arabic, from the French "orgue") became very popular in Arabic music in the late 1960s through the 1970s. Its pioneer and superstar was Egyptian keyboardist Magdi el-Husseini. The <em>org</em> was altered to play good-enough quartertones (as good as the accordion's) which allowed it to play most <a href="../maqam.php">maqam</a> scales. The <em>org</em> was used to play a combination of melodic lines and simple chords. Together, the <em>org</em> and the <a href="guitar.php">electric guitar</a> created a distinctive sound and mood that marked Arabic music from that decade.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span>Abdel Halim Hafez's song <strong>Qari'at al-Fingan</strong> (1976, music by Muhammad al-Mugi) featuring Egyptian electric organ players Magdi el-Husseini and Hani Mehanna (both part of The Diamond Orchestra).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini Interview</b>
                                    <span>Interview with Magdi el-Husseini about his experience meeting singer Abdel Halim Hafez and performing in his orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hani Mehanna Interview</b>
                                    <span>Interview with Hani Mehanna about his experience meeting composer Muhammad Abdel Wahab and singer Umm Kulthum and performing the song <strong>Leilet Hobb</strong> with her orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other Arabized instruments:</p>
                    <ul>
                       <li><a href="accordion.php">The Arabic Accordion</a></li>
                       <li><a href="guitar.php">The Electric Guitar</a></li>
                        <!--
                       <li><a href="org.php">The Electric Organ</a></li>
                        -->
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
