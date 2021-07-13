<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die Nay";
$page_description = "Die Nay";
$page_keywords = "Traditionelle arabische Instrumente, Die Oud ('Ud), Das Kanun, Die Nay, Die arabische Violine, Der Buzuk";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/nay.php";
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
                        <h1>Die Nay</h1>
                        <h3>Eine Flöte, bei der in das obere Ende geblasen wird</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/nay.jpg" alt="Die Nay">
                        <span>Ein Satz von sieben libanesischen Nayat, hergestellt von Atif Wehbi. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nay.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Nay</a>
                    </div>

                    <p>Die Nay (Farsi für “Schilfrohr”; im türkischen Kontext überwiegend Ney geschrieben; Geschlecht im Arabischen Maskulinum) ist eine Schilf-Flöte mit offenem Ende, das zum Spielen schräg angesetzt wird. Die Nay ist im Nahen Osten seit der Antike bekannt. Sie ist neunknotig und hat gewöhnlich sechs Löcher vorne und ein Loch hinten für den Daumen. Sie wird im Wesentlichen nicht mit den Fingerkuppen, sondern mit den Fingerinnenseiten gespielt. Nays kommen je nach Stimmung in verschiedenen Längen. Sie werden benannt nach dem Griff, der entsteht, wenn alle Löcher bis auf das unterste geschlossen sind. Die gebräuchlichste Nay ist D4 und hat als tiefsten Ton ein C4.
                    </p>
                    <p>Die Nay wird mit einer speziellen Technik gespielt, die sich bilabiales Blasen nennt. Sowohl die Ober- als auch die Unterlippe werden benutzt, um das Ende des abgeschrägten Blasrohrs partiell zu schließen. Das zweite Register überbläst in der Quinte, das dritte in der Oktave. Einige der Tonlöcher sind für Mikrointervalle wichtig, wobei Vierteltöne auch erzeugt werden können, indem man Tonlöcher nur zum Teil schließt, den Blaswinkel verändert oder beides kombiniert.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JhOs_1SodTA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JhOs_1SodTA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sayyed Salem</b>
                                    <span>Sayyed Salem (Ägypten), der lange im Orchester von Umm Kulthum mitgespielt hat, spielt ein Nay-Solo während ihres Stückes <strong>Ba‘id ‘Annak</strong> (1965, Musik von Baligh Hamdi).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D2oBZADKIS4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D2oBZADKIS4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mahmud ‘Effat</b>
                                    <span>Der Nay-Veteran und Lehrer Mahmud ‘Effet, lange Zeit Mitglied im Diamond Orchestra (Äpypten) in einem Nay-Taqsim im Maqam Saba</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5OflJML1yF8&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5OflJML1yF8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Reda Bdeir</b>
                                    <span>Reda Bdeir (Ägypten) spielt <strong>Kulli Da Kan Leh</strong> (1954, Musik von Muhammad Abdel Wahab).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=CozVcLFpOeM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/CozVcLFpOeM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Michael Ibrahim</b>
                                    <span> Michael Ibrahim (Syrien), Chef des National Arab Orchestra (USA) in einem Nay-Taqsim im Maqam Saba während einer Liveaufnahme seines Orchesters</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere traditionelle arabische Instrumente:</p>
                    <ul>
                        <li><a href="oud.php">Die Oud (‘Ud)</a></li>
                        <li><a href="qanun.php">Das Kanun</a></li>
                        <!--
                        <li><a href="nay.php">Die Nay</a></li>
                        -->
                        <li><a href="violin.php">Die arabische Violine</a></li>
                        <li><a href="buzuq.php">Der Buzuk</a></li>
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
