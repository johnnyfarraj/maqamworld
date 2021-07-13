<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Bayati";
$page_description = "Maqam Bayati";
$page_keywords = "arabic, music, arab, world, maqam, jins, bayati, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/bayati.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Bayati</h1>
                        <h3>Ein Mitglied der <a href="f_bayati.php">Maqam-Bayati-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Bayati</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="68,128,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="145,120,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
                      <area shape="circle" coords="222,112,13" href="#" alt="F4" class="playNote" data-frequency="345" data-parent="#notation1"><!-- fine tune down from 347.65 -->
                      <area shape="circle" coords="300,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="377,96,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="454,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="531,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="609,72,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                          <area shape="circle" coords="684,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="762,96,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="841,88,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="917,80,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="995,72,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="111,7,242,36" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="370,8,549,37" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="783,8,890,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
	     </map>

                    <p>Maqam Bayati ist einer der beliebtesten und am häufigsten verwendeten Maqamat im Repertoire der arabischen Musik. Er ist auch der Haupt-Maqam der <a href="f_bayati.php">Bayati-Familie</a>. Seine Leiter beginnt mit <a href="../jins/bayati.php">Jins Bayati</a> auf der Tonika. Es folgt entweder <a href="../jins/nahawand.php">Jins Nahawand</a> oder <a href="../jins/rast.php">Jins Rast</a> auf der vierten Stufe.
                    </p>
                    <p><strong>Maqam Muhayyar</strong> ist eine Version von Maqam Bayati, deren <em>Sayr</em> bei der Oktavnote beginnt (auf der alten arabischen Skala <em>Muhayyar</em> genannt). Maqam Muhayyar verwendet häufig <a href="../jins/rast.php">Jins Rast</a> auf der vierten Stufe, um aufzusteigen, und betont dann <a href="../jins/bayati.php">Jins Bayati</a> in der Oktave, bevor er durch die anderen Ajnas absteigt, die Maqam Bayati gemeinsam haben.
                    </p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_bayati.php">Maqam-Bayati-Familie</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Ala Balad el-Mahbub Waddini (1935)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/akun_sa3id.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Akun Sa‘id (1932)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musik von Zakariyya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/lamma_enta_nawi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lamma-nta Nawi (1929)</b>
                                    <span>Musik mit Gesang von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/mijana_wa_3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mijana and ‘Ataba</b>
                                    <span>Wadih Al-Safi</span>
                                    <span>(traditionelle libanesische Folklore)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/imlali_al_aqdaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Imlali al-Aqdaha Sirfan</b>
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Musik mit Gesang von Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Rayt Minnun (Kanun-Taqsim)</b>
                                    <span>Fairouz</span>
                                    <span>Musik von Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Rayt Minnun</b>
                                    <span>Fairouz</span>
                                    <span>Musik von Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_3aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan</b>
                                    <span>Farhan Sabbagh (Syrien)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_shalfun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Iskandar Shalfun</b>
                                    <span>Ensemble Morkos</span>
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
