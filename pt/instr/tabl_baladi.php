<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Tambor de Aldeia";
$page_description = "O Tambor de Aldeia";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/tabl_baladi.php";
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
                        <h1>O Tabl Baladi (O Tambor de Aldeia)</h1>
                        <h3>Tambor grande com pele em ambos os lados</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>Tabl Baladi com pele de cabra. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Tabl baladi</a>
                    </div>

                    <p>O Tabl Baladi é um grande tambor com estrutura de madeira e pele grossa em ambos os lados. É usado pendurado por um cinto em volta do ombro do músico e tocado com duas baquetas: a grossa é para o som do <em>dum</em> tocado com a mão dominante, e a baqueta fina é para o som do <em>tak</em> tocado com a outra mão.
                    </p>

                    <p>O Tabl Baladi é ideal para música ao ar livre em um ambiente de aldeia ("baladi" significa "da aldeia") e pode fornecer o ritmo para danças em roda como o "Dabke", juntamente com instrumentos igualmente sonoros como o <em>Mizmar</em>. O Tabl Baladi não toca ritmos muito complexos ou ornamentados e é ideal para <a href="../iqaa.php">iqa‘at</a> pesados 4/4 como <a href="../iqaa/baladi.php">Baladi</a>, <a href="../iqaa/saidi.php">Sa‘idi</a> e especialmente <a href="../iqaa/nawari.php">Nawari</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Tabl Baladi com Mizmar</b>
                                    <span>O músico armênio-libanês Setrak Sarkissian dá o ritmo para a cantora Samira Tawfiq em sua canção <strong>‘al-‘Ein Mulayyitein</strong>, acompanhada por um Riqq e um Tabl Baladi. Gravado na televisão libanesa com o violinista Rafik Hobeika regendo a orquestra.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos de percussão:</p>
                    <ul>
                        <li><a href="riqq.php">O Riqq</a></li>
                        <li><a href="tabla.php">A Tabla</a></li>
                        <!--
                        <li><a href="tabl_baladi.php">O Tambor de Aldeia</a></li>
                        -->
                        <li><a href="daff.php">O Daff</a></li>
                        <li><a href="mazhar.php">O Mazhar</a></li>
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
