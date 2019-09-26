<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Forme musicali arabe";
$page_description = "Forme musicali arabe";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "it/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1Forme Musicali Arabe</h1>
                        <h3>Le Qawaleb</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qalab/Qawaleb</a>
                    </div>

                    <p>La maggior parte della musica araba, classica e tradizionale, sia composta che improvvisata, segue un gruppo di forme chiamate <em>qawaleb</em> in arabo (singolare <em>qalab</em>, letteralmente  "forma" o "contenitore fissato"). I <em>qawaleb</em> sono dei modelli che guidano il compositore o l'improvvisatore e sono usati sia nella musica strumentale che in quella vocale. I <em>qawaleb</em> danno al musicista una struttura familiare su cui lavorare e creano un senso di comodità  e aspettativa agli ascoltatori.
                    </p>

                    <p>Le <em>qawaleb</em> sono opportunamente organizzate qui in base alla loro dimensione vocale/strumentale o composizione/improvvisazione.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Forme di Composizioni Vocali</h5>
                                    <p class="card-text">Scopri le forme Dawr, Muwashah, Qadd, Taqtuqa, Ughnia, Qasida, Monologo e Duetto.</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">Scopri...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Forme di Composizioni Strumentali</h5>
                                    <p class="card-text">Scopri le forme Dulab, Maqtu‘a, Muqaddima, Tahmila, e Darej.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">Scopri...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Forme Strumentali Ottomane</h5>
                                    <p class="card-text">Scopri le forme Sama‘i, Longa e Bashraf.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">Scopri...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Forme per Improvvisazione</h5>
                                    <p class="card-text">Scopri le forme Taqsim, Layali, Mawwal e Qasida.</p>
                                    <a href="form/improv.php" class="btn btn-primary">Scopri...<i class="fa fa-fw fa-angle-right"></i></a>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
