<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Bouzouk";
$page_description = "Le Bouzouk";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/buzuq.php";
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
                        <h1>Le Bouzouk</h1>
                        <h3>Un petit lute avec un long manche fretté</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/buzuq.jpg" alt="Le Bouzouk">
                        <span>Deux bouzouks du Liban. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/buzuq.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Bouzouk</a>
                    </div>

                    <p>Le Bouzouk est un instrument à cordes de la famille du <a href="oud.php">Oud</a> avec un corps plus petit et un manche plus long et fretté. Il est plus proche pour la forme du <em>Bouzouki</em> grec et du <em>Saz</em> turc. Le Bouzouk est à l'origine un instrument folklorique de l'Est de la Méditerranée (Palestine, Jordanie, Liban et Syrie) qui est en général joué en solo. Il est dans la présente liste des instruments traditionnels parce qu'il est devenu partie prenante de la musique arabe populaire dominante au milieu du 20<sup>ième</sup> siècle. Depuis, il est apparu dans de nombreux enregistrements et performances et a pris place dans l'ensemble arabe.
                    </p>
                    <p>
                    Le Bouzouk traditionnel a deux cœurs de cordes de métal, un double Do4 et un triple Sol3, et il est joué à l'aide d'un fin morceau de corne ou d'un plectre en plastique. De nos jours, le bouzouk est construit avec trois cœurs de cordes de manière à avoir un ambitus plus ample. Les cordes en métal et les clés de métal pour accorder l'instrument (pareilles à celles d'une guitare) lui donne une sonorité claire. La distribution des frettes couvre les quarts de ton les plus communs. Ceci, et le fait que le musicien peut déplacer les frettes pour changer la fréquence (le pitch) des notes, permet au bouzouk de jouer les gammes les plus communes du <a href="../maqam.php">maqam</a> arabe avec une précision acceptable.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=isAhZyRcA0M&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/isAhZyRcA0M/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mouhyiddine Ba‘youn</b>
                                    <span>Le joueur de bouzouk et chanteur libanias Mouhyiddine Ba'youn jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/bayati.php">Maqam Bayati</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IhiVXmTMihk&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IhiVXmTMihk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mouhammad Abdel Karim</b>
                                    <span>Le joueur de bouzouk syrien Mouhammad Abdel Karim (appelé le Prince du Bouzouk) jouant un <a href="../form/improv.php#taqsim">Taqsim</a> au bouzouk. Abdel Karim a laissé de nombreux enregistrements. Son style était doux et méditatif.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TpNCZQguy9k&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TpNCZQguy9k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Matar Mouhammad</b>
                                    <span>Le virtuose du bouzouk libanias Matar Mouhammad joue un <a href="../form/improv.php#taqsim">Taqsim</a> dans un concert. Son Taqsim met le bouzouk au même niveau que les autres instruments traditionnels arabes pour ce qui a trait à la complexité, la technique, l'ornementation, les modulations en <a href="../maqam.php">maqam</a>, et la longueur.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IH9ONkilJkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IH9ONkilJkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zoro Youssef</b>
                                    <span>Le joueur de bouzouk kurdo-libanais Zoro Youssef (Zoro Seîd Yûsiv) jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/rast.php">Maqam Rast</a>. Enregistré en direct par la télévision libanaise.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dPdFIgFkkog&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dPdFIgFkkog/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Marhabtayn</b>
                                    <span>La diva libanaise Sabah dans sa chanson <strong>Marhabtayn</strong> (enregistré au Koweït). Avec un bouzouk dans l'orchestre (dirigé par le violoniste libanias Abboud Abdel 'Al).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments traditionnels:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <li><a href="qanun.php">Le Qanoun</a></li>
                        <li><a href="nay.php">Le Nay</a></li>
                        <li><a href="violin.php">Le Violon</a></li>
                    	<!--
                        <li><a href="buzuq.php">Le Bouzouk</a></li>
                        -->
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
