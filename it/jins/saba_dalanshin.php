<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Saba Dalancin";
$page_description = "Jins Saba Dalancin";
$page_keywords = "musique arabe, maqam, instruments, jins saba dalanchine, iqa‘, iqaa, rythme, oud, qanun, nay, quart de ton, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/saba_dalanshin.php";
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
                        <h1>Jins Saba Dalancin <span class="badge badge-custom">Nouveau</span></h1>
                        <h3>Une variation spéciale du <a href="saba.php">Jins Saba</a> avec sa tonique sur le 3<sup>ième</sup> degré</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba_dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Saba Dalancin</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="35,70,12" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="86,70,12" href="#" alt="Sol♯" class="playNote" data-frequency="415" data-parent="#notation1"><!--ET???-->
					  <area shape="circle" coords="133,62,14" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="208,55,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="477" data-parent="#notation1"><!--Bayati 2-->
					  <area shape="circle" coords="281,46,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="355,38,13" href="#" alt="Ré♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="432,29,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="509,21,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>Il Jins Saba Dalancin est un type spécial du <a href="saba.php">Jins Saba</a>. Il n'a pas de <em>ghammaz</em> et par conséquent n'as pas de taille définie. Sa mélodie est concentrée sur sa tonique, notée ici sur Do. Les intervalles au dessus de la tonique sont plus ou moins identiques à ceux du <a href="hijaz.php">Jins Hijaz</a>. La note qui est 2 degrés en dessous de la tonique (La, dans le cas présent) est la tonique secondaire.</p>

                    <p>Il Jins Saba Dalancin apparaît sur l'octave du <a href="../maqam/rast.php">Maqam Rast</a>, et dans ce cas il est appelé <a href="../maqam/dalanshin.php">Maqam Dalancin</a>. Il apparaît aussi sur le 5<sup>ième</sup> degré du <a href="../maqam/shawq_afza.php">Maqam Shawq Afza</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Mal el-Cham</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musica di Ahmad Abou Khalil al-Qabbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ja_jirat_al_sha3b_al_yamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ya Jirat al-Cha‘b al-Yamani</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Mala al-Kasat (khana)</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musica di Muhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/qanun_tqasim_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun (de Layali Rast)</b>
                                    <span>Abbas al-Bleidi (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Halawit el-Dounia</b>
                                    <span>Sayyed Makkawi (Égypte)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iswaret el-‘Arous (1989)</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musica di Philémon Wéhbé</span>
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