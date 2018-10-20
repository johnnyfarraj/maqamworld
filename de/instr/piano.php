<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das arabische Klavier";
$page_description = "Das arabische Klavier";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/piano.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Instrumentenverzeichnis</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Das arabische Klavier</h1>
                        <h3>Ein Klavier, das Maqam-Skalen wiedergibt (ohne Harmonien)</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="Das arabische Klavier">
                        <span>Der libanesische Pianist Ziad Rahbani auf einem Konzert-Poster in den 1980er-Jahren</span>
                    </div>

                    <p>Obwohl das Klavier in der arabischen Musik seit dem frühen zwanzigsten Jahrhundert präsent ist, wurde es vornehmlich als westliches Instrument benutzt, um ein wenig klassisches Flair in die arabischen Kompositionen zu bringen, etwa im Falle von <strong>Al-Siba wal-Gamal</strong> von Muhammad Abdel Wahab (1939). Die Bezeichnung arabisches Klavier hingegen bezieht sich auf ein Klavier, das melodisch, also ohne Akkordbegleitung im <a href="../maqam.php">Maqam</a>-Zusammenhang gespielt wird.
                    </p>
                    <p>
                    Der erste Pionier des arabischen Klaviers war der Libenese Wadih Sabra, der ein Klavier mit Zusatztönen (Vierteltönen) während des Musikkongresses in Kairo 1932 spielte. Später baute der Libanese Abdallah Chahine ebenfalls ein Klavier so um, dass es Vierteltöne spielen konnte. Er nahm ein Album mit dem Titel <strong>al-Nagham al-Khalid</strong> mit <a href="../form/improv.php#taqsim">Taqasim</a> in den geläufigsten <a href="../maqam.php">Maqamat</a> auf.
                    </p>
                    <p>Am Ende des zwanzigsten Jahrhunderts nahm der libanesische Musiker und Dramatiker Ziad Rahbani viele Lieder und Instrumentalkompositionen im Jazz-Fusion-Bereich auf, bei denen er ein akustisches oder elektronisches (Fender Rhodes) Klavier spielte, mit dem er Maqamleitern oder Harmonien spielte.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdallah Chahine</b>
                                <span>Abdallah Chahine spielt einen Klavier-Taqsim im Maqam Saba, gefolgt von der Komposition Batit ‘Uyuni von seinem Album <strong>Angham Min al-Sharq</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>Ziad Rahbanis <strong>Hsu Hal-iyyam</strong> (1985) mit ihm selbst am arabischen Klavier</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>W'Qamh</b>
                                <span>Ziad Rahbanis Instrumentalkomposition <strong>W'Qamh</strong> im Maqam Hijaz mit Fusion-Arrangement von 1987</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabisierte Instrumente:</p>
                    <ul>
                       <li><a href="accordion.php">Das arabische Akkordeon</a></li>
                       <li><a href="guitar.php">Die elektrische Gitarre</a></li>
                       <li><a href="org.php">Die elektrische Orgel</a></li>
                       <li><a href="keyboard.php">Das orientalische Keyboard</a></li>
                        <!--
                       <li><a href="piano.php">Das arabische Klavier</a></li>
                        -->
                       <li><a href="saxophone.php">Das Saxofon</a></li>
                       <li><a href="trumpet.php">Die Trompete</a></li>
                   </ul>

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
