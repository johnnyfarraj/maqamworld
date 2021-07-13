<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die Daf";
$page_description = "Die Daf";
$page_keywords = "arabischen Perkussionsinstrumenten, Das Riq, Die Tabla, Das Tabl Baladi, Die Daf, Das Mazhar, Der Katim, Die Sagat";
$page_language = "de"; // language code <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/daff.php";
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
                        <h1>Die Daf</h1>
                        <h3>Die gewöhnliche Rahmentrommel</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daff">
                        <span>Drei Dafs, die mit Ziegen- und Hirschhaut bespannt sind. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Daf</a>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Bendir</a>
                    </div>

                    <p>
                        Die Daf (auch Def oder Daff; das Geschlecht im Arabischen ist übrigens maskulin) ist ein allgemeines Wort für eine Rahmentrommel im Arabischen. Lokal werden diese Instrumente häufig anders genannt, etwa Mazhar in Syrien und Ägypten oder Bendir in Nordafrika.
                    </p>

                    <p>
                        Die Daf ist eine runde Rahmentrommel, deren Durchmesser zwischen 30 und 60 Zentimeter variiert. Einige sind sogar noch größer und klingen entsprechend basslastiger. Die Rahmentiefe reicht von zehn Zentimetern für die kleineren Modelle bis zu fünf bis sieben Zentimeter für die Trommeln mit größerem Durchmesser. Das Fell ist zumeist aus Ziegen- oder Hirschhaut oder anderen natürlichen Materialien. Es ist an den Rahmen geklebt. Moderne Rahmentrommeln mit Plastikfell verfügen allerdings zumeist über einen Stimmmechanismus.
                    </p>

                    <p>
                        Die Rahmentrommel ist vor allem in der Sufi-Musik populär, wo es oft das einzige Instrument ist, das den Gesang begleitet. Sie ist aber auch in der klassischen Musik, in der Volksmusik sowie im Pop gängig und erweitert dort oft die Rhythmusgruppe.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FFViUJriwXE&t=515s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FFViUJriwXE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hassan al-Haffar's Ensemble</b>
                                    <span>Die Daf kommt zum Einsatz im Ensemble von Hassan al-Haffar, einem Munshid (islamischer Kantor) aus Aleppo. Das Konzert wurde in Paris aufgenommen.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ya_3rWXI1is&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ya_3rWXI1is/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Duqqu el-Mazahir</b>
                                    <span>Farid al-Atrashs Hochzeitslied <strong>Duqqu el-Mazahir</strong> (<strong>Spielt die Rahmentrommeln</strong>, 1952) präsentiert eine Reihe von Rahmentrommeln.
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
                        <!--
                        <li><a href="daff.php">Die Daf</a></li>
                        -->
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
