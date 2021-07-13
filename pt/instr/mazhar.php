<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Mazhar Egípcio";
$page_description = "O Mazhar Egípcio";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/mazhar.php";
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
                        <h1>O Mazhar Egípcio</h1>
                        <h3>Um tambor pesado e grave com címbalos</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>TODO A tunable Egyptian Mazhar with a plastic head. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Mazhar</a>
                    </div>
                    
                    <p>O Mazhar egípcio é um tambor de armação muito pesado com címbalos grandes. Ele é projetado para produzir batidas graves em uma seção rítmica volumosa e diversa, como a que é utilizada em uma <em>Zaffa</em> (procissão de casamento), onde o <a href = "../iqaa/zaffa.php">Iqa‘ Zaffa</a> é apresentado.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Zaffa (festa de casamento)</b>
                                    <span>Uma Zaffa (festa de casamento) egípcia com um grande grupo de percussionistas usando uma combinação de Mazhar-s, <a href="katim.php">Katem</a>-s e <a href="tabla.php">Tabla</a>-s egípcios, todos feitos com peles sintéticas.
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
                        <!-- 
                        <li><a href="mazhar.php">O Mazhar</a></li>
                        -->
                        <li><a href="katim.php">O Katem</a></li>
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
