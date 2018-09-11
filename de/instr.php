<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabische Musikinstrumente";
$page_description = "Arabische Musikinstrumente";
$page_keywords = "Arabische Musikinstrumente, arabische Akkordeon, Buzuq, Daff, ägyptische Mazhar, elektrische Gitarre, elektrische Orgel, Katim, Nay, orientalische Keyboard, Oud, arabische Klavier, Kanun, Riq, Sagat, Saxofon, Tabla (Dirbakki), Tabl Baladi, Trompete, Violine";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>Instrumentenverzeichnis</a>
                    <?php include($ROOT . 'de/sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabische Musikinstrumente</h1>
                        <h3>Traditionelle, arabisierte und Perkussionsinstrumente</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von naqr</a>
                    </div>

                    <p id="takht">

                    Das traditionelle arabische Ensemble, auch <em>Takht</em> genannt, besteht aus vier Hauptmelodieinstrumenten: <a href="instr/oud.php">Oud</a>, <a href="instr/nay.php">Nay</a>, <a href="instr/qanun.php">Kanun</a> und <a href="instr/violin.php">Violine</a> und einem Hauptperkussionsinstrument: dem <a href="instr/riqq.php">Riq</a>, manchmal um <a href="instr/tabla.php">Tabla</a> oder <a href="instr/daff.php">Daf</a> (Rahmentrommel) ergänzt oder von einem oder mehreren dieser Instrumente ersetzt.
                    </p>

                    <p>Stilistisch werden die Melodieinstrumente in zwei Familien unterteilt: <em>sahb</em> (ziehend) und <em>naqr</em> (zupfend oder hämmernd). Die <a href="instr/violin.php">Violine</a> und die <a href="instr/nay.php">Nay</a> fallen unter <em>sahb</em>, die <a href="instr/oud.php">Oud</a> und das <a href="instr/qanun.php">Kanun</a> unter <em>naqr</em>. Die zwei Familien sollen sich ergänzen, um einen reicheren, vollständigeren Klang zu erschaffen.
                    </p>

                    <p>Arabisierte Instrumente sind nicht arabische Instrumente, die im zwanzigsten Jahrhundert Eingang in das arabische Musikensemble fanden und Teil der Musik dieser Zeit wurden. Die meisten dieser Übernahmen fanden in Ägypten statt, wo Musiker neue Verzierungs- und Spieltechniken entwickelten, die diese Instrumente arabisch erscheinen ließen. Einige dieser Instrumente wurden so modifiziert, dass sie Zusatznoten spielen konnten und sich damit der arabischen <a href="../maqam.php">Maqam</a>-Intonation annäherten. Andere behielten ihre 12 wohltemperierten Töne pro Oktave.
                    </p>

                    <p>Der Gebrauch westlicher temperierter Instrumente ist inzwischen weit verbreitet in der arabischen Musik. Zu diesen Instrumenten gehören das Klavier, das elektrische <a href="instr/piano.php">Klavier</a>, die <a href="instr/org.php">elektrische Orgel</a>, das <a href="instr/keyboard.php">orientalische Keyboard</a>, das <a href="instr/accordion.php">Akkordeon</a>, die <a href="instr/guitar.php">elektrische Gitarre</a> und der elektrische (oft bundlose) Bass. Einige dieser Instrumente können verändert werden, um Vierteltöne zu erzeugen
                    </p>

                    <p>Schlagzeug und elektronische Perkussion sind inzwischen auch sehr verbreitet in der arabischen Pop- und Tanzmusik. Flöte, <a href="instr/saxophone.php">Saxofon</a>, Klarinette und <a href="instr/trumpet.php">Trompete</a> sind nicht gleichtemperierte Instrumente und erlauben größere Kontrolle über die Tonhöhe als die oben genannten Instrumente. Sie werden unterschiedlich intensiv in der arabischen Musik genutzt, besonders aber kommen sie in modernen arabischen Jazz-Fusion-Stilen vor.
                    </p>

                    <p>Die <a href="instr/violin.php">Violine</a>, die Viola, das Violoncello und der Kontrabass werden in der arabischen Musik viel benutzt, insbesondere in großen Ensembles wie dem Orchester von Umm Kulthum und dem Diamond Orchestra in Ägypten. Da sie alle bundlos sind, könne diese Instrumente die arabischen Maqamskalen gut reproduzieren.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">Traditionelle Instrumente</h5>
                                    <p class="card-text"><a href="instr/oud.php">Die Oud (‘Ud)</a></p>
                                    <p class="card-text"><a href="instr/qanun.php">Das Kanun</a></p>
                                    <p class="card-text"><a href="instr/nay.php">Die Nay</a></p>
                                    <p class="card-text"><a href="instr/violin.php">Die arabische Violine</a></p>
                                    <p class="card-text"><a href="instr/buzuq.php">Der Buzuk</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">Arabisierte Instrumente</h5>
                                    <p class="card-text"><a href="instr/accordion.php">Das arabische Akkordeon</a></p>
                                    <p class="card-text"><a href="instr/guitar.php">Die elektrische Gitarre</a></p>
                                    <p class="card-text"><a href="instr/org.php">Die elektrische Orgel</a></p>
                                    <p class="card-text"><a href="instr/keyboard.php">Das orientalische Keyboard</a></p>
                                    <p class="card-text"><a href="instr/piano.php">Das arabische Klavier</a></p>
                                    <p class="card-text"><a href="instr/saxophone.php">Das arabische Saxofon</a></p>
                                    <p class="card-text"><a href="instr/trumpet.php">Die arabische Trompete</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">Perkussionsinstrumente</h5>
                                    <p class="card-text"><a href="instr/riqq.php">Das Riq</a></p>
                                    <p class="card-text"><a href="instr/tabla.php">Die Tabla</a></p>
                                    <p class="card-text"><a href="instr/tabl_baladi.php">Das Tabl Baladi</a></p>
                                    <p class="card-text"><a href="instr/daff.php">Die Daf</a></p>
                                    <p class="card-text"><a href="instr/mazhar.php">Das ägyptische Mazhar</a></p>
                                    <p class="card-text"><a href="instr/katim.php">Der Katim</a></p>
                                    <p class="card-text"><a href="instr/sagat.php">Die Sagat</a></p>
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
