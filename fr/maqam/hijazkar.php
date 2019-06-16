<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijazkar";
$page_description = "Maqam Hijazkar";
$page_keywords = "arabic, music, arab, world, maqam, jins, hijaz kar, hijazkar, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/hijazkar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Hijazkar (ou Hijaz Kar)</h1>
                        <h1>Maqam Chadd ‘Arabane</h1>
                        <h1>Maqam Suzidil</h1>
                        <h1>Maqam Chahnaz</h1>
                        <h3>Membre de la <a href="f_hijaz.php">Famille du Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Hijazkar</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shadd_araban.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Chadd ‘Arabane</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shahnaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Chahnaz</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suzidil.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Suzidil</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="78,63,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="155,71,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="309,87,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="386,95,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="465,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="542,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="618,120,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="696,128,13" href="#" alt="Ré♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="774,136,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="165,3,320,30" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="321,139,455,166" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="604,7,720,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Maqam Hijazkar est la variante la plus commune du <a href="hijaz.php">Maqam Hijaz</a>. Sa gamme commence avec le <a href="../jins/hijaz.php">Jins Hijaz</a> comme jins de base sur la tonique, suivi du <a href="../jins/nikriz.php">Jins Nikriz</a> sur le 4ième degré et finalement, du <a href="../jins/hijazkar.php">Jins Hijazkar</a> à l'octave supérieure.
                    </p>
                    <p>
                    Pour des raisons historiques, 3 transpositions de ce maqam ont des noms différents (et avaient, il y a longtemps, un <em>sayr</em> différent):</p>
					<p>
					<li><strong>Maqam Chadd ‘Arabane</strong> (Hijazkar sur le bas Sol)</li>
					<li><strong>Maqam Suzidil</strong> (Hijazkar sur le bas La)</li>
					<li><strong>Maqam Chahnaz</strong> (Hijazkar sur le Ré)</li>
					</p>

                    <p>Explorez d'autres maqams dans la <a href="f_hijaz.php">Famille du Maqam Hijaz</a>.</p>

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
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakariya Ahmad</span>
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
                                    <span>Ensemble Abdel Halim Noueirah</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Nas Ana Moutti Fi Hobbi</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Sayyed Darwich</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/afdihi_dhabyan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Afdihi Dhabiyan Ibtasam</b>
                                    <span>Sabah Fakhri (Syrie)</span>
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
                                    <b>Mouachah Ya ‘Ouyounan Ramiyat</b>
                                    <span>Sabri al-Moudallal (Syrie)</span>
                                    <span>Musique de Omar al-Batch</span>
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
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Sayyed Darwich</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun en Maqam Hijaz</b>
                                    <span>Ensemble Sabri al-Moudallal</span>
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
                                    <b>Doulab Hijazkar</b>
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
                                    <b>Mouachah Laha Badrou-t-Timm</b>
                                    <span>(Maqam Suzidil)</span>
                                    <span>Ensemble de la Musique Arabe (Égypte)</span>
                                    <span>Musique de Mahmoud Soubh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/ba3attilak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘attilak Ya Habib el-Rouh</b>
                                    <span>(Maqam Chadd ‘Arabane)</span>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musique de Ziad Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/samai_shadd_araban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Chadd ‘Arabane</b>
                                    <span>Ensemble Omar Sarmini</span>
                                    <span>Musique de Tanburi Cemil Bey</span>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
