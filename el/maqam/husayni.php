<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Χουσάινι";
$page_description = "Μακάμ Χουσάινι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Μπαϊάτι, Μακάμ Μπαϊάτι Σούρι, Μακάμ Χουσάινι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/husayni.php";
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
                        <h1>Μακάμ Χουσάινι</h1>
                        <h3>Μέλος της <a href="f_bayati.php">Οικόγενειας  Μακάμ Μπαϊάτι</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/husayni.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χουσάινι</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/husayni.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="55,95,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="131,87,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!--Bayati LA 2nd, variable -->
                      <area shape="circle" coords="183,87,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="313,71,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="391,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="470,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="551,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati RE 2nd, variable -->
                      <area shape="circle" coords="630,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                       <!-- Links -->
		              <!-- Houssayni is not a Jins, it's a special case (documented in IAM)
                      <area shape="rect" coords="116,8,304,39" href="../jins/husayni.php" class="mapLink" data-parent="#notation1">
		              -->
                      <area shape="rect" coords="430,8,600,37" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Το Μακάμ Χουσάινι δεν είναι πολύ κοινό ως ένα αυτόνομο μακάμ στην Αραβική παράδοση, παρόλαυτα η ανάπτυξή του (δίνοντας έμφαση στην 5η βαθμίδα ως μία νότα με καθοδική τάση προς την 4η βαθμίδα) είναιμε αυτόν τον τρόπο υποχρεωτική μέσα στο <a href="bayati.php">Μακάμ Μπαϊάτι</a>. Στην παραδοσιακή μουσική της ευρύτερης περιοχής, αυτό είναι πραγματικά το πιο κοινό ως παραλλαγή του Μπαϊάτι, με την κλίμακά του να αρχίζει με βάση το <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> στην τονική.
                    </p>
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/husayni/billadhi_askara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/husayni/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μπιλάδι Άσκαρα</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 12 (Μπαϊάτι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χαλ Άλα αλ-Αστάρ</b>
                                    <span>Γάντα Σμπαιρ (Λίβανος)</span>
                                    <span><img src="/img/cd.png"> Al Mouachahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/khala_al_3idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χάλα αλ-Ιδάρ</b>
                                    <span>Χάλεντ αλ-Χάφεζ (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Νούρα Νούρα (1953)</b>
                                    <span>Φωνή και μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/samai_bayati_khana2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Μπαϊάτι Ιμπραΐμ αλ-Αριάν (Χάνα 2)</b>
                                    <span>Μουσικό Σύνολο Σαλάχ Αράμ (Αίγυπτος)</span>
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
