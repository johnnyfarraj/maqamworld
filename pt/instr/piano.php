<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Piano Árabe";
$page_description = "O Piano Árabe";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/piano.php";
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
                        <h1>O Piano Árabe</h1>
                        <h3>Um piano que toca <a href="../maqam.php">Maqamat</a> sem harmonia</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="O Piano Árabe">
                        <span>O pianista libanês Ziad Rahbani, em um pôster de uma apresentação nos anos 1980</span>
                    </div>

                    <p>Embora o piano tenha sido incluído na música árabe desde o início do século 20, ele era usado como um instrumento ocidental para adicionar uma pitada clássica às composições árabes (por exemplo, em "al-Siba wal-Gamal" de Muhammad Abdel Wahab, 1939). Por Piano Árabe, entretanto, nos referimos a um piano que é tocado melodicamente (sem harmonia) dentro da estrutura do <a href="../maqam.php">maqam</a> árabe.
                    </p>
                    
                    <p>O pioneiro do piano árabe foi o libanês Wadih Sabra, que tocou um piano dotado de notas adicionais (quartos de tom) durante o Congresso de Música Árabe do Cairo de 1932. Mais tarde, o libanês Abdallah Chahine também alterou um piano para tocar quartos de tom e gravou um álbum chamado "<strong>al- Nagham al-Khalid</strong>" com <a href="../form/improv.php#taqsim">taqasim</a> nos <a href="../maqam.php">maqamat</a> mais comuns.
                    </p>
                    
                    <p>No final do século 20, o músico e dramaturgo libanês Ziad Rahbani gravou muitas canções e composições instrumentais usando um piano acústico ou elétrico (um Fender Rhodes) para tocar linhas melódicas em <a href="../maqam.php">maqam</a> ou harmonia dentro de um gênero de fusão com jazz.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Abdallah Chahine</b>
                                    <span>O pianista libanês Abdallah Chahine toca um Taqsim Piano em <a href="../maqam/saba.php">Maqam Saba</a> seguido da canção <strong>Batit ‘Uyuni</strong> em seu álbum "<strong>Angham Min al-Sharq</strong>".
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>O pianista libanês Ziad Rahbani toca piano árabe em sua canção <strong>Shu Hal-Iyyam</strong> do seu álbum <strong>Ana Mush Kafer</strong>, 1985.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>W'Qamh</b>
                                    <span><strong>W'Qamh</strong>, composição instrumental de Ziad Rahbani em <a href="../maqam/hijaz.php">Maqam Hijaz</a>, utiliza o piano árabe em um arranjo de jazz fusion. Do álbum de Fairouz <strong>Mish Kayin Hayk Tkun</strong>, 1987.
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
                        <!--
                       <li><a href="piano.php">O Piano Árabe</a></li>
                        -->
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
