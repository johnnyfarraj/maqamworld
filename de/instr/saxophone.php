<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das arabische Saxofon";
$page_description = "Das arabische Saxofon";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/saxophone.php";
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
                        <h1>Das arabische Saxofon</h1>
                        <h3>Ein Saxofon, das benutzt wird, um arabische Skalen zu spielen</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="Das arabische Saxofon">
                        <span>Der arabische Saxofonpionier Samir Surour (Ägypten)</span>
                    </div>

                    <p> Das Saxofon ist in der arabischen Musik selten, obwohl es die Maqam-Skalen gut intonieren kann. Es hat nie die Popularität des <a href="accordion.php">arabischen Akkordeons</a> erreicht und wurde meist benutzt, um Orchester-Stücken ein innovatives, jazziges Flair zu verleihen.
                    </p>
                    <p> Der Hauptpionier des arabischen Saxofons ist Samir Surour, der aus einer Militärblaskapelle kam. Surour spielte auf einer Reihe von Produktionen von Umm Kulthum mit. Danach nahm er einige Solo-Instrumentalalben unter dem Namen ‘Ashiq el-Sax (Der Saxophon-Liebhaber) auf.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Hawil Tiftikirni (1973)</b>
                                <span>Abdel Halim Hafezs <ßstrong>Hawil Tiftikirni</strong> (1973, Musik von Baligh Hamdi) beginnt mit einer arabischen elektrischen Orgel, dann kommen eine elektrische Gitarre und ein Solo von Samir Suour auf dem Saxofon.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=tNskrvpodqA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/tNskrvpodqA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fat el-Ma‘ad (1967)</b>
                                <span>Im Arrangement von Umm Kulthums <strong>Fat el-Ma‘ad</strong> (1967, Musik von Baligh Hamdi) sind Faruq Salama auf dem arabischen Akkordeon, Abdel Fattah Khayri an der elektrischen Gitarre sowie Samir Suour am Saxofon dabei.</span>
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
                       <li><a href="piano.php">Das arabische Klavier</a></li>
                        <!--
                       <li><a href="saxophone.php">Das Saxofon</a></li>
                        -->
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
