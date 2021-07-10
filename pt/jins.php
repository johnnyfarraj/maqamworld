<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Jins";
$page_description = "Arabic Music Maqam Jins";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>The Jins</h1>
                        <h3>A scale fragment of 3, 4, or 5 notes that a Maqam is built from</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Jins/Ajnas</a>
                    </div>

                    <p>The Jins (plural Ajnas) is a <a href="maqam.php">maqam</a> scale fragment of 3, 4 or 5 notes. The <em>jins</em> is the basic melodic unit in Arabic music, as a <a href="maqam.php">maqam</a> is really a pathway among many ajnas. Each <em>jins</em> is defined by its intervals, which don’t change when it is transposed and give it its distinct and recognizable character.</p>

                    <p>The <em>tonic</em> of a <em>jins</em> is the note of principal melodic emphasis, the note that the melody returns to for resolution. This is usually the first note in the <em>jins</em> scale. The <em>leading tone</em> is the note immediately below the tonic of a <em>jins</em>. The <em>ghammaz</em> is the most important note of melodic emphasis (besides the tonic), as well as the most common starting point of a new <em>jins</em> (changing to a new <em>jins</em> or <a href="maqam.php">maqam</a> is called modulation).</p>

                    <p>The size of a <em>jins</em> is the number of notes between the tonic and the <em>ghammaz</em>. These notes are called the <em>jins</em>’ <em>basic scale</em> (or simply scale). Outside the basic scale (on either side) are notes that are part and parcel of the <em>jins</em>’ melodic vocabulary. These notes are called the <em>jins</em> baggage. The basic scale plus the <em>jins</em> baggage make up the <em>jins</em>’ <em>extended scale</em>. </p>

                    <p>Each <em>jins</em> shows the basic scale notated using large notes, with the tonic and <em>ghammaz</em> as whole notes. The <em>jins</em> baggage notes are shown in smaller size, and sometimes a <em>jins</em> includes multiple options for some notes in the <em>jins</em> baggage.</p>

                    <p>You can start exploring ajnas using the Jins Index (sorted alphabetically) or using the table below (grouped by size):</p>
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
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Murassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                   <li><a href="jins/upper_ajam.php">Jins Upper ‘Ajam</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Upper Rast</a></li>
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
                                <div class="page-list-header">(undefined size)</div>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>