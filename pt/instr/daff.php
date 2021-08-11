<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Daff";
$page_description = "O Daff";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/daff.php";
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
                        <h1>O Daff</h1>
                        <h3>O Tambor de Armação Genérico</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daff">
                        <span>Três daff-s com peles de cabra e veado. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Daff</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Bendir</a>
                    </div>
                    
                    <p>Daff é uma palavra genérica para tambor de armação (frame drum) em Árabe, e as variedades locais podem ter nomes diferentes, como <em>Mazhar</em> na Síria / Egito ou <em>Bendir</em> no Norte da África.
                    </p>
                    
                    <p>O daff tem uma moldura circular de madeira que varia de 12 polegadas de diâmetro para instrumentos menores a 24 polegadas ou mais em instrumentos maiores (e mais graves). A estrutura pode ter cerca de 4 polegadas de profundidade para diâmetros pequenos e 2-3 polegadas de profundidade para diâmetros maiores. A pele é tradicionalmente de cabra, veado ou outra pele natural, e fica permanentemente colada à estrutura, enquanto os <em>daff</em>-s modernos têm pele de plástico e afinação ajustável.
                    </p>
                    
                    <p>O daff é especialmente popular na música sufi (onde frequentemente é o único instrumento usado para acompanhar o canto), e também é usado nos gêneros clássico, folclórico e pop para obter uma seção rítmica maior.
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
                                    <b>Conjunto de Hassan al-Haffar</b>
                                    <span>O daff é utilizado no conjunto do <em>munshid</em> (cantor Islâmico) de Aleppo Hassan al-Haffar, em um concerto gravado ao vivo em Paris.
                                    </span>
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
                                    <span><strong>Duqqu el-Mazahir</strong> ("Toquem os Tambores", 1952), canção nupcial de Farid al-Atrash, inclui tambores de armação usados em uma celebração de casamento.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos de percussão:</p>
                    <ul>
                        <li><a href="riqq.php">O Riqq</a></li>
                        <li><a href="tabla.php">A Tabla</a></li>
                        <li><a href="tabl_baladi.php">O Tambor de Aldeia</a></li>
                        <!-- 
                        <li><a href="daff.php">O Daff</a></li>
                        -->
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
