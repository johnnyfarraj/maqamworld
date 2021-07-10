<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "As Sagat";
$page_description = "As Sagat";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/sagat.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>As Sagat</h1>
                        <h3>Brass Finger Cymbals</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>A pair of brass sagat. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Tura</a>
                    </div>

                    <p>Sagat (called <em>Sajat</em> outside Egypt) are brass finger cymbals around 1&#189; to 2 inches in diameter (larger cymbals of up to twice that diameter exist and are called <em>Tura</em>). They are worn on the thumb and the 3<sup>rd</sup> finger of each hand using stretchy bands. Sagat are sometimes called by their Turkish name "zills".</p>

                    <p><em>Sagat</em> are very popular among <em>Raqs Sharqi</em> professionals (belly dancers) as they beautifully accent and add color to other perussion instruments in the rhythm section. For this reason, countless YouTube videos exist on finger cymbal technique and performance.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UpG__9CAiVE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UpG__9CAiVE/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Karim Nagi</b>
                                    <span>Percussionist Karim Nagi (Egypt/USA) plays a Sagat solo</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos de percussão:</p>
                    <ul>
                        <li><a href="riqq.php">O Riqq</a></li>
                        <li><a href="tabla.php">A Tabla</a></li>
                        <li><a href="tabl_baladi.php">O Tambor de Aldeia</a></li>
                        <li><a href="daff.php">O Daff</a></li>
                        <li><a href="mazhar.php">O Mazhar</a></li>
                        <li><a href="katim.php">O Katem</a></li>
                        <!--
                        <li><a href="sagat.php">As Sagat</a></li>
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
