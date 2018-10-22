<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "El Mundo Del Maqam";
$page_description = "El Mundo Del Maqam";
$page_keywords = "El Mundo Del Maqam, instrumentos, formas, jins, maqam, ritmos, música arábica";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "es/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 ml-auto">
                    <div class="heading">
                        <h1>Bienvenidos al Mundo Del Maqam</h1>
                        <h3>Maqam-Welt ist ein Onlinenachschlagewerk, das Wissen über das modale arabische Maqam-System vermittelt, das die Basis der traditionellen arabischen Musik darstellt. Auf der Website geht es vornehmlich um Musik aus dem östlichen Mittelmeerraum der arabischen Welt (Ägypten, Palästina, Jordanien, Libanon und Syrien) vom Anfang bis zur Mitte des zwanzigsten Jahrhunderts.
                        </h3>
                    </div>
                    <p>Nach 17 Jahren Onlinepräsens wird Maqam-Welt nun, gefördert vom <a href="http://arabculturefund.org/indexarabic.php" target=_blank>Arab Fund for Arts and Culture</a> (AFAC), gründlich überarbeitet. Die neue Version von Maqam-Welt zeichnet sich aus durch:
                    </p>

                    <ul>
                        <li>modernisierte und relevantere Inhalte</li>
                        <li>Unterstützung aller Displaygrößen (insbesondere Smartphones)</li>
                        <li>Google-Suche</li>
                        <li>eine komplette Übersetzung ins Arabische</li>
                        <li>eine komplette Übersetzung ins Deutsche (under construction)</li>
                        <li>qualitativ bessere Bilder und Audiobeispiele</li>
                        <li>bessere Navigationsmenüs und -untermenüs</li>
                        <li>eine Kontaktseite für Nutzerfeedback</li>
                    </ul>

                    <p>Ich freue mich, auf ein bald erscheinendes Buch zum Thema Maqam hinweisen zu können. Ich habe es gemeinsam mit meinem Freund Sami Abu Shumays geschrieben, dem Kopf hinter den <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>. Es wird den Titel <a href="en/book.php">INSIDE ARABIC MUSIC</a> tragen und es soll im Februar 2019 bei Oxford University Press erscheinen. Das Buch wird ein umfangreiches Nachschlagewerk zur arabischen Musik sein. Diese Website fungiert dann als sein Begleiter. Das Buchprojekt wurde übrigens 2012 vom <a href="http://arabculturefund.org" target="_blank">AFAC</a> gefördert.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Informationen über das modale arabische Maqamsystem mit notierten Skalen und Tonbeispielen</p>
                                    <a href="maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Informationen über das Jins, das Skalenfragment, das die Grundlage jedes Maqams bildet</p>
                                    <a href="jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Rhythmus</h5>
                                    <p class="card-text">Informationen über die arabischen Rhythmusbausteine Iqa‘at, die aus den Grundschlägen <em>Dum</em> und <em>Tak</em> bestehen</p>
                                    <a href="iqaa.php" class="btn btn-primary">Iqa‘<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Formen</h5>
                                    <p class="card-text">Informationen über die Qawalib genannten arabischen Musikformen, die in vokaler, instrumentaler, komponierter und improvisierter Musik Verwendung finden</p>
                                    <a href="forms.php" class="btn btn-primary">Formen<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumente</h5>
                                    <p class="card-text">Informationen über die traditionellen arabischen Melodie- und Perkussions-Instrumente sowie über arabisierte westliche Instrument</p>
                                    <a href="instr.php" class="btn btn-primary">Instrumente<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Buch</h5>
                                    <p class="card-text">Hinweis auf INSIDE ARABIC MUSIC, eine Einführung in die arabische Musiktheorie und Aufführungspraxis (Veröffentlichung voraussichtlich Februar 2019)</p>
                                    <a href="book.php" class="btn btn-primary">Buch<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
  </body>
</html>