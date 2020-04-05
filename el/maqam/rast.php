<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ραστ";
$page_description = "Μακάμ Ραστ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Ραστ, Μακάμ Κιρντάν, Μακάμ Σαζκάρ, Μακάμ Σουνζάκ, Μακάμ Ναϊρούζ, Μακάμ Γιάκα, Μακάμ Νταλανσίν, Μακάμ Σουζνταλάρα, Μακάμ Μαχούρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/rast.php";
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
                        <h1>Μακάμ Ραστ</h1>
                        <h3>To κύριο μακάμ στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/rast.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ραστ</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="65,137,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="141,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="218,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="295,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="373,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="449,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="528,88,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="605,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
				      <area shape="circle" coords="682,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="758,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="836,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="150,6,275,37" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="400,6,584,37" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="628,6,828,37" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>
                        Το Μακάμ Ραστ είναι το κύριο <em>μακάμ</em> στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a>, και είναι μακράν ένα από τα πιο δημοφιλή και κοινά μακαμάτ στο Αραβικό ρεπερτόριο. Η κλίμακά του αρχίζει με την βάση <a href="../jins/rast.php">Τζινς Ραστ</a>, ακολουθούμενο στην 5η βαθμίδα από είτε <a href="../jins/upper_rast.php">Τζινς Άνω Ραστ</a> (με την τονική στην 8η βαθμίδα) ή <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a>.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/rast/ya_shadi_al_alhan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/rast/ya_shadi_al_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Για Σάντι αλ-Αλχάν</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/mala_el_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μάλα αλ-Κασάτ</b>
                                    <span>Μουσικό Σύνολο Αλ-Κίντι (Συρία/Γαλλία)</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/ya_3udhaib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Ουδάιμπ αλ-Μάρσαφ</b>
                                    <span>Χορωδία των καθηγητών μουσικής - Πανεπιστήμιο Κασλίκ (Λίβανος)</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                    <span><img src="/img/cd.png"> Orientalia: Mouachah et Chansons</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/waraqu_el_asfar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ουαράκου ελ-Άσφαρ Σαχρ Αϊλούλ</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/qasidat_salabat_su3adu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Σάλαμπατ Σουάντ</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/layali_rast_abbas_bleidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λαϊάλι Ραστ</b>
                                    <span>Αμπάς αλ-Μπλέιντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_leih_tilaw3ini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λαχ Τιλαουάνι (1938)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/dulab_rast_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Ραστ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congres</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rast/samai_rast_george_michel.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Ραστ Τζορτζ Μισέλ (Αίγυπτος)</b>
                                    <span>Μουσικό Σύνολο Αλ-Κίντι (Συρία/Γαλλία)</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 2 (Rast)</span>
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
