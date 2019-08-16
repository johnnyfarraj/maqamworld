<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijaz";
$page_description = "Jins Hijaz";
$page_keywords = "Jins Hijaz, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/hijaz.php";
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
                        <h1>Jins Hijaz</h1>
                        <h3>Il jins fondamentale della <a href="../maqam/f_hijaz.php">Famiglia Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Hijaz</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="95,104,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!- variable ->
					  <area shape="circle" coords="173,96,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="255,89,14" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="330,80,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!- variable Hijaz 2nd x1.0738->
					  <area shape="circle" coords="408,71,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="486,64,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="559,55,12" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="636,46,12" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <p>Il jins hijaz è un <em>jins</em> di 4 note. E' scritto qui considerando il Re come sua tonica e il Sol come suo <em>ghammaz</em>. L'intervallo tra il secondo e il terzo grado è solitamente suonato più "piccolo" di come è scritto alzando di poco il secondo grado e abbassando di poco il terzo grado. Il Jins Hijaz è il primo jins del <a href="../maqam/hijaz.php">Maqam Hijaz</a>, del <a href="../maqam/hijazkar.php">Maqam Hijazkar</a> e del <a href="../maqam/zanjaran.php">Maqam Zanjaran</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aghadan Alqak (1971)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/bi_karm_el_lulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bi Karm el-Lulu</b>
                                    <span>Fairouz (Lebano)</span>
                                    <span>Musica di Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_awwila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Awwila Fil-Gharam(1944)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Wardi Gamil (1946)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
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