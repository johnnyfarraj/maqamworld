<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Saba";
$page_description = "Maqam Saba";
$page_keywords = "Maqam Saba, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/saba.php";
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
                        <h1>Maqam Saba</h1>
                        <h3>(non appartenente ad alcuna famiglia)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Saba</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/saba.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,129,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="132,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="209,112,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="288,104,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="367,96,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="446,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="522,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="602,71,13" href="#" alt="Re♭" class="playNote" data-frequency="548" data-parent="#notation1">
				      <area shape="circle" coords="653,71,13" href="#" alt="Re♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="705,62,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="781,53,13" href="#" alt="Fa" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="149,6,265,35" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="485,4,615,33" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="265,143,382,173" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="548,143,680,173" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>Il Maqam Saba è un maqam molto popolare e usato nel repertorio arabo. La sua scala inizia con il <a href="../jins/saba.php">Jins Saba</a> sulla tonica, sovrapposto dal <a href="../jins/hijaz.php">Jins Hijaz</a> sul terzo grado, seguito dal <a href="../jins/ajam.php">Jins ‘Ajam</a> o dal <a href="../jins/nikriz.php">Jins Nikriz</a> sul sesto grado.
                    </p>

                    <p>Maqam Saba non appartenente ad alcuna famiglia</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab, Taqsim di Nay e Layai sul Maqam Saba</b>
                                    <span>L'ensemble de Sabri al-Mudallal (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/al_atlal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>al-Atlal (1966)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Houwa Sahih el-Hawa Ghallab (1960)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ahwa_qamaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ahwa Qamaran</b>
                                    <span>Ghada Chbeir (Libano)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ghuddi_jufunik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ghuddi Jufunik</b>
                                    <span>Khaled al-Hafez (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ya_mas3adek_sabahiyya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Ya m-as‘ad el-Sabahiyya</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>(canzone tradizionale)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/dulab_teshuf_omuri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tishuf Umuri (1930)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Muhammad al-Qassabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/samai_saba_youssef_kassab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Saba</b>
                                    <span>Musica di Yussef Kassab</span>
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
