<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die Tabla";
$page_description = "Die Tabla";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/tabla.php";
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
                        <h1>Die Tabla</h1>
                        <h3>Auch Dirbakki, Darbuka oder Darabuka genannt</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="Die Tabla">
                        <span>Tabla mit Aluminiumkorpus und Plastikfell von Gawharet El-Fan, Ägypten. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Tabla</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Dirbakki</a>
                    </div>

                    <p>
                        Die Tabla ist in Deutschland eher als Darbuka oder Darabuka bekannt und nicht zu verwechseln mit der indischen Tabla. Sie ist eine Bechertrommel, die an einer Seite ein Fell besitzt. Traditionell wurden Tablas aus Ton gefertigt und mit Fischhaut als Schlagfläche überzogen. Die Haut wurde angeklebt und mit Kordeln fixiert und gestimmt. Moderne Tablas haben einen Aluminiumkorpus und das Fell ist austauschbar und aus Plastik (Mylar).
                    </p>
                    <p>
                        Die Tabla ist in der Volksmusik und im Pop sehr beliebt und wird zum Teil auch in klassischen Formaten benutzt.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hossam Ramzi</b>
                                    <span>Der ägyptische Tabla-Veteran Hossam Ramzi spricht über das Instrument in einem Interview bei der Analogue to Digital Music Expo 2013.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=KmnkOfE6G58">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/KmnkOfE6G58/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sa‘id al-Artist</b>
                                    <span>Der ägyptische Tabla-Meister und Lehrer Sa‘id al-Artist mit seinem Perkussionsensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere arabische Perkussionsinstrumente:</p>
                    <ul>
                        <li><a href="riqq.php">Das Riq</a></li>
                        <!--
                        <li><a href="tabla.php">Die Tabla</a></li>
                        -->
                        <li><a href="tabl_baladi.php">Das Tabl Baladi</a></li>
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
