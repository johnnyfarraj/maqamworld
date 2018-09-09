<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabische Musikformen";
$page_description = "Arabische Musikformen";
$page_keywords = "Arabische Musikformen, Dawr, Muwashah, Qadd, Taqtuqa, Ughniya, Qasida, Monologue, Duet, Dulab, Maqtu‘a, Muqaddima, Tahmila, Darij, Sama‘i, Longa, Bashraf, Taqsim, Layali, Mawwal, Qasida";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "de/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>Formen-Verzeichnis</a>
                    <?php include($ROOT . 'de/sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabische Musikformen</h1>
                        <h3>Die Qawalib</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Formen-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Qalib/Qawalib</a>
                    </div>

                    <p>Die meiste traditionelle und klassische arabische Musik, ob nun komponiert oder improvisiert, folgt festen Regeln. Diese heißen <em>Qawalib</em> im Arabischen (Singular: <em>Qalib</em>), was Model oder Form bedeutet. Qawalib sind Muster, die den Komponisten und den Improvisierenden leiten. Sie finden sowohl in der vokalen wie in der instrumentalen Musik Verwendung. Qawalib stecken einen Rahmen ab, in dem sich der Musiker bewegen kann, und erzeugen eine Gefühl der Vertrautheit und Erwartung in den Hörern.
                    </p>

                    <p>Die Qawalib werden im Folgenden aufgeführt hinsichtlich ihren vokalen/instrumentalen und ihren komponierten/improvisierten Dimensionen.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Vokale komponierte Formen</h5>
                                    <p class="card-text">Informationen über Dawr, Muwashah, Qadd, Taqtuqa, Ughniya, Qasida, Monologue und Duet</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">Mehr...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentale komponierte Formen</h5>
                                    <p class="card-text">Informationen über Dulab, Maqtu‘a, Muqaddima, Tahmila und Darij</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">Mehr...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Ottomanische instrumentale Formen</h5>
                                    <p class="card-text">Informationen über Sama‘i, Longa und Bashraf</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">Mehr...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Improvisierte Formen</h5>
                                    <p class="card-text">Informationen über Taqsim, Layali, Mawwal und Qasida</p>
                                    <a href="form/improv.php" class="btn btn-primary">Mehr...<i class="fa fa-fw fa-angle-right"></i></a>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
