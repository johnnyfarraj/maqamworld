<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijaz";
$page_description = "Jins Hijaz";
$page_keywords = "arabic, music, arab, world, maqam, jins, hijaz, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/hijaz.php";
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
                        <h1>Jins Hijaz</h1>
                        <h3>Jins inicial da família da <a href="../maqam/f_hijaz.php">Família do Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Hijaz</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="95,104,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!- variable ->
					  <area shape="circle" coords="173,96,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="255,89,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="330,80,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!- variable Hijaz 2nd x1.0738->
					  <area shape="circle" coords="408,71,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="486,64,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="559,55,12" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="636,46,12" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <p>
                        Jins Hijaz é um <em>jins</em> de 4 notas. Está representado aqui com sua tônica em Ré e seu <em>ghammaz</em> em Sol. O intervalo entre o 2<sup>o</sup> e o 3<sup>o</sup> graus geralmente é tocado menor do que está escrito, subido um pouco o 2<sup>o</sup> e abaixando um pouco o 3<sup>o</sup>. Jins Hijaz é o primeiro <em>jins</em> nos <a href="../maqam/hijaz.php">Maqam Hijaz</a>, <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>, e <a href="../maqam/zanjaran.php">Maqam Zanjaran</a>.
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
                                    <span>Umm Kulthum </span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
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
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1946)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
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