<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "A Guitarra Elétrica";
$page_description = "A Guitarra Elétrica";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/guitar.php";
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
                        <h1>A Guitarra Elétrica</h1>
                        <h3>Toca melodia e acordes simples</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="A Guitarra Elétrica">
                        <span>Omar Khorshid, pioneiro da guitarra elétrica no Egito</span>
                    </div> 

                    <p> A Guitarra Elétrica foi usada pela primeira vez na música árabe no final dos anos 1960 no Egito, e seu pioneiro foi Omar Khorshid. Algumas guitarras elétricas árabes foram equipadas com trastes extras (à maneira do <a href="buzuq.php">Buzuq</a>) para tocar algumas das escalas árabes <a href="../maqam.php">Maqam</a> com quartos de tom. Mas, de modo geral, a guitarra elétrica foi usada sem qualquer alteração ou efeito, e foi arabizada a partir de seu estilo de ornamentação. A guitarra elétrica foi usada para tocar uma combinação de linhas melódicas e acordes simples (por exemplo, maior e menor).
                    </p>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=b9s1GvFSa68">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/b9s1GvFSa68/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid</b>
                                    <span>O pioneiro da guitarra elétrica árabe Omar Khorshid toca a canção <strong>Aghadan Alqaka</strong>de Umm Kulthum (1971, composição de Muhammad Abdel Wahab).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista com Omar Khorshid</b>
                                    <span>Entrevista com Omar Khorshid sobre sua experiência tocando guitarra elétrica com a Orquestra de Umm Kulthum.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <p>Explore outros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">O Acordeão Árabe</a></li>
                        <!-- 
                       <li><a href="guitar.php">A Guitarra Elétrica</a></li>
                        -->
                       <li><a href="org.php">O Org Árabe</a></li>
                       <li><a href="keyboard.php">O Teclado Oriental</a></li>
                       <li><a href="piano.php">O Piano Árabe</a></li>
                       <li><a href="saxophone.php">O Saxofone</a></li>
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
