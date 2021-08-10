<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "O Mundo do Maqam";
$page_description = "O Mundo do Maqam";
$page_keywords = "";
$page_language = "pt";
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "pt/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Bem-vindo(a) ao <span>Mundo do Maqam</span></h1>
                        <h3>O Mundo do Maqam é um recurso online dedicado a ensinar o sistema modal árabe Maqam, que é a base da música árabe tradicional. Este site cobre principalmente a música da parte mediterrânea oriental do Mundo Árabe (Egito, Palestina, Jordânia, Líbano e Síria), com foco no período entre o início e meio do século XX. 
                        </h3>
                    </div>

                    <p>
                    Após 17 anos em funcionamento, o Mundo do Maqam foi reconstruído com o apoio financeiro do <a href="http://arabculturefund.org/grantept/grantee.php?id=333" target="_blank">Fundo Árabe para as Artes e Cultura (AFAC)</a>, concedido em 2016.
                    <br>
                    O Mundo do Maqam agora conta com:
                    </p>

                    <ul>
                        <li>Uma tradução completa para
                            <a href="/en/index.php"><strong>Inglês</strong></a>, 
                            <a href="/ar/index.php"><strong>Árabe</strong></a>, 
                            <a href="/fr/index.php"><strong>Francês</strong></a>, 
                            <a href="/it/index.php"><strong>Italiano</strong></a>,
                            <a href="/de/index.php"><strong>Alemão</strong></a>,
                            <a href="/el/index.php"><strong>Grego</strong></a> e
                            <a href="/es/index.php"><strong>Espanhol</strong></a>.
                        </li>
                        <li>Suporte para monitores e telas de todos os tamanhos (especialmente smartphones)</li>
                        <li>Google Search</li>
                        <li>Atualizações e mais conteúdos relevantes</li>
                        <li>Melhor qualidade de imagens e demonstrações de áudio</li>
                        <li>Melhor qualidade de imagens e demonstrações de áudio</li>
                        <li>Notas musicais clicáveis com geração de sons</li>
                        <li>Uma página de “Contato” para recebermos feedback</li>
                    </ul>

                    <p>
                        Se você gostar deste site, confira o livro <a href="book.php">INSIDE ARABIC MUSIC</a>, co-escrito com meu amigo Sami Abu Shumays (criador do <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). O livro é uma referência extensa em Música Árabe, e foi lançado pela editora da <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> em agosto de 2019.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Aprenda sobre o sistema modal Maqam com escalas anotadas e exemplos gravados.
                                    </p>
                                    <a href="/pt/maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Aprenda sobre o Jins, o fragmento de escala que constitui os blocos de construção de cada Maqam.
                                    </p>
                                    <a href="/pt/jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Rítmos</h5>
                                    <p class="card-text">Aprenda sobre o ciclo rítmico árabe chamado Iqa’, que é composto pelos sons primitivos <em>dum</em> eand <em>tak</em>.
                                    </p>
                                    <a href="/pt/iqaa.php" class="btn btn-primary">Rítmos<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Formas</h5>
                                    <p class="card-text">Aprenda sobre as formas da música árabe, chamadas de Qawalib, usadas tanto na música vocal como na música instrumental, compostas e improvisadas.</p>
                                    <a href="/pt/forms.php" class="btn btn-primary">Formas<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos</h5>
                                    <p class="card-text">Aprenda sobre os instrumentos árabes tradicionais, melódicos e de percussão, assim como os instrumentos ocidentais que foram “arabizados”.
                                    </p>
                                    <a href="/pt/instr.php" class="btn btn-primary">Instrumentos<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Publicações</h5>
                                    <p class="card-text">Conheça o livro “<strong>Inside Arabic Music</strong>” (Por dentro da Música Árabe) (co-escrito com Sami Abu Shumays), publicado em agosto de 2019.
                                    </p>
                                    <a href="/pt/book.php" class="btn btn-primary">Publicações<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
