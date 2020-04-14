<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Daff";
$page_description = "Il Daff";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Daff";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/daff.php";
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
                        <h1>Il Daff</h1>
                        <h3>Il generico tamburo a cornice</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daf">
                        <span>Tre daf in pelle di capra e cervo. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Daf</a>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Bandir</a>
                    </div>

                    <p>Daf è una parola generica per definire il tamburo a cornice usato nel mondo Arabo, ma può avere differenti nomi in base alla località: Mazhar in Siria e Egitto o <em>Bandir</em> in Nord Africa.
                    </p>

                    <p>Il daf è un tamburo a cornice circolare del diamentro di 30cm nel modello più piccolo e di 60 cm in quello più largo (e grave). La cornice può essere profonda 10 cm per i diametri più piccoli e tra i 5 e i 7,5 cm per i diametri più grandi. La pelle è generalemente di capra, cervo o altre pelli naturali, ed è permanentemente incollata alla corcnice, mentre i daf moderni hanno generalemte una pelle di plastica e sono accordabili.
                    </p>
                    
                    <p>Il daf è molto popolare nella musica Sufi (dove è spesso l'unico strumento usato per accompagnare il cantante), ed è anche usato nei generi classici, folk e pop per aver una sezione ritmica più ricca.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FFViUJriwXE&t=515s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FFViUJriwXE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Il complesso di Hassan al-Haffar</b>
                                <span>Utilizzo del <em>daf</em> dal complesso di <em>Munshid</em> (cantore islamico) Hassan al-Haffar, registrato in concerto a Parigi.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ya_3rWXI1is&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ya_3rWXI1is/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Duqqu el-Mazaher</b>
                                    <span>La canzone di matrimonio <strong>Duqqu el-Mazaher</strong> ("Suoana il tamburo a cornice", 1952)  di Farid al-Atrash insieme a molti tamburi a cornice usati nella celebrazione dei matrimoni.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti  a percussione:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <!-- <li><a href="daff.php">Il Daff</a></li> -->
                        <li><a href="mazhar.php">Il Mazhar</a></li>
                        <li><a href="katim.php">Il Katem</a></li>
                        <li><a href="sagat.php">Le Sagat</a></li>
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
