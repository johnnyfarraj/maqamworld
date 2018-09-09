<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Tabla";
$page_description = "The Tabla";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/tabla.php";
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
                        <h1>The Tabla</h1>
                        <h3>Also called Dirbakki or Darbuka</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="The Tabla">
                        <span>Aluminum-body tabla with plastic head from Gawharet El-Fan, Egypt. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Tabla</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Dirbakki</a>
                    </div>

                    <p> The Tabla (also called "Dirbakki" in Levantine dialects or "Darbuka" in Western countries) is a goblet shaped drum with skin fixed on one side.
		</p>
		<p>Traditional <em>tabla</em>-s are made of clay and have fish or goat skin glued on and held tightly with a system of woven threads. Modern <em>tabla</em>-s have an aluminum body with a replaceable and tunable plastic (Mylar) head.
                    </p>
                    <p> The <em>tabla</em> is a very popular instrument in folk and pop music, and is especially popular in the Belly Dance genre. It is used to a certain extent in more classical genres.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hossam Ramzi</b>
                                    <span>Egyptian veteran Tabla player Hossam Ramzi talks about the instrument in an interview at Analogue to Digital Music Expo, 2013</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zWD3fZjesBQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zWD3fZjesBQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sa‘id al-Artist</b>
                                    <span>Egyptian tabla master and teacher Sa‘id al-Artist with his percussion ensemble in an television interview</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other percussion instruments:</p>
                    <ul>
                        <li><a href="riqq.php">The Riqq</a></li>
                        <!--
                        <li><a href="tabla.php">The Tabla</a></li>
                        -->
                        <li><a href="tabl_baladi.php">The Tabl Baladi</a></li>
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

    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
