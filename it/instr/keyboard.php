<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Tastiera Orientale";
$page_description = "La Tastiera Orientale";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Tastiera Orientale";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/keyboard.php";
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
                        <h1>La Tastiera Orientale</h1>
                        <h3>Un sintentizzatore/sampler con la possibilità di suonare i quarti di tono</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="La Tastiera Orientale">
                        <span>La Tastiera Orientale Ketron Vega</span>
                    </div>

                    <p> La tastiera orientale è il successore dell'<a href="org.php">organo</a>, arrivò sul mercato alla fine del XX secolo. La sua forza fu quella di poter imitare il suono di vari strumenti tradizionali arabi attraverso i sample, in modo che i musicisti potessero usare il <em>Mijwiz</em>, il <a href="qanun.php">Qanun</a> o anche un <a href="saxophone.php">sassofono</a> semplicemente cliccando un tasto.
                    </p>
                    <p> La maggior parte delle compagnie produttrici di sintetizzatori (come Roland, Yamaha, GEM, Kawai, Korg e Ketron) svilupparono un modello di tastiera orientale includendo un generatore di ritmi in modo che il musicista potesse suonare sopra un <a href="../iqaa.php">iqa‘</a> pre-registrato con i sample degli strumenti arabi percussivi. Questa fa della tastiera orientale uno strumento potente e versatile, essenziale nella musica araba pop e dance.
                    </p>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="I tasti per i quarti di tono della tastiera orientale.">
                        <span>12 interruttori che permettono di abbassare ogni nota sulla tastiera di un quarto di tono</span>
                    </div>

                    <p> La tastiera orientale è in grado di suonare un quarto di tono su ognuna delle 12 note semplicemente premendo un interruttore.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Aw‘idak</b>
                                    <span>L'orchestra nazionale araba (U.S.A) mentre suona <strong>Aw‘idak</strong> di Su‘ad Muhammad in un arrangiamento che include la tastiera orientale e la chitarra elettrica insieme agli strumenti tradizionali arabi.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Shamstep</b>
                                    <span>Il gruppo pan-palestinese <strong>47Soul</strong> aggiunge un utilizzo interessante al normale uso della tastiera orientale utilizzando effetti e suoni che creano un nuovo genere techno-dabke, come nella loro hit <strong>Shamstep</strong>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Araba</a></li>
						<li><a href="org.php">L'Organo Elettrico Arabo</a></li>
                    	<!--
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
						-->
						<li><a href="piano.php">Il Piano Arabo</a></li>
						<li><a href="saxophone.php">Il Sassofono</a></li>
						<li><a href="trumpet.php">La Tromba</a></li>
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
