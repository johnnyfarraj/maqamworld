<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Jins";
$page_description = "Arabic Music Maqam Jins";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>The Jins</h1>
                        <h3>Um fragmento de escala de 3, 4 ou 5 notas, a partir do qual um Maqam é construído</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Jins/Ajnas</a>
                    </div>

                    <p>O Jins (plural Ajnas) é um fragmento de escala de <a href="maqam.php">maqam</a> de 3, 4 ou 5 notas. O <em>jins</em> é a unidade melódica na música Árabe, já que um <a href="maqam.php">maqam</a> na verdade é um caminho por entre vários <em>ajnas</em>. Cada <em>jins</em> é definido por seus intervalos, que não mudam quando é transposto e dá a ele um caráter distinto e reconhecível.
                    </p>

                    <p>A <em>tônica</em> de um <em>jins</em> é a nota de ênfase melódica principal, a nota para qual a melodia retorna para sua resolução. Geralmente é a primeira nota na escala do jins. A sensível (check ES version) é a nota imediatamente abaixo da tônica de um <em>jins</em>. O <em>ghammaz</em> é a nota mais importante de ênfase melódica (além da tônica), além de ser o mais comum ponto de início de um novo <em>jins</em> (a mudança para um novo <em>jins</em> ou <a href="maqam.php">maqam</a> é chamada de modulação).
                    </p>

                    <p>O tamanho de um j<em>jins</em>ins é o número de notas entre a tônica e o ghammaz. Essas notas são chamadas de escala básica do <em>jins</em> (ou, simplesmente, escala). Fora da escala básica (de qualquer lado) estão notas que são parte fundamental do vocabulário melódico do <em>jins</em>. Essas notas são chamadas de bagagem do jins. A escala básica mais a bagagem do jins formam a escala estendida do <em>jins</em>.
                    </p>
                    
                    <p>Cada jins apresenta a escala básica escrita usando notas grandes, com a tônica e o ghammaz como semibreves. As notas da bagagem do jins são mostradas em um tamanho menor, e às vezes um <em>jins</em> inclui múltiplas opções para algumas notas na bagagem do <em>jins</em>.
                    </p>

                    <p>Você pode começar explorando ajnas usando o Índice de Jins (ordenados alfabeticamente) ou usando a tabela abaixo (agrupados por tamanho):</p>
                    
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">3-note</div>
                                <!-- Header Cell: "3-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Jins Musta‘ar</a></li>
                                    <li><a href="jins/sikah.php">Jins Sikah</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">4-note</div>
                                <!-- Header Cell: "4-note" -->
                                <ul class="page-list">
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Murassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                   <li><a href="jins/upper_ajam.php">Jins ‘Ajam Superior</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Rast Superior</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">5-note</div>
                                <!-- Header Cell: "5-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Jins ‘Ajam</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Jins ‘Ajam Murassa‘</a></li>
                                    <li><a href="jins/athar_kurd.php">Jins Athar Kurd</a></li>
                                    <li><a href="jins/jiharkah.php">Jins Jiharkah</a></li>
                                    <li><a href="jins/nahawand.php">Jins Nahawand</a></li>
                                    <li><a href="jins/nikriz.php">Jins Nikriz</a></li>
                                    <li><a href="jins/rast.php">Jins Rast</a></li>
                                    <li><a href="jins/sazkar.php">Jins Sazkar</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(tamanho indefinido)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Jins Hijazkar</a></li>
                                    <li><a href="jins/mukhalif_sharqi.php">Jins Mukhalif Sharqi</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Jins Nahawand Murassa‘</a></li>
                                    <li><a href="jins/saba.php">Jins Saba</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Jins Saba Dalanshin</a></li>
                                    <li><a href="jins/saba_zamzam.php">Jins Saba Zamzam</a></li>
                                    <li><a href="jins/sikah_baladi.php">Jins Sikah Baladi</a></li>
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