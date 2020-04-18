<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Athar Kurd";
$page_description = "Jins Athar Kurd";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "es/jins/athar_kurd.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Athar Kurd</h1>
                        <h3>Una combinación de <a href="kurd.php">Jins Kurd</a> y <a href="nikriz.php">Jins Nikriz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/athar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Athar Kurd</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="59,118,12" href="#" alt="La♭" class="playNote" data-frequency="211" data-parent="#notation1"><!-- octave below A4b -->
					  <area shape="circle" coords="136,110,12" href="#" alt="Si♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="218,102,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="293,94,13" href="#" alt="Re♭" class="playNote" data-frequency="274" data-parent="#notation1"> <!-- fine tune minor 2nd (see Kurd)-->
					  <area shape="circle" coords="370,86,13" href="#" alt="Mi♭" class="playNote" data-frequency="309" data-parent="#notation1"><!-- minor 3rd -->
					  <area shape="circle" coords="447,77,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="526,69,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- hijazkar tonic -->
					  <area shape="circle" coords="599,61,12" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
					</map>

                    <p>
                        El Jins Athar Kurd es un jins de 5 notas. Se escribe aquí con su tónico en <strong>Do</strong> y su <em>ghammaz</em> en <strong>Sol</strong>. Jins Athar Kurd es el primer jins en <a href="../maqam/athar_kurd.php">Maqam Athar Kurd</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/athar_kurd/habibaha.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/athar_kurd/habibaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Habibaha (1965)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Raydak (1950)</b>
                                    <span>Leila Murad</span>
                                    <span>Music by Ahmad Sidqi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Fagr Nurak Halli We Ban (c.1952)</b>
                                    <span>Baligh Hamdi</span>
                                    <span>Music by Yussef Shawqi</span>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
  </body>
</html>