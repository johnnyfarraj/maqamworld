<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Άτζαμ";
$page_description = "Μακάμ Άτζαμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Μακάμ Άτζαμ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/ajam.php";
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
                        <h1>Μακάμ Άτζαμ</h1>
                        <h3>To κύριο μακάμ στην <a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άτζαμ</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="68,140,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="144,131,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="221,125,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330 -->
                      <area shape="circle" coords="298,116,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="377,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="453,100,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="530,92,13" href="#" alt="Si" class="playNote" data-frequency="495" data-parent="#notation1">
                      <area shape="circle" coords="608,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                          <area shape="circle" coords="686,92,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="762,100,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="840,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="147,11,285,40" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="392,11,588,40" href="../jins/upper_ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="625,11,820,40" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
		          </map>

                   <p>
                       Το Μακάμ Άτζαμ (επίσης γνωστό και ως <strong>Αιγυπτιακό Άτζαμ</strong>) είναι το κύριο μακάμ στην <a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a>, και αρχίζει με την βάση <a href="../jins/ajam.php">Τζινς Άτζαμ</a> στην τονική, ακολουθούμενη είτε από <a href="../jins/upper_ajam.php">Τζινς Άνω Άτζαμ</a> στην 5η βαθμίδα (με την τονική στην 8η βαθμίδα) ή <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a> στην 5η βαθμίδα.
                    </p>
                    
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άγαντaν Αλκάκα (1971)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/el_bahri_biyidhak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Μπαχρ Βιγίντχακ</b>
                                    <span>Φωνή και μουσική Σέιχ Ιμάμ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/fi_youm_wi_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Φι Ιόμ ου Λέιλα (1978)</b>
                                    <span>Ουάρντα</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/tal3a_min_beit_abuha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τάλαα μιν Μπέιτ Αμπούχα</b>
                                    <span>Νάζεμ αλ-Γαζάλι (Ιράκ)</span>
                                    <span>(Ιρακινό Παραδοσιακό)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam/zuruni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ζουρούνι Κούλι Σάνα Μάρα</b>
                                    <span>Κάρεμ Μαχμούντ</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
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
