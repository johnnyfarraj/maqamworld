<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das orientalische Keyboard";
$page_description = "Das orientalische Keyboard";
$page_keywords = "arabische Akkordeon, elektrische Gitarre, elektrische Orgel, orientalische Keyboard, arabische Klavier, Saxofon, Trompete";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/keyboard.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>Instrumentenverzeichnis</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Das orientalische Keyboard</h1>
                        <h3>Ein Synthesizer/Sampler, der Vierteltöne wiedergeben kann</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="Das orientalische Keyboard">
                        <span>Das Ketron Vega Oriental Keyboard.</span>
                    </div>

                    <p> Das orientalische Keyboard ist der Nachfolger der elektronischen Orgel. Es ist seit dem Ende des zwanzigsten Jahrhunderts gängig. Es hat den großen Vorteil, die Klänge diverser arabischer Instrumente mit Hilfe von Samples reproduzieren zu können. Außerdem verfügt es über eine eingebaute Rhythmusmaschine. So kann der Musiker sein Spiel um ein vorprogrammiertes Rhythmusmuster auf einem arabischen Perkussionsinstrument ergänzen. Dies macht das orientalische Keyboard zu einem vielseitigen Instrument, das kaum noch aus der arabischen Pop- und Tanzmusik wegzudenken ist.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="The Oriental Keyboard's Quartertone Buttons">
                        <span>12 Schalter, um den jeweiligen Ton auf dem Keyboard um einen Viertelton abzusenken</span>
                    </div>

                    <p>Das orientalische Keyboard kann beliebige Vierteltöne durch Betätigung eines Schalters hervorbringen.</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Aw‘idak</b>
                                    <span>Das National Arab Orchestra (USA) spielt Su‘ad Muhammads Stück Aw‘idak in einem Arrangement mit orientalischem Keyboard, elektrischer Gitarre und arabischen Instrumenten.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Shamstep von 47Soul</b>
                                <span>Die panpalästinensische Gruppe 47Soul hat das orientalische Keyboard um Soundeffekte erweitert, um das neue Genre Techno-Dabke zu generieren, wie in ihrem Hit Shamstep.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabisierte Instrumente:</p>
                    <ul>
                       <li><a href="accordion.php">Das arabische Akkordeon</a></li>
                       <li><a href="guitar.php">Die elektrische Gitarre</a></li>
                       <li><a href="org.php">Die elektrische Orgel</a></li>
                        <!--
                       <li><a href="keyboard.php">Das orientalische Keyboard</a></li>
                        -->
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
