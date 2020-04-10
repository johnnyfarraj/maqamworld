<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Νταλανσίν";
$page_description = "Μακάμ Νταλανσίν";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Ραστ, Μακάμ Κιρντάν, Μακάμ Σαζκάρ, Μακάμ Σουνζάκ, Μακάμ Ναϊρούζ, Μακάμ Γιάκα, Μακάμ Νταλανσίν, Μακάμ Σουζνταλάρα, Μακάμ Μαχούρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/dalanshin.php";
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
                        <h1>Μακάμ Νταλανσίν</h1>
                        <h3>Μέλος της <a href="f_rast.php">Οικογένειας Μακάμ Ραστ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Νταλανσίν</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="84,58,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="161,66,13" href="#" alt="Ré♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="240,74,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="317,83,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="393,90,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="471,99,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="548,107,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="626,115,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
                       <area shape="circle" coords="704,123,13" href="#" alt="Ré♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="780,133,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                       <!-- Links -->
                      <area shape="rect" coords="107,4,380,34" href="../jins/saba_dalanshin.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,140,443,171" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="562,4,690,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
					</map>
                    
                    <p>
                        Το Μακάμ Νταλανσίν αρχίζει με την βάση <a href="../jins/saba_dalanshin.php">Τζινς Σάμπα Νταλανσίν</a> στην οκτάβα του <a href="rast.php">Μακάμ Ραστ</a> έπειτα κινείται πίσω στην κλίμακα του μακάμ Ραστ με <a href="../jins/upper_rast.php">Τζινς Άνω Ραστ</a> στην 5η βαθμίδα (με την τονική της πάνω στην 8η βαθμίδα), και <a href="../jins/rast.php">Τζινς Ραστ</a> στην τονική.
                    </p>
                    <p>
                        Δεν υπάρχουν πολλά τραγούδια σε αυτό το μακάμ, αντιθέτως περισσότερο χρησιμοποιείται ως μετατροπία από το <a href="rast.php">Μακάμ Ραστ</a>.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/dalanshin/ya_mal_il_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/dalanshin/ya_mal_il_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Καντ Για Μαλ ιλ-Σαμ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Άχμαντ Αμπού Χαλίλ αλ-Καμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μάλα αλ-Κασάτ</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/kull_illi_habb_itnasaf.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κουλ ίλι Χαμπ Ετνάσαφ (1931)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/dalanshin/3ishna_w_shufna.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Ίσνα ου Σούφνα</b>
                                    <span>Σάλεχ Αμπντέλ Χάι (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
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
