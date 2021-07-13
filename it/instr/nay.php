<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Nay";
$page_description = "Il Nay";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Nay";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/nay.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Il Nay</h1>
                        <h3>Un flauto dolce</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/nay.jpg" alt="Il Nay">
                        <span>Un insieme di 7 nay libanesi fatti da Atif Wehbi. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nay.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Nay</a>
                    </div>

                    <p>
                    Il nay (in persiano "canna") è un flauto dolce obliquo aperto fatto di canna. Il nay era conosciuto nel vicino oriente fin dall'antichità. Solitamente è formato da 6 buchi davanti e un buco dietro usato dal pollice. I buchi vengono chiusi (per ottenere suoni diversi) tramite il polpastrello delle dita. Il nay può avere differente lunghezza, ognuno intonato rispetto ad un particolare suono e chiamato con il nome della nota prodotta con il primo buco aperto (D4 nella magior parte dei casi, la nota più bassa in questo caso è il Do 4).
                    </p>
                    <p>
                    Anche se molto semplice, il nay è uno degli strumenti arabi più difficili da suonare. Un buon musicista sa suonare una varietà di suoni e abbellimenti; è uno strumento molto espressivo. Il suo timbro poetico lo rende particolarmente adatto per dare sia un effetto malinconico che un effetto di gioia. È l'unico strumento a fiato usato nella musica araba, molto apprezzato per il suo suono caldo, ansimante e per le sue dinamiche e infessioni tonali.
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
                                    <span>Sayyed Salem (Egitto), un membro di lunga data della Umm Kulthum Orchestra, in un assolo di Nay durante la canzone <strong>Ba‘id Annak</strong> (1965, musica di Baligh Hamdi).</span>
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
                                    <span>
                                    Il suonatore e insegnante di nay, Mahmud ‘Effat (Egitto), membro di lunga data nella Diamond Orchestra durante un <a href="../form/improv.php#taqsim">Taqsim</a> con il nay sul <a href="../maqam/saba.php">Maqam Saba</a>.
                                    </span>
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
                                    <span>Reda Bdeir (Egitto) mentre suona la canzone <strong>Kulli Da Kan Leh</strong> (1954, musica di Muhammad Abdel Wahab).
                                    </span>
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
                                    <span>
                                    Michael Ibrahim (Siria), direttore dell'orchestra nazionale araba (USA) durante un <a href="../form/improv.php#taqsim">Taqsim</a> con il nay sul <a href="../maqam/saba.php">Maqam Saba</a> durante un concerto.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti tradizionali:</p>
                    <ul>
                        <li><a href="oud.php">L'Oud</a></li>
                        <li><a href="qanun.php">Il Qanun</a></li>
                    	<!--
                        <li><a href="nay.php">Il Nay</a></li>
                        -->
                        <li><a href="violin.php">Il Violino</a></li>
                        <li><a href="buzuq.php">Il Buzuq</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
