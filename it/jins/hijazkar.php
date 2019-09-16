<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijazkar";
$page_description = "Jins Hijazkar";
$page_keywords = "Jins Hijazkar, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/hijazkar.php";
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
                        <h1>Jins Hijazkar <span class="badge badge-custom">Nuovo</span></h1>
                        <h3>((dimensione indefinita))</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Hijazkar</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="70,68,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="149,60,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
					  <area shape="circle" coords="227,51,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="303,42,13" href="#" alt="Re♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
					  <area shape="circle" coords="380,35,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tuned down from 660 -->
					  <area shape="circle" coords="457,26,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">
                    </map>
                    
                    <p>Il jins Hijazkar non ha un <em>ghammaz</em> e quindi non ha una dimensione definita. La sua melodia è concentrata intorno alla sua tonica, considerata qui come Do. Il Jins Hijazkar si presenta all'ottava del <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
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
                                    <b>Ya Halawet el-Dunia</b>
                                    <span>Sayyed Makkawi (Egitto)</span>
                                    <span>Musica di Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badru Timmin Haza Husnan</b>
                                    <span>Ghada Chbeir (Libano)</span>
                                    <span><img src="/img/cd.png"> Al-Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/hibbi_zurni_ma_tayassar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Zurni My Tayassar</b>
                                    <span>Karem Mahmud (Egitto)</span>
                                    <span>Musica di Darwish al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ramani Bi Sahmi Hawahu</b>
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Dawud Husni</span>
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
                                    <span>Sabah Fakhri (Siria)</span>
                                    <span>Musica di Muhammad Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Ya Nas Ana Mutti Fi Hubbi</b>
                                    <span>Ghada Chbeir (Libano)</span>
                                    <span>Musica di Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zahr El-Laymun (1997)</b>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>