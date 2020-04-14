<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die elektrische Gitarre";
$page_description = "Die elektrische Gitarre";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/guitar.php";
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
                        <h1>Die elektrische Gitarre</h1>
                        <h3>Spielt Melodie und einfache Akkorde</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="Die elektrische Gitarre">
                        <span>Omar Khorshid, der Pionier der elektrischen Gitarre in Ägypten</span>
                    </div>

                    <p> Die elektrische Gitarre wurde in den Sechzigerjahren des zwanzigsten Jahrhunderts in Ägypten in die arabische Musik eingeführt. Der Protagonist dieser Bewegung war Omar Khorshid. Einige arabische Gitarren erhielten zusätzliche Bünde (ähnlich wie der <a href="buzuq.php">Buzuk</a>) um einige arabische Skalen mit Vierteltönen spielen zu können. Meist jedoch wurde die elektrische Gitarre unverändert übernommen und ihre Arabisierung bestand im Wesentlichen aus dem Verzierungsstil. Die elektrische Gitarre wurde benutzt, um eine Kombination aus Melodielinien und einfachen Dur- und Moll-Akkorden zu spielen.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=b9s1GvFSa68">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/b9s1GvFSa68/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid</b>
                                    <span>Umm Kulthums <strong>Aghadan Alqaka</strong> (1971, Musik von Muhammad Abdel Wahab) mit Omar Khorshid (Ägypten) an der elektrischen Gitarre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid Interview</b>
                                    <span>Omar Khorshid im Interview über seine Erfahrungen als Gitarrist im Orchester von Umm Kulthum</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabisierte Instrumente:</p>
                    <ul>
                       <li><a href="accordion.php">Das arabische Akkordeon</a></li>
                        <!--
                       <li><a href="guitar.php">Die elektrische Gitarre</a></li>
                        -->
                       <li><a href="org.php">Die elektrische Orgel</a></li>
                       <li><a href="keyboard.php">Das orientalische Keyboard</a></li>
                       <li><a href="piano.php">Das arabische Klavier</a></li>
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
