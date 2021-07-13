<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijazkar";
$page_description = "Jins Hijazkar";
$page_keywords = "musique arabe, maqam, instruments, jins hijazkar, jins hijaz kar, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/hijazkar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Hijazkar <span class="badge badge-custom">Nouveau</span></h1>
                        <h3>(de taille indéfinie)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Hijazkar</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="70,68,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="149,60,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
					  <area shape="circle" coords="227,51,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="303,42,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
					  <area shape="circle" coords="380,35,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tuned down from 660 -->
					  <area shape="circle" coords="457,26,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>Le Jins Hijazkar n'a pas de <em>ghammaz</em> et donc pas de taille définie. Sa mélodie est concentrée autour de sa tonique, notée ici sur Do. Le Jins Hijazkar apparaît sur l'octave du <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Halawet el-Dounia</b>
                                    <span>Sayyed Makkawi (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Badru Timmin Haza Housnan</b>
                                    <span>Ghada Chbeir (Liban)</span>
                                    <span><img src="/img/cd.png"> Al-Mouachahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/hibbi_zurni_ma_tayassar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hibbi Zourni My Tayassar</b>
                                    <span>Karem Mahmoud (Égypte)</span>
                                    <span>Musique de Darwich al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ramani Bi Sahmi Hawahou</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Daoud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_manta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Ya Ma-nta Wahishni</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Ya Nas Ana Moutt Fi Houbbi</b>
                                    <span>Ghada Chbeir (Liban)</span>
                                    <span>Musique de Sayyed Darwich</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zahr El-Laymoun (1997)</b>
                                    <span>Sonia M'Barek (Tunisie)</span>
                                    <span><img src="/img/cd.png"> Tawchih</span>
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