<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Zanjaran";
$page_description = "Maqam Zanjaran";
$page_keywords = "arabic, music, arab, world, maqam, jins, zanjaran, hijaz, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/zanjaran.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Zanjaran</h1>
                        <h3>Un miembro de la <a href="f_hijaz.php">Familia Maqam Hijaz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/zanjaran.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Zanjaran</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/zanjaran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="49,81,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="126,89,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="202,97,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1"><!-- Ajam 3rd, tune down from 440 -->
                      <area shape="circle" coords="280,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="358,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="434,122,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="512,130,13" href="#" alt="Re♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="590,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="135,9,263,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="415,9,538,40" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Maqam Zanjaran is a variant of <a href="hijaz.php">Maqam Hijaz</a> with <a href="../jins/ajam.php">Jins ‘Ajam</a> as the second jins (on the 4<sup>th</sup> degree) and the root <a href="../jins/hijaz.php">Jins Hijaz</a> on the <em>tonic</em>. </p>

                    <p>Explora otros maqamat en la <a href="f_hijaz.php">Familia Maqam Hijaz</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/zanjaran/ya_halawet_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Halawit el-Dunya (c.1950)</b>
                                    <span>Sayyed Makkawi</span>
                                    <span>Music by Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/aya_daraha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Aya Daraha Bil-Huzn</b>
                                    <span>Hassan al-Haffar</span>
                                    <span>Music by Majdi al-‘Aqili</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/mawwal_amana_ya_leil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Amana Ya Leil (1931)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/layali_zanjaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Zanjaran</b>
                                    <span>Ahmad Khabbari</span>
                                    <span>Al-Turath Ensemble</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al-Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Semiramis (Taqsim Oud Zanjaran)</b>
                                    <span>‘Amer ‘Ammuri</span>
                                    <span><img src="/img/cd.png"> Takasim Oud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Qanun Zanjaran</b>
                                    <span>Abraham Salman</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/taqsim_buzuq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Buzuq Zanjaran</b>
                                    <span>Muhammad Abdel Karim</span>
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
