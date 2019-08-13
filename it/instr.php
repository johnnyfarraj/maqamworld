<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Strumenti Musicali Arabi";
$page_description = "Strumenti Musicali Arabi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Strumenti Musicali Arabi</h1>
                        <h3>Strumenti Tradizionali, Arabizzati e Percussioni</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Naqr</a>
                    </div>

                    <p id="takht">Il tradizionale complesso Arabo o takht consiste in quattro strumenti melodici principali: l'<a href="instr/oud.php">oud</a>, il <a href="instr/nay.php">nay</a>, il <a href="instr/qanun.php">qanun</a> e il <a href="instr/violin.php">violino</a> uniti a uno strumento percussivo: il <a href="instr/riqq.php">riqq</a>. Spesso il riqq può essere integrato o sostituito con la <a href="instr/tabla.php">tabla</a> o il <a href="instr/daff.php">daff</a> (tamburo a cornice), e agli strumenti melodici si può aggiungere il <a href="instr/buzuq.php">buzuq</a>.</p>

                    <p>Dal punto di vista stilistico gli strumenti melodici si dividono in due famiglie: <em>sahb</em> (tirato o disteso) e <em>naqr</em> (pizzicato o battuto). Il violino e il nay fanno parte dei <em>sahb</em> mentre l'oud e il qanun fanno parte dei <em>naqr</em>. Le due famiglie sono concepite per essere complementari in modo da creare un suono più completo e ricco.</p>

                    <p>Gli strumenti arabizzati sono strumenti non arabi che sono entrati nei complessi Arabi nel XX secolo e iniziarono a far parte della musica araba di quel periodo. Molti di questi strumenti furono adottati inizialmente in Egitto, dove i musicisti svilupparono un nuovo stile e nuove tecniche musicali, che portarono questi strumenti a suonare in modo "Arabo". Alcuni strumenti arabizzati furono modificati per poter suonare note "aggiuntive" in modo da essere più vicini a quella che è la corretta intonazione dei <a href="../maqam.php">maqam</a> arabe. Altri invece sono stati usati come nel temperamento equabile di 12 note senza alcuna alterazione.
                    </p>
                    <p>Tra questi strumenti troviamo il <a href="instr/piano.php">piano</a>, il piano elettrico, l'<a href="instr/org.php">organo elettrico</a>, la <a href="instr/keyboard.php">tastiera orientale</a>, la <a href="instr/accordion.php">fisarmonica</a>, la <a href="instr/guitar.php">chitarra elettrica</a> e il basso elettrico. Alcuni di questi strumenti possono essere alterati per produrre quarti di tono. Anche la batteria e le percussioni elettriche vengono comunemente usate nella musica contemporanea araba pop e dance.
                    </p>

                    <p>Il flauto, il <a href="instr/saxophone.php">sassofono</a>, il clarinetto e la <a href="instr/trumpet.php">tromba</a> sono strumenti che non fanno parte del sistema temperato equabile e consentono quindi un controllo migliore sull'intonazione rispetto ai precedenti. Questi strumenti sono molto usati nella musica Araba, soprattutto nel Jazz Fusion Arabo moderno.
                    </p>

                    <p>Il violino, la viola, il violoncello e il contrabbasso sono strumenti largamente usati nella musica araba, specie neli grandi complessi come la Umm Kulthum's Orchestra e la Diamond Orchestra in Egitto. Essendo tutti strumenti fretless (senza tasti) si adattano meglio per essere usati nelle scale dei <a href="maqam.php">maqam</a> arabi.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">Strumenti Tradizionali</h5>
                                    <p class="card-text"><a href="instr/oud.php">L'e 'Oud</a></p>
                                    <p class="card-text"><a href="instr/qanun.php">Il Qanun</a></p>
                                    <p class="card-text"><a href="instr/nay.php">Il Nay</a></p>
                                    <p class="card-text"><a href="instr/violin.php">Il Violino</a></p>
                                    <p class="card-text"><a href="instr/buzuq.php">Il Buzuq</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">Strumenti Arabizzati</h5>
                                    <p class="card-text"><a href="instr/accordion.php">La Fisarmonica Arabe</a></p>
                                    <p class="card-text"><a href="instr/guitar.php">La Chitarra Elettrica Arabe</a></p>
                                    <p class="card-text"><a href="instr/org.php">L'Organo Elettrico Arabe</a></p>
                                    <p class="card-text"><a href="instr/keyboard.php">La Tastiera Orientale</a></p>
                                    <p class="card-text"><a href="instr/piano.php">Il Piano Arabo</a></p>
                                    <p class="card-text"><a href="instr/saxophone.php">Il Sassofono</a></p>
                                    <p class="card-text"><a href="instr/trumpet.php">La Tromba</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">Strumenti a Percussione</h5>
                                    <p class="card-text"><a href="instr/riqq.php">Il Riqq</a></p>
                                    <p class="card-text"><a href="instr/tabla.php">La Tabla</a></p>
                                    <p class="card-text"><a href="instr/tabl_baladi.php">Il Tabl Baladi</a></p>
                                    <p class="card-text"><a href="instr/daff.php">Il Daff</a></p>
                                    <p class="card-text"><a href="instr/mazhar.php">Il Mazhar</a></p>
                                    <p class="card-text"><a href="instr/katim.php">Le Katem</a></p>
                                    <p class="card-text"><a href="instr/sagat.php">Le Sagat</a></p>
                                </div>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
