<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Das ägyptische Mazhar";
$page_description = "Das ägyptische Mazhar";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/mazhar.php";
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
                        <h1>Das ägyptische Mazhar</h1>
                        <h3>Eine schwere und tiefe Rahmentrommel mit Zimbeln</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>Ein stimmbares ägyptisches Mazhar mit Plastikfell. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Mazhar</a>
                    </div>

                    <p> Das ägyptische Mazhar ist eine sehr schwere Rahmentrommel mit großen Zimbeln. Es ist gedacht für laute Schläge in einer lauten Rhythmusgruppe, etwa bei einer Zaffa (Hochzeitsprozession), wo <a href = "../iqaa/zaffa.php">Iqa‘ Zaffa</a> benutzt wird.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (Wedding party)</b>
                                    <span>Eine ägyptische Zaffa (Hochzeitsgesellschaft) mit großer Perkussionsgruppe, die mehrere ägyptische Mazhars mit synthetischen Fellen sowie <a href="katim.php">Katims</a> und <a href="tabla.php">Tablas</a> benutzen</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere Arabischen Perkussionsinstrumente:</p>
                    <ul>
                        <li><a href="riqq.php">Das Riq</a></li>
                        <li><a href="tabla.php">Die Tabla</a></li>
                        <li><a href="tabl_baladi.php">Das Tabl Baladi</a></li>
                        <li><a href="daff.php">Die Daf</a></li>
                        <!--
                        <li><a href="mazhar.php">Das Mazhar</a></li>
                        -->
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
