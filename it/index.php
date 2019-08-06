<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Mondo del Maqam";
$page_description = "Il Mondo del Maqam";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay,  quarti di tono, tarab";
$page_language = "it";
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "it/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Benvenuto nel nuovo <span>Mondo del Maqam</span></h1>
                        <h3>Il Mondo Del Maqam è una risorsa online dedicata all'insegnamento del sistema modale del Maqam Arabo, che è alla base della musica tradizionale araba. Questo sito si occupa principalmente di musica proveniente dalla parte del mediterraneo orientale del mondo arabo (Egitto, Palestina, Giordano, Lebano e Siria), si concentra in particolare sulla prima metà del XX sec.</h3>
                    </div>

                    <p>Dopo 17 anni di lavoro, MaqamWorld è stato rinnovato con l'aiuto di un finanziamento del 2016 da parte del <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">Fondo Arabo per l'Arte e la Cultura (AFAC)</a>.
                    </p>
                    <p>
                    Il Mondo Del Maqam mette a disposizione: 
					</p>

                    <ul>
                        <li>Una traduzione completa verso <a href="/en/index.php"><strong>l'inglese</strong></a>, <a href="/ar/index.php"><strong>l'arabo</strong></a>, <a href="/fr/index.php"><strong>il francese</strong></a> e <a href="/en/index.php"><strong>il tedesco</strong></a> (spagnolo e greco sono in corso di realizzazione).</li>
                        <li>Supporto per tutti i dispositivi (in particolare per gli smartphone).</li>
                        <li>Ricerca su google.</li>
                        <li>Contenuti aggiornati e più rilevanti.</li>
                        <li>Immagini e audio di qualità migliore.</li>
                        <li>Una migliore navigazione tramite menu e sottomenu.</li>
                        <li>Note audio cliccabili.</li>
                        <li>Una pagina "Contattaci" per fornirci un feedback.</li>
                    </ul>

                    <p>
                        Sono felice di annunciare la pubblicazione di un libro a cui ho lavorato con il mio amico Sami Abu Shumays (creatore di <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>), intitolato <a href="book.php">INSIDE ARABIC MUSIC</a>, pubblicato dalla <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> a Luglio 2019.
                        Il libro è un testo completo sulla musica araba e questo sito ha una funzione di supporto. 
                        Il libro è stato destinatario di un finanaziamento del 2012 dell'<a href="http://arabculturefund.org" target="_blank">AFAC</a>.
					</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Scorpi il sistema modale dei maqam arabi con esempi di scale e audio.</p>
                                    <a href="/it/maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Scopri i Jins, frammenti di scale che costituiscono la base di ogni Maqam.</p>
                                    <a href="/it/jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Ritmo</h5>
                                    <p class="card-text">Scorpi il ciclo ritmico arabo chiamato <b>Iqa‘</b>, formato dai suoni primitivi <em>dum</em> e <em>tak</em>.</p>
                                    <a href="/it/iqaa.php" class="btn btn-primary">Ritmo<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Forme</h5>
                                    <p class="card-text">Scopri le forme della musica araba, chiamate <b>Qawaleb</b>, usate sia nella musica vocale che strumentale, composta e improvvisata.</p>
                                    <a href="/it/forms.php" class="btn btn-primary">Forme<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Strumenti</h5>
                                    <p class="card-text">Scopri gli strumenti, melodici e percussivi, della tradizione araba e gli strumenti Occidentali che sono stati "Arabizzati".</p>
                                    <a href="/it/instr.php" class="btn btn-primary">Strumenti<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Pubblicazioni</h5>
                                    <p class="card-text">Scopri il nuovo libro <strong>Inside Arabic Music</strong> (scritto con Sami Abu Shumays) che sarà pubblicato a Luglio 2019.</p>
                                    <a href="/it/book.php" class="btn btn-primary">Pubblicazioni<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>