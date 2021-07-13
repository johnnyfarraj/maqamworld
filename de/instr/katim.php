<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Der Katim";
$page_description = "Der Katim";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/katim.php";
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
                        <h1>Der Katim</h1>
                        <h3>Eine dumpfe Rahmentrommel, die zur Unterstützung eingesetzt wird</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katim">
                        <span>Ein stimmbarer Katim mit Plastikfell. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Katim</a>
                    </div>

                    <p> Der Katim (vom Verb “katama”, dämpfen, stumm machen) ist eine schwere Rahmentrommel mit einem dumpfen Klang. Er wird gewöhnlich zwischen die Knie geklemmt und mit den Händen gespielt, nicht mit den Fingern. Die meisten Katims haben heutzutage ein stimmbares Plastikfell. Aufgabe des Katims ist es die Dums und Taks der Rhythmusgruppe zu verstärken.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (Wedding Party)</b>
                                    <span>Eine ägyptische Hochzeitsgesellschaft (Zaffa) mit einer großen Perkussionsgruppe, die eine Kombination aus Katims, <a href="mazhar.php">Mazhars</a> und <a href="tabla.php">Tablas</a> verwendet, allesamt mit Plastikfellen ausgestattet
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabische Perkussionsinstrumente:</p>
                    <ul>
                        <li><a href="riqq.php">Das Riq</a></li>
                        <li><a href="tabla.php">Die Tabla</a></li>
                        <li><a href="tabl_baladi.php">Das Tabl Baladi</a></li>
                        <li><a href="daff.php">Die Daf</a></li>
                        <li><a href="mazhar.php">Das Mazhar</a></li>
                        <!--
                        <li><a href="katim.php">Der Katim</a></li>
                        -->
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
