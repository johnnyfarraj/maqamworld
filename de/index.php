<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam-Welt";
$page_description = "Maqam-Welt arabischen Musik";
$page_keywords = "Maqam-Welt, Instrumente, Formen, Jins, Maqam, Rhythmen, arabischen Musik ";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "de/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 ml-auto">
                    <div class="heading">
                        <h1>Willkommen in der neuen Maqam-Welt</h1>
                        <h3>Maqam-Welt ist ein Onlinenachschlagewerk, das Wissen über das modale arabische Maqam-System vermittelt, das die Basis der traditionellen arabischen Musik darstellt. Auf der Website geht es vornehmlich um Musik aus dem östlichen Mittelmeerraum der arabischen Welt (Ägypten, Palästina, Jordanien, Libanon und Syrien) vom Anfang bis zur Mitte des zwanzigsten Jahrhunderts.
                        </h3>
                    </div>
                    <p>Nach 17 Jahren Onlinepräsens wird Maqam-Welt nun, gefördert vom <a href="http://arabculturefund.org/indexarabic.php" target=_blank>Arab Fund for Arts and Culture</a> (AFAC), gründlich überarbeitet. Die neue Version von Maqam-Welt zeichnet sich aus durch:
                    </p>

                    <ul>
                        <li>modernisierte und relevantere Inhalte</li>
                        <li>Unterstützung aller Displaygrößen (insbesondere Smartphones)</li>
                        <li>Google-Suche</li>
                        <li>eine komplette Übersetzung ins 
                            <a href="/en/index.php"><strong>Englische</strong></a>,
                            <a href="/it/index.php"><strong>Italienische</strong></a>,
                            <a href="/fr/index.php"><strong>Französische</strong></a>,
                            <a href="/ar/index.php"><strong>Arabische</strong></a>,
                            <!-- brasilianische Portugiesisch -->
                            <a href="/el/index.php"><strong>Griechische</strong></a> und
                            <a href="/es/index.php"><strong>Spanische</strong></a>.
                        </li>
                        <li>qualitativ bessere Bilder und Audiobeispiele</li>
                        <li>bessere Navigationsmenüs und -untermenüs</li>
                        <li>eine Kontaktseite für Nutzerfeedback</li>
                    </ul>

                    <p>Ich freue mich, die Veröffentlichung eines Buches zum Thema arabische Musik bekannt zu geben.
                      Ich habe es gemeinsam mit meinem Freund Sami Abu Shumays geschrieben, 
                      dem Kopf hinter den <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>.
                      Es trägt den Titel <a href="book.php"> INSIDE ARABIC MUSIC </a> und wurde im August 2019 veröffentlicht
                      bei <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> erscheinen. Das Buch ist ein umfangreiches Nachschlagewerk über arabische Musik.
                      Diese Website fungiert dann als sein Begleiter. 
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
                                    <h5 class="card-title">Veröffentlichungen</h5>
                                    <p class="card-text">Hinweis auf <strong>Inside Arabic Music</strong>, eine Einführung in die arabische Musiktheorie und Aufführungspraxis (kürzlich veröffentlicht im August 2019))</p>
                                    <a href="book.php" class="btn btn-primary">Veröffentlichungen<i class="fa fa-fw fa-angle-right"></i></a>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
  </body>
</html>
