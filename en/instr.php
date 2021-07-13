<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Musical Instruments";
$page_description = "Arabic Musical Instruments";
$page_keywords = "arabic, music, instruments, accordion, buzuq, daff, mazhar, electric guitar, katim, nay, keyboard, electric organ, oud, 'ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trumpet, violin, arab, world, maqam, jins, iqa‘, iqaa, rhythm, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabic Musical Instruments</h1>
                        <h3>Traditional, Arabized and Percussion Instruments</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Instrument Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Naqr</a>
                    </div>

                    <p id="takht">The traditional Arabic ensemble or <em>takht</em> consists of four main melodic instruments: the <a href="instr/oud.php">oud</a>, the <a href="instr/nay.php">nay</a>, the <a href="instr/qanun.php">qanun</a>, and the <a href="instr/violin.php">violin</a>, and one main percussion instrument: the <a href="instr/riqq.php">riqq</a>. Sometimes the <em>riqq</em> is supplemented/substituted with the <a href="instr/tabla.php">tabla</a> or the <a href="instr/daff.php">daff</a> (frame drum), and the melodic instruments are supplemented with the <a href="instr/buzuq.php">buzuq</a>.
                    </p>

                    <p>Stylistically, melodic instruments are divided into two families: <em>sahb</em> (pulling or stretching), and <em>naqr</em> (plucking or hammering). The violin and the nay fall under <em>sahb</em>, the oud and the qanun fall under <em>naqr</em>. The two families are meant to complement each other in order to create a richer and more complete sound.
                    </p>

                    <p>Arabized instruments are non-Arabic instruments that came in to the Arabic music ensemble in the 20<sup>th</sup> century and became part of the Arabic music sound of that period. Most of these instruments were pioneered in Egypt, where musicians developed new ornamentation styles and playing techniques that made these instruments sound "Arabic". Some Arabized instruments were altered to play additional notes and deliver a close enough version of the correct Arabic <a href="../maqam.php">maqam</a> intonation. Others were used as 12-tone equal-tempered instruments without any alteration.</p>

                    <p>These include the <a href="instr/piano.php">piano</a>, the <a href="instr/piano.php">electric piano</a>, the <a href="instr/org.php">electric organ</a>, the <a href="instr/keyboard.php">Oriental keyboard</a>, the <a href="instr/accordion.php">accordion</a>, the <a href="instr/guitar.php">electric guitar</a>, and the electric (fretted) bass. Some of these instruments can be altered to produce quartertones. Drum sets and electronic percussion are are also commonly used with contemporary Arabic pop/dance music.
                    </p>

                    <p>The flute, <a href="instr/saxophone.php">saxophone</a>, clarinet, and <a href="instr/trumpet.php">trumpet</a> are not equal-tempered instruments and allow greater control over pitch than the above. They are used to various extents in Arabic music, especially in modern Arabic Jazz fusion styles.
                    </p>

                    <p>The <a href="instr/violin.php">violin</a>, viola, cello and upright bass are very widely used in Arabic music, especially in large ensembles like Umm Kulthum's Orchestra and the Diamond Orchestra in Egypt. Being all fretless, these instruments can be comfortably used to perform the Arabic <a href="maqam.php">Maqam</a> scales.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">Traditional Instruments</h5>
                                    <p class="card-text"><a href="instr/oud.php">The Oud</a></p>
                                    <p class="card-text"><a href="instr/qanun.php">The Qanun</a></p>
                                    <p class="card-text"><a href="instr/nay.php">The Nay</a></p>
                                    <p class="card-text"><a href="instr/violin.php">The Arabic Violin</a></p>
                                    <p class="card-text"><a href="instr/buzuq.php">The Buzuq</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">Arabized Instruments</h5>
                                    <p class="card-text"><a href="instr/accordion.php">The Arabic Accordion</a></p>
                                    <p class="card-text"><a href="instr/guitar.php">The Electric Guitar</a></p>
                                    <p class="card-text"><a href="instr/org.php">The Arabic Org</a></p>
                                    <p class="card-text"><a href="instr/keyboard.php">The Oriental Keyboard</a></p>
                                    <p class="card-text"><a href="instr/piano.php">The Arabic Piano</a></p>
                                    <p class="card-text"><a href="instr/saxophone.php">The Saxophone</a></p>
                                    <p class="card-text"><a href="instr/trumpet.php">The Trumpet</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">Percussion Instruments</h5>
                                    <p class="card-text"><a href="instr/riqq.php">The Riqq</a></p>
                                    <p class="card-text"><a href="instr/tabla.php">The Tabla</a></p>
                                    <p class="card-text"><a href="instr/tabl_baladi.php">The Tabl Baladi</a></p>
                                    <p class="card-text"><a href="instr/daff.php">The Daff</a></p>
                                    <p class="card-text"><a href="instr/mazhar.php">The Mazhar</a></p>
                                    <p class="card-text"><a href="instr/katim.php">The Katim</a></p>
                                    <p class="card-text"><a href="instr/sagat.php">The Sagat</a></p>
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
