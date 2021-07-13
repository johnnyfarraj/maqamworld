<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Las Formas Musicales Árabes";
$page_description = "Las Formas Musicales Árabes";
$page_keywords = "Las Formas Musicales Árabes, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "es/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Las Formas Musicales Árabes</h1>
                        <h3>Los Qawaleb</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Qalab/Qawaleb</a>
                    </div>

                    <p>
                        La mayoría de las formas tradicionales y clásicas de la música árabe, ya sea compuesta o improvisada, siguen formas rectas que se llaman los <em>qawaleb</em> en árabe (el singular <em>qalab</em>, literalmente un molde o un envase conformado). Son modelos para guiar el compositor y el improvisador, y están usados en la música vocal y la música instrumental. Le dan al músico un marco de referencia familiar para trabajar, y para crear un sentido de comodidad y expectativa en los escuchantes.
                    </p>
                    <p>
                        Los Qawaleb están organizados aquí conformando a su dimensión vocal/instrumental y compuesto/improvisado.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Vocálicas Compuestas</h5>
                                    <p class="card-text">Learn about the Dawr, Muwashah, Qadd, Taqtuqa, Ughniya, Qasida, Monologue and Duet.</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Compuestas Instrumentales</h5>
                                    <p class="card-text">Learn about the Dulab, Maqtu‘a, Muqaddima, Tahmila, and Darij.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Otomanos</h5>
                                    <p class="card-text">Learn about the Sama‘i, Longa and Bashraf.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Formas Improvisadas</h5>
                                    <p class="card-text">Learn about the Taqsim, Layali, Mawwal and Qasida.</p>
                                    <a href="form/improv.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
