<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Teclado Oriental";
$page_description = "O Teclado Oriental";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin, org, guitar, accordion, trumpet, saxophone";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/keyboard.php";
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
                        <h1>O Teclado Oriental</h1>
                        <h3>Um Sintetizador / Sampler com capacidade total de produzir quartos de tom</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="O Teclado Oriental">
                        <span>O teclado oriental Ketron Vega</span>
                    </div>

                    <p>O Teclado Oriental é o sucessor do <a href="org.php">org</a> e foi introduzido no mercado no final do século XX. Sua principal vantagem era sua capacidade de imitar sons de vários instrumentos tradicionais árabes por sampleamento e, dessa forma, o músico poderia invocar um <em>Mijwiz</em>, um <a href="qanun.php">Qanun</a> ou mesmo um <a href="saxophone.php">Saxofone</a> com o toque de um botão.
                    </p>
                    
                    <p>A maioria das empresas de sintetizadores (como Roland, Yamaha, GEM, Kawai, Korg e Ketron) fabrica modelos de teclado oriental e inclui um gerador de ritmo eletrônico integrado onde o músico pode complementar sua melodia / acordes com <a href="../iqaa.php">iqa‘at</a> pré-gravados de Instrumentos de percussão árabes sampleados. Isso torna o Teclado Oriental um instrumento muito poderoso e versátil, e essencial na música árabe pop e na música para dança.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="O Teclado Oriental's Quartertone Buttons">
                        <span>12 botões para abaixar cada nota do teclado em um quarto de tom</span>
                    </div>

                    <p>O teclado oriental é capaz de tocar um quarto de tom em qualquer uma das 12 notas do teclado simplesmente pressionando um botão.
                    </p>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Aw‘idak</b>
                                    <span>A National Arab Orchestra(EUA) apresenta a música <strong>Aw‘idak</strong> de Su'ad Muhammad, em um arranjo que inclui o teclado oriental e a guitarra elétrica ao lado de instrumentos árabes tradicionais.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Shamstep by 47Soul</b>
                                    <span>O grupo pan-palestino 47Soul acrescentaram um toque interessante ao uso tradicional do Teclado Oriental, usando efeitos sonoros para criar um novo gênero de techno-dabke, como em sua canção de sucesso <strong>Shamstep</strong>.
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
                        <!-- 
                       <li><a href="keyboard.php">O Teclado Oriental</a></li>
                        -->
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
