<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Ajam";
$page_description = "Maqam ‘Ajam";
$page_keywords = "Maqam ‘Ajam, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/ajam.php";
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
                        <h1>Maqam ‘Ajam</h1>
                        <h3>Il maqam principale nella <a href="f_ajam.php">Famiglia Maqam ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i>Pronuncia di ‘Ajam</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="68,140,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="144,131,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="221,125,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330 -->
                      <area shape="circle" coords="298,116,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="377,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="453,100,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="530,92,13" href="#" alt="Si" class="playNote" data-frequency="495" data-parent="#notation1">
                      <area shape="circle" coords="608,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                          <area shape="circle" coords="686,92,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="762,100,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="840,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="150,11,270,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="390,10,590,40" href="../jins/upper_ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="639,14,806,40" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
		          </map>

                    <p>Il Maqam ‘Ajam (anche conosciuto come <strong>‘Ajam Egiziano</strong>) è il maqam principale della <a href="f_ajam.php">Famiglia ‘Ajam</a>, e inizia con il <a href="../jins/ajam.php">Jins ‘Ajam</a> sulla tonica, seguito dal <a href="../jins/upper_ajam.php">Jins ‘Ajam Alto</a> sul quinto grado (con la sua tonica, fino all'ottava) o dal <a href="../jins/nahawand.php">Jins Nahawand</a> sul quinto grado.</p>
                    
                    <p>Scopri altri maqamat della <a href="f_ajam.php">Famiglia Maqam ‘Ajam</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Aghadan Alqak (1971)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/el_bahri_biyidhak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Bahr Biyidhak</b>
                                    <span>Voce e musica di Sheikh Imam (Egitto)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/fi_youm_wi_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fi Yom Wi Leila (1978)</b>
                                    <span>Warda (Francia/Algeria)</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/tal3a_min_beit_abuha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tal‘a Min Beit Abuha</b>
                                    <span>Nazem al-Ghazali (Irak)</span>
                                    <span>(Chanson traditionnelle de l'Irak)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/zuruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zuruni Kulli Sana Marra</b>
                                    <span>Karem Mahmud (Egitto)</span>
                                    <span>Musica di Sayyed Darwish</span>
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
