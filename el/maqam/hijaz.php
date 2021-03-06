<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_description = "Μακάμ Χιτζάζ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Χιτζάζ, Μακάμ Χιτζάζ, Μακάμ Χιτζασκάρ, Μακάμ Σαντ Αραμπάν, Μακάμ Σαχνάζ, Μακάμ Σουζιντίλ, Μακάμ Ζαντζαράν";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/hijaz.php";
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
                        <h1>Μακάμ Χιτζάζ</h1>
                        <h3>To κύριο μακάμ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζάζ</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="59,128,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="137,120,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Hijaz 2 -->
					  <area shape="circle" coords="214,112,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Hijaz 3 -->
					  <area shape="circle" coords="292,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="369,95,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="445,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="524,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="601,70,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
				      <area shape="circle" coords="677,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="754,95,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="833,87,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="909,78,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="987,70,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="105,4,245,34" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="343,4,540,34" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="765,4,892,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
				     </map>

                    <p>
                        Το Μακάμ Χιτζάζ είναι το κύριο μακάμ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a>. Η κλίμακά του αρχίζει με την βάση <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην τονική, ακολουθούμενη είτε από <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a> ή <a href="../jins/rast.php">Τζινς Ραστ</a> στην 4η βαθμίδα.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijaz/mahtiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijaz/mahtiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μα-χτιάλι</b>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ (Συρία)</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/badri_ader.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μπάντρι Αντίρ</b>
                                    <span>Χορωδία των καθηγητών μουσικής - Πανεπιστήμιο Κασλίκ (Λίβανος)</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Songs</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουντνάκα Γκαφάχου Μαρκάντουχου (1938)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/hibbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χεμπίνα (1975)</b>
                                    <span>Φωνή και μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/foug_el_nakhal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Φογκ ελ-Νάχαλ</b>
                                    <span>Μουνίρ Μπασίρ και Ομάρ Μπασίρ </span>
                                    <span>(Παραδοσιακό Ιρανικό)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/qasida_mawlaya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Μαουλάια Ατζφάνι</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Από τη Σουίτα Ίσκι αλ-Ιτάς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντουκάλ Μαϊάς</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 14 Χιτζάζ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/samai_hijaz.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμάι Χιτζάζ </b>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ (Συρία)</span>
                                    <span>Μουσική Μοχάμαντ Άμπντου</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/dulab_nay_taqsim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ και Νάι Ταξίμι Χιτζάζ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 14 Χιτζάζ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/dulab_hijaz_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντουλάμπ Χιτζάζ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Μαουαΐλ και Μουασαχάτ</span>
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
