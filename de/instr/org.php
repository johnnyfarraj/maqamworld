<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die elektrische Orgel";
$page_description = "Die elektrische Orgel";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/org.php";
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
                        <h1>Die elektrische Orgel</h1>
                        <h3>Org aus den 1970er-Jahren mit Vierteltönen</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="Die elektrische Orgel">
                        <span>Org-Pionier Magdi el-Husseini (Ägypten).</span>
                    </div>

                    <p> Die elektrische Orgel (meist auf Arabisch Org genannt, nach dem französischen Wort für Orgel, orgue) wurde in der arabischen Musik in den späten Sechziger- und Siebzigerjahren des zwanzigsten Jahrhunderts populär. Ihr Pionier und Superstar war der äpygtische Keyboarder Magdi el-Husseini. Die Org wurde so modifiziert, dass sie leidlich Vierteltöne reproduzieren konnte (in ähnlicher Qualität wie das Akkordeon), sodass sich die meisten <a href="../maqam.php">Maqam</a>-Skalen spielen ließen. Die Org wurde benutzt, um Melodielinien und einfache Akkorde zu spielen. Die <a href="guitar.php">elektrische Gitarre</a> und die elektrische Orgel schufen gemeinsam den für diese Zeit typischen Sound.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span>Abdel Halim Hafezs <strong>Qari'at al-fingen</strong> (1976, Musik von Muhammad al-Mugi), mit dem ägyptischen E-Orgel-Spieler Magdi el-Husseini (als Teil des Diamond Orchestra)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini Interview</b>
                                    <span>Magdi el-Husseini im Interview über seine Erfahrungen mit Sänger Abdel Halim Hafez und dessen Orchester</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabisierte Instrumente:</p>
                    <ul>
                       <li><a href="accordion.php">Das arabische Akkordeon</a></li>
                       <li><a href="guitar.php">Die elektrische Gitarre</a></li>
                        <!--
                       <li><a href="org.php">Die elektrische Orgel</a></li>
                        -->
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
