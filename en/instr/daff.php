<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Daff";
$page_description = "The Daff";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/daff.php";
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
                        <h1>The Daff</h1>
                        <h3>The Generic Frame Drum</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daff">
                        <span>Three daff-s with goat and deer skins. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Daff</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Bendir</a>
                    </div>
                    
                    <p><em>Daff</em> is a generic word for a frame drum in Arabic, and local varieties may have different names like <em>Mazhar</em> in Syria/Egypt or <em>Bendir</em> in North Africa.
                    </p>
                    
                    <p> The <em>daff</em> has a circular wooden frame ranging from 12 inches in diameter for smaller instruments to 24 inches and more on larger (and bassier) instruments. The frame can be about 4 inches deep for small diameters, and 2-3 inches deep for larger diameters. The skin is traditionally goat, deer or another natural skin, and is permanently glued to the frame, while modern <em>daff</em>-s have plastic skin, and are tunable.
                    </p>
                    
                    <p>
                    The daff is especially popular in Sufi music (where often it is the only instrument used to accompany singing), and is also use in classical, folk and pop genres to achieve a bigger rhythm section.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FFViUJriwXE&t=515s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FFViUJriwXE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hassan al-Haffar's Ensemble</b>
                                    <span>The daff is used in Aleppan <em>munshid</em> (Islamic cantor) Hassan al-Haffar's ensemble in a concert recorded live in Paris.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ya_3rWXI1is&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ya_3rWXI1is/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Duqqu el-Mazahir</b>
                                    <span>Farid al-Atrash's wedding song <strong>Duqqu el-Mazahir</strong> ("Play the frame drums", 1952) features a number of frame drums used in a wedding celebration.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other percussion instruments:</p>
                    <ul>
                        <li><a href="riqq.php">The Riqq</a></li>
                        <li><a href="tabla.php">The Tabla</a></li>
                        <li><a href="tabl_baladi.php">The Tabl Baladi</a></li>
                        <!-- 
                        <li><a href="daff.php">The Daff</a></li>
                        -->
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
