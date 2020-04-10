<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Σάμπα Ζάμζαμ";
$page_description = "Μακάμ Σάμπα Ζάμζαμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Σάμπα Ζάμζαμ";

$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/saba_zamzam.php";
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
                        <h1>Μακάμ Σάμπα Ζάμζαμ</h1>
                        <h3>(δεν αποτελεί μέρος κάποιας οικογένειας μακάμ)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba_zamzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σάμπα Ζάμζαμ</a>
                    </div>


                      <div class="notation" id="notation1">
                        <img src="../note/maqam/saba_zamzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="59,131,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="132,123,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="209,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="288,107,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="367,98,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="447,90,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="523,82,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="602,74,13" href="#" alt="Ré♭" class="playNote" data-frequency="548" data-parent="#notation1">
				      <area shape="circle" coords="653,74,13" href="#" alt="Ré♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="705,65,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="781,57,13" href="#" alt="Fa" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="93,6,333,35" href="../jins/saba_zamzam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="472,6,613,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="257,145,394,176" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="544,145,684,174" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>
                        Το μακάμ Σάμπα Ζάμζαμ είναι σπάνιο μακάμ στο Αραβικό ρεπερτόριο. Η κλίμακά του αρχίζει με <a href="../jins/saba_zamzam.php">Τζινς Σάμπα Ζάμζαμ</a> στην τονική, αλληλεπικαλυπτόμενο από <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 3η βαθμίδα, ακολουθούμενο είτε από <a href="../jins/ajam.php">Τζινς Άτζαμ</a> ή <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> στην 6η βαθμίδα.
                    </p>
                    <p>
                    Μακάμ Σάμπα Ζάμζαμ δεν αποτελεί μέρος κάποιας οικογένειας μακάμ.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba_zamzam/sawwah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba_zamzam/sawwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαουάχ (1966)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ (Αίγυπτος)</span>
                                    <span>Μουσική Μπαλίχ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άμαλ Χαϊάτι (1965)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/3ala_hesb_widad.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άλα Χισμπ Ουιντάντ Γκάλμπι (1963)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ (Αίγυπτος)</span>
                                    <span>Μουσική Μπαλίχ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba_zamzam/ya_bint_el_sultan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Μπιντ ελ-Σουλτάν</b>
                                    <span>Άχμαντ Ανταουία</span>
                                    <span>Μουσική Χάσαν Αμπού αλ-Σουντ</span>
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
