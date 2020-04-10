<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ιράκ";
$page_description = "Μακάμ Ιράκ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Σίκα, Μακάμ Χουζάμ, Μακάμ Ράχατ αλ-Αρουάχ, Μακάμ Ιράκ, ακάμ Μουσταάρ, Μακάμ Μπαστανικάρ, Μακάμ Αούτζ Ιράκ";

$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/iraq.php";
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
                        <h1>Μακάμ Ιράκ</h1>
                        <h3>Μέλος της <a href="f_sikah.php">Οικογένειας Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ιράκ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="73,140,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!-- Sikah tonic variable-->
                      <area shape="circle" coords="150,132,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="227,124,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="304,116,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati 2 variable -->
                      <area shape="circle" coords="381,108,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="459,100,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="536,90,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="614,83,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                        <!-- Links -->
                      <area shape="rect" coords="83,4,204,33" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,4,429,33" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="476,4,599,33" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
	               </map>

                    <p>
                        Το Μακάμ Ιράκ είναι ένα σπάνιο μέλος της <a href="f_sikah.php">οικόγενειας μακάμ Σίκα</a>, παρόλαυτα είναι πιο κοινό ως μετατροπία στην ανάπτυξη του <a href="huzam.php">Μακάμ Χουζάμ</a>. Η κλίμακα του Μακάμ Ιράκ αρχίζει στην βάση <a href="../jins/sikah.php">Τζινς Σίκα</a> στην τονική του Σι<i class="icon-halfflat"></i> (μισή ύφεση), ακολουθούμενη από <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> στην 3η βαθμίδα και έπειτα από <a href="../jins/rast.php">Τζινς Ραστ</a> στην 6η βαθμίδα.
                    </p>
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Τζαϊίν Για Αρζ ελ-Τζάμπαλ</b>
                                    <span>Ουαντί αλ-Σάφι (Λίβανος )</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jalla_man_ansha_jamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Τζάλα Μαν Άνσα Τζαμάλακ</b>
                                    <span>Μουσικό Σύνολο Ορμίνα (Συρία)</span>
                                    <span>Μαέστρος: Δρ. Μοχάμαντ Κάντρι Νταλάλ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/samai_iraq_yussuf_basha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Ιράκ</b>
                                    <span>Ραδιοφωνική Ορχήστρα της Τυνησίας </span>
                                    <span>Μουσική Γιούσεφ Μπασά</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/el_hali_taabani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Χάλι Τααμπάνι Για Λέιλα</b>
                                    <span>Ζοζέφ Σάκερ</span>
                                    <span>Μουσική Ζιάντ Ραχμπάνι</span>
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
