<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam Mourassa‘";
$page_description = "Jins ‘Ajam Mourassa‘";
$page_keywords = "musique arabe, maqam, instruments, jins ‘ajam mourassa‘, jins ajam mourassaa, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/ajam_murassaa.php";
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
                        <h1>Jins ‘Ajam Mourassa‘ <span class="badge badge-custom">Nouveau</span></h1>
                        <h3>Une variation du <a href="ajam.php">Jins ‘Ajam</a> avec une quarte augmentée</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de ‘Ajam Mourassa‘</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="53,86,12" href="#" alt="Mi" class="playNote" data-frequency="330" data-parent="#notation1">
					  <area shape="circle" coords="136,78,14" href="#" alt="Fa" class="playNote" data-frequency="347.65"  data-parent="#notation1">
					  <area shape="circle" coords="211,69,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="289,61,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1"><!-- TODO should that be lowered a bit to match 'Ajam's 3rd? -->
					  <area shape="circle" coords="365,53,13" href="#" alt="Si♮" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="444,45,14" href="#" alt="Do" class="playNote" data-frequency="521.5" data-parent="#notation1">
					  <area shape="circle" coords="518,37,12" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>

                    <p>Le Jins 'Ajam Mourassa est un <em>jins</em> de 5 notes. Il est noté ici avec sa tonique sur Fa et son <em>ghammaz</em> sur Do. Le Jins 'Ajam Mourassa ne fait partie d'aucun <a href="../maqam.php">maqam</a> et apparaît en général comme une modulation à partir du <a href="ajam.php">Jins ‘Ajam</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam_murassaa/kallili.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/ajam_murassaa/kallili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Kallili Ya Souhbou</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/bein_shattein_w_mayya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bein Chattein we Mayya</b>
                                    <span>Mouhammad Qandil</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/ajam_murassaa/ya_ma3shar_al_nas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Ya Ma‘char al-Nas</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/3umri_fi_hubbihi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qassida ‘Umri Fi Hubbihi Inqada</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/abdu_daghir_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Qanoun en <a href="../maqam/ajam.php">Maqam 'Ajam</a></b>
                                    <span>Abdou Dagher (Égypte)</span>
                                    <span><img src="/img/cd.png"> Al-Gibali</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/nibtidi_mnein_el_hikaya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nibtidi Mnein el-Hikaya (1975)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Mouhammad al-Mougi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/sabbahti_min_3ishqak_abki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Sabbahti Min ‘Ichqi Abki</b>
                                    <span>Abdel Hayy Hilmi (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/m_qadri_dalal_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud</b>
                                    <span>Mouhammad Qadri Dalal (Syrie)</span>
                                    <p><img src="/img/cd.png"> Maqamat Insolites</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/layali_zaman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Zaman</b>
                                    <span>Composition instrumentale de Abdou Dagher (Égypte)</span>
                                    <span>Enregistrée avec son ensemble à l'Opéra du Caire.</span>
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