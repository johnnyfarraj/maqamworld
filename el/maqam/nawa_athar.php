<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ναουάθαρ";
$page_description = "Μακάμ Ναουάθαρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Νικρίζ, Μακάμ Ναουάθαρ, Μακάμ Άθαρ Κουρντ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/nawa_athar.php";
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
                        <h1>Μακάμ Ναουάθαρ</h1>
                        <h3>Μέλος της <a href="f_nikriz.php">Οικόγενειας Μακάμ Νικρίζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nawa_athar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναουάθαρ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/nawa_athar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,136,13" href="#" alt="Do" class="playNote" data-frequency=" 260.74" data-parent="#notation1"><!-- tonic -->
					  <area shape="circle" coords="136,128,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="213,120,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="291,112,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="368,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="445,94,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="522,86,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="599,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- octave -->
                      <!-- Links -->
                      <area shape="rect" coords="129,6,268,36" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="308,150,494,182" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>
                        Το Μακάμ Ναουάθαρ είναι άλλο ένα δημοφιλές μακάμστην <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a>. Η κλίμακά του αρχίζει με την βάση <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> στην τονική, ακολουθούμενη από είτε <a href="../jins/hijazkar.php">Τζινς Χιτζάζkar</a> στην 5η βαθμίδα.
                    </p>
                    <p>
                        Εξερευνήστε άλλα μακαμάτ στην <a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nawa_athar/gamil_gamal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/ghulubti_asalih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γουλούμπτι Ασάλεχ Φι Ρούχι (1948)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track active" data-song="/audio/maqam/nawa_athar/gamil_gamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Γκαμίλ Γκαμάλ (1952)</b>
                                    <span>Φωνή και μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/fakkaruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Φακαρούνι (1966)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άδκουρου αλ-Χούμπα</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Νταούντ Χόσνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/samai_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Νάουα Άθαρ</b>
                                    <span>TODO The Syrian Ensemble of Homs</span>
                                    <span>Μουσική Τζαμίλ Αουές (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nawa_athar/dulab_nawa_athar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Νάουα Άθαρ</b>
                                    <span>Τζορτζ Άμπιαντ</span>
                                    <span><img src="/img/cd.png"> Impovisations Orientales</span>
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
