<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "The Arabic Saxophone";
$page_description = "The Arabic Saxophone";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/saxophone.php";
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
                        <h1>The Arabic Saxophone</h1>
                        <h3>Um Saxofone usado para tocar escalas árabes <a href="../maqam.php">Maqam</a></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="O Saxofone">
                        <span>TODO Arabic Saxophone pioneer Samir Surour (Egito)</span>
                    </div>

                    <p>O saxofone é um instrumento raro na música árabe, apesar de ser capaz de produzir uma boa afinação em escalas <a href="../maqam.php">maqam</a>. Nunca chegou a se popularizar como o <a href="accordion.php">acordeão árabe</a> e foi usado principalmente para adicionar um som inovador aos arranjos orquestrais árabes.
                    </p>
                    
                    <p>O principal pioneiro do saxofone árabe é Samir Surour (Egito), cuja formação foi em bandas militares de metais. Surour tocou em algumas canções de Umm Kulthum, e depois gravou uma série de álbuns instrumentais solo sob o nome ‘<em>‘Ashiq el-Sax</em> (O Amante de Sax).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Hawil Tiftikirni (1973)</b>
                                    <span>A canção <strong>Hawil Tiftikirni</strong>, de Abdel Halim Hafez (1973, música de Baligh Hamdi), abre com o Org árabe, a guitarra elétrica e, em seguida, um solo de saxofone de Samir Surour.
                                    </span>
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
                                </div>
                                <div class="info">
                                    <b>Fat el-Ma‘ad (1967)</b>
                                    <span>A canção <strong>Fat el-Ma‘ad</strong>, de Umm Kulthum (1967, música de Baligh Hamdi), inclui em seu arranjo Faruq Salama no acordeão árabe, Abdel Fattah Khayri na guitarra elétrica e Samir Surour no saxofone.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">O Acordeão Árabe</a></li>
                       <li><a href="guitar.php">A Guitarra Elétrica</a></li>
                       <li><a href="org.php">O Org Árabe</a></li>
                       <li><a href="keyboard.php">O Teclado Oriental</a></li>
                       <li><a href="piano.php">O Piano Árabe</a></li>
                        <!--
                       <li><a href="saxophone.php">O Saxofone</a></li>
                        -->
                       <li><a href="trumpet.php">O Trompete</a></li>
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
