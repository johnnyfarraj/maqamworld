<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Music Forms";
$page_description = "Arabic Music Forms";
$page_keywords = "arabic, music, forms, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

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
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Form Index</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabic Musical Forms</h1>
                        <h3>Qawalib</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Form Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qalab/Qawalib</a>
                    </div>

                    <p>Most traditional and classical Arabic music, whether composed or improvised, follows set forms called <em>qawalib</em>
                    in Arabic (singular <em>qalab</em>, literally a mold or a shaped container). <em>Qawalib</em> are templates to guide the composer and improviser, and are used both in vocal and instrumental music. <em>Qawalib</em> give the musician a familiar framework to work in, and create a sense of comfort
                    and expectation in the listeners.
                    </p>

                    <p><em>Qawalib</em> are conveniently organized here according to their vocal/instrumental and composed/improvised dimensions.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Vocal Composed Forms</h5>
                                    <p class="card-text">Learn about the Dawr, Muwashah, Qadd, Taqtuqa, Ughniya, Qasida, Monologue and Duet.</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumental Composed Forms</h5>
                                    <p class="card-text">Learn about the Dulab, Maqtu‘a, Muqaddima, Tahmila, and Darij.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Ottoman Instrumental Forms</h5>
                                    <p class="card-text">Learn about the Sama‘i, Longa and Bashraf.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">More...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Improvised Forms</h5>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
