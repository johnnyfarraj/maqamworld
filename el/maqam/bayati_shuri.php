<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Μπαϊάτι Σούρι";
$page_description = "Μακάμ Μπαϊάτι Σούρι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Μπαϊάτι, Μακάμ Μπαϊάτι Σούρι, Μακάμ Χουσάινι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/bayati_shuri.php";
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
                        <h1>Μακάμ Μπαϊάτι Σούρι</h1>
                        <h3>Μέλος της <a href="f_bayati.php">Οικόγενειας Μακάμ Μπαϊάτι</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati_shuri.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπαϊάτι Σούρι</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bayati_shuri.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="45,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="123,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="199,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="278,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="354,96,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="431,88,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="510,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="588,72,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="80,9,244,39" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="330,9,469,39" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                       Το Μακάμ Μπαϊάτι Σούρι είναι μία παραλλαγή του <a href="bayati.php">Μακάμ Μπαϊάτι</a> με χαμηλωμένη την 5η βαθμίδα. Αρχίζει με την βάση <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> στην τονική, ακολουθούμενο από είτε <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 4η βαθμίδα.
                    </p>   
                    <p>
                        Είναι ένα πολύ δημοφιλές μακάμ δικαιωματικά, ειδικά στις Μουασαχάτ και Αντουάρ <a href="../form/vocal_comp.php">φωνητικές συνθέσεις</a>.
                    </p>
                    
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bayati_shuri/samai_bayati_shuri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bayati_shuri/samai_bayati_shuri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Σαμάι Μπαϊάτι Σούρι</b>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 2 (Μπαϊάτι Σούρι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/taqsim_violin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Βιολί Μακάμ Μπαϊάτι Σούρι</b>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 2 (Μπαϊάτι Σούρι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/hibbi_da3ani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Νταάνι Λιλ-Ουισάλ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 2 (Μπαϊάτι Σούρι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/talaffata_al_dhabyu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ταλάφατα αλ-Δάμπιου</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 2 (Μπαϊάτι Σούρι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/dayya3ti_mustaqbal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Νταιάτι Μουστάκμπαλ Χαϊάτι</b>
                                    <span>Μουσική και φωνή Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/qadd_ah_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντ Αχ Για Χέλου</b>
                                    <span>Νάι Μπαργούτι (Παλαιστίνη)</span>
                                    <span>(παραδοσιακό τραγούδι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/qadd_habibi_ghab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντ Χαμπίμπι Γαμπ</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                    <span>(παραδοσιακό τραγούδι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bayati_shuri/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Κανονάκι σε Μακάμ Μπαϊάτι Σούρι</b>
                                    <span>Μαρί Τζουμπράν</span>
                                    <span>Ουάσλα σε Μπαϊάτι Σούρι</span>
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
