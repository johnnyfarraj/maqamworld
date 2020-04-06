<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Χιτζασκάρ";
$page_description = "Μακάμ Χιτζασκάρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Χιτζάζ, Μακάμ Χιτζάζ, Μακάμ Χιτζασκάρ, Μακάμ Σαντ Αραμπάν, Μακάμ Σαχνάζ, Μακάμ Σουζιντίλ, Μακάμ Ζαντζαράν";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/hijazkar.php";
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
                        <h1>Μακάμ Χιτζασκάρ (ou Hijaz Kar)</h1>
                        <h1>Μακάμ Σαντ Αραμπάν</h1>
                        <h1>Μακάμ Σουζιντίλ</h1>
                        <h1>Μακάμ Σαχνάζ</h1>
                        <h3>Μέλος της <a href="f_hijaz.php">Οικόγενειας Μακάμ Χιτζάζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζασκάρ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shadd_araban.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαντ Αραμπάν</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shahnaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαχνάζ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suzidil.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σουζιντίλ</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="78,63,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="155,71,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="309,87,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="386,95,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="465,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="542,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="618,120,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="696,128,13" href="#" alt="Ré♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="774,136,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="148,4,330,34" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="317,139,460,168" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="594,4,734,34" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Το Μακάμ Χιτζασκάρ είναι η πιο κοινή παραλλαγή του <a href="hijaz.php">Μακάμ Χιτζάζ</a> (με βάση το Ντο). Η κλίμακά του αρχίζει με βάση <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην τονική, ακολουθούμενο από <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> στην 4η βαθμίδα, έπειτα <a href="../jins/hijazkar.php">Τζινς Χιτζάζkar</a> στην οκτάβα.
                    </p>
                    <p>
                        Για ιστορικούς λόγους, 3 από τις μεταφορές της βάσης αυτού του μακάμ έχουν διαφορτετκό όνομα (και συνήθως είχαν διαφορετική ανάπτυξη πριν από πολύ καιρό):
                    </p>
					<p>
					<li><strong>Μακάμ Σαντ Αραμπάν</strong> (Χιτζασκάρ με βάση το χαμηλό Σολ)</li>
					<li><strong>Μακάμ Σουζιντίλ</strong> (Χιτζασκάρ με βάση το χαμηλό Λα)</li>
					<li><strong>Μακάμ Σαχνάζ</strong> (Χιτζασκάρ με βάση το Ρε)</li>
					</p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άνα Φινταζάρακ (1943)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/yama_inta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Γιάμα-ντα Ουαχίσνι</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Νταουάρ Για Νας Άνα Μούτετ Φι Χόμπι</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/afdihi_dhabyan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Αφντίχι Δάμπιγιαν Ιμπτάσαμ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Au Theatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Αϊούναν Ραμιάτ</b>
                                    <span>Σάμπρι αλ-Μουντάλαλ (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_maria.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Μαρία</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ταξίμι Κανονάκι σε Μακάμ Χιτζάζ</b>
                                    <span>Μουσικό Σύνολο Σάμπρι αλ-Μουντάλαλ</span>
                                    <span><img src="/img/cd.png"> Chansons d'Alep</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/dulab_hijazkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Χιτζάζkar</b>
                                    <span>Μουσικό Σύνολο Σαμπάχ Φαχρί</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 04 Hijazkar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suzidil/laha_badrut_tim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Λάχα Μπάντρου-τ-Τιμ</b>
                                    <span>(Μακάμ Σουζιντίλ)</span>
                                    <span>Μουσικό Σύνολο Αραβικής Μουσικής (Αίγυπτος)</span>
                                    <span>Μουσική Σέιχ Μαχμούντ Σουμπχ </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/ba3attilak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπαατίλακ Για Χαμπίμπ ελ-Ροχ</b>
                                    <span>(Μακάμ Σαντ Αραμπάν)</span>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Ζιάντ Ραχμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/samai_shadd_araban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Σαντ Αραμπάν</b>
                                    <span>Μουσικό Σύνολο Όμαρ αλ-Σαρμίνι</span>
                                    <span>Μουσική Τανμπούρι Τζεμίλ Μπέι</span>
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
