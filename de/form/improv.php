<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Improvisierte Formen";
$page_description = "Improvisierte Formen";
$page_keywords = "Improvisierte Formen, Der Taqsim, die Layali, der Mawwal, die Qasida";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "de/form/improv.php";
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
                        <h1>Improvisierte Formen</h1>
                        <h3>Der Taqsim, die Layali, der Mawwal, und die Qasida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Formen Verzeichnis</a>
                    <div class="clearfix"></div>

                    <p>Improvisierte Formen sind die spontanste Form für eine Mutrib (Sänger) oder einen Instrumentalisten, mit dem Publikum in Kontakt zu treten und den <em>Sayr</em> eines <a href="../maqam.php">Maqams</a> auszuloten.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Die Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Layali</a>
                    </div>
                    <p>
                    Die Layali-Form ist eine Soloimprovisation über die Phrase "Ya Layl Ya 'Ayn" (O Nacht, o Auge), wobei Layali der Plural des arabischen Wortes "layl" ist. Diese traditionelle Phrase ist nicht mehr mit ihrem Sinngehalt verbunden, sondern dient als vokales Füllmaterial und als Material für vokale Ornamentierung.
                    </p>
                    <p>
                    Layali können allein stehen. Meist werden sie jedoch als Vorspiel für die nächste Vokalform gebraucht (Mawwal, Qasida oder komponierte Vokalformen). In diesem Fall helfen sie dem Sänger, in den Maqam hineinzufinden.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Kadni el-Hawa</b>
                                <span>Marie Jubrans Aufnahme von Dawr Kadni el-Hawa beginnt mit einem Kanun-Taqsim, dem Layali im Maqam Nahawand folgen</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Taqtuqa Leh Ya Banafseg</b>
                                    <span>Saleh Abdel Hayys Aufnahme von <strong>Taqtuqa Leh Ya Banafseg</strong> ist eine lange Wasla, die mit einem Oud-Taqsim beginnt, gefolgt von einem Sama'i, einem Kanun-Taqsim, einer Wiederholung des Taslins des Sama'i, Layali, alle im Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Khayri - Layali</b>
                                <span>Der Sänger Muhammad Khayri aus Aleppo beginnt seine Wasla im Maqam Rast mit Layali, bevor er zu einer improvisierten Qasida übergeht und dann zu einem Qudud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>Der Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i>  Aussprache von Mawwal</a>
                    </div>
                    <p> Der Mawwal (Plural: Mawawil) ist eine Solo-Vokalimprovisation über ein umgangssprachlicher Gedicht. Das Gedicht kann beispielsweise in einem ägyptischen, libanesischen, syrischen oder irakischen Dialekt sein. Wie auch bei anderen Vokalimprovisationen geht es hier darum, den Sayr des Maqam darzustellen und natürlich die schöne Stimme und die Verzierungstechnik des Sängers.
                    </p>
                    <p> Eine wichtige Variante des Mawwal ist der Baghdadi Mawwal, der auch Sab'awi genannt wird (nach sab'a = sieben). Er enthält sieben Zeilen, die sich A, A, A, B, B, B, A reimen. Der Baghdadi Mawwal ist sehr beliebt im Repertoire von Aleppo, ebenso wie übrigens die <a href="vocal_comp.php#muwashah">Muwashahat</a>- und die <a href="vocal_comp.php#qadd">Qudud</a>-Form.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sadduk ‘Anni el-‘Ida</b>
                                    <span>Der Sänger Muhammad Khayri aus Aleppo beginnt seine Wasla im Maqam Bayati mit einem Sama'i,  gefolgt vom Mawwal Sadduk ‘Anni el-‘Ida</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3-6DD0tbYbo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3-6DD0tbYbo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span><strong>Mawwal Ashki Li Min el-Hawa</strong> von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=C4BDAcZTPMs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/C4BDAcZTPMs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Min Youm Firgak</b>
                                    <span><strong>Mawwal Baghdadi Min Youm Firgak</strong> von Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>Die improvisierte Qasida</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i>Aussprache von Qasida</a>
                    </div>
                    <p> Die Qasida (Plural: Qasa'id) ist ein Gedicht in einem Metrum in klassischem Arabisch. Es kann in einer komponierten Form benutzt werden (siehe komponierte Qasida) oder in einer improvisierten Form. Die improvisierte Qasida hat mit der Mawwal gemeinsam, wie sie den Sayr des Maqam, die Stimme des Sängers und seine Verzierungstechnik vorstellt.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Man Yara Admu‘i</b>
                                    <span>Muhammad Khayris <strong>Qasida Ya Man Sara Admu‘i</strong> im Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qul Lil-Maliha</b>
                                <span>Sabah Fakhris Erkennungs-Qasida <strong>Qul Lil-Maliha</strong> im Maqam Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>Der Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i>  Aussprache von Taqsim</a>
                    </div>
                    <p> Der Taqsim (Plural: Taqasim) ist eine Instrumentalimprovisation, das von traditionellen Vorgaben bestimmt wird. Er folgt dem Sayr des Maqam sehr genau, auch was die Intonation, die Phrasierung und die Modulation angeht. Der Taqsim demonstriert auch die Schönheit des Instruments, seine Verzierungsmöglichkeiten sowie die Fähigkeiten und die Persönlichkeit des Instrumentalisten.
                    </p>
                    <p> Der Taqsim hat einen bogenförmigen Verlauf. Die Teile werden durch kleine Kadenzen und Pausen abgegrenzt. Der Taqsim kann alleine stehen oder in ein Lied oder eine <a href="vocal_comp.php#wasla">Wasla</a> eingebunden sein.
                    </p>
                    <p>Das beliebteste und am meisten verbreitete Taqsim-Instrument ist die Oud, dicht gefolgt von Violine, Nay und Kanun. Auch können arabisierte Instrumente wie das Akkordeon für einen Taqsim benutzt werden.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Aboud Abdel ‘Al</b>
                                    <span>Violin-Taqsim im Maqam Bayati von About Abdel ‘Al. Voraus geht Sama‘i Bayati Ibrahim al-‘Aryan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Oud-Taqsim von ‘Amer ‘Ammuri im Maqam Bayati während eines Konzerts von Sabah Fakhri
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere Formgruppen:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Vokale komponierte Formen</a></li>
                        <li><a href="instr_comp.php">Instrumentale komponierte Formen</a></li>
                        <li><a href="ottoman.php">Kompositorische ottomanische Instrumentalformen</a></li>
                        <!--
                        <li><a href="improv.php">Improvisierte Formen</a></li>
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
