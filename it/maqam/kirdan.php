<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Kirdan/Maqam Sazkar";
$page_description = "Maqam Kirdan/Maqam Sazkar";
$page_keywords = "Maqam Kirdan, Maqam Sazkar, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/kirdan.php";
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
                        <h1>Maqam Kirdan</h1>
                        <h1>Maqam Sazkar</h1>
                        <h3>Appartenente alla <a href="f_rast.php">Famiglia Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kirdan.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Kirdane</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sazkar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/kirdan.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="75,81,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
                      <area shape="circle" coords="148,89,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="225,97,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="304,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="381,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="458,123,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                      <area shape="circle" coords="537,131,13" href="#" alt="Reâ™¯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
                      <area shape="circle" coords="589,131,13" href="#" alt="Reâ™®" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="640,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="95,6,274,38" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="420,9,525,38" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,173,528,202" href="../jins/sazkar.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>Il Maqam Kirdan è una versione del <a href="rast.php">Maqam Rast</a> il cui <em>sayr</em> inizia sull'ottava e alla fine discende alla tonica. La sua scala inizia in basso con il <a href="../jins/rast.php">Jins Rast</a> (la radice) sulla tonica, seguito dal <a href="../jins/upper_rast.php">Jins Rast Alto</a> sul quinto grado (con la tonica sopra sull'ottavo grado).
                    </p>
                    
                    <p>Il <strong>Maqam Sazkar</strong> è quasi identico al Maqam Kirdan, ad eccezione dell'importanza del secondo grado alzato che si presente in alcuni passaggi melodici, che risulta nel <a href="../jins/sazkar.php">Jins Sazkar</a> sulla tonica.
                    </p>

                    <p>Scopri altri maqamat della <a href="f_rast.php">Famiglia Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kirdan/sihtu_wajdan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kirdan/sihtu_wajdan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Sihtou Wajdan</b>
                                    <span>Coro della Facoltà di Musica - Università di Kaslik (Lebano)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/ya_shadil_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Shadi al-Alhan</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kirdan/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayrana Leh (1930)</b>
                                    <span>Leila Murad (Egitto)</span>
                                    <span>Musica di Daud Husni</span>
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
