<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijazkar";
$page_description = "Jins Hijazkar";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/hijazkar.php";
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
                        <h1>Jins Hijazkar</h1>
                        <h3>(tamaño indefinido)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Hijazkar</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click on each note with the mouse and hold to hear it play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="70,68,13" href="#" alt="A4♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="149,60,13" href="#" alt="B4♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
					  <area shape="circle" coords="227,51,14" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="303,42,13" href="#" alt="D5♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
					  <area shape="circle" coords="380,35,13" href="#" alt="E5♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tuned down from 660 -->
					  <area shape="circle" coords="457,26,13" href="#" alt="F5" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>
                        El Jins Hijazkar no tiene <em>ghammaz</em>, y por lo tanto no tiene un tamaño definido. Su melodía está centrada alrededor de su tónica, escrita aquí en <strong>Do</strong>. Jins Hijazkar aparece en la octava del <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
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
                                    <b>Ya Halawit el-Dunya</b>
                                    <span>Sayyed Makkawi</span>
                                    <span>Music by Zakariyya Ahmad</span>
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
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Al Muwashahat</span>
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
                                    <span>Karem Mahmud</span>
                                    <span>Music by Darwish al-Hariri</span>
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
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Daoud Husni</span>
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
                                    <span>Sabah Fakhri</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Ya Nas Ana Mutt Fi Hubbi</b>
                                    <span>Ghada Shbeir</span>
                                    <span>Music by Sayyed Darwish</span>
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
                                    <span>Sonia M'Barek</span>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>