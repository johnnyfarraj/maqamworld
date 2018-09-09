<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabische Iqa‘at";
$page_description = "Arabische Iqa‘at Maqam-Welt";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>Iqa‘-Verzeichnis</a>
                    <?php include($ROOT . 'de/sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabische Iqa‘at</h1>
                        <h3></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Iqa'-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Iqa‘/Iqa‘at</a>
                    </div>

                    <p>Arabische Musik wird über rhythmische Zyklen gespielt. Die Einheiten heißen Iqa'at (Singular: <em>Iqa'</em>). Dabei handelt es sich um Schlagmuster, die in jedem Takt wiederholt werden. Eine Komposition kann zwischen mehreren solcher Muster wechseln. Jeder Iqa‘ wird durch eine Abfolge von zwei Grundschlägen definiert: <strong>Dum</strong> (tief und ausklingend) und <strong>Tak</strong> (hell und kurz).
                    </p>

                    <p>Der notierte Iqa‘ ist das Skelett oder der Prototyp für das konkrete Spiel. Gewöhnlich schmücken die Perkussionisten einen Iqa‘ mit zusätzlichen Schlägen aus - extra Dums oder Taks und was auch immer das Instrument sonst noch so hergibt. Wie genau ausgeschmückt wird, hängt vom Genre, der Ästhetik des Arrangements, dem konkreten Instrument, der Größe der Rhythmusgruppe und dem Stil des Perkussionisten ab.
                    </p>

                    <p>Arabische Iqa‘at kommen in verschiedenen Taktarten vor, sie können gerade und ungerade sein. Die kleineren Taktarten (2/4, 3/4, 4/4, 6/4 und 8/4) werden zumeist in der Volksmusik, dem Tarab-Genre der Mitte des zwanzigsten Jahrhunderts sowie der zeitgenössischen Popmusik benutzt. Längere Iqa‘at (7/8, 9/8, 10/8 bis hin zu 32/4) werden vor allem im traditionellen Muwashahat-Gesangsstil verwendet.
                    </p>

                    <p>Sie können auf Beispiele für Iqa'at zugreifen, indem Sie das alphabetische Iqa'-Verzeichnis konsultieren oder indem Sie die unten stehende, nach Schlägen pro Takt sortierte Liste benutzen.</p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayyub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfuf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karachi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama`i Darij 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama`i Saraband 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda w-Nuss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Hacha` 4/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakufti 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thurayya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Sudasi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_tawila.php">Wahda Tawila 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/jurjina.php">Jurjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">`Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Mudawwar 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Murabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Muhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Mukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khosh Rang 17/8</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhit 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatu ‘Ashar Masri 32/4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

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