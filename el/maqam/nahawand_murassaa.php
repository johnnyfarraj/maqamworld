<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ναχαουάντ Μουράσα";
$page_description = "Μακάμ Ναχαουάντ Μουράσα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Ναχαουάντ, Μακάμ Φαραχφάζα, Μακάμ Ναχαουάντ Μουράσα, Μακάμ Ουσάκ Μάσρι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/nahawand_murassaa.php";
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
                        <h1>Μακάμ Ναχαουάντ Μουράσα</h1>
                        <h3>Μέλος της <a href="f_nahawand.php">Οικόγενειας Μακάμ Ναχαουάντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναχαουάντ Μουράσα</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="44,137,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="120,128,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="197,121,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="275,112,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic-->
					  <area shape="circle" coords="352,104,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="429,96,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="506,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="585,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="35,7,350,36" href="../jins/nahawand_murassaa.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="327,141,464,174" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Το Μακάμ Ναχαουάντ Μουράσα είναι βασικά <a href="nahawand.php">Μακάμ Ναχαουάντ</a> με την 5η βαθμίδα χαμηλωμένη. Η κλίμακά του αρχίζει με <a href="../jins/nahawand_murassaa.php">Τζινς Ναχαουάντ Μουράσα</a> στην τονική, αλληλοεπικαλυπτόμενο από <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 4η βαθμίδα.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_nahawand.php">Οικογένεια Μακάμ Ναχαουάντ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nahawand_murassaa/ya_gari.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Γκάρι (1958)</b>
                                    <span>Χορία Χάσαν (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χουσάρα (1957)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ (Αίγυπτος)</span>
                                    <span>Μουσική Μπαλίχ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ταχτ ελ-Σιμπάκ </b>
                                    <span>Αζίζ Οθμάν (Αίγυπτος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/samai_mesut_cemil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Ναχαουάντ</b>
                                    <span>Σιμόν Σαχίν (Παλαιστίνη)</span>
                                    <span>Μουσική Μεσούτ Τζεμίλ (Τουρκία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/dulab_redouane.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Ναχαουάντ</b>
                                    <span>Άισα Ριντουάν (Μαρόκο)</span>
                                    <span><img src="/img/cd.png"> Égypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nahawand_murassaa/dulab_nahawand_murassa3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Ναχαουάντ Μουράσα</b>
                                    <span>Μουσικό Σύνολο Ζικραϊάτ (ΗΠΑ)</span>
                                    <span>Μουσική Σάμι Αμπού Σουμάις</span>
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
