<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Buzuq";
$page_description = "The Buzuq";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, arabic violin";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/buzuq.php";
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
                        <h1>The Buzuq</h1>
                        <h3>A Small Lute with a Long Fretted Neck</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/buzuq.jpg" alt="The Buzuq">
                        <span>Two buzuq-s made in Lebanon. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/buzuq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Buzuq</a>
                    </div>

                    <p> The Buzuq is a string instrument in the <a href="oud.php">oud</a> family with a smaller body and a longer, fretted neck. It is closer in shape to the Greek <em>Bouzouki</em> and the Turkish <em>Saz</em>. The Buzuq is originally a folk instrument from the Eastern Mediterranean (Palestine, Jordan, Lebanon and Syria) that's usually played solo. But it is listed along with the other traditional instruments because it crossed over to mainstream pop Arabic music toward the middle of the 20<sup>th</sup> century. Since then it has been featured in many recordings and live performances as became part of the Arabic ensemble.
                    </p>
                    <p>
                    The traditional Buzuq had two courses of metal strings, a double (C4) and a triple (G3), played with a thin piece of horn or a plastic plectrum. Today <em>buzuq</em>-s are made with three courses of strings in order to expand their range. The metal strings, along with the metallic tuning pegs (identical to those on a guitar) give the instrument a bright sound quality, while the fret distribution covers the most common quartertones. This and the fact that the player can move the frets slightly to fine tune their pitch  allows the buzuq to tackle the most common <a href="../maqam.php">maqam</a> scales with acceptable precision.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=isAhZyRcA0M&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/isAhZyRcA0M/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhyiddin Ba‘yun</b>
                                    <span>Lebanese buzuq player and singer Muhyiddin Ba‘yun in a Buzuq Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IhiVXmTMihk&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IhiVXmTMihk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Abdel Karim</b>
                                    <span>Syrian Buzuq player Muhammad Abdel Karim (dubbed the Prince of Buzuq) in a Buzuq Taqsim. Abdel Karim left many recordings, and his style was mellow and meditative.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TpNCZQguy9k&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TpNCZQguy9k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Matar Muhammad</b>
                                    <span>The Lebanese Buzuq virtuoso Matar Muhammad plays a Buzuq Taqism in a live concert. Muhammad's taqasim put the buzuq on par with any of the other traditional Arabic instruments for their complexity, technique, ornamentation, maqam modulations and length.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IH9ONkilJkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IH9ONkilJkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zoro Yussef</b>
                                    <span>Lebanese-Kurdish Buzuq player Zoro Yussef (Zoro Seîd Yûsiv) plays a Buzuq Taqism in <a href="../maqam/rast.php">Maqam Rast</a>, recorded live on Lebanese Television</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dPdFIgFkkog&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dPdFIgFkkog/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Marhabtayn</b>
                                    <span>Lebanese diva Sabah in her song <strong>Marhabtayn</strong> (recorded live in Kuwait) featuring the buzuq in her orchestra (conducted by violinist Abbud Abdel ‘Al)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other traditional instruments:</p>
                    <ul>
                        <li><a href="oud.php">The Oud</a></li>
                        <li><a href="qanun.php">The Qanun</a></li>
                        <li><a href="nay.php">The Nay</a></li>
                        <li><a href="violin.php">The Arabic Violin</a></li>
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
