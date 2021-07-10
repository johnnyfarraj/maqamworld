<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘at Árabes";
$page_description = "Os Ciclos Rítmicos Árabes Iqa‘ Iqa";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Os Ciclos Rítmicos Árabes</h1>
                        <h3>O Iqa‘</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Iqa‘/Iqa‘at</a>
                    </div>

                    <p>A música árabe é composta sobre ciclos rítmicos chamados de <em>iqa‘at</em> (singular: <em>iqa‘</em>), que são padrões de batidas que se repetem a cada compasso. Uma composição pode alternar entre vários iqa'at diferentes. Cada iqa' é definido usado um compasso prototípico e dois sons básicos: <em>dum</em> (grave e ressonante) e <em>tak</em> (agudo e seco).</p>

                    <p>A notação do <em>iqa‘</em> é serve como um esqueleto ou um protótipo de como executá-lo. Na prática, percussionistas ornamentam um <em>iqa‘</em> (elaboram-no) com batidas adicionais: <em>dum</em>-s, <em>tak</em>-s e quaisquer outros sons que o instrumento for capaz de produzir. A ornamentação depende muito do gênero de música árabe, da estética desejada para o arranjo, do instrumento em si, do tamanho da seção rítmica e do estilo pessoal de cada percussionista.</p>

                    <p>Os <em>iqa‘at</em> árabes aparecem em muitas fórmulas de compasso diferentes, que podem ser pares ou ímpares. Os tempos menores (2/4, 3/4, 4/4, 6/4 e 8/4) são usados principalmente na música folclórica, no gênero tarab do meio do século XX e na música popular contemporânea. Os <em>iqa‘at</em> maiores (7/8, 9/8, 10/8, até 32/4) são usados principalmente no gênero vocal tradicional Muwashahat.</p>

                    <p>Você pode começar a explorar uma amostra dos iqa'at árabes usando o Índice de Iqa‘ (organizada em ordem alfabética) ou utilizando a tabela abaixo (organizada por número de tempos por compasso):</p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayyub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfuf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karachi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama`i Darij 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama`i Saraband 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda w-Nuss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Hacha` 4/4</a></li>
                                    <li><a href="iqaa/nawari.php">Nawari 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thurayya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Sudasi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_kabira.php">Wahda Kabira 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakufti 8/8</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Shami 10/4</a></li>
                                    <li><a href="iqaa/jurjina.php">Jurjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">`Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Masri 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Murabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Muhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Mukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khosh Rang 17/8</a></li>
                                    <li><a href="iqaa/awfar.php">Awfar Masri 19/4</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhit 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatu ‘Ashar Masri 32/4</a></li>
                                    <li><a href="iqaa/warshan_arabi.php">Warshan ‘Arabi 32/4</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

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