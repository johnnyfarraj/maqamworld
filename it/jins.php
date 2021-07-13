<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Jins";
$page_description = "Il Jins";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Il Jins</h1>
                        <h3>Un frammento di scala di 3, 4 o 5 note su cui è costruito un maqam.</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Jins/Ajnas</a>
                    </div>

                    <p>Il <em>Jins</em> (plurale <em>Ajnas</em>) è un frammento di scala di un maqam di 3,4, o 5 note. ll jins è l'unita melodica di base nella musica araba, in quanto un <a href="maqam.php">maqam</a> è un vero e proprio percorso attraverso molti <em>ajnas</em>. Ogni jins è definito dai suoi intervalli, che non cambiano quando questo viene trasportato (in altre tonalità), e conferiscono ad ogni jins il suo carattere distintivo e riconoscibile.
                    </p>

                    <p>La tonica del jins è la nota fondamentale, la nota a cui la melodia fa ritorno per la sua risoluzione. Solitamente è la prima nota del jins. La <em>Sensibile</em> è la nota immediatamente sotto la tonica. Il <em>ghammaz</em> è la nota a cui viene conferita maggior enfasi melodica (oltre alla tonica), ed è anche il punto di partenza più comune di un nuovo jins (il cambio del jins o del <a href="maqam.php">maqam</a> è chiamato modulazione).
                    </p>

                    <p>La dimensione del jins è il numero di note tra la tonica e il <em>ghammaz</em>. Queste note sono chiamate "scala fondamentale del Jins" (o più semplicemente scala). Al di fuori della scala principale (sia verso il grave che verso l’acuto) ci sono note che fanno parte del vocabolario melodico del jins. Queste note sono chiamate “bagaglio” del jins. La scala fondamentale più le note “bagaglio” formano la scala jins estesa.
                    </p>

                    <p>Ogni jins espone la scala fondamentale usando note lunghe, con la tonica e il <em>ghammaz</em> come note intere. Le note “bagaglio” del jins sono di durata inferiore. Alcuni jins possono avere differenti opzioni per alcune delle note “bagagli”.
                    </p>

                    <p>Puoi iniziare a scoprire gli ajnas usando l'<strong>Indice del Jins</strong> (in ordine alfabetico) o usando la tabella qui sotto (raggruppati per dimensione):
                    </p>
                    
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">3-note</div>
                                <!-- Header Cell: "3-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Jins Musta‘ar</a></li>
                                    <li><a href="jins/sikah.php">Jins Sikah</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">4-note</div>
                                <!-- Header Cell: "4-note" -->
                                <ul class="page-list">
                                   <li><a href="jins/upper_ajam.php">Jins ‘Ajam Alto</a></li>
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Murassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Rast Alto</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">5-note</div>
                                <!-- Header Cell: "5-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Jins ‘Ajam</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Jins ‘Ajam Murassa‘</a></li>
                                    <li><a href="jins/athar_kurd.php">Jins Athar Kurd</a></li>
                                    <li><a href="jins/jiharkah.php">Jins Jiharkah</a></li>
                                    <li><a href="jins/nahawand.php">Jins Nahawand</a></li>
                                    <li><a href="jins/nikriz.php">Jins Nikriz</a></li>
                                    <li><a href="jins/rast.php">Jins Rast</a></li>
                                    <li><a href="jins/sazkar.php">Jins Sazkar</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(dimensione<br>indefinita)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Jins Hijazkar</a></li>
                                    <li><a href="jins/mukhalif_sharqi.php">Jins Mukhalif Sharqi</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Jins Nahawand Murassa‘</a></li>
                                    <li><a href="jins/saba.php">Jins Saba</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Jins Saba Dalanshin</a></li>
                                    <li><a href="jins/saba_zamzam.php">Jins Saba Zamzam</a></li>
                                    <li><a href="jins/sikah_baladi.php">Jins Sikah Baladi</a></li>
                                </ul>
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