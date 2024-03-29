<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam Murassa‘";
$page_description = "Jins ‘Ajam Murassa‘";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam murassa‘, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "de/jins/ajam_murassaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins ‘Ajam Murassa‘ <span class="badge badge-custom">Neu</span></h1>
                        <h3>Eine Variante von <a href="ajam.php">Jins ‘Ajam</a> mit erhöhter Quarte</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von ‘Ajam Murassa‘</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="53,86,12" href="#" alt="E4" class="playNote" data-frequency="330" data-parent="#notation1">
					  <area shape="circle" coords="136,78,14" href="#" alt="F4" class="playNote" data-frequency="347.65"  data-parent="#notation1">
					  <area shape="circle" coords="211,69,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="289,61,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1"><!-- TODO should that be lowered a bit to match 'Ajam's 3rd? -->
					  <area shape="circle" coords="365,53,13" href="#" alt="B4♮" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="444,45,14" href="#" alt="C5" class="playNote" data-frequency="521.5" data-parent="#notation1">
					  <area shape="circle" coords="518,37,12" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>

                    <p>Jins ‘Ajam Murassa’ ist ein Fünfton-Jins. Es ist hier notiert mit F als Tonika und C als Ghammaz. Jins ‘Ajam Murassa’ kommt in keinem Maqam vor und wird gewöhnlich als Modulation von <a href="ajam.php">Jins ‘Ajam</a> verwendet.</p>

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
                                    <b>Muwshah Kallili Ya Suhbu</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musik von Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/jins/ajam_murassaa/3ala_shatt_bahr_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Shatt Bahr el-Hawa</b>
                                    <span>Karem Mahmud</span>
                                    <span>Musik von Mahmud al-Sherif</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/bein_shattein_w_mayya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bein Shattein we Mayya</b>
                                    <span>Muhammad Qandil</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/ajam_murassaa/ya_ma3shar_al_nas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Ya Ma‘shar al-Nas</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                   <div class="track" data-song="/audio/jins/ajam_murassaa/3umri_fi_hubbihi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida ‘Umri Fi Hubbihi Inqada</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/abdu_daghir_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Qanun in Maqam 'Ajam</b>
                                    <span>Abdu Daghir</span>
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
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musik von Muhammad Abdel Wahab</span>
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
                                    <span>Abdel Halim Hafez</span>
                                    <span>Musik von Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/sabbahti_min_3ishqak_abki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Sabbahti Min ‘Ishqi Abki</b>
                                    <span>Abdel Hayy Hilmi</span>
                                    <span>Musik von ???</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/m_qadri_dalal_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Oud Taqsim</b>
                                    <span>Muhammad Qadri Dalal</span>
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
                                    <span>Instrumentalkomposition von ‘Abdu Dagher</span>
                                    <span>Aufgenommen mit seinem Ensemble in der Kairoer Oper</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>