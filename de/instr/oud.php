<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Die Oud (‘Ud)";
$page_description = "Die Oud (‘Ud)";
$page_keywords = "Traditionelle arabische Instrumente, Die Oud (‘Ud), Das Kanun, Die Nay, Die arabische Violine, Der Buzuk";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "de/instr/oud.php";
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
                        <h1>Die Oud (‘Ud)</h1>
                        <h3>Eine bundlose Laute</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Instrumenten verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="Die Oud (‘Ud)">
                        <span>Syrische Oud, hergestellt von den Brüdern Nahat (rechts), und irakische Oud, hergestellt von Muhammad Fadil (links). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Oud</a>
                    </div>

                    <p>Die Oud (bisweilen auch ‘Ud geschrieben; das grammatikalische Geschlecht im Arabischen ist maskulin) ist eines der populärsten Instrumente in der arabischen Musik. Der Name bedeutet “kleiner Holzstreifen” auf Arabisch. Dies bezieht sich auf die Holzstreifen, die benutzt werden, um den birnenförmige Korpus des Instruments herzustellen. Der Hals des Instruments ist im Verhältnis zum Korpus ziemlich kurz. Er hat keine Bünde. Dies erlaubt dem Musiker, eine exakte Intonation zu erreichen, und macht das Instrument ideal für das Spiel arabischer <a href="../maqam.php">Maqamat</a>.
                    </p>
                    <p>Die Oud hat fünf unisono gestimmte Saitenpaare und eine Bassseite. Allerdings haben einige Ouds noch ein extra Saitenpaar. Die häufigste Stimmung (von tief nach hoch) ist C, F, A, D, G, C, was bedeutet, dass die Saiten im Wesentlichen in Quartabständen gestimmt sind. Die Saiten wurden früher zumeist aus Tierdarm hergestellt und mit einem Plektrum namens Risha (Arabisch für “Feder”) gespielt. Die modernen Saiten sind aus Nylon, der mit Stahl umwickelt ist, und moderne Rishas sind aus Plastik, Schildkrötenpanzer, Tierhorn oder Bambus gefertigt.
                    </p>
                    <p>
                    Das Instrument hat ein warmes Timbre und einen großen Tonumfang (mehr als drei Oktaven). Es transportiert sowohl die melodischen als auch die rhythmischen Aspekte der Musik hervorragend, weil es recht perkussiv ist. Das macht es sehr geeignet für Gesangsbegleitung. Die Oud ist außerdem ein Instrument, auf dem Musiker gerne Stücke komponieren. Oud-<a href="../form/improv.php#taqsim">Taqasim</a> sind sehr beliebt bei Livekonzerten und Musik-Aufnahmen.
                    </p>
                    <p>Die arabische Oud wird auch in anderen Ländern der Region gespielt, etwa in der Türkei, in Griechenland und dem Iran, wenn auch mit minimalen Unterschieden in den Dimensionen, im Stil und im Timbre. Die europäische Laute stammt von der Oud ab. Das gilt auch für die Bezeichnung (al-oud).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dDrVYyoMi-4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dDrVYyoMi-4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad al-Qasabgi</b>
                                    <span>Der ägyptische Oud-Virtuose und Komponist Muhammad al-Qasabgi spielt einige Taqsim im Maqam Rast (aufgenommen am arabischen Musikkonservatorium in Kairo, 1955).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zGoY5QYLnYs&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zGoY5QYLnYs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Farid al-Atrash</b>
                                    <span>Der syrische Oud-Virtuose Farid al-Atrash (auch bekannt als der König der Oud) spielt einen berühmten Oud-Taqsim im Maqam Bayati vor seiner Komposition <strong>al-Rabi‘</strong> (1949).</span>
                                </div>
                            </label>
                        </div>
                    </div>

			         <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OCmheJ929fo&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OCmheJ929fo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Der palästinensische Oud-Spieler Simon Shaheen spielt einen Oud-Taqsim im Maqam Hijaz, aufgenommen im Metropolitan Museum in New York, 1987.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Jf3WeItCpXA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Jf3WeItCpXA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>George Michel</b>
                                    <span>Der ägyptische Oud-Spieler George Michel spielt einen Oud-Taqsim im Maqam Nahawand.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg&t=0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammouri</b>
                                    <span>Der syrische Oud-Spieler Amer Ammouri spielt einen Oud-Taqsim im Maqam Bayati, als Teil von Sabah Fakhris Orchester (aufgenommen in der Oper in Kairo).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere traditionelle arabische Instrumente:</p>
                    <ul>
                    	<!--
                        <li><a href="oud.php">Die Oud (‘Ud)</a></li>
                        -->
                        <li><a href="qanun.php">Das Kanun</a></li>
                        <li><a href="nay.php">Die Nay</a></li>
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
