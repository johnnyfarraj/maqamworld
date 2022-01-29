<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam Superior";
$page_description = "Jins ‘Ajam Superior";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/upper_ajam.php";
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
                        <h1>Jins ‘Ajam Superior <span class="badge badge-custom">Novo</span></h1>
                        <h3>Uma versão de 4 notas do <a href="ajam.php">Jins Ajam</a> com a tônica no topo</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de ‘Ajam</a>
                    </div>
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,81,12" href="#" alt="Fa♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="149,73,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="225,65,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="304,56,13" href="#" alt="Si" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="383,49,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="455,40,12" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>
                    
                    <p>
                        Jins ‘Ajam Superior é uma versão de 4 notas do <a href="ajam.php">Jins ‘Ajam</a>, com a característica incomum (compartilhada com o <a href="upper_rast.php">Jins Rast Superior</a>) de que sua tônica é o último grau da escala ao invés de ser primeiro. Está representado aqui com seu <em>ghammaz</em> em Sol e sua tônica em Do. O Jins ‘Ajam Superior é o segundo jins no <a href="../maqam/ajam.php">Maqam ‘Ajam</a> e também ocorre no 3<sup>o</sup> grau do <a href="../maqam/bayati.php">Maqam Bayati</a>.
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
                                    <span>Abdel Halim Hafez</span>
                                    <span>Música de Baligh Hamdi (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/upper_ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Fakir (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Huwwa Sahih el-Hawa Ghallab (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
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
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/nixon.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sharraft Ya Nixon Baba (1974)</b>
                                    <span>Voz e música por Sheikh Imam</span>
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
    
    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>