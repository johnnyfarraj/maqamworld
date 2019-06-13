<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Qanoun";
$page_description = "Le Qanoun";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanoun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/qanun.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Le Qanoun</h1>
                        <h3>Une cithare à cordes pincées</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/qanun.jpg" alt="Le Qanoun">
                        <span>Qanoun syrien construit par Bachir Bij. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qanun.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Qanoun</a>
                    </div>

                    <p>Le Qanoun est le descendant de l'ancienne harpe égyptienne.
                    Il fait partie intégrante de la musique arabe depuis le 10<sup>ième</sup> siècle.
                    Le mot <em>qanoun</em> veut dire 'loi' en arabe et le mot existe en anglais sous la forme "canon".
                    Ce nom a probablement été donné au qanoun parce que c'est l'instrument qui établit la loi
                    en ce qui a trait aux fréquences (pitch) pour les autres instruments et chanteurs.
                    </p>

                    <p>Le corps du qanoun consiste en une planche de bois plate en forme de trapèze sur laquelle
                    81 cordes sont tendues en groupes de trois, avec 24 cordes aigües consistant en trois cordes pour chaque note.
                    L'instrument est placé à plat sur les genoux du musicien ou sur une petite table.
                    Les cordes du qanoun sont pincées avec deux plectres attachés à l'index de chaque main.
                    Un long pont sur la droite de l'instrument est installé sur des fenêtres couvertes de peau de chèvre (ou de poisson)
                    permettant de transmettre la résonance vers la boîte.
                    Sur le côté gauche, chaque corde passe au dessus d'une série de petits leviers
                    en laiton qui sont utilisés pour changer microtonalement la fréquence (le pitch).
                    </p>

                    <p>Parce que le qanoun a seulement 8 notes par octave, le musicien accorde l'instrument à l'aide
                    des leviers pour obtenir le maqam de départ désiré.
                    Quand le musicien a besoin de moduler vers un autre <a href="../maqam.php">maqam</a>,
                    il faut changer les leviers avec la main gauche en même temps que l'on continue de jouer avec la main droite.
                    Des modulations rapides peuvent aussi être obtenues en utilisant l'ongle du pouce gauche
                    pour monter temporairement la fréquence (le pitch) de certaines cordes.
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
                                    <b>Mouhammad Abdou Saleh</b>
                                    <span>Le joueur de qanoun pour Oum Koulthoum pendant des décennies, Mouhammad Abdou Saleh (Égypte)
                                    dans un pot-pourri de ses chansons les plus connues.
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
                                    <b>Mouhammad Abdou Saleh</b>
                                    <span>Mouhammad Abdou Saleh (Égypte) jouant un <a href="../form/improv.php#taqsim">Taqsim</a>
                                    en <a href="../maqam/saba.php">Maqam Saba</a></span>
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
                                    <span>Abdel Fattah Mansi (Égypte) joue la chanson <strong>Ana Fi-ntizarak</strong>
                                    de Oum Koulthoum (1943, musique de Zakaria Ahmad).
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
                                    <b>Abdel Halim Noueyra</b>
                                    <span>Abdel Halim Noueyra (Égypte), le directeur musical de l'Ensemble de Musique Arabe,
                                    joue un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/bayati.php">Maqam Bayati</a>.
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
                                    <span>Abraham Salman (Irak) jouant un <a href="../form/improv.php#taqsim">Taqsim</a>
                                    en <a href="../maqam/rast.php">Maqam Rast</a>. De son CD Saltanah (1998).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments traditionnels:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <!--
                        <li><a href="qanun.php">Le Qanoun</a></li>
                        -->
                        <li><a href="nay.php">Le Nay</a></li>
                        <li><a href="violin.php">Le Violon</a></li>
                        <li><a href="buzuq.php">Le Bouzouk</a></li>
                   </ul>

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
