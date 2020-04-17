<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam Alto";
$page_description = "Jins ‘Ajam Alto";
$page_keywords = "musique arabe, maqam, instruments, jins haut ‘ajam, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/upper_ajam.php";
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
                        <h1>Jins ‘Ajam Alto <span class="badge badge-custom">Nouveau</span></h1>
                        <h3>Une version de 4 notes du <a href="ajam.php">Jins Ajam</a> avec la tonique en haut</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de ‘Ajam</a>
                    </div>
                    
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,81,12" href="#" alt="Fa♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="149,73,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="225,65,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="304,56,13" href="#" alt="Si" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="383,49,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="455,40,12" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>
                    
                    <p>Le Jins Haut 'Ajam est une version de 4 notes du <a href="ajam.php">Jins ‘Ajam</a> qui a la particularité (partagée avec le <a href="upper_rast.php">Jins Rast Alto</a>) d'avoir comme tonique la dernière note de la gamme au lieu de la première. Il est noté ici avec sa tonique sur Do et son <em>ghammaz</em> sur Sol. Le Jins Haut 'Ajam est le deuxième jins du <a href="../maqam/ajam.php">Maqam ‘Ajam</a> et apparaît aussi sur le 3<sup>ième</sup> degré du <a href="../maqam/bayati.php">Maqam Bayati</a>.</p>
                    
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
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
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
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Houwa Sahih el-Hawa Ghallab (1960)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Min Youm Furgak</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/nixon.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Charrafti Ya Nixon Baba (1974)</b>
                                    <span>Interprétation et Musique de Cheikh Imam (Égypte)</span>
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