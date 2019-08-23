<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Mazhar Egiziano";
$page_description = "Il Mazhar Egiziano";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Mazhar";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/mazhar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Il Mazhar Egiziano</h1>
                        <h3>Un pesante e profondo tamburo a cornice con i piatti</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>Un mazhar egiziano accordabile con la pelle in plastica. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mazhar</a>
                    </div>

                    <p> Il mazhar egiziano è un tamburo a cornice molto pesante con dei piatti larghi. È fatto per colpi forti in una sezione varia e potente, come quello usato durante la Zaffa (processione di matrimonio) che usa il <a href = "../iqaa/zaffa.php">Iqa‘ Zaffa</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (festa di matrimonio)</b>
                                    <span>Una Zaffa egiziana (festa di matrimonio) con un grande gruppo di percussionisti che utilizzano vari strumenti percussivi, il Mazhar, il <a href="katim.php">Katem</a> e il <a href="tabla.php">Tabla</a>, tutti con pelli sintentiche.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti  a percussione:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <li><a href="daff.php">Il Daff</a></li>
                        <!-- <li><a href="mazhar.php">Il Mazhar</a></li> -->
                        <li><a href="katim.php">Il Katem</a></li>
                        <li><a href="sagat.php">Le Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
