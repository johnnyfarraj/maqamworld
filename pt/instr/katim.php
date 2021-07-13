<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Katem";
$page_description = "O Katem";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/katim.php";
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
                        <h1>O Katem</h1>
                        <h3>Um tambor de armação de apoio de som abafado</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katem">
                        <span>TODO A tunable Katem with a plastic head. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Katem</a>
                    </div>
                    
                    <p>O Katim (do verbo "katama", silenciar ou abafar) é um tambor de armação pesado de som abafado. O Katim é geralmente segurado entre os joelhos do instrumentista e é para ser tocado com as mãos e não com os dedos. A maioria dos <em>Katem</em>-s de hoje tem pele de plástico e afinação ajustável. O papel principal do <em>Katem</em> é dar apoio a outros instrumentos na seção rítmica, acentuando os sons básicos do <strong>dum</strong> e <strong>tak</strong>strong> com muita ornamentação.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Zaffa (Festa de casamento)</b>
                                    <span>Uma Zaffa (festa de casamento) egípcia com um grande grupo de percussionistas usando uma combinação de <a href="mazhar.php">Mazhar</a>-s, Katem-s e <a href="tabla.php">Tabla</a>-s egípcios, todos feitos com peles sintéticas.
                                    </span>
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
                        <!-- 
                        <li><a href="katim.php">O Katem</a></li>
                        -->
                        <li><a href="sagat.php">As Sagat</a></li>                  
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
