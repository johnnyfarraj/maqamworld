﻿<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijazkar";
$page_description = "Maqam Hijazkar";
$page_keywords = "Maqam Hijazkar, Maqam Shadd ‘Araban, Maqam Suzidil, Maqam Shahnaz, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/hijazkar.php";
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
                        <h1>Maqam Hijazkar (ou Hijaz Kar)</h1>
                        <h1>Maqam Shadd ‘Araban</h1>
                        <h1>Maqam Suzidil</h1>
                        <h1>Maqam Shahnaz</h1>
                        <h3>Appartenente alla <a href="f_hijaz.php">Famiglia Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Hijazkar</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shadd_araban.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Shadd ‘Araban</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shahnaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Shahnaz</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suzidil.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Suzidil</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="78,63,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="155,71,13" href="#" alt="Re♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="309,87,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="386,95,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="465,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="542,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="618,120,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="696,128,13" href="#" alt="Re♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="774,136,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="165,3,320,30" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="321,139,455,166" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="604,7,720,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">

					</map>
                    
                    <p>Il Maqam Hijazkar è la variazione più comune del <a href="hijaz.php">Maqam Hijaz</a>. La sua scala inizia con il <a href="../jins/hijaz.php">Jins Hijaz</a> (la radice) sulla tonica, seguito dal <a href="../jins/nikriz.php">Jins Nikriz</a> sul quarto grado e il <a href="../jins/hijazkar.php">Jins Hijazkar</a> sull'ottava.
                    </p>
                    
                    <p>Per ragioni storiche, tre trasposizioni di questo maqam hanno nomi differenti (e erano soliti avere differenti <em>sayr</em> molto tempo fa):</p>
					<p>
					<li><strong>Maqam Shadd ‘Araban</strong> (Hijazkar sul Sol basso)</li>
					<li><strong>Maqam Suzidil</strong> (Hijazkar sul La basso)</li>
					<li><strong>Maqam Shahnaz</strong> (Hijazkar sul Re)</li>
					</p>

                    <p>Scopri altri maqamat della <a href="f_hijaz.php">Famiglia Maqam Hijaz</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/yama_inta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Yama-nta Wahishni</b>
                                    <span>Ensemble Abdel Halim Nuera (Egitto)</span>
                                    <span>Musica di Muhammad Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Nas Ana Mutti Fi Hobbi</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/afdihi_dhabyan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Afdihi Dhabiyan Ibtasam</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span><img src="/img/cd.png"> Au Theatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya ‘Uyunan Ramiyat</b>
                                    <span>Sabri al-Mudallal (Siria)</span>
                                    <span>Musica di Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_maria.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Maria</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim di Qanun sul Maqam Hijaz</b>
                                    <span>Ensemble Sabri al-Mudallal</span>
                                    <span><img src="/img/cd.png"> Chansons d'Alep</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/dulab_hijazkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Hijazkar</b>
                                    <span>Ensemble Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 04 Hijazkar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suzidil/laha_badrut_tim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Laha Badru-t-Timm</b>
                                    <span>(Maqam Suzidil)</span>
                                    <span>Orchestra di Musica Araba (Egitto)</span>
                                    <span>Musica di Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/ba3attilak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘attilak Ya Habib el-Ruh</b>
                                    <span>(Maqam Shadd ‘Araban)</span>
                                    <span>Fairouz (Libano)</span>
                                    <span>Musica di Ziad Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/samai_shadd_araban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Shadd ‘Araban</b>
                                    <span>Ensemble Omar Sarmini</span>
                                    <span>Musica di Tanburi Cemil Bey</span>
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
