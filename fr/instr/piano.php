<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Piano";
$page_description = "Le Piano";
$page_keywords = "arabe, musique, instruments, accord�on, bouzouk, daff, mazhar, guitare �lectrique, kat�me, nay, synth�tiseur oriental, orgue �lectrique, oud, �ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa�, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/piano.php";
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
                        <h1>Le Piano</h1>
                        <h3>A piano that plays <a href="../maqam.php">Maqamat</a> without harmony</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="The Arabic Piano">
                        <span>Lebanese pianist Ziad Rahbani, from a concert poster in the 1980s</span>
                    </div>

                    <p> Although the piano as included in Arabic music since the early 20<sup>th</sup> century, it was used as a Western instrument to add a classical color to Arabic compositions (e.g. in "al-Siba wal-Gamal" by Muhammad Abdel Wahab, 1939). By Arabic Piano, however, we refer to a piano that's played melodically (without harmony) within the Arabic <a href="../maqam.php">maqam</a> framework.
                    </p>
                    <p>The earliest Arabic piano pioneer was the Lebanese Wadih Sabra who played a piano endowed with additional notes (quartertones) during the Cairo Arabic Music Congress of 1932. Later, Lebanese Abdallah Chahine also altered a piano to play quartertones and recorded an album called "al-Nagham al-Khalid" with <a href="../form/improv.php#taqsim">taqasim</a> in the most common <a href="../maqam.php">maqamat</a>.
                    </p>
                    <p>Toward the end of the 20<sup>th</sup> century, Lebanese musician and playwright Ziad Rahbani recorded many songs and instrumental compositions using an acoustic or electric piano (a Fender Rhodes) to play either <a href="../maqam.php">maqam</a> melodic lines, or harmony within a Jazz-fusion genre.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdallah Chahine</b>
                                <span>Lebanese pianist Abdallah Chahine playing a Piano Taqsim in <a href="../maqam/saba.php">Maqam Saba</a> followed by the song <strong>Batit ‘Uyuni</strong> from his album "Angham Min al-Sharq".</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>Lebanese pianst Ziad Rahbani plays Arabic piano on his song <strong>Shu Hal-Iyyam</strong> from his CD <strong>Ana Moush Kafer</strong>, 1985.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>W'Qamh</b>
                                <span>Ziad Rahbani's instrumental composition <strong>W'Qamh</strong> in <a href="../maqam/hijaz.php">Maqam Hijaz</a> uses the Arabic piano in a Jazz fusion arrangement. From Fairouz's CD <strong>Mish Kayin Hayk Tkoun</strong>, 1987.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabis�s:</p>
                    <ul>
						<li><a href="accordion.php">L'Accord�on</a></li>
						<li><a href="guitar.php">La Guitare �lectrique</a></li>
						<li><a href="org.php">L'Orgue �lectrique</a></li>
						<li><a href="keyboard.php">Le Synth�tiseur oriental</a></li>
                    	<!--
						<li><a href="piano.php">Le Piano</a></li>
						-->
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
