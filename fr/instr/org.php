<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Orgue �lectrique";
$page_description = "L'Orgue �lectrique";
$page_keywords = "arabe, musique, instruments, accord�on, bouzouk, daff, mazhar, guitare �lectrique, katem, nay, synth�tiseur oriental, orgue �lectrique, oud, �ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa�, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/org.php";
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
                        <h1>L'Orgue �lectrique</h1>
                        <h3>1970s Electric Organ fitted with some quartertones</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="The Electric Organ">
                        <span>Org pioneer Magdi el-Husseini (�gypte).</span>-->
                    </div>

                    <p> The Electric Organ (commonly called <em>org</em> in Arabic, from the French "orgue") became very popular in Arabic music in the late 1960s through the 1970s. Its pioneer and superstar was Egyptian keyboardist Magdi el-Husseini. The <em>org</em> was altered to play good-enough quartertones (as good as the accordion's) which allowed it to play most <a href="../maqam.php">maqam</a> scales. The <em>org</em> was used to play a combination of melodic lines and simple chords. Together, the <em>org</em> and the <a href="guitar.php">electric guitar</a> created a distinctive sound and mood that marked Arabic music from that decade.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span>Abdel Halim Hafez's song <strong>Qari'at al-Fingan</strong> (1976, music by Mouhammad al-Mougi) featuring Egyptian electric organ players Magdi el-Husseini and Hani Mehanna (both part of The Diamond Orchestra).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini Interview</b>
                                    <span>Interview with Magdi el-Husseini about his experience meeting singer Abdel Halim Hafez and performing in his orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hani Mehanna Interview</b>
                                    <span>Interview with Hani Mehanna about his experience meeting composer Mouhammad Abdel Wahab and singer Oum Koulthoum and performing the song <strong>Leilet Hobb</strong> with her orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabis�s:</p>
                    <ul>
						<li><a href="accordion.php">L'Accord�on</a></li>
						<li><a href="guitar.php">La Guitare �lectrique</a></li>
                    	<!--
						<li><a href="org.php">L'Orgue �lectrique</a></li>
						-->
						<li><a href="keyboard.php">Le Synth�tiseur oriental</a></li>
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
