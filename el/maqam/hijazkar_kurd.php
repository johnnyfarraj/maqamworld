<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Χιτζασκάρ Κουρντ";
$page_description = "Μακάμ Χιτζασκάρ Κουρντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/hijazkar_kurd.php";
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
                        <h1>Μακάμ Χιτζασκάρ Κουρντ</h1>
                        <h3>Μέλος της <a href="f_kurd.php">Οικογένειας Μακάμ Κουρντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζασκάρ Κουρντ</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/hijazkar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="79,67,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="158,75,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="234,85,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="313,93,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="365,93,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="417,101,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="494,109,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="570,118,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="649,126,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                      <area shape="circle" coords="728,134,13" href="#" alt="Ré♭" class="playNote" data-frequency="274" data-parent="#notation1">
                      <area shape="circle" coords="803,142,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="152,9,338,39" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="618,9,769,39" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="310,146,510,174" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>
                        Το μακάμ Χιτζασκάρ Κουρντ είναι μια αρχαϊκή εκδοχή του <a href="kurd.php">Μακάμ Κουρντ</a> με <a href="../jins/hijazkar.php">Τζινς Χιτζασκάρ</a> στην οκτάβα. Η κλίμακά του αρχίζει με βάση το <a href="../jins/kurd.php">Τζινς Κουρντ</a> στην τονική, ακολουθούμενο από <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a> στην 4η  βαθμίδα.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_kurd.php">Οικογένεια Μακάμ Κουρντ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Τιφ Για Ντούρι</b>
                                    <span>Χορωδία των καθηγητών μουσικής - Πανεπιστήμιο Κασλίκ (Λίβανος)</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span>Μουσική Σαΐντ Νταρουίς/Όμαρ αλ-Μπατς</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Songs</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/hibbi_zurni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Ζούρνι Μα Ταϊάσαρ</b>
                                    <span>Χορωδία των καθηγητών μουσικής - Πανεπιστήμιο Κασλίκ (Λίβανος)</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span>Μουσική Νταρουίς αλ-Χαρίρι</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Songs</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/ya_dhal_qawam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Δαλ-Καουάμ αλ-Σάμχαρι</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/izzay_tibi3ni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ιζάι Τιμπέινι ου-Άνα Αστερίκ</b>
                                    <span>Σάλεχ Αμπντέλ Χάι (Αίγυπτος)</span>
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
