<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Org Árabe";
$page_description = "O Org Árabe";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin, org, guitar, accordion, trumpet, saxophone";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/org.php";
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
                        <h1>O Org Árabe</h1>
                        <h3>Órgão Elétrico dos anos 1970 Electric Organ equipado com alguns quartos de tom</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="The Electric Organ">
                        <span>O pioneiro do Org Magdi el-Husseini (Egito).</span>
                    </div>

                    <p>O órgão elétrico (comumente chamado de <strong>org</strong> em árabe, do francês "orgue") tornou-se muito popular na música árabe no final dos anos 1960 até os anos 1970. Seu pioneiro e superstar do instrumento foi o tecladista egípcio Magdi el-Husseini.O org foi alterado para tocar quartos de tom suficientemente bons (tão bons quanto os do acordeão), o que lhe permitiu tocar a maioria das escalas <a href="../maqam.php">maqam</a>. O org foi usado para tocar uma combinação de linhas melódicas e acordes simples. Juntos, o org e a <a href="guitar.php">guitarra elétrica</a> criaram um som e um clima distintos que marcaram a música árabe daquela década.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span>A canção <strong>Qari'at al-Fingan</strong> de Abdel Halim Hafez (1976, mcomposição de Muhammad al-Mugi) com os instrumentistas egípcios de órgão elétrico Magdi el-Husseini e Hani Mehanna (ambos integrantes da Orquestra Diamante).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista com Magdi el-Husseini</b>
                                    <span>Entrevista com Magdi el-Husseini sobre sua experiência em conhecer o cantor Abdel Halim Hafez e se apresentar em sua orquestra.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista com Hani Mehanna</b>
                                    <span>Entrevista com Hani Mehanna sobre sua experiência em conhecer o compositor Muhammad Abdel Wahab e a cantora Umm Kulthum e interpretar a música Leilet Hobb com a orquestra dela.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">O Acordeão Árabe</a></li>
                       <li><a href="guitar.php">A Guitarra Elétrica</a></li>
                        <!--
                       <li><a href="org.php">The Electric Organ</a></li>
                        -->
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
