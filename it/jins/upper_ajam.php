<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam Alto";
$page_description = "Jins ‘Ajam Alto";
$page_keywords = "Jins ‘Ajam Alto, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/upper_ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Jins ‘Ajam Alto <span class="badge badge-custom">Nuovo</span></h1>
                        <h3>Una versione a 4 note del <a href="ajam.php">Jins Ajam</a> con la tonica in alto.</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di ‘Ajam</a>
                    </div>
                    
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,81,12" href="#" alt="Fa♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="149,73,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="225,65,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="304,56,13" href="#" alt="Si" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="383,49,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="455,40,12" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>
                    
                    <p>Il Jins ‘Ajam Alto è una versione a 4 note del <a href="ajam.php">Jins ‘Ajam</a>, con la situazione inusuale  (condivisa con il <a href="upper_rast.php">Jins Rast Alto</a>) della tonica come ultimo grado della scala invece che come prima. E' scritto qui considerando il Sol come suo <em>ghammaz</em> e il Do come sua tonica. Il Jins ‘Ajam Alto è il secondo jins del <a href="../maqam/ajam.php">Maqam ‘Ajam</a> e si presenta anche sul terzo grado del <a href="../maqam/bayati.php">Maqam Bayati</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/upper_ajam/zayy_el_hawa.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/jins/upper_ajam/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Zayy el-Hawa (1970)</b>
                                    <span>Abdel Halim Hafez (Egitto)</span>
                                    <span>Musica di Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/upper_ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Faker (1963)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Huwa Sahih el-Hawa Ghallab (1960)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Min Yom Furgak</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/nixon.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sharrafti Ya Nixon Baba (1974)</b>
                                    <span>Voce e musica di Sheikh Imam (Egitto)</span>
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