<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Arabic Saxophone";
$page_description = "The Arabic Saxophone";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/saxophone.php";
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
                        <h1>The Arabic Saxophone</h1>
                        <h3>A Saxophone used to play Arabic <a href="../maqam.php">Maqam</a> scales</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="The Saxophone">
                        <span>Arabic Saxophone pioneer Samir Surour (Egypt)</span>
                    </div>

                    <p> The Saxophone is a rare instrument in Arabic music, despite the fact that it can produce good <a href="../maqam.php">maqam</a> scale intonation. It never went mainstream the way the <a href="accordion.php">Arabic Accordion</a> did and was mostly used to add an innovative sound to Arabic orchestral arrangements.
                    </p>
                    <p> The principal pioneer of the Arabic saxophone is Samir Surour (Egypt) whose background was in military brass band music. Surour played on quite a few Umm Kulthum songs then went to record a series of solo instrumental albums under the name <em>‘Ashiq el-Sax</em> (The Sax Lover).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Hawil Tiftikirni (1973)</b>
                                <span>Abdel Halim Hafez's song <strong>Hawil Tiftikirni</strong> (1973, music by Baligh Hamdi) opens with the Arabic Org, the Electric Guitar, then a Saxophone solo by Samir Surour.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=tNskrvpodqA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/tNskrvpodqA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fat el-Ma‘ad (1967)</b>
                                <span>Umm Kulthum's song <strong>Fat el-Ma‘ad</strong> (1967, music by Baligh Hamdi) includes in its arrangement Faruq Salama on the Arabic Accordion, Abdel Fattah Khayri on the Electric Guitar and Samir Surour on the Saxophone.</span>
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
                        <!--
                       <li><a href="saxophone.php">The Saxophone</a></li>
                        -->
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
