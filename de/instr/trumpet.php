<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die arabische Trompete";
$page_description = "Die arabische Trompete";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/trumpet.php";
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
                        <h1>Die arabische Trompete</h1>
                        <h3>Eine Trompete, mit der sich arabische Maqam-Skalen spielen lassen</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/trumpet.jpg" alt="Die arabische Trompete">
                        <span>Der arabische Trompeten-Pionier Sami al-Babli</span>
                    </div>

                    <p> Die arabische Trompete ist eine Trompete, mit der sich Maqam-Skalen spielen lassen. Manche Musiker benutzen dazu ein viertes Ventil, mit dessen Hilfe sie dann die Vierteltöne produzieren. Andere hingegen arbeiten beim ersten und dritten Ventil mit dem Ventilzug (verfügbar auf allen professionellen Trompeten).
                    </p>
                    <p>
                    Die Trompete hat sich in der arabischen Musik nie wirklich durchgesetzt. Sie ist das einzige arabisierte Instrument, das nie ins Orchester von Umm Kulthum aufgenommen wurde. Der bekannteste arabische Trompeter ist der Ägypter Sami al-Babli, der oft gemeinsam mit dem Sha‘bi-Sänger Ahmed Adaweyya auftritt.
                    </p>
                    <p>Heutzutage entwickeln zwei junge Musiker arabischer Herkunft die arabische Trompete weiter. Beide tun das in einem Jazz-Kontext, der westliche Harmonien mit arabischen Maqam-Melodien kombiniert. Es sind <a href="http://www.amirelsaffar.com/" target="_blank">Amir Elsaffar</a> (Irak/USA) und <a href="http://www.ibrahimmaalouf.com/" target="_blank">Ibrahim Maalouf</a> (Libanon/Frankreich).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=29lYX1bQ8ns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/29lYX1bQ8ns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Eine seltene Videoaufnahme von Sami al-Babli, der einen Taqsim im Maqam Nahawand während einer ägyptischen Hochzeit spielt</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=XVX7LaYvmnw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/XVX7LaYvmnw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Noch ein seltenes Video von Sami al-Babli, der einen Taqsim in Maqam Saba in der Einleitung zu einem Lied von Sha‘bi-Sänger Ahmed Adaweyya spielt. Al-Babli trat regelmäßig in Adaweyyas Ensemble auf. </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OqV03upmhu0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OqV03upmhu0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Amir Elsaffar</b>
                                    <span>Der irakisch-amerikanische Trompeter und Santur-Spieler Amir Elsaffar spielt in einer NPR-Feldaufnahme eine seiner Kompositionen, in der sich Elemente des arabischen Maqam-Systems und Jazz mischen.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DUa_srT-uL8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DUa_srT-uL8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ibrahim Maalouf</b>
                                <span>Der libanesisch-französische Trompeter Ibrahim Maalouf covert Umm Kulthums <strong>Alf Leila w Leila</strong> (1969, Musik von Baligh Hamdi) in einem Jazz-Arrangement, das Raum lässt für Maqam-Skalen.</span>
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
                       <li><a href="saxophone.php">Das Saxofon</a></li>
                        <!--
                       <li><a href="trumpet.php">Die Trompete</a></li>
                        -->
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
