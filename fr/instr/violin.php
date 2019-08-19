<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Violoin Arabe";
$page_description = "Le Violon Arabe";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/violin.php";
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
                        <h1>Le Violon Arabe</h1>
                        <h3>Appelé <em>Kamanja</em> ou <em>Kamane</em> en arabe</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/violin.jpg" alt="Le Violon">
                        <span>Violon &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kamanja.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Kamanja</a>
                    </div>

                    <p>Le violon (appelé <em>kamanja</em> ou <em>kamane</em> en arabe) a été incorporé à l'ensemble arabe autour de la fin du 19<sup>ième</sup> siècle et a remplacé les variétés locales d'instruments à cordes frottées tels que la <em>kamanja</em>, la <em>rababa</em>, et la <em>jowza</em>. Même si l'on peut argumenter que le violon est l'exemple le plus notoire d'un instrument qui a été arabisé, il a depuis longtemps été naturalisé et a acquis un accordage, une technique de jeu, et un style ornemental, particuliers. Le son du violon arabe est aussi essentiel à la musique arabe que celui du <a href="oud.php">oud</a> et du <a href="qanun.php">qanoun</a>.
                    </p>
                    <p>
                    Plusieurs types d'accordage du violon arabe existent. L'accordage traditionnel arabe est en quartes et en quintes (Sol3, Ré4, Sol4, Ré5). En tant qu'instrument non fretté, le violon est en mesure de produire toutes les nuances de l'intonation du système du <a href="../maqam.php">maqam</a> arabe.
                    </p>
                    <p>Le style du violon arabe est très ornementé, avec des glissandos, des trilles, un vibrato large, des doubles cordes et l'usage de cordes ouvertes comme bourdon. Le timbre du violon arabe va du riche et chaud, tel qu'utilisé au violon occidental, au nasal et pénétrant.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_ZWvLygSqkY&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_ZWvLygSqkY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Chawwa</b>
                                    <span>Un des pionniers du violon arabe du début du 20<sup>ième</sup> siècle, le violoniste syrien Sami al-Chawwa (connu aussi comme le Prince du Violon) jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=y3lE8MpM1kA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/y3lE8MpM1kA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ahmad al-Hifnaoui</b>
                                    <span>Le violoniste égyptien Ahmad al-Hifnaoui (qui était premier violon dans l'orchestre de Oum Koulthoum) joue la pièce traditionnelle instrumentale <strong>Tahmila Rast (Suznak)</strong> qui est pleine d'improvisations. L'ensemble est composé aussi de George Michel au <a href="oud.php">oud</a>, Mahmoud ‘Effat au <a href="nay.php">nay</a> et Hassan Anouar au <a href="riqq.php">riqq</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abboud Abdel ‘Al</b>
                                    <span>Le violoniste palestino-libanais Abboud Abdel ‘Al joue un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/bayati.php">Maqam Bayati</a> sur le <a href="../iqaa/samai.php">Iqa‘ Sama‘i Thaqil</a> (enregistré sur la télévision libanaise).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=pMCnu_2r-wQ&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/pMCnu_2r-wQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdou Dagher</b>
                                    <span>Le violoniste égyptien Abdou Dagher et son ensemble jouant sa composition Sama‘i <a href="../maqam/kurd.php">Maqam Kurd</a>, avec solos de <a href="violon.php">violon</a> et de <a href="qanoun.php">qanoun</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2jVRlAbqscg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2jVRlAbqscg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Le violoniste palestinien Simon Shaheen jouant un <a href="../form/improv.php#taqsim">Taqsim</a> en <a href="../maqam/rast.php">Maqam Rast</a> sur l'<a href="../iqaa/rumba.php">Iqa‘ Rumba</a>, finissant par la deuxième partie de la composition instrumentale Longa<a href="../maqam/nahawand.php">Farahfaza</a> de Riyad al-Soumbati.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments traditionnels:</p>
                    <ul>
                        <li><a href="oud.php">Le Oud</a></li>
                        <li><a href="qanun.php">Le Qanoun</a></li>
                        <li><a href="nay.php">Le Nay</a></li>
                        <!--
                        <li><a href="violin.php">Le Violon</a></li>
                        -->
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
