<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Musicais Árabes";
$page_description = "Formas Musicais Árabes";
$page_keywords = "arabic, music, forms, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Formas Musicais Árabes</h1>
                        <h3>Qawalib</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qalab/Qawalib</a>
                    </div>

                    <p>A maior parte da música Árabe, seja composta ou improvisada, segue formas prontas chamadas de <em>qawalib</em> Árabe (<em>qalab</em> no singular, que literalmente significa molde ou fôrma). <em>Qawalib</em> são modelos para guiar o compositor e o improvisador, e são usados tanto em música vocal quanto em instrumental. <em>Qawalib</em> dão ao músico uma estrutura conhecida em que trabalhar, e cria um senso de conforto e expectativa nos ouvintes.
                    </p>

                    <p><em>Qawalib</em> estão convenientemente organizados aqui de acordo com suas dimensões vocal/instrumental e composto/improvisado.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Vocais Compostas</h5>
                                    <p class="card-text">Aprenda sobre o Dawr, o Muwashah, o Qadd, a Taqtuqa, a Ughniya, a Qasida, o Monólogo e o Duetoo.</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">Mais…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Instrumentais Compostas</h5>
                                    <p class="card-text">Aprenda sobre o Dulab, a Maqtu‘a, a Muqaddima, a Tahmila, e o Darij.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">Mais…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Instrumentais Otomanas</h5>
                                    <p class="card-text">Aprenda sobre o Sama‘i, a Longa e o Bashraf.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">Mais…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Improvisadas</h5>
                                    <p class="card-text">Aprenda sobre o Taqsim, as Layali, o Mawwal e a Qasida.</p>
                                    <a href="form/improv.php" class="btn btn-primary">Mais…<i class="fa fa-fw fa-angle-right"></i></a>
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
