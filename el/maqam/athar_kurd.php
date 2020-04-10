<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Άθαρ Κουρντ";
$page_description = "Μακάμ Άθαρ Κουρντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Νικρίζ, Μακάμ Νάουα Άθαρ, Μακάμ Άθαρ Κουρντ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/athar_kurd.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Άθαρ Κουρντ</h1>
                        <h3>Μέλος της <a href="f_nikriz.php">Οικογένειας Μακάμ Νικρίζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/athar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άθαρ Κουρντ</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="63,131,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="141,123,13" href="#" alt="Ré♭" class="playNote" data-frequency="274" data-parent="#notation1">
                      <area shape="circle" coords="218,115,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                      <area shape="circle" coords="296,107,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
                      <area shape="circle" coords="373,99,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="450,91,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
                      <area shape="circle" coords="528,83,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
                      <area shape="circle" coords="605,75,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="95,5,315,34" href="../jins/athar_kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="320,144,500,175" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                    </map>

                    <p>
                        Το Μακάμ Άθαρ Κουρντ είναι ένα σπάνιο μακάμ το οποίο φαίνεται να είναι μια εξέλιξη του 20ου αιώνα. Η κλίμακά του αρχίζει με την βάση <a href="../jins/athar_kurd.php">Τζινς Άθαρ Κουρντ</a> στην τονική, ακολουθούμενη είτε από <a href="../jins/hijazkar.php">Τζινς Χιτζαζκάρ</a> επικεντρωμένο στην 5η βαθμίδα.
		            </p>
                    <p>
                        Η κλίμακα του Μακάμ Άθαρ Κουρντ είναι ένα υβρίδιο μεταξύ <a href="nawa_athar.php">Μακάμ Νάουα Άθαρ</a> και <a href="kurd.php">Μακάμ Κουρντ</a>, εξού και η ονομασία του.
		            </p>
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/athar_kurd/raydak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Μσάφερ ου Άλμπι Μάακ (1950)</b>
                                    <span>Λέιλα Μουράντ (Αίγυπτος)</span>
                                    <span>Μουσική Άχμαντ Σίντκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/el_hana_wel_widd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Χάνα ουίλ-Ουίντ (1975)</b>
                                    <span>Λέιλα Μουράντ (Αίγυπτος)</span>
                                    <span>Μουσική Αμπντέλ Μούνιμ αλ-Χαρίρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Φαγκρ Νούρακ Χαλ ου Μπαν (c.1952)</b>
                                    <span>Φωνή Μπαλίχ Χάμντι</span>
                                    <span>Μουσική Γιούσεφ Σάουκι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/maqam/athar_kurd/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Χομπ Κίντα (1959)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/samai_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Χιτζαζκάρ Κουρντ</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> Les Derviches Tourneurs of Damas Vol. 2</span>
                                    <span>Μουσική Σαλάχ αλ-Μάχντι (Τυνησία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Ούτι</b>
                                    <span>Ριάντ αλ-Σουνμπάτι</span>
                                    <span><img src="/img/cd.png"> Τακασίμ Ούτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Ούτι Άθαρ Κουρντ</b>
                                    <span>Μοχάμαντ Κάντρι Νταλάλ</span>
                                    <span><img src="/img/cd.png"> Maqams Insolites</span>
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
