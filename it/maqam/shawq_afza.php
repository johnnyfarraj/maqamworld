<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Shawq Afza";
$page_description = "Maqam Shawq Afza";
$page_keywords = "Maqam Shawq Afza, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/shawq_afza.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Shawq Afza</h1>
                        <h3>Appartenente alla <a href="f_ajam.php">Famiglia Maqam ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shawq_afza.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Shawq Afza</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/shawq_afza.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="57,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="133,126,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="210,118,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330-->
					  <area shape="circle" coords="289,110,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="366,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="442,93,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="519,85,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="597,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="137,5,263,36" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,5,544,36" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>Il Maqam Shawq Afza è la variante più comune del<a href="ajam.php">Maqam ‘Ajam</a>. La sua scala inizia con il  <a href="../jins/ajam.php">‘Ajam</a> (la radice) sulla tonica, mentre il <a href="../jins/hijaz.php">Jins Hijaz</a> sul quinto grado è la sua caratteristica distintiva, come una frequente modulazione sul <a href="../jins/saba_dalanshin.php">Jins Saba Dalanshin</a> sul terzo/quinto grado.</p>

                    <p>Scopri altri maqamat della <a href="f_ajam.php">Famiglia Maqam ‘Ajam</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/shawq_afza/lissa_fakir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/shawq_afza/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Faker (1960)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/3alallah_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Allah Teud (1970)</b>
                                    <span>Wadih al-Safi (Libano)</span>
                                    <span>Musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/longa_ajam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Longa ‘Ajam</b>
                                    <span>Musica di Abdo Dagher (Egitto)</span>
                                    <span><img src="/img/cd.png"> Malik al-Taqasim</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iswarit el-‘Aruss (1989)</b>
                                    <span>Fairouz (Libano)</span>
                                    <span>Musica di Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

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
