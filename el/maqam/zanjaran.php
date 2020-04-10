<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ζαντζαράν";
$page_description = "Μακάμ Ζαντζαράν";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Χιτζάζ, Μακάμ Χιτζάζ, Μακάμ Χιτζαζκάρ, Μακάμ Σαντ Αραμπάν, Μακάμ Σαχνάζ, Μακάμ Σουζιντίλ, Μακάμ Ζαντζαράν";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/zanjaran.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Ζαντζαράν</h1>
                        <h3>Μέλος της <a href="f_hijaz.php">Οικόγενειας Μακάμ Χιτζάζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/zanjaran.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ζαντζαράν</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/zanjaran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="49,81,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="126,89,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="202,97,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1"><!-- Ajam 3rd, tune down from 440 -->
                      <area shape="circle" coords="280,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="358,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="434,122,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="512,130,13" href="#" alt="Ré♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="590,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="132,9,266,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="408,9,542,40" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Το Μακάμ Ζαντζαράν είναι μία παραλλαγή του <a href="hijaz.php">Μακάμ Χιτζάζ</a> με <a href="../jins/ajam.php">Τζινς Άτζαμ</a> ως δεύτερο Τζινς (στην 4η βαθμίδα) και την ρίζα <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην τονική.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a>.</p>

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
                                    <b>Για Χαλάουτ ελ-Ντούνια (c.1950)</b>
                                    <span>Σάιεντ Μακάουι (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/aya_daraha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άϊα Ντάραχα Μπελ-Χουζν</b>
                                    <span>Χάσαν αλ-Χαφφάρ (Συρία)</span>
                                    <span>Μουσική Μάζντι αλ-Ακίλι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/mawwal_amana_ya_leil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μαουάλ Αμάνα Για Λέιλ (1931)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/zanjaran/layali_zanjaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λαϊάλι Ζαντζαράν</b>
                                    <span> Άχμαντ Χαμπάρι</span>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ (Συρία)</span>
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
                                    <b>Σεμίραμις (ταξίμι Ούτι Ζαντζαράν)</b>
                                    <span>Άμερ Αμούρι (Συρία)</span>
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
                                    <b>Ταξίμι Κανονάκι Ζαντζαράν</b>
                                    <span>Αμπραχάμ Σαλμάν (Ιράκ)</span>
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
                                    <b>Ταξίμι Μπουζούκ Ζαντζαράν</b>
                                    <span>Μοχάμαντ Αμπντέλ Καρίμ</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
