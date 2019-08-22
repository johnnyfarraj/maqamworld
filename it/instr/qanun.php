<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Qanun";
$page_description = "Il Qanun";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Qanun";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/qanun.php";
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
                        <h1>Il Qanun</h1>
                        <h3>Una cetra da tavolo</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/qanun.jpg" alt="Il Qanun">
                        <span>Un qanum siriano fatto da Bashir Bij. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qanun.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qanun</a>
                    </div>

                    <p>
                    Il qanum è un discendente dell'antica arpa egizia. È presente nella musica araba dal X secolo. La parola <em>qanun</em> signifca "legge" in arabo. Questa parola fu scelta per il qanum perchè era lo strumento che stabiliva il tono per gli altri strumenti e per i cantanti.
                    </p>

                    <p>
                    Il corpo del qanum è costituito da una tavolo a forma di trapezio piatta in legno dove 81 corde sono tese in gruppi da tre, con 24  corde acute formate da 3 corde ognuna. Lo strumento viene disteso sulle ginocchia del musicista o su un piccolo tavolo. Le corde del qanum sono pizzicate da due plettri, ognuno attaccato al dito indice di ogni mano. Un lungo ponte sul lato destro dello strumento poggia su una finestra rivestita in pelle di capra (o di pesce) e consentono la risonanza delle cavità. Sul lato sinistro ogni corda passa attraverso una serie di leve di ottone che sono usate per effettuare micro variazioni tonali.
                    </p>

                    <p>
                    Siccome il qanum include solo 8 note per ogni ottava, il musicista inizialmente imposta le leve per creare la scala del <a href="../maqam.php">maqam</a> iniziale. Quando il musicista ha bisogno di modulare per un altro maqam, deve modificare l'impostazione delle leve, spostandole verso l'alto o verso il basso, con la mano sinistra mentre suona con la mano destra. Semplici alterazioni possono essere fatte usando l'unghia del pollice sinistro per aumentare temporaneamente la tonalità di alcune corde.
                    </p>

                     <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=fZPY3or3D-Y&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/fZPY3or3D-Y/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Abdo Saleh</b>
                                    <span>Muhammad Abdu Saleh (Egitto) suonatore di qanum con Umm Kulthum per decenni, mentre suona un medley delle sue canzoni più famose.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IUMC6-OHp1I&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IUMC6-OHp1I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Abdo Saleh</b>
                                    <span>Muhammad ‘Abdu Saleh (Egitto) mentre suona un <a href="../form/improv.php#taqsim">taqsim</a> con il qanum su un <a href="../maqam/saba.php">Maqam Saba</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=QqLcPLu6PXc&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/QqLcPLu6PXc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdel Fattah Mansi</b>
                                    <span>Abdel Fattah Mansi (Egitto) suona una canzone di Umm Kuklthum, <strong>Ana Fi-ntizarak</strong> (1943, musica di Zakariyya Ahmad).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DJnoomttU9Y&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DJnoomttU9Y/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdel Halim Nuera</b>
                                    <span>Abdel Halim Nuwayra (Egitto), il dierttore d'orchestra del Gruppo di Musica Araba, mentre suona un <a href="../form/improv.php#taqsim">taqsim</a> con il qanum sul <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                   <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GS9v3r3WDro&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GS9v3r3WDro/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abraham Salman</b>
                                    <span>Abraham Salman (Iraq) durante un <a href="../form/improv.php#taqsim">taqsim</a> con il qanum sul <a href="../maqam/rast.php">Maqam Rast</a> dal suo CD Saltanah (1998).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti tradizionali:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <!--
                        <li><a href="qanun.php">Il Qanun</a></li>
                        -->
                        <li><a href="nay.php">Il Nay</a></li>
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
