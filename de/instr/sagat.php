<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die Sagat (Fingerzimbeln)";
$page_description = "Die Sagat (Fingerzimbeln)";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/sagat.php";
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
                        <h1>Die Sagat</h1>
                        <h3>Fingerzimbeln aus Messing</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Fingerzimbeln aus Messing. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Tura</a>
                    </div>

                    <p>Die Sagat (außerhalb Ägyptens Sajat genannt) sind Messingzimbeln mit einem Durchmesser von vier bis fünf Zentimetern (es gibt auch welche, die bis zu doppelt so groß sind; diese heißen <em>Tura</em>). Sie hängen an einem elastischen Band zusammen und dieses wird um den Daumen und den Mittelfinger genommen. Sagat sind sehr beliebt bei Raqs-Sharqi-Profis (also professionellen Bauchtänzerinnen), da sie hübsche Akzente setzen und Farbe in die Rhythmusbegleitung bringen. Daher gibt es auch massenhaft Youtube-Videos, die erklären, wie man mit den Zimbeln umgeht und wie genau man sie einsetzt. Gelegentlich werden Sagat im arabischen Raum auch mit ihrem türkischen Namen als Zills bezeichnet.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UpG__9CAiVE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UpG__9CAiVE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Karim Nagi</b>
                                    <span>Perkussionist Karim Nagi (Ägypten/USA) spielt ein Sagat-Solo.</span>
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
                        <li><a href="katim.php">Der Katim</a></li>
                        <!--
                        <li><a href="sagat.php">Die Sagat</a></li>
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
