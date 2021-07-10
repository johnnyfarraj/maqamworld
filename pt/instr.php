<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Instrumentos Musicais Árabes";
$page_description = "Instrumentos Musicais Árabes";
$page_keywords = "arabic, music, instruments, accordion, buzuq, daff, mazhar, electric guitar, katim, nay, keyboard, electric organ, oud, 'ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trumpet, violin, arab, world, maqam, jins, iqa‘, iqaa, rhythm, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Instrumentos Musicais Árabes</h1>
                        <h3>Instrumentos Tradicionais, Arabizados e de Percussão</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Naqr</a>
                    </div>

                    <p id="takht">O conjunto musical tradicional árabe ou <em>takht</em> é composto por quatro instrumentos melódicos principais: o <a href="instr/oud.php">oud</a> (alaúde), o <a href="instr/nay.php">nay</a>, o <a href="instr/qanun.php">qanoun</a> e o <a href="instr/violin.php">violino</a>, e um instrumento de percussão principal: o <a href="instr/riqq.php">riqq</a>. Algumas vezes o <em>riqq</em> é complementado ou substituído pela <a href="instr/tabla.php">tabla</a> ou pelo <a href="instr/daff.php">daff</a> (tambor da moldura), e os instrumentos melódicos são complementados pelo <a href="instr/buzuq.php">buzuq</a>.
                    </p>

                    <p>Em termos de estilo, os instrumentos melódicos são divididos em duas famílias: <em>sahb</em> (cordas friccionadas), e <em>naqr</em> (cordas percutidas ou marteladas). O violino e o nay  são classificados como <em>sahb</em>, o oud e o qanoun são classificados como <em>naqr</em>. As duas famílias complementam-se uma à outra de modo a criar um som mais rico e mais completo.
                    </p>

                    <p>Instrumentos arabizados são instrumentos não-árabes que foram incorporados ao conjunto musical árabe no século XX e se tornaram parte do som musical árabe daquele período. A maioria desses instrumentos foi introduzida no Egito, onde os músicos desenvolveram novos estilos de ornamentação e técnicas de execução que fizeram com que esses instrumentos soassem “árabes”. Alguns instrumentos arabizados foram alterados para que pudessem tocar notas adicionais e reproduzir uma versão o mais próxima possível da afinação correta do <a href="../maqam.php">maqam</a> árabe. Outros foram usados como instrumentos de temperamento igual em 12 tons, sem qualquer alteração.
                    </p>

                    <p>Entre eles estão o <a href="instr/piano.php">piano</a>, o <a href="instr/piano.php">piano elétrico</a>, o <a href="instr/org.php">órgão elétrico</a>, o <a href="instr/keyboard.php">teclado oriental</a>, o <a href="instr/accordion.php">acordeão</a>, a <a href="instr/guitar.php">guitarra elétrica</a>, e o baixo elétrico (com trastes). Alguns desses instrumentos podem ser alterados de modo a produzir quartos de tom. A bateria e a percussão eletrônica também são comumente utilizadas nas músicas árabes contemporâneas pop e/ou para dança.
                    </p>

                    <p>A flauta, o <a href="instr/saxophone.php">saxofone</a>, o clarinete e o <a href="instr/trumpet.php">trompete</a> são instrumentos não-temperados e possibilitam maior controle sobre a afinação do que os anteriormente citados. Eles são usados de várias formas na música Árabe, especialmente em estilos modernos de fusão Jazz Árabe.
                    </p>

                    <p>O <a href="instr/violin.php">violino</a>, a viola, o violoncelo e o contrabaixo são amplamente utilizados na música Árabe, especialmente em grandes conjuntos como a Orquestra de <strong>Umm Kulthum</strong> e a Diamond Orchestra no Egito. Como todos não possuem trastes, estes instrumentos podem ser confortavelmente utilizados para executar as escalas Árabes <a href="maqam.php">Maqam</a>.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos Tradicionais</h5>
                                    <p class="card-text"><a href="instr/oud.php">O Oud</a></p>
                                    <p class="card-text"><a href="instr/qanun.php">O Qanoun</a></p>
                                    <p class="card-text"><a href="instr/nay.php">O Nay</a></p>
                                    <p class="card-text"><a href="instr/violin.php">O Violino Árabe</a></p>
                                    <p class="card-text"><a href="instr/buzuq.php">O Buzuq</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos Arabizados</h5>
                                    <p class="card-text"><a href="instr/accordion.php">O Acordeão Árabe</a></p>
                                    <p class="card-text"><a href="instr/guitar.php">A Guitarra Elétrica</a></p>
                                    <p class="card-text"><a href="instr/org.php">O Órgão Árabe</a></p>
                                    <p class="card-text"><a href="instr/keyboard.php">O Teclado Oriental</a></p>
                                    <p class="card-text"><a href="instr/piano.php">O Piano Árabe</a></p>
                                    <p class="card-text"><a href="instr/saxophone.php">O Saxofone</a></p>
                                    <p class="card-text"><a href="instr/trumpet.php">O Trompete</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos de Percussão</h5>
                                    <p class="card-text"><a href="instr/riqq.php">O Riqq</a></p>
                                    <p class="card-text"><a href="instr/tabla.php">A Tabla</a></p>
                                    <p class="card-text"><a href="instr/tabl_baladi.php">O Tambor de Aldeia</a></p>
                                    <p class="card-text"><a href="instr/daff.php">O Daff</a></p>
                                    <p class="card-text"><a href="instr/mazhar.php">O Mazhar</a></p>
                                    <p class="card-text"><a href="instr/katim.php">O Katem</a></p>
                                    <p class="card-text"><a href="instr/sagat.php">As Sagat</a></p>
                                </div>
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
