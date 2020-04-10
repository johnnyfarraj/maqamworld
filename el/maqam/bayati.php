<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Μπαϊάτι";
$page_description = "Μακάμ Μπαϊάτι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Μπαϊάτι, Μακάμ Μπαϊάτι Σούρι, Μακάμ Χουσάινι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/bayati.php";
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
                        <h1>Μακάμ Μπαϊάτι</h1>
                        <h3>To κύριο μακάμ στην <a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπαϊάτι</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,128,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="145,120,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="222,112,13" href="#" alt="Fa" class="playNote" data-frequency="345" data-parent="#notation1"><!-- fine tune down from 347.65 -->
					  <area shape="circle" coords="300,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="377,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="454,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="531,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="609,72,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
				      <area shape="circle" coords="684,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="762,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="841,88,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="917,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="995,72,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="94,6,262,36" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="364,6,565,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="778,6,905,36" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
				     </map>

                    <p>
                        Το Μακάμ Μπαϊάτι είναι μακράν ένα από τα πιο δημοφιλή και κοινά μακαμάτ στο Αραβικό ρεπερτόριο. Είναι επίσης το κύριο μακάμ στην <a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a>.
                    </p>
                    <p>
                        Η κλίμακά του αρχίζει με <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> στην τονική, ακολουθούμενο είτε από <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a> ή <a href="../jins/rast.php">Τζινς Ραστ</a> στην 4η βαθμίδα.
                    </p>
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati/3ala_balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άλα Μπάλαντ ελ-Μαχμπούμπ Ουαντίνι (1935)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/akun_sa3id.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ακούν Σαΐντ (1932)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/lamma_enta_nawi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λάμα-ντα Νάουι (1929)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/mijana_wa_3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μιτζανά και Ατάμπα</b>
                                    <span>Ουαντί αλ-Σάφι (Λίβανος )</span>
                                    <span>(Μουσική από την Λιβανική Παράδοση)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/imlali_al_aqdaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ιμλάλι αλ-Ακντάχα Σέρφαν</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>(Παραδοσιακό)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/nura_nura.mp3">
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

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Ράιτ Μίνουν (Τακσίμ Κανονάκι)</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/ya_rayt_minnun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Ράιτ Μίνουν</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_3aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Μπαϊάτι Ιμπραΐμ αλ-Αριάν</b>
                                    <span>Φαρχάν Σαμπάγ (Σόλο Ούτι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati/samai_bayati_shalfun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Μπαϊάτι Εσκάνταρ Σαλφούν</b>
                                    <span>Μουσικό Σύνολο Μόρκος (Λίβανος)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
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
