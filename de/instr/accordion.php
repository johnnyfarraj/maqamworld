<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das arabische Akkordeon";
$page_description = "Das arabische Akkordeon";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/accordion.php";
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
                        <h1>Das arabische Akkordeon</h1>
                        <h3>Ein Akkordeon, das so umgebaut wurde, dass es Vierteltöne spielen kann</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="Das arabische Akkordeon">
                        <span>Faruq Salama spielt Akkordeon auf Umm Kulthums "Ya Masahharni", Kairo, 1971</span>
                    </div>

                    <p>
                        Das Akkordeon kam über Ägypten in die arabische Musikszene. Es wurde zunächst ohne Veränderungen übernommen, um der Musik ein ausländisches Flair zu geben (beispielsweise 1935 bei "Sahirtu" von Muhammad Abdel Wahab). Später wurde es modifiziert, sodass es die sogenannten Vierteltöne spielen konnte und eine halbwegs authentische Wiedergabe der Maqam-Skalen ermöglichte. </p>
                    <p>
                        Das Akkordeon ist sehr beliebt beim <em>Raqs Sharqi</em> (Bauchtanz) und beim <em>Sha‘bi</em>-Genre.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_0JgmVgSa94&t=376s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_0JgmVgSa94/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Msahharni</b>
                                    <span>Umm Kulthums Ya Msahharni (1972, Musik von Sayyed Makkawi) mit Faruq Salama (Äpypten) am arabischen Akkordeon</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=qhFLg5RQjQk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/qhFLg5RQjQk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Faruq Salama Interview</b>
                                    <span>Faruq Salama im Interview über seine Erfahrungen im Orchester von Umm Kulthum</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=1nUqK5wLiME">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/1nUqK5wLiME/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fifi ‘Abdou</b>
                                    <span>Videoclip der ägyptischen Bauchtänzerin Fifi ‘Abdou, der mit einem ägyptischen Akkordeon beginnt</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BcOGIHYnl_g">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BcOGIHYnl_g/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Ahmed ‘Adaweya</b>
                                <span>Ahmed ‘Adaweyas Lied <strong>Ya Hulu il-Malamih</strong> (im ägyptischen Sha‘bi-Genre), von einer Bauchtänzerin begleitet</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://youtu.be/7f5a9BhGios?t=650s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7f5a9BhGios/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Elias Lammam</b>
                                    <span>Das National Arab Orchestra (USA) führt Tarif al-Atrashs Instrumentalkomposition Kahramana auf in einem Arrangement, in dem sowohl das arabische Akkordeon als auch traditionelle arabische Instrumente vorkommen.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabisierte Instrumente:</p>
                    <ul>
                        <!--
                       <li><a href="accordion.php">Das arabische Akkordeon</a></li>
                        -->
                       <li><a href="guitar.php">Die elektrische Gitarre</a></li>
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
