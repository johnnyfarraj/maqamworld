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
                        <h3>Címbalos de dedo feitos de latão</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Um par de sagat de latão. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Tura</a>
                    </div>

                    <p>Sagat (pronuncia-se <em>Sajat</em> fora do Egito) são címbalos de latão com cerca de 1&#189; a 2 polegadas (entre 4 e 5 cm) de diâmetro (existem címbalos maiores de até duas vezes esse diâmetro; estes são chamados de <em>Tura</em>). Eles são presos no polegar e no terceiro dedo de cada mão usando faixas elásticas. Sagat são às vezes chamadas pelo nome turco de "zills".
                    </p>

                    <p>As Sagat são muito populares entre profissionais de <em>Raqs Sharqi</em> (bailarinas de dança do ventre), pois acentuam e adicionam cor a outros instrumentos de percussão na seção rítmica. Por esse motivo, existem inúmeros vídeos no YouTube sobre técnica e performance dos címbalos de dedo.
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
                                    <span>O percussionista Karim Nagi (Egito/EUA) toca um Sagat solo</span>
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
