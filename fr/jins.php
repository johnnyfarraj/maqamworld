<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Jins";
$page_description = "Le Jins Maqam Musique Arabe";
$page_keywords = "musique arabe, maqam, instruments, jins, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Le Jins</h1>
                        <h3>Un fragment de gamme de 3, 4 ou 5 notes avec lequel un maqam est construit</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Jins/Ajnas</a>
                    </div>

                    <p>Le <em>Jins</em> (<em>Ajnas</em> au pluriel) sont des fragments de gamme de 3, 4 ou 5 notes. Le Jins est l'unité mélodique de base en musique arabe dans le sens qu'un <a href="maqam.php">maqam</a> est une route entre plusieurs <em>ajnas</em>. Chaque <em>jins</em> est défini par ses intervalles (qui ne changent pas quand il y a transposition) qui lui donnent son caractère distinct et reconnaissable.
                    </p>

                    <p>La tonique d'un <em>jins</em> est la note qui reçoit l'emphase principale, la note vers laquelle la mélodie retourne pour se résoudre. C'est en général la première note du <em>jins</em>. La sensible est la note qui précède la tonique du <em>jins</em>. Le <em>ghammaz</em> est la note mélodiquement la plus importante (après la tonique) et est aussi la note qui démarre en général un nouveau <em>jins</em> (changer de <em>jins</em> ou de <a href="maqam.php">maqam</a> est appelé modulation).
                    </p>

                    <p>La taille d'un <em>jins</em> dépend du nombre de notes qui existent entre la tonique et le <em>ghammaz</em>. Ces notes sont appelées la gamme de base du <em>jins</em> (ou simplement gamme). À côté de la gamme de base (et ce, peu importe de quel côté) existent des notes qui font partie du vocabulaire mélodique des jins. Ces notes sont appelées baggage du <em>jins</em>. La gamme de base plus le baggage du <em>jins</em> forment ensemble la gamme étendue du <em>jins</em>.
                    </p>

                    <p>Chaque <em>jins</em> est noté de la manière suivante: les notes de la gamme de base sont indiquées par des noires tandis que la tonique et le <em>ghammaz</em> sont indiqués par des blanches. Les notes 'bagage du jins' sont indiquées par des caractères plus petits. Des fois, un jins possède plusieurs options quant aux notes qui forment son bagage.
                    </p>

                    <p>Vous pouvez commencer à explorer les ajnas en utilisant l'<strong>Index des Ajnas</strong> (en ordre alphabétique) ou en utilisant le tableau ci-dessous (où les jins sont regroupés en fonction de leur taille):
                    </p>
                    
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">3 notes</div>
                                <!-- Header Cell: "3-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Jins Mousta‘ar</a></li>
                                    <li><a href="jins/sikah.php">Jins Sikah</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">4 notes</div>
                                <!-- Header Cell: "4-note" -->
                                <ul class="page-list">
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/upper_ajam.php">Jins Haut ‘Ajam</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Haut Rast</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Mourassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">5 notes</div>
                                <!-- Header Cell: "5-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Jins ‘Ajam</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Jins ‘Ajam Mourassa‘</a></li>
                                    <li><a href="jins/athar_kurd.php">Jins Athar Kurd</a></li>
                                    <li><a href="jins/jiharkah.php">Jins Jiharkah</a></li>
                                    <li><a href="jins/nahawand.php">Jins Nahawand</a></li>
                                    <li><a href="jins/nikriz.php">Jins Nikriz</a></li>
                                    <li><a href="jins/rast.php">Jins Rast</a></li>
                                    <li><a href="jins/sazkar.php">Jins Sazkar</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(taille indéfinie)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Jins Hijazkar</a></li>
                                    <li><a href="jins/mukhalef_sharqi.php">Jins Moukhalef Sharqi</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Jins Nahawand Mourassa‘</a></li>
                                    <li><a href="jins/saba.php">Jins Saba</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Jins Saba Dalanchine</a></li>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>