<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes de la musique arabe";
$page_description = "Formes de la musique arabe";
$page_keywords = "musique, arabe, formes, qawaleb, Le Dawr, Le Mouachah, Le Qadd, La Taqtouqa, La Oughnia, Le Monologue, Le Duo, Le Doulab, La Maqtoua, La Mouqaddima, La Tahmila, Le Darej, Le Sama‘i, La Longa, Le Bachraf, Le Taqsim, Le Mawwal, Les Layali, La Qassida";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "fr/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Formes de la musique arabe</h1>
                        <h3>Les Qawaleb</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Qalab/Qawaleb</a>
                    </div>

                    <p>La plupart des musiques traditionnelles et classiques arabes, qu'elles soient composées ou improvisées, suivent un ensemble de formes appelé <em>qawaleb</em> en arabe (<em>qalab</em> au singulier; au sens littéral: un moule ou un contenant d'une certaine forme). Les qawaleb sont des patrons guidant le compositeur ou l'improvisateur et sont utilisés tant pour la musique vocale qu'instrumentale. Les qawaleb donnent au musicien un cadre familier pour travailler et confortent l'auditeur dans ses anticipations.
                    </p>

                    <p>Les <em>qawaleb</em> sont ici organisés selon leur caractère vocal/instrumental et composé/improvisé.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formes Vocales Composées</h5>
                                    <p class="card-text">Apprenez au sujet des formes suivantes: Le Dawr, Le Mouachah, Le Qadd, La Taqtouqa, La Oughnia, La Qassida, Le Monologue et Le Duo.</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">Apprenez...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formes Composées Instrumentales</h5>
                                    <p class="card-text">Apprenez au sujet des formes suivantes: Le Doulab, La Maqtoua, La Mouqaddima, La Tahmila et Le Darej.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">Apprenez...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formes Instrumentales Ottomanes</h5>
                                    <p class="card-text">Apprenez au sujet des formes suivantes: Le Sama‘i, La Longa et Le Bachraf.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">Apprenez...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formes Improvisées</h5>
                                    <p class="card-text">Apprenez au sujet des formes suivantes: Le Taqsim, Le Mawwal, Les Layali et La Qassida.</p>
                                    <a href="form/improv.php" class="btn btn-primary">Apprenez...<i class="fa fa-fw fa-angle-right"></i></a>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
