<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das Tabl Baladi";
$page_description = "Das Tabl Baladi";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/tabl_baladi.php";
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
                        <h1>Das Tabl Baladi</h1>
                        <h3>Große Trommel mit Fell auf beiden Seiten</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>Ein Tabl Baladi mit Ziegenfell. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Tabl baladi</a>
                    </div>

                    <p>
                        Das Tabl Baladi (im Deutschen aus dem türkischen Kontext als Davul bekannt; im Arabischen maskulin) ist eine große, runde Trommel mit einem Holzrahmen und Fell auf beiden Seiten. Der Spieler hält das Instrument mit einem Gurt, der über seinen Rücken verläuft. Er spielt es mit zwei Stöcken: der schwerere ist für den Dum-Schlag, der mit der dominanten Hand gespielt wird, der leichtere Stock ist für den Tak-Schlag und wird mit der anderen Hand gespielt.
                    </p>

                    <p>
                        Das Tabl Baladi ist ideal für Spielsituationen  draußen, etwa in Dörfern. Daher stammt auch der Name: "baladi" bedeutet aus dem Dorf. Es gibt den Rhythmus vor bei Reihentänzen wie dem Dabke, zumeist in Kombination mit der Mizmar, einer ägyptischen Kegeloboe. Das Tabl Baladi spielt keine komplizierten oder verzierten Rhythmen und eignet sich vor allem für Vierviertel-<a href="../iqaa.php">Iqa‘at</a> wie <a href="../iqaa/baladi.php">Baladi</a>, <a href="../iqaa/saidi.php">Sa‘idi</a> und <a href="../iqaa/katakufti.php">Katakufti</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tabl Baladi with Mizmar</b>
                                    <span>Samira Tawfiqs Lied ‘Al-‘Ein Mulayyitein enthält ein Tabl Baladi, der vor allem den Iqa‘ Katakufti spielt. Außerdem zu sehen ist der armenisch-libanesische Perkussionist Setrak Sarkissian auf der Tabla.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere Arabischen Perkussionsinstrumente:</p>
                    <ul>
                        <li><a href="riqq.php">Das Riq</a></li>
                        <li><a href="tabla.php">Die Tabla</a></li>
                        <!--
                        <li><a href="tabl_baladi.php">Das Tabl Baladi</a></li>
                        -->
                        <li><a href="daff.php">Die Daf</a></li>
                        <li><a href="mazhar.php">Das Mazhar</a></li>
                        <li><a href="katim.php">Der Katim</a></li>
                        <li><a href="sagat.php">Die Sagat</a></li>
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
