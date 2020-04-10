<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Σάμπα";
$page_description = "Μακάμ Σάμπα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Σάμπα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/saba.php";
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
                        <h1>Μακάμ Σάμπα</h1>
                        <h3>(δεν αποτελεί μέρος κάποιας οικογένειας μακάμ)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σάμπα</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="../note/maqam/saba.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="132,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="209,112,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="288,104,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2nd tuned up from 365.32 -->
					  <area shape="circle" coords="367,96,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- Hijaz 3rd tuned down from 440-->
					  <area shape="circle" coords="446,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="522,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="602,71,13" href="#" alt="Ré♭" class="playNote" data-frequency="548" data-parent="#notation1">
				      <area shape="circle" coords="653,71,13" href="#" alt="Ré♮" class="playNote" data-frequency="586.66" data-parent="#notation1"><!-- Nikriz 3rd -->
					  <area shape="circle" coords="705,62,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1"><!-- Nikriz 4th -->
					  <area shape="circle" coords="781,53,13" href="#" alt="Fa" class="playNote" data-frequency="695.31" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="135,2,280,35" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="480,2,620,33" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="253,143,395,173" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="542,143,688,173" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>
                        Το μακάμ Σάμπα είναι ένα πολύ δημοφιλές και κοινό μακάμ στο Αραβικό ρεπερτόριο. Η κλίμακά του αρχίζει με <a href="../jins/saba.php">Τζινς Σάμπα</a> στην τονική, αλληλεπικαλυπτόμενο από <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 3η βαθμίδα, ακολουθούμενη από είτε <a href="../jins/ajam.php">Τζινς Άτζαμ</a> είτε <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> στην 6η βαθμίδα.
                    </p>

                    <p>Το μακάμ Σάμπα δεν αποτελεί μέρος κάποιας οικογένειας μακάμ.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/saba/dulab_nay_taqsim_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ, τακσίμι Νάι &nbsp; Λαϊάλι Σάμπα</b>
                                    <span>Σάμπρι αλ-Μουντάλαλ (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/al_atlal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>αλ-Ατλάλ (1966)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χούα Σαχέχ ελ-Χάουα Γαλάμπ (1960)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ahwa_qamaran.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άχουα Κάμαραν</b>
                                    <span>Γάντα Σμπαιρ (Λίβανος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ghuddi_jufunik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Γούντι Ζουφούνεκ</b>
                                    <span>Χάλεντ αλ-Χάφεζ (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/ya_mas3adek_sabahiyya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντ Για μεσάντ ελ-Σαμπαχία</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>(παραδοσιακή Μελωδία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/dulab_teshuf_omuri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τεσούφ Ουμούρι (1930)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/saba/samai_saba_youssef_kassab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Σάμπα</b>
                                    <span>Μουσική Γιούσεφ Κασσάμπ</span>
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
