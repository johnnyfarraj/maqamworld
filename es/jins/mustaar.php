<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Musta‘ar";
$page_description = "Jins Musta‘ar";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "es/jins/mustaar.php";
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
                        <h1>Jins Musta‘ar (o Mustaar)</h1>
                        <h3>Una variación de <a href="sikah.php">Jins Sikah</a> con el segundo grado sostenido</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Musta‘ar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,91,12" href="#" alt="Re♯" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="147,84,14" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="233,76,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="307,68,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="383,59,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="449,52,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>
                    <p>
                        Jins Musta'ar es un <em>jins</em> de 3 notas. Se escribe aquí con su tónico en <strong>Mi</strong><i class="icon-halfflat"></i> y su <em>ghammaz</em> en <strong>Sol</strong>. Jins Musta’ar es el primer <em>jins</em> en <a href="../maqam/mustaar.php">Maqam Musta‘ar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mustaar/raqq_il_habib.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mustaar/raqq_il_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Raqq el-Habib (1944)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/sahran-li-wahdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sahran li-Wahdi (1950)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aruh Li Min (1958)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/habbeit_wala_banshi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habbeit Wala Banshi ‘Alaya (1930)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/huwwa_el_hobb_le3ba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Huwwa el-Hobb Li‘ba</b>
                                    <span>Aziza Galal</span>
                                    <span>Música de Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/mawwal_qadi_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Qadi al-Gharam</b>
                                    <span>Abdel Hay Hilmi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/oud_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud en Maqam Sikah</b>
                                    <span>Riyad al-Sunbati</span>
                                    <span><img src="/img/cd.png"> Taqaseem</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qanun_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Qanun en Maqam Sikah</b>
                                    <span>‘Imad Mulki</span>
                                    <span>Conjunto Al-Turath</span>
                                    <span><img src="/img/cd.png"> Gardens of Jasmin - Maqam Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qasida_qul_lil_maliha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Qul Lil-Maliha</b>
                                    <span>Sabah Fakhri</span>
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