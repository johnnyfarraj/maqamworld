<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Mahur";
$page_description = "Maqam Mahur";
$page_keywords = "Maqam Mahur, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/mahur.php";
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
                        <h1>Maqam Mahur</h1>
                        <h3>Appartenente alla <a href="f_rast.php">Famiglia Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mahur.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mahour</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/maqam/mahur.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="136,89,13" href="#" alt="Si♮" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="213,97,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="290,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="368,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="445,122,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="522,130,13" href="#" alt="Re♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="599,138,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="75,5,277,35" href="../jins/upper_ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="394,5,500,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                    </map>
                    
                    <p>Il Maqam Mahur inizia con il <a href="../jins/rast.php">Jins Rast</a> sulla tonica, seguito dal <a href="../jins/upper_ajam.php">Jins ‘Ajam Alto</a> sul quinto grado (con la sua tonica, fino all'ottava).</p>

                    <p>Scopri altri maqamat della <a href="f_rast.php">Famiglia Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/mahur/hayyara_al_afkar.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/mahur/hayyara_al_afkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Hayyar al-Afkar Badri</b>
                                    <span>Sheikh Sayyed al-Safti</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mahur/bi_sifatin_ja3alatni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Bi Sifatin Ja‘alatni</b>
                                    <span>Charbel Rouhana (Lebano)</span>
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
