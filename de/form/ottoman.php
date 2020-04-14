<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Kompositorische ottomanische Instrumentalformen";
$page_description = "Kompositorische ottomanische Instrumentalformen";
$page_keywords = "Kompositorische ottomanische Instrumentalformen, Der Sama‘i, die Longa, der Bashraf";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "de/form/ottoman.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Formen Verzeichnis</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Kompositorische ottomanische</h1>
                        <h1>Instrumentalformen</h1>
                        <h3>Der Sama‘i, die Longa, der Bashraf</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Formen Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Khana</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Taslim</a>
                    </div>

                    <p>Drei kompositorische Instrumentalformen wurden der türkischen, also ottomanischen Musik entlehnt und sind immer noch Teil der arabischen Musik: der Sama’i, die Longa und der Bashraf. Von all diesen hat der Sama’i am besten überlebt, was sich daran zeigt, dass arabische Musiker auch im einundzwanzigsten Jahrhundert immer noch in diesem Format komponieren.
                    </p>
                    <p>Alle drei Formen basieren auf einem Refrain, der <em>Taslim</em> (im Türkischen heißt er "teslim" = übergeben) genannt wird, und einer Anzahl unterschiedlicher Verse, die <em>Khana</em> (im Türkischen lautet die Bezeichnung "hane" = Haus) genannt werden. Alle drei Formen sind in einem <a href="../maqam.php">Maqam</a> verankert und benutzen dessen <em>Sayr</em> und dessen übliche Modulationen. Aus diesem Grund sind der Maqam (und gewöhnlich auch der Komponist) Teil des Namens der Komposition.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>Der Sama‘i</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Sama’i</a>
                    </div>

                    <p>Der Sama’i (Türkisch: "saz semaî") bezeichnete im türkischen Musiksystem ursprünglich Dreierrhythmen. Er ist eine Instrumentalform, die aus vier unterschiedlichen Khanas besteht, denen jeweils ein Taslim folgt. Die Struktur ist also K1 T K2 T K3 T K4 T. Alle Teile sind im <a href="../iqaa/samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a> gehalten. Eine Ausnahme bildet zumeist Khana 4, wo der Rhythmus gewöhnlich zu einem kurzen Muster wie <a href="../iqaa/samai_saraband.php">Iqa‘ Sama‘i Saraband</a> oder <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darij</a> wechselt.

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Bayati - Ibrahim al-‘Aryan</b>
                                    <span>Sama‘i Bayati von Ibrahim al-’Aryan (Ägypten) im Maqam Bayati, aufgenommen vom Tunesischen Radioorchester</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Hijazkar Kurd - Rawhi al-Khammash</b>
                                    <span></span>
                                    <span>Sama’i Hijazkar Kurd von Rawhi al-Khammash (Palästina) im Maqam Hijazkar Kurd, in dem im vierten Khana Iqa’ Jurjina erklingt</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Kurd - ‘Abdu Dagher</b>
                                    <span></span>
                                    <span>Sama’i Kurd von ‘Abdu Dagher (Ägypten) im Maqam Kurd, dem eine lange komponierte Einleitung vorausgeht</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Rast - George Michel</b>
                                    <span>Sama’i Rast von George Michel (Ägypten) im Maqam Rast, aufgenommen vom Tunesischen Radioorchester</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Nawa Athar - Jamil ‘Uways</b>
                                    <span>Sama’i Nawa Athar von Jamil ‘Uways (Syrien) im Maqam Nawa Athar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>Die Longa</h3>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Longa</a>
                    </div>

                    <p> Die Longa (das Türkische hat das Wort vermutlich der weiblichen Form des lateinischen Wortes "longus" = lang entlehnt), ist die zweitbeliebteste ottomanische Instrumentalform. Sie ist normalerweise im kurzen, hüpfenden <a href="../iqaa/fox.php">Iqa‘ Fox</a> im Khana und <a href="../iqaa/malfuf.php">Iqa‘ Malfuf</a> im Taslim gesetzt.
                    </p>
                    <p> Viele Longas der ottomanische Periode nutzen Maqamat ohne Vierteltöne wie <a href="../maqam/nahawand.php">Nahawand</a>, <a href="../maqam/hijaz.php">Hijaz</a> und <a href="../maqam/nikriz.php">Nikriz</a>. Die Melodien erinnern oft an den Balkan, insbesondere an rumänische Zigeunermusik. Viele arabische Komponisten verfolgen diesen Ansatz noch heute und schreiben Stücke in diesem Stil.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Farahfaza - Riyad al-Sunbati</b>
                                    <span>Longa Farahfaza von Riyad al-Sunbati (Ägypten) im Maqam Farahfaza, das im Maqam Nahawand gehalten ist (nach G transponiert), aufgenommen vom Simon-Shaheen-Ensemble. </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa ‘Ajam - ‘Abdu Daghir</b>
                                    <span>Longa ‘Ajam von ‘Abdu Daghir (Ägypten) im Maqam ‘Ajam, von seinem Ensemble aufgenommen</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Nahawand - Dr. Alfred Gamil</b>
                                    <span>Longa <a href="../maqam/nahawand.php">Nahawand</a> von Dr. Alfred Gamil (Ägypten), von seinem Ensemble aufgenommen</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="bashraf" class="heading jins text-center full-width">
                        <h3>Der Bashraf</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bashraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Bashraf</a>
                    </div>

                    <p>Der Bashraf (Türkisch "peşrev" = das Vorangehende) ist die am wenigsten verbreitete ottomanische Instrumentalform. Sie verbleibt meist im Dunstkreis des Musikunterrichts und der Etüden. Der Bashraf besteht aus vier Khanas, jeweils gefolgt von demselben Taslim. Arabische Musiker benutzen diese Form nahezu nie.
                    </p>
                    <p>Im Gegensatz zum Sama’i hat der Bashraf nur einen <a href="../iqaa.php">Iqa‘</a>, gewöhnlich einen geradtaktigen Iqa’ wie <a href="../iqaa/masmudi_kabir.php">Masmudi Kabir (8/4)</a>, <a href="../iqaa/mukhammas.php">Mukhammas (16/4)</a>, Shanbar (24/4), Dawr al-Kabir (28/4) oder längere ottomanische Rhythmus-Zyklen.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Farahfaza</b>
                                    <span>Bashraf Farahfaza von Ismail Hakki Bey (ottomanisch) im Maqam Farahfaza, also Maqam Nahawand nach G transponiert, aufgenommen vom Simon-Shaheen-Ensemble</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Kara Batak Sikah (1929)</b>
                                    <span>Bashraf Kara Batak in Maqam Sikah, aufgenommen 1929 von Sami al-Shawwa (Violine) und Muhammad al-Qasabgi (Oud)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- add Bashraf Rast Tatyos Effendi -->

                    <p>Erkunden Sie andere Formgruppen:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Vokale komponierte Formen</a></li>
                        <li><a href="instr_comp.php">Instrumentale komponierte Formen</a></li>
                        <!--
                        <li><a href="ottoman.php">Kompositorische ottomanische Instrumentalformen</a></li>
                        -->
                        <li><a href="improv.php">Improvisierte Formen</a></li>
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
