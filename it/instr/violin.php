<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Violoin Arabe";
$page_description = "Il Violino Arabe";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Violino";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/violin.php";
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
                        <h1>Il Violino Arabe</h1>
                        <h3>Chiamato anche <em>Kamanja</em> o <em>Kaman</em> in arabo</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/violin.jpg" alt="Il Violino">
                        <span>Violon &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kamanja.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Kamanja</a>
                    </div>

                    <p>
                        Il violino (chiamato <em>kamanja</em> o <em>kaman</em> in arabo) è stato aggiunto ai gruppi arabi verso la fine del IXX secolo e sostituì strumenti simili locali come la <em>kamanja</em>, la <em>rababa</em> e la <em>joza</em>. Il violino può essere considerato l'esempio migliore di strumento arabizzato, è stato a lungo naturalizzato, e ha ottenuto la sua accordatura, la sua tecnica e il suo stile. Il violino da un suono essenziale alla musica araba allo stesso livello dell'<a href="oud.php">oud</a> e del <a href="qanun.php">qanun</a>.
                    </p>
                    <p>
                        Anche se vengono utilizzate varie accordature quella tradizionale araba è formata da quarte e quinte (Sol3, Re4, Sol4, Re5). Essendo uno strumento senza tasti il violino può produrre tutte le sfumature di intonazione del sistema di <a href="../maqam.php">maqam</a> arabi.
                    </p>
                    <p>
                        Il modo di suonare il violino arabo è molto ricco, usa spesso effetti come slide, trilli, vibrati, raddoppi e utilizza spesso una corda aperta come suono ripetitivo. Il timbro del violino arabo varia da un suono ricco e caldo, simile a quello del violino occidentale, a un suono nasale e acuto.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_ZWvLygSqkY&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_ZWvLygSqkY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Shawwa</b>
                                    <span>Un des pionniers du violon arabe du début du 20<sup>ième</sup> siècle, le violoniste syrien Sami al-Shawwa (connu aussi comme le Prince du Violon) jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=y3lE8MpM1kA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/y3lE8MpM1kA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ahmad al-Hifnaoui</b>
                                    <span>Le violoniste égyptien Ahmad al-Hifnaoui (qui était premier violon dans l'orchestre de Oum Koulthoum) joue la pièce traditionnelle instrumentale <strong>Tahmila Rast (Suznak)</strong> qui est pleine d'improvisations. L'ensemble est composé aussi de George Michel au <a href="oud.php">oud</a>, Mahmud ‘Effat au <a href="nay.php">nay</a> et Hassan Anouar au <a href="riqq.php">riqq</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abbud Abdel ‘Al</b>
                                    <span>Le violoniste palestino-libanais Abbud Abdel ‘Al joue un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/bayati.php">Maqam Bayati</a> sur le <a href="../iqaa/samai.php">Iqa‘ Sama‘i Thaqil</a> (enregistré sur la télévision libanaise).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=pMCnu_2r-wQ&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/pMCnu_2r-wQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdo Dagher</b>
                                    <span>Le violoniste égyptien Abdo Dagher et son ensemble jouant sa composition Sama‘i <a href="../maqam/kurd.php">Maqam Kurd</a>, avec solos de <a href="violon.php">violon</a> et de <a href="qanun.php">qanun</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2jVRlAbqscg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2jVRlAbqscg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Le violoniste palestinien Simon Shaheen jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/rast.php">Maqam Rast</a> sur l'<a href="../iqaa/rumba.php">Iqa‘ Rumba</a>, finissant par la deuxième partie de la composizione strumentale Longa<a href="../maqam/nahawand.php">Farahfaza</a> de Riyad al-Sunbati.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti tradizionali:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <li><a href="qanun.php">Il Qanun</a></li>
                        <li><a href="nay.php">Il Nay</a></li>
                        <!--
                        <li><a href="violin.php">Il Violino</a></li>
                        -->
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
