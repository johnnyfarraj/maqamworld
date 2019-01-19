<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Guitare Électrique";
$page_description = "La Guitare Électrique";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/guitar.php";
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
                        <h1>La Guitare Électrique</h1>
                        <h3>Plays melody and simple chords</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitare Électriqu">
                        <span>Omar Khorshid, the pioneer of Electric Guitar in Egypt</span>
                    </div>

                    <p> La Guitare Électriqu was first used in Arabic music in the late 1960s in Egypt, and its pioneer was Omar Khorshid. Some Arabic electric guitars were fitted with extra frets (in the manner of the <a href="buzuq.php">Buzuq</a>) in order to play some of the Arabic <a href="../maqam.php">Maqam</a> scales with quartertones. But mostly the electric guitar was used without any alteration or effects, and acquired its Arabness from its ornamentation style. The electric guitar was used to play a combination of melodic lines and simple chords (e.g. major and minor).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3uBB1pxeirw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3uBB1pxeirw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid</b>
                                    <span>Arabic Electric Guitar pioneer Omar Khorshid plays Umm Kukthum's song <strong>Darit el-Ayyam</strong> (1970, music by Muhammad Abdel Wahab).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid Interview</b>
                                    <span>Interview with Omar Khorshid about his experience playing the Electric Guitar with Umm Kuthum's Orchestra</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabisés:</p>
                    <ul>
						<li><a href="accordion.php">L'Accordéon</a></li>
                    	<!--
						<li><a href="guitar.php">La Guitare Électrique</a></li>
						-->
						<li><a href="org.php">L'Orgue Électrique</a></li>
						<li><a href="keyboard.php">Le Synthétiseur oriental</a></li>
						<li><a href="piano.php">Le Piano</a></li>
						<li><a href="saxophone.php">Le Saxophone</a></li>
						<li><a href="trumpet.php">La Trompette</a></li>
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
