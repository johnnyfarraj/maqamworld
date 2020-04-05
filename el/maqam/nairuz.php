<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ναϊρούζ/ Μακάμ Γιάκα";
$page_description = "Μακάμ Ναϊρούζ/ Μακάμ Γιάκα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Ραστ, Μακάμ Κιρντάν, Μακάμ Σαζκάρ, Μακάμ Σουνζάκ, Μακάμ Ναϊρούζ, Μακάμ Γιάκα, Μακάμ Νταλανσίν, Μακάμ Σουζνταλάρα, Μακάμ Μαχούρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/nairuz.php";
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
                        <h1>Μακάμ Ναϊρούζ</h1>
                        <h1>Μακάμ Γιάκα</h1>
                        <h3>Μέλος της <a href="f_rast.php">Οικόγενειας Μακάμ Ραστ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nairuz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναϊρούζ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/yakah.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Γιάκα</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/nairuz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="74,135,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="150,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="228,118,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="305,110,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="383,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="459,93,13" href="#" alt="La<i class='icon-halfflat'></i>" class="playNote" data-frequency="426.67" data-parent="#notation1"><!-- Bayat 2nd, tuned up from A4♭=420 -->
					  <area shape="circle" coords="537,85,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="615,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="158,5,281,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,5,585,34" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Το <strong>Μακάμ Ναϊρούζ</strong> αρχίζει με την ρίζα <a href="../jins/rast.php">Τζινς Ραστ</a> στην τονική, ακολουθούμενο από <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> στην 5η βαθμίδα.
                    </p>
                    <p>
                        Το Μακάμ Ναϊρούζ είναι σχετικά σπάνιο από μόνο του, αλλά αναδυκνύεται ως ανάπτυξη μέσα στο <a href="suznak.php">Μακάμ Σουνζάκ</a>/<a href="rast.php">Μακάμ Ραστ</a> – εξαιτίας της συγγένειας μεταξύ <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> και <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 5η βαθμίδα.
                    </p>
                    <p>
                        Το <strong>Μακάμ Γιάκα</strong> είναι μία αρχαϊκή εκδοχή του Μακάμ Ναϊρούζ, βασισμένη στην νότα Σολ3 στην Αραβική αρχαϊκή 24φθογγη κλίμακα (ονομαζόμενη ως <strong>Γιάκα</strong>) παρά βασισμένη στην νότα Ντο4.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nairuz/ya_hilalan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nairuz/ya_hilalan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Για Χιλάλαν</b>
                                    <span>Μουσικό Σύνολο Αραβικής Μουσικής (Αίγυπτος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/mubarqa3ul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μουμπάρακου αλ-Τζαμάλ</b>
                                    <span>Χάσαν αλ-Χαφφάρ (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/asl_il_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Ασλ ιλ-Γαράμ (1945)</b>
                                    <span>Νουρ ελ-Χόντα</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γανίλι  Σουάι Σουάι (1945)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
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
