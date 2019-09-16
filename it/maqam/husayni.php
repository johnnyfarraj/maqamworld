<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hussayni";
$page_description = "Maqam Hussayni";
$page_keywords = "Maqam Hussayni, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/husayni.php";
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
                        <h1>Maqam Hussayni</h1>
                        <h3>Appartenente alla <a href="f_bayati.php">Famiglia Maqam Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/husayni.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Houssayni</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/husayni.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="55,95,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="131,87,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!--Bayati LA 2nd, variable -->
                      <area shape="circle" coords="183,87,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="313,71,13" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="391,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="470,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="551,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati RE 2nd, variable -->
                      <area shape="circle" coords="630,129,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
                       <!-- Links -->
                        <!-- Houssayni is not a Jins, it's a special case (documented in IAM)
                      <area shape="rect" coords="116,8,304,39" href="../jins/husayni.php" class="mapLink" data-parent="#notation1">
		              -->
                      <area shape="rect" coords="450,8,580,39" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>Il Maqam Husayni non è molto comune come maqam indipendente nella tradizione araba, ma il suo <em>sayr</em> (enfatizzare il quinto grado della scala come nota che risolve sotto sul quarto grado) è obbligatorio nel <a href="bayati.php">Maqam Bayati</a>. Nella musica folk nelle regioni più distanti, è la variazione più comune del Bayati, con la sua scala che inizia con il <a href="../jins/bayati.php">Jins Bayati</a> sulla tonica.
                    </p>
                    
                    <p>Scopri altri maqamat della <a href="f_bayati.php">Famiglia Maqam Bayati</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/husayni/billadhi_askara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/husayni/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bil-Ladhi Askara</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 12 (Bayati)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hal ‘Ala al-Astar</b>
                                    <span>Ghada Chbeir (Libano)</span>
                                    <span><img src="/img/cd.png"> Al Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/khala_al_3idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Khala al-‘Idhar</b>
                                    <span>Khaled al-Hafez (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Voce e musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/samai_bayati_khana2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan (Khana 2)</b>
                                    <span>Ensemble Salah ‘Arram (Egitto)</span>
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
