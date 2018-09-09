<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Das Jins";
$page_description = "Das Jins";
$page_keywords = "arabischen Musik, Maqam, Jins, Ghammaz";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "de/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Das Jins</h1>
                        <h3>Fragment von drei, vier oder fünf Tönen,</h3>
                        <h3>aus denen Maqamat sich zusammensetzen</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Jins/Ajnas</a>
                    </div>

                    <p>Ein <em>Jins</em> (im Arabischen maskulin; Plural: Ajnas) ist ein Maqamfragment von drei, vier oder fünf Tönen. Das <em>Jins</em> ist die kleinste melodische Einheit in der arabischen Musik. Anders gesagt, ist ein <a href="maqam.php">Maqam</a> ein Pfad, der über mehrere Ajnas hinwegführt. Jedes <em>Jins</em> ist durch seine Intervalle definiert. Diese verändern sich nicht, wenn es transponiert wird. Sie geben dem <em>Jins</em> seinen eindeutigen und wiedererkennbaren Charakter.
                    </p>

                    <p>Die Tonika eines <em>Jins</em> ist die Note der melodischen Hauptbetonung, also der Ton, dem die Melodie zur Auflösung zustrebt. Zumeist ist dies der erste Ton der <em>Jins</em>-Skala. Der führende Ton ist der Ton unmittelbar unter der Tonika des <em>Jins</em>. Der <em>Ghammaz</em> ist neben der Tonika die wichtigste Note der melodischen Betonung. Außerdem ist er meist auch der Startpunkt eines neuen <em>Jins</em>. Zu einem neuen <em>Jins</em> oder <em>Maqam</em> zu wechseln, wird als Modulation bezeichnet.
                    </p>

                    <p>Der Umfang eines <em>Jins</em> ist die Anzahl von Tönen zwischen Tonika und <em>Ghammaz</em>. Diese Töne heißen <em>Jins</em>-Grundskala (oder einfach nur <em>Jins</em>-Skala). Außerhalb der Grundskala gibt es auf tiefere und höhere Töne, die implizit zum melodischen Vokabular des <em>Jins</em> gehören. Diese Töne werden als Jinsgepäck (englisch: Jins baggage) bezeichnet. Die Grundkala plus das Jinsgepäck ergeben die erweiterte <em>Jins</em>-Skala.
                    </p>

                    <p>Jedes Jins zeigt die Grundkala. Deren Töne werden groß dargestellt. Die Tonika und der <em>Ghammaz</em> sind als ganze Noten geschrieben. Die Jinsgepäck-Töne werden kleiner dargestellt. Manchmal gibt es auch mehrere Optionen für einige Töne im Jinsgepäck.</p>

                    <p>Sie können die Ajnas über das (alphabetisch sortierte) Jins-Verzeichnis finden.</p>
                    <p>Alternativ benutzen Sie die (nach Tonzahl sortierte) Tabelle unten:</p>
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">Drei Töne</div>
                                <!-- Header Cell: "Drei Töne" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Jins Musta‘ar</a></li>
                                    <li><a href="jins/sikah.php">Jins Sikah</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">Vier Töne</div>
                                <!-- Header Cell: "Vier Töne" -->
                                <ul class="page-list">
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Murassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                   <li><a href="jins/upper_ajam.php">Jins Upper ‘Ajam</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Upper Rast</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">Fünf Töne</div>
                                <!-- Header Cell: "Fünf Töne" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Jins ‘Ajam</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Jins ‘Ajam Murassa‘</a></li>
                                    <li><a href="jins/athar_kurd.php">Jins Athar Kurd</a></li>
                                    <li><a href="jins/jiharkah.php">Jins Jiharkah</a></li>
                                    <li><a href="jins/nahawand.php">Jins Nahawand</a></li>
                                    <li><a href="jins/nikriz.php">Jins Nikriz</a></li>
                                    <li><a href="jins/rast.php">Jins Rast</a></li>
                                    <li><a href="jins/sazkar.php">Jins Sazkar</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(undefinierte Größe)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Jins Hijazkar</a></li>
                                    <li><a href="jins/mukhalif_sharqi.php">Jins Mukhalif Sharqi</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Jins Nahawand Murassa‘</a></li>
                                    <li><a href="jins/saba.php">Jins Saba</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Jins Saba Dalanshin</a></li>
                                    <li><a href="jins/saba_zamzam.php">Jins Saba Zamzam</a></li>
                                    <li><a href="jins/sikah_baladi.php">Jins Sikah Baladi</a></li>
                                </ul>
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